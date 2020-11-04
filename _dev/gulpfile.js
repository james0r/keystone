const { gulp, series, parallel, dest, src, watch } = require('gulp');
const babel = require('gulp-babel');
const beeper = require('beeper');
const browserSync = require('browser-sync');
const concat = require('gulp-concat');
const del = require('del');
const log = require('fancy-log');
const fs = require('fs');
const imagemin = require('gulp-imagemin');
const inject = require('gulp-inject-string');
const plumber = require('gulp-plumber');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');
const zip = require('gulp-vinyl-zip');
const sass = require('gulp-sass');

/* -------------------------------------------------------------------------------------------------
Theme Name
-------------------------------------------------------------------------------------------------- */

const themeName = 'keystone';

/* -------------------------------------------------------------------------------------------------
Header & Footer JavaScript Boundles
-------------------------------------------------------------------------------------------------- */
const headerJS = ['./node_modules/jquery/dist/jquery.js'];

const footerJS = ['./js/**'];

/* -------------------------------------------------------------------------------------------------
Development Tasks
-------------------------------------------------------------------------------------------------- */

function devServer() {

  browserSync({
    logPrefix: '🎈 keystone',
    proxy: 'keystone1/',
    host: '127.0.0.1',
    port: '3010',
    open: 'external',
  });

  watch('../**/**.php', Reload);
  watch('./scss/**/*.css', stylesDev);
  watch('./scss/**/*.scss', stylesDev);
  watch('./js/**', series(footerScriptsDev, Reload));
  watch('./build/wordpress/wp-config.php', { events: 'add' }, series(disableCron));
}

function Reload(done) {
  browserSync.reload();
  done();
}

function stylesDev() {
  return src('./scss/main.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({ includePaths: 'node_modules', outputStyle: 'expanded' }).on("error", sass.logError))
    .pipe(sourcemaps.write('.'))
    .pipe(dest('../assets/'))
    .pipe(browserSync.stream({ match: '**/*.css' }));
}

function headerScriptsDev() {
  return src(headerJS)
    .pipe(plumber({ errorHandler: onError }))
    .pipe(sourcemaps.init())
    .pipe(concat('header-bundle.js'))
    .pipe(sourcemaps.write('.'))
    .pipe(dest('../assets/'));
}

function footerScriptsDev() {
  return src(footerJS)
    .pipe(plumber({ errorHandler: onError }))
    .pipe(sourcemaps.init())
    .pipe(
      babel({
        presets: ['@babel/preset-env'],
      }),
    )
    .pipe(concat('footer-bundle.js'))
    .pipe(sourcemaps.write('.'))
    .pipe(dest('../assets/'));
}

exports.dev = series(
  stylesDev,
  headerScriptsDev,
  footerScriptsDev,
  devServer,
);

/* -------------------------------------------------------------------------------------------------
Production Tasks
-------------------------------------------------------------------------------------------------- */

function stylesProd() {
  return src('./scss/main.scss')
    .pipe(sass({ includePaths: 'node_modules' }).on("error", sass.logError))
    .pipe(dest('../assets/'));
}

function headerScriptsProd() {
  return src(headerJS)
    .pipe(plumber({ errorHandler: onError }))
    .pipe(concat('header-bundle.js'))
    .pipe(uglify())
    .pipe(dest('../assets/'));
}

function footerScriptsProd() {
  return src(footerJS)
    .pipe(plumber({ errorHandler: onError }))
    .pipe(
      babel({
        presets: ['@babel/preset-env'],
      }),
    )
    .pipe(concat('footer-bundle.js'))
    .pipe(uglify())
    .pipe(dest('../assets/'));
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
  return src(['../assets/images/**.jpg', '../assets/images/**.jpeg', '../assets/images/**.png'])
    .pipe(plumber({ errorHandler: onError }))
    .pipe(imagemin([
      imagemin.gifsicle({interlaced: true}),
      imagemin.mozjpeg({quality: 75, progressive: true}),
      imagemin.optipng({optimizationLevel: 5}),
      imagemin.svgo({
          plugins: [
              {removeViewBox: true},
              {cleanupIDs: false}
          ]
      })
  ], {
    verbose: true
  }))
    .pipe(dest('../assets/images'));
}

function zipProd() {
  return src(['**/**.*', '!node_modules/**/**.*'])
    .pipe(zip.dest('../assets/' + themeName + '.zip'))
    .on('end', () => {
      beeper();
      log(filesGenerated);
      log(thankYou);
    });
}

exports.prod = series(
  stylesProd,
  headerScriptsProd,
  footerScriptsProd,
  processImages,
  zipProd,
);


/* -------------------------------------------------------------------------------------------------
Utility Tasks
-------------------------------------------------------------------------------------------------- */

const onError = err => {
  beeper();
  log(wpFy + ' - ' + errorMsg + ' ' + err.toString());
  this.emit('end');
};

async function disableCron() {
  if (fs.existsSync('./build/wordpress/wp-config.php')) {
    await fs.readFile('./build/wordpress/wp-config.php', (err, data) => {
      if (err) {
        log(wpFy + ' - ' + warning + ' WP_CRON was not disabled!');
      }
      if (data) {
        if (data.indexOf('DISABLE_WP_CRON') >= 0) {
          log('WP_CRON is already disabled!');
        } else {
          return src('./build/wordpress/wp-config.php')
            .pipe(inject.after("define( 'DB_COLLATE', '' );", "\ndefine( 'DISABLE_WP_CRON', true );"))
            .pipe(dest('./build/wordpress'));
        }
      }
    });
  }
}

function Backup() {
  if (!fs.existsSync('./build')) {
    log(buildNotFound);
    process.exit(1);
  } else {
    return src('./build/**/*')
      .pipe(zip.dest('./backups/' + date + '.zip'))
      .on('end', () => {
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
const date = new Date().toLocaleDateString('en-GB').replace(/\//g, '.');
const errorMsg = '\x1b[41mError\x1b[0m';
const warning = '\x1b[43mWarning\x1b[0m';
const devServerReady =
  'Your development server is ready, start the workflow with the command: $ \x1b[1mnpm run dev\x1b[0m';
const buildNotFound =
  errorMsg +
  ' ⚠️　- You need to install WordPress first. Run the command: $ \x1b[1mnpm run install:wordpress\x1b[0m';
const filesGenerated =
  'Your ZIP template file was generated in: \x1b[1m' + '/assets/' +
  themeName +
  '.zip\x1b[0m - ✅';
const backupsGenerated =
  'Your backup was generated in: \x1b[1m' + __dirname + '/backups/' + date + '.zip\x1b[0m - ✅';
const thankYou = 'Production build has completed. ✅';

/* -------------------------------------------------------------------------------------------------
End of all Tasks
-------------------------------------------------------------------------------------------------- */