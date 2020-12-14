<h1 class="keystone-tools-h1"><?php _e('Keystone Tools (Administrators Only)', 'keystone')?>
</h1>

<div class="page-wrapper" style="padding-right: 15px;">
  <section id="activation">
    <h2><?php _e('Keystone Activation', 'keystone');?>
      <pre><?php _e('Status', 'keystone')?>: <span id="current-activation-status">Not Activated</span> <span class="dashicons dashicons-warning"></span><span class="dashicons dashicons-yes"></span><span class="dashicons dashicons-clock"></span></pre>
      <input type="text" name="activation-code" id="activation-code"
        placeholder="<?php _e('Enter Activation Code', 'keystone')?>">
    </h2>

  </section>
  <hr>
  <section id="export">
    <h2><?php _e('Export Keystone Options Data', 'keystone');?>
    </h2>
    <sub id="export-message"></sub>
    <div class="exported-container">
      <div class="radio-container export-radio-container">
        <div class="radio-row">
          <input type="radio" id="homepage-layout-radio" name="export-radio-group" value="cmb_homepage_layout" />
          <label for="homepage-layout-radio"><?php _e('Homepage Layout', 'keystone')?>
          </label>
        </div>
        <div class="radio-row">
          <input type="radio" id="header-radio" name="export-radio-group" value="cmb2_key_header_styles_box" />
          <label for="header-radio"><?php _e('Header', 'keystone')?></label>
        </div>
        <div class="radio-row">
          <input type="radio" id="footer-radio" name="export-radio-group" value="cmb2_key_footer_box" />
          <label for="footer-radio"><?php _e('Footer', 'keystone')?></label>
        </div>
        <div class="radio-row">
          <input type="radio" id="clinic-information-radio" name="export-radio-group"
            value="cmb_main_clinic_information" />
          <label for="clinic-information-radio"><?php _e('Clinic Information', 'keystone')?>
          </label>
        </div>
        <div class="radio-row">
          <input type="radio" id="color-typography-radio" name="export-radio-group" value="cmb_theme_colors" />
          <label for="color-typography-radio"><?php _e('Color & Typography', 'keystone')?></label>
        </div>
        <div class="radio-row">
          <input type="radio" id="blog-radio" name="export-radio-group" value="cmb2_key_blog_box" />
          <label for="blog-radio"><?php _e('Blog (Settings Only)', 'keystone')?></label>
        </div>
        <div class="radio-row">
          <input type="radio" id="social-radio" name="export-radio-group" value="cmb_social_links" />
          <label for="social-radio"><?php _e('Social Links', 'keystone')?></label>
        </div>
        <div class="radio-row">
          <input type="radio" id="advanced-radio" name="export-radio-group" value="cmb2_key_box_advanced_settings" />
          <label for="advanced-radio"><?php _e('Advanced Settings', 'keystone')?></label>
        </div>
        <div class="radio-row">
          <input type="radio" id="all-options-radio" name="export-radio-group" value="all" checked="checked" />
          <label for="all-options-radio"><?php _e('All Options Boxes', 'keystone')?></label>
        </div>
      </div>
      <textarea name="exported-code-textarea" id="exported-code-textarea" rows="10"></textarea>
      <sub><?php _e('This data can be later imported to restore settings.', 'keystone')?></sub>
      <button tabindex="0" type="submit" class="button button-primary button-large export-btn"
        id="export-options-btn"><?php _e('Export', 'keystone')?></button>
    </div>
  </section>
  <hr>
  <section id="import">
    <h2><?php _e('Import Keystone Options Data', 'keystone');?>
    </h2>
    <div class="imported-container">
      <div class="radio-container import-radio-container">
        <div class="radio-row">
          <input type="radio" id="homepage-layout-radio" name="import-radio-group" value="cmb_homepage_layout" />
          <label for="homepage-layout-radio"><?php _e('Homepage Layout', 'keystone')?>
          </label>
        </div>
        <div class="radio-row">
          <input type="radio" id="header-radio" name="import-radio-group" value="cmb2_key_header_styles_box" />
          <label for="header-radio"><?php _e('Header', 'keystone')?></label>
        </div>
        <div class="radio-row">
          <input type="radio" id="footer-radio" name="import-radio-group" value="cmb2_key_footer_box" />
          <label for="footer-radio"><?php _e('Footer', 'keystone')?></label>
        </div>
        <div class="radio-row">
          <input type="radio" id="clinic-information-radio" name="import-radio-group"
            value="cmb_main_clinic_information" />
          <label for="clinic-information-radio"><?php _e('Clinic Information', 'keystone')?></label>
        </div>
        <div class="radio-row">
          <input type="radio" id="color-typography-radio" name="import-radio-group" value="cmb_theme_colors" />
          <label for="color-typography-radio"><?php _e('Color & Typography', 'keystone')?></label>
        </div>
        <div class="radio-row">
          <input type="radio" id="blog-radio" name="import-radio-group" value="cmb2_key_blog_box" />
          <label for="blog-radio"><?php _e('Blog (Settings Only)', 'keystone')?></label>
        </div>
        <div class="radio-row">
          <input type="radio" id="social-radio" name="import-radio-group" value="cmb_social_links" />
          <label for="social-radio"><?php _e('Social Links', 'keystone')?></label>
        </div>
        <div class="radio-row">
          <input type="radio" id="advanced-radio" name="import-radio-group" value="cmb2_key_box_advanced_settings" />
          <label for="advanced-radio"><?php _e('Advanced Settings', 'keystone')?></label>
        </div>
        <div class="radio-row">
          <input type="radio" id="all-options-radio" name="import-radio-group" value="all" checked />
          <label for="all-options-radio"><?php _e('All Options Boxes', 'keystone')?></label>
        </div>
      </div>
      <sub id="import-message"></sub>
      <textarea name="imported-code-textarea" id="imported-code-textarea" rows="10"></textarea>
      <button tabindex="0" type="submit" class="button button-primary button-large import-btn"
        id="import-options-btn"><?php _e('Import', 'keystone')?></button>
      <sub><?php _e('Paste in JSON CMB2 option data.', 'keystone')?>
        <span style="color: red; font-weight: bold;"><?php _e('WARNING: YOU WILL LOSE PREVIOUSLY ENTERED CONTENT.', 'keystone')?></span></sub>
      <div class="checkbox-row">
        <input type="checkbox" id="disable-json-validation-checkbox" />
        <label for="checkboxG4" class="css-label"><?php _e('Override JSON validation', 'keystone');?></label>
      </div>
    </div>
  </section>
  <hr>
  <section id="module-meta-exporter">
    <h2><?php _e('Export Dynamic Module Data', 'keystone');?>
    </h2>
    <div class="module-page-select">
      <label for="exporter-posts"><?php _e('Select a post: ', 'keystone')?></label>
      <select name="exporter-posts" id="exporter-posts">
        <?php
