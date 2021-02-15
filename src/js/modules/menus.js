exports.init = () => {
  this.initHeaderPrimaryMenu();
  this.initHeaderPrimaryMobileMenu();
};

exports.initHeaderPrimaryMenu = () => {
  // Handle roll-up and roll-down of header navigation sub menus on desktop
  let $ParentListItems = $("#header-bottom-bar #header-primary-menu").find(
    "li.menu-item-has-children"
  );

  $ParentListItems.children("a").on("click", function (e) {
    e.preventDefault();
  });

  $("#header-bottom-bar #header-primary-menu")
    .find("li.menu-item-has-children")
    .on("mouseenter", function (e) {
      var $submenu = $(e.currentTarget).children(".sub-menu");
      $submenu.slideDown("fast");

      if (window.Keystone.helpers.isOverflowRight($submenu)) {
        $submenu.css('left', '-100%');
      }

    })
    .on("mouseleave", function (e) {
      $(e.currentTarget).children(".sub-menu").slideUp("fast");
    });

};

exports.initHeaderPrimaryMobileMenu = () => {
  //Handle header mobile navigation animations
  let $mobileParentListItems = $(
    "#header-bottom-bar #header-primary-menu-mobile"
  ).find("li.menu-item-has-children");

  $mobileParentListItems.children("a").on("click", function (e) {
    e.preventDefault();
  });

  $mobileParentListItems.on("click", function (e) {
    e.stopPropagation();
    var $el = $(e.currentTarget);
    console.log($el);
    $el.hasClass("is-active")
      ? $el.removeClass("is-active")
      : $el.addClass("is-active");
    $el.children("ul").slideToggle("slow");
  });

  function toggleMenu(event) {
    var navBar = document.getElementById("mobile-nav-wrapper");
    var expanded = event.currentTarget.getAttribute("aria-expanded");
    var $button = $(event.currentTarget);
    if (expanded === "true") {
      $(event.currentTarget)
        .find(".close")
        .fadeOut("fast", function () {
          $button.find(".open").fadeIn("fast");
        });
      $(navBar).slideUp();
      navBar.classList.add("closed");
      navBar.classList.remove("opened");
      event.currentTarget.setAttribute("aria-expanded", "false");
    } else {
      $(event.currentTarget)
        .find(".open")
        .fadeOut("fast", function () {
          $button.find(".close").fadeIn("fast");
        });
      $(navBar).slideDown();
      navBar.classList.add("opened");
      navBar.classList.remove("closed");
      event.currentTarget.setAttribute("aria-expanded", "true");
    }
  }

  document
    .getElementById("mobile-menu-toggler")
    .addEventListener("click", toggleMenu, false);
};