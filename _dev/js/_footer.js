(function($) {
  $(window).ready(function() {

    // Listen to tab events to enable outlines (accessibility improvement)
    document.body.addEventListener("keyup", function(e) {
      if (e.which === 9) {
        /* tab */ document.documentElement.classList.remove("no-focus-outline");
      }
    });
  });
})(jQuery);