global $wpdb;
$modules = $wpdb->get_results('SELECT * FROM modules ORDER BY page ASC');
$posts_array = [];
foreach ($modules as $m) {
	if (!$posts_array[$m->page] == true) {
		echo '<option value="' . $m->page . '">POST ID: ' . $m->page . '</option>';
		$posts_array[$m->page] = true;
	} else {
	}
}
?>
      </select>
    </div>
    <div class="module-module-select">
      <label for="exporter-modules"><?php _e('Select a module: ', 'keystone')?></label>
      <select name="exporter-modules" id="exporter-modules">
        <?php
global $wpdb;
$modules = $wpdb->get_results('SELECT * FROM modules ORDER BY page ASC');
foreach ($modules as $m) {
	echo '<option data-page="' . $m->page . '" data-module-id="' . $m->id . '" value="jquery">' . __('Module: ', 'keystone') . $m->module . __(' / Module ID: ', 'keystone') . $m->id . '</option>';
}
?>
      </select>
    </div>
    <textarea name="module-export-textarea" id="module-export-textarea" rows="10"></textarea>
    <button tabindex="0" type="submit" id="export-module-btn"
      class="button button-primary button-large export-btn"><?php _e('Export', 'keystone')?></button>
    <sub><?php _e('This data can be later imported to restore settings.', 'keystone')?></sub>
  </section>
  <hr>
  <section id="module-meta-importer">
    <h2><?php _e('Import Dynamic Module Data', 'keystone');?>
    </h2>
    <div class="module-page-select">
      <label for="importer-posts"><?php _e('Select a post: ', 'keystone')?></label>
      <select name="importer-posts" id="importer-posts">
        <?php
        global $wpdb;
        $modules = $wpdb->get_results('SELECT * FROM modules ORDER BY page ASC');
        $posts_array = [];

        foreach ($modules as $m) {
          if (!$posts_array[$m->page] == true) {
            echo '<option value="' . $m->page . '">POST ID: ' . $m->page . '</option>';
            $posts_array[$m->page] = true;
          } else {
          }
        }
        ?>
      </select>
    </div>
    <div class="module-module-select">
      <label for="importer-modules"><?php _e('Select a module: ', 'keystone')?></label>
      <select name="importer-modules" id="importer-modules">
        <?php
