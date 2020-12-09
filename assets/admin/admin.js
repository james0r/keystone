jQuery(document).ready(function ($) {
  $("#sortable").sortable({
    update: function (event, ui) {
      //console.log(event);
      //console.log(ui);

      //loop through and put number on each
      $(".hp-module-block").each(function (index, element) {
        var instance = $(this).attr("data-instance");
        var order = index;

        $.ajax({
          type: "post",
          dataType: "json",
          url: "/wp-admin/admin-ajax.php",
          data: {
            action: "update_module_order",
            instance: instance,
            order: order,
          },
          success: function (response) {
            console.log(response);
          },
          error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
          },
        });
      });
    },
  });
  $("#sortable").disableSelection();

  $(".meta-box-sortables").sortable({
    update: function (event, ui) {

      //loop through and put number on each
      $(".cmb2-postbox").each(function (index, element) {
        var instance = $(this).attr("id");
        var order = index;

        $.ajax({
          type: "post",
          dataType: "json",
          url: "/wp-admin/admin-ajax.php",
          data: {
            action: "update_module_order",
            instance: instance,
            order: order,
          },
          success: function (response) {
            console.log(response);
          },
          error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
          },
        });
      });
    },
  });

  /// Add Module form processor
  $(".mm-form form").on("submit", function (e) {
    var $this = $(this);
    var err = 0;
    $("input,textarea").removeClass("invalid");
    var name = $this.find('input[name="module_display_name"]');
    if (name.length && name.val() == "") {
      e.preventDefault();
      name.addClass("invalid");
      $this.append(
        '<p class="err">Please fill out all required form fields.</p>'
      );
    } else {
      $this.submit();
    }
  });

  // Allow either under construction or coming soon page, not both.
  $('.coming-soon-toggle input[type="checkbox"]').on("change", function () {
    if (this.checked) {
      $('.under-construction-toggle input[type="checkbox"]').removeAttr(
        "checked"
      );
    }
  });

  $('.under-construction-toggle input[type="checkbox"]').on(
    "change",
    function () {
      if (this.checked) {
        $('.coming-soon-toggle input[type="checkbox"]').removeAttr("checked");
      }
    }
  );
});

jQuery(document).ready(function ($) {
  $(".select2-hidden-accessible").each(function (index) {
    $(this).val($(this).attr("data-selected"));
  });
});

// Save the page for the user when they change a font. This way
// the user sees the correct font-weights for the chosen font.
jQuery(function ($) {
  $("#cmb2_id_heading_font").on("change", function (event) {
    $('#submit-cmb').trigger("click");
  });
});

// Hide all but one of the icon refernces to conserve screen real estate.
jQuery(function($) {
  // Select the node that will be observed for mutations
const targetNode = document.querySelector('.cmb2-postbox');

// Options for the observer (which mutations to observe)
const config = { attributes: true, childList: true, subtree: true };

// Callback function to execute when mutations are observed
const callback = function(mutationsList, observer) {
    // Use traditional 'for loops' for IE 11
    for(const mutation of mutationsList) {
        if (mutation.type === 'childList') {
          $('.class-reference-show-more').on('click', function(event) {
            $(event.currentTarget).closest('table').find('.hidden-row-by-default').show();
            $(event.currentTarget).hide().parent().hide();
          })
        }
    }
};

// Create an observer instance linked to the callback function
const observer = new MutationObserver(callback);

// Start observing the target node for configured mutations
observer.observe(targetNode, config);

})

// Reveal advanced settings if version is clicked on 3 times
jQuery(function($) {
  var advanced_counter = 0;
  $('#footer-upgrade').on('click', function() {
    advanced_counter++;
    if (advanced_counter >= 3) {
      window.location.href = 'admin.php?page=cmb2_key_box_advanced_settings';
    }
  })
})

