const { series, dest, src, watch } = require("gulp");
const babel = require("gulp-babel");
const beeper = require("beeper");
const browserSync = require("browser-sync");
const concat = require("gulp-concat");
const del = require("del");
const log = require("fancy-log");
const fs = require("fs");
const imagemin = require("gulp-imagemin");
const plumber = require("gulp-plumber");
const sourcemaps = require("gulp-sourcemaps");
const uglify = require("gulp-uglify");
const zip = require("gulp-vinyl-zip");
const sass = require("gulp-sass");
const cleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");
const gulpHeader = require("gulp-header");

/* -------------------------------------------------------------------------------------------------
Theme Name
-------------------------------------------------------------------------------------------------- */

const themeName = "keystone";

/* -------------------------------------------------------------------------------------------------
Header & Footer JavaScript Boundles
-------------------------------------------------------------------------------------------------- */
const headerJS = ["src/js/_header.js"];

const footerJS = ["src/js/**", "!src/js/_header.js"];

/* -------------------------------------------------------------------------------------------------
Development Tasks
-------------------------------------------------------------------------------------------------- */

function devServer() {
  browserSync({
    logPrefix: "🎈 keystone",
    proxy: "keystone1/",
    host: "127.0.0.1",
    port: "3010",
    open: "external",
    notify: false
  });

  watch("**/**.php", Reload);
  watch("src/scss/**/*.css", stylesMainDev);
  watch("src/scss/**/*.scss", stylesMainDev);
  watch("src/scss/modules/*.scss", stylesModulesDev);
  watch("src/js/**", series(footerScriptsDev, headerScriptsDev, Reload));
}

function Reload(done) {
  browserSync.reload();
  done();
}

function stylesMainDev() {
  return src("src/scss/main.scss")
    .pipe(sourcemaps.init())
    .pipe(
      sass({ includePaths: "node_modules", outputStyle: "expanded" }).on(
        "error",
        sass.logError
      )
    )
    .pipe(sourcemaps.write("."))
    .pipe(dest("assets/css/"))
    .pipe(browserSync.stream());
}

function stylesModulesDev() {
  return src(["src/scss/modules/*.scss"])
    .pipe(gulpHeader("@import '../abstracts';\n"))
    .pipe(sourcemaps.init())
    .pipe(
      sass({ includePaths: "node_modules", outputStyle: "expanded" }).on(
        "error",
        sass.logError
      )
    )
    .pipe(sourcemaps.write("."))
    .pipe(
      rename({
        prefix: "module-",
      })
    )
    .pipe(dest("assets/css/"))
    .pipe(browserSync.stream());
}

function headerScriptsDev() {
  if (headerJS.length) {
    return src(headerJS)
      .pipe(plumber({ errorHandler: onError }))
      .pipe(sourcemaps.init())
      .pipe(
        babel({
          presets: ["@babel/preset-env"],
        })
      )
      .pipe(concat("header-bundle.js"))
      .pipe(sourcemaps.write("."))
      .pipe(dest("assets/js/"));
  } else {
    return del(
      ["assets/js/header-bundle.js", "assets/js/header-bundle.js.map"],
      { force: true }
    );
  }
}

function footerScriptsDev() {
  return src(footerJS)
    .pipe(plumber({ errorHandler: onError }))
    .pipe(sourcemaps.init())
    .pipe(
      babel({
        presets: ["@babel/preset-env"],
      })
    )
    .pipe(concat("footer-bundle.js"))
    .pipe(sourcemaps.write("."))
    .pipe(dest("assets/js/"));
}

exports.dev = series(
  stylesMainDev,
  stylesModulesDev,
  headerScriptsDev,
  footerScriptsDev,
  devServer
);

/* -------------------------------------------------------------------------------------------------
Production Tasks
-------------------------------------------------------------------------------------------------- */

function stylesMainProd() {
  return src("src/scss/main.scss")
    .pipe(sourcemaps.init())
    .pipe(sass({ includePaths: "node_modules" }).on("error", sass.logError))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write(".", { sourceRoot: "src/scss/" }))
    .pipe(dest("assets/css/"));
}