global $wpdb;
$modules = $wpdb->get_results('SELECT * FROM modules ORDER BY page ASC');
foreach ($modules as $m) {
	echo '<option data-page="' . $m->page . '" data-module-id="' . $m->id . '" value="jquery">' . __('Module: ', 'keystone') . $m->module . __(' / Module ID: ', 'keystone') . $m->id . '</option>';
}
?>
      </select>
    </div>
    <sub id="modules-import-message"></sub>
    <textarea name="module-import-textarea" id="module-import-textarea" rows="10"></textarea>
    <button tabindex="0" type="submit" id="import-module-btn" style="margin-left: 8px;" role="button"
      class="button button-primary button-large export-btn"><?php _e('Import', 'keystone')?></button>
    <button tabindex="0" id="fix-id-mismatch" role="button"
      class="button button-primary button-large export-btn"><?php _e('Fix ID Mismatch', 'keystone')?></button>
    <sub><?php _e('Paste in JSON CMB2 module data.', 'keystone')?>
      <span style="color: red; font-weight: bold;"><?php _e('WARNING: YOU WILL LOSE PREVIOUSLY ENTERED CONTENT.', 'keystone')?></span></sub>
    <div class="checkbox-row">
      <input type="checkbox" id="disable-validation-modules" />
      <label for="checkboxG4" class="css-label"><?php _e('Override JSON validation', 'keystone');?></label>
    </div>
  </section>
</div>

<style>
  select#exporter-posts,
  label[for="exporter-posts"],
  select#exporter-modules,
  label[for="exporter-modules"] {
    margin-bottom: 10px;
    display: inline-block;
  }

  section {
    max-width: 800px;
    padding-bottom: 40px;
  }

  hr {
    max-width: 800px;
    margin-right: auto;
    margin: 0px;
  }

  #activation {
    max-width: 800px;
  }

  #activation .dashicons {
    vertical-align: text-top;
  }

  #activation #activation-code {
    display: block;
    margin-top: 10px;
    font-size: 16px;
    height: 30px;
    width: 100%;
  }

  .keystone-tools-h1 {
    line-height: 1;
  }

  #module-import-textarea {
    margin-top: 20px;
  }

  .radio-container {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    height: 100px;
  }

  @media only screen and (max-width: 782px) {
    .radio-container {
      display: block;
      height: auto;
    }
  }

  input[type="radio"],
  input[type="radio"]~label {
    margin-top: 0px;
    line-height: 16px;
    vertical-align: middle;
    display: inline-block !important;
    font-size: 16px;
    margin-right: 10px;
    margin-bottom: 10px;
  }

  .checkbox-row>* {
    line-height: 30px;
    display: inline-block;
    height: 30px;
    margin: 0 !important;
    margin-right: 4px !important;
  }

  .exported-container,
  .imported-container {
    max-width: 800px;
    margin-bottom: 20px;
    overflow: auto;
    position: relative;
  }

  sub {}

  .export-btn,
  .import-btn {
    margin-top: 10px !important;
    float: right;
  }

  #import-message,
  #export-message,
  #modules-import-message {
    color: red;
    position: absolute;
    transform: translateY(-100%);
  }

  #modules-import-message {
    transform: translateY(0);
  }

  textarea {
    display: block;
    width: 100%;
    max-width: 800px;
    outline-offset: -1px;
  }
</style>

<script>
  (function($) {

    // Handle dynamic select elements for Export Dynamic Module Data section
    $('#module-meta-exporter select#exporter-posts').on('change', function(event) {
      var page_id = $(event.currentTarget).val();
      var first = true;

      $('select#exporter-modules option').each(function(index) {
        var active_module = $(this).data('page') == page_id;

        if (active_module) {
          if (first) {
            $(this).prop('selected', true);
          }
          $(this).show();
          first = false;
        } else {
          $(this).hide();
        }
      })
    }).trigger('change'); // Trigger the callback on load

    // Handle dynamic select elements for Export Dynamic Module Data section
    $('#module-meta-importer select#importer-posts').on('change', function(event) {
      var page_id = $(event.currentTarget).val();
      var first = true;

      $('select#importer-modules option').each(function(index) {
        var active_module = $(this).data('page') == page_id;

        if (active_module) {
          if (first) {
            $(this).prop('selected', true);
          }
          $(this).show();
          first = false;
        } else {
          $(this).hide();
        }
      })
    }).trigger('change'); // Trigger the callback on load

    // Replace newly pasted instance numbers with selected modules instance number

    $('#fix-id-mismatch').on('click', function(event) {
      var $textarea = $('#module-import-textarea');
      var module_id = $('#importer-modules option:selected').data('module-id');
      var data = JSON.parse($textarea.val());

      for (const key in data) {
        if (Object.hasOwnProperty.call(data, key)) {
          var matches = key.match(/\d+$/);
          if (matches) {
            var old_id = matches[0];
            var new_key = key.substring(0, key.length - old_id.length) + module_id.toString();

            if (key !== new_key) {
              Object.defineProperty(data, new_key,
                Object.getOwnPropertyDescriptor(data, key));
              delete data[key];
            }
          }
        }
      }

      $textarea.val(JSON.stringify(data));
    })

    // Handle module meta export request
    $('#export-module-btn').on('click', function() {
      var module_id = $('#exporter-modules option:selected').data('module-id');

      $.ajax({
        type: "post",
        url: "admin-ajax.php",
        data: {
          action: 'keystone_get_module_meta',
          payload: module_id
        },
        success: function(response) {
          $('#module-export-textarea').val(response);
        }
      });
    })

    // Handle export theme options ajax
    $('#export-options-btn').on('click', function() {
      var box_key = document.querySelector('input[name="export-radio-group"]:checked').value
      console.log(box_key);

      $.ajax({
        type: "post",
        url: "admin-ajax.php",
        data: {
          action: 'keystone_get_options',
          payload: box_key
        },
        success: function(response) {
          $('#exported-code-textarea').val(response);
        }
      });
    })

    // Helper method to client-side validate JSON string
    function IsValidJSONString(str) {
      try {
        JSON.parse(str);
      } catch (e) {
        return false;
      }
      return true;
    }

    // Clear error alerts when user re-enters data in theme options input field
    $('#imported-code-textarea').on('keyup', function() {
      $('#import-message').html('');
      $('#imported-code-textarea').css('outline', 'none');
    })

    // Handle importing of theme option data
    $('.import-btn').on('click', function() {
      var cmb2_meta_box_object = $('#imported-code-textarea').val();
      var no_validation = document.querySelector('#disable-json-validation-checkbox').checked;
      var options = document.getElementsByName("import-radio-group");
      var box_key;

      if (options) {
        for (var i = 0; i < options.length; i++) {
          if (options[i].checked) {
            box_key = options[i].value;
          }
        }
      }

      if (IsValidJSONString(cmb2_meta_box_object) || no_validation) {
        $.ajax({
          type: "post",
          url: "admin-ajax.php",
          data: {
            action: 'keystone_update_options',
            'payload': box_key
          },
          success: function(response) {
            $('#import-message').html('');
            $('#imported-code-textarea').css('outline', 'none');
            $('.notice-error').remove();
          },
          error: function(response) {
            console.log(response);
            $('.keystone-tools-h1').after(
              '<div class="notice notice-error is-dismissible" style="margin-left: 0;"><p>' + response
              .statusText + '</p></div>');
          }
        });
      } else {
        if (cmb2_meta_box_object.trim() == '') {
          $('.notice-error').remove();
          $('#import-message').html(
            "<?php _e('The field below is required.', 'keystone')?>"
          )
          $('#imported-code-textarea').css('outline', '1px solid red');
        } else {
          $('.notice-error').remove();
          $('#import-message').html(
            "<?php _e('The content you are trying to import is not valid JSON. To override JSON validation check the checkbox below the data field.', 'keystone')?>"
          )
          $('#imported-code-textarea').css('outline', '1px solid red');
        }

      }

    })

    // Clear error alerts when user re-enters data in theme options input field
    $('#module-import-textarea').on('keyup', function() {
      $('#modules-import-message').html('');
      $('#module-import-textarea').css('outline', 'none');
    })

    // Handle importing of module data
    $('#import-module-btn').on('click', function() {
      var post_meta_pairs_obj = $('#module-import-textarea').val();
      var no_validation = document.querySelector('#disable-validation-modules').checked;

      if (IsValidJSONString(post_meta_pairs_obj) || no_validation) {
        $.ajax({
          type: "post",
          url: "admin-ajax.php",
          data: {
            action: 'keystone_update_options',
            'payload': box_key
          },
          success: function(response) {
            $('#modules-import-message').html('');
            $('#module-import-textarea').css('outline', 'none');
            $('.notice-error').remove();
          },
          error: function(response) {
            console.log(response);
            $('.keystone-tools-h1').after(
              '<div class="notice notice-error is-dismissible" style="margin-left: 0;"><p>' + response
              .statusText + '</p></div>');
          }
        });
      } else {
        if (post_meta_pairs_obj.trim() == '') {
          $('.notice-error').remove();
          $('#modules-import-message').html(
            "<?php _e('The field below is required.', 'keystone')?>"
          )
          $('#module-import-textarea').css('outline', '1px solid red');
        } else {
          $('.notice-error').remove();
          $('#modules-import-message').html(
            "<?php _e('The content you are trying to import is not valid JSON. To override JSON validation check the checkbox below the data field.', 'keystone')?>"
          )
          $('#module-import-textarea').css('outline', '1px solid red');
        }

      }

    })

  })(jQuery)
</script>