function stylesModulesProd() {
  return src("src/scss/modules/*.scss")
    .pipe(gulpHeader("@import '../abstracts';\n"))
    .pipe(sourcemaps.init())
    .pipe(sass({ includePaths: "node_modules" }).on("error", sass.logError))
    .pipe(cleanCSS())
    .pipe(
      rename({
        prefix: "module-",
      })
    )
    .pipe(sourcemaps.write(".", { sourceRoot: "src/scss/" }))
    .pipe(dest("assets/css/"));
}

function headerScriptsProd() {
  if (headerJS.length) {
    return src(headerJS)
      .pipe(plumber({ errorHandler: onError }))
      .pipe(concat("header-bundle.js"))
      .pipe(uglify())
      .pipe(dest("assets/js/"));
  } else {
    return del(
      ["assets/js/header-bundle.js", "assets/js/header-bundle.js.map"],
      { force: true }
    );
  }
}

function footerScriptsProd() {
  return src(footerJS)
    .pipe(plumber({ errorHandler: onError }))
    .pipe(
      babel({
        presets: ["@babel/preset-env"],
      })
    )
    .pipe(concat("footer-bundle.js"))
    .pipe(uglify())
    .pipe(dest("assets/js/"));
}

// async function cleanProd() {
//   await del(['../assets/images/']);
// }

// function copyThemeProd() {
//   return src(['./src/theme/**', '!./src/theme/**/node_modules/**']).pipe(
//     dest('./dist/themes/' + themeName),
//   );
// }

function processImages() {
  return src([
    "assets/images/**.jpg",
    "assets/images/**.jpeg",
    "assets/images/**.png",
  ])
    .pipe(plumber({ errorHandler: onError }))
    .pipe(
      imagemin(
        [
          imagemin.gifsicle({ interlaced: true }),
          imagemin.mozjpeg({ quality: 75, progressive: true }),
          imagemin.optipng({ optimizationLevel: 5 }),
          imagemin.svgo({
            plugins: [{ removeViewBox: true }, { cleanupIDs: false }],
          }),
        ],
        {
          verbose: true,
        }
      )
    )
    .pipe(dest("assets/images"));
}

function zipProd() {
  return src(["**/**.*", "!node_modules/**/**.*"])
    .pipe(zip.dest("assets/" + themeName + ".zip"))
    .on("end", () => {
      beeper();
      log(filesGenerated);
      log(thankYou);
    });
}

exports.prod = series(
  stylesMainProd,
  stylesModulesProd,
  headerScriptsProd,
  footerScriptsProd,
  processImages,
  zipProd
);

/* -------------------------------------------------------------------------------------------------
Utility Tasks
-------------------------------------------------------------------------------------------------- */

const onError = (err) => {
  beeper();
  log(wpFy + " - " + errorMsg + " " + err.toString());
  this.emit("end");
};

function Backup() {
  if (!fs.existsSync("build")) {
    log(buildNotFound);
    process.exit(1);
  } else {
    return src("build/**/*")
      .pipe(zip.dest("backups/" + date + ".zip"))
      .on("end", () => {
        beeper();
        log(backupsGenerated);
        log(thankYou);
      });
  }
}

exports.backup = series(Backup);

/* -------------------------------------------------------------------------------------------------
Messages
-------------------------------------------------------------------------------------------------- */
const date = new Date().toLocaleDateString("en-GB").replace(/\//g, ".");
const errorMsg = "\x1b[41mError\x1b[0m";
const warning = "\x1b[43mWarning\x1b[0m";
const devServerReady =
  "Your development server is ready, start the workflow with the command: $ \x1b[1mnpm run dev\x1b[0m";
const buildNotFound =
  errorMsg +
  " ⚠️　- You need to install WordPress first. Run the command: $ \x1b[1mnpm run install:wordpress\x1b[0m";
const filesGenerated =
  "Your ZIP template file was generated in: \x1b[1m" +
  "/assets/" +
  themeName +
  ".zip\x1b[0m - ✅";
const backupsGenerated =
  "Your backup was generated in: \x1b[1m" +
  __dirname +
  "/backups/" +
  date +
  ".zip\x1b[0m - ✅";
const thankYou = "Production build has completed. ✅";

/* -------------------------------------------------------------------------------------------------
End of all Tasks
-------------------------------------------------------------------------------------------------- */
