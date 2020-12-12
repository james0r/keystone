<?php

add_action('admin_menu', 'register_demos_page');

function register_demos_page() {
    add_submenu_page(
        'tools.php',
        __('Keystone Tools (Administrators Only)', 'keystone'),
        __('Keystone Tools', 'keystone'),
        'manage_options',
        'keystone_demos',
        'cb_demos_page_template'
    );
}

function cb_demos_page_template() {
    ?>
<h1><?php _e('Keystone Tools (Administrators Only)', 'keystone') ?>
</h1>
<h2><?php _e('Export Meta Data', 'keystone'); ?>
</h2>
<div class="page-wrapper" style="padding-right: 15px;">
  <div class="exported-container" method="POST"
    action="<?php echo esc_html(admin_url('admin-post.php'))?>"
    onsubmit="return false;">
    <textarea name="exported-code-textarea" id="exported-code-textarea" rows="10"></textarea>
    <sub><?php _e('This data can be later imported to restore settings.', 'keystone') ?></sub>
    <sub id="export-message"></sub>
    <button tabindex="0" type="submit" class="button button-primary button-large export-btn"><?php _e('Export', 'keystone') ?></button>
  </div>
  <div class="imported-container" method="POST"
    action="<?php echo esc_html(admin_url('admin-post.php'))?>"
    onsubmit="return false;">
    <textarea name="imported-code-textarea" id="imported-code-textarea" rows="10"></textarea>
    <sub><?php _e('Paste in JSON CMB2 option data.', 'keystone') ?>
      <span style="color: red; font-weight: bold;"><?php _e('WARNING: THIS WILL OVERWRITE ALL CONTENT YOU HAVE ENTERED ON THE SITE.', 'keystone') ?></span></sub>
    <sub id="import-message"></sub>
    <div class="checkbox-row">
      <input type="checkbox" name="checkboxG4" id="checkboxG4" class="css-checkbox" />
      <label for="checkboxG4" class="css-label">Override JSON validation</label>
    </div>
    <button tabindex="0" type="submit" class="button button-primary button-large import-btn"><?php _e('Import', 'keystone') ?></button>
  </div>
</div>

<style>
  .checkbox-row > * {
    line-height: 30px;
    vertical-align: middle;
    display: inline-block;
    height: 30px;
    margin: 0 !important;
    margin-right: 4px !important;
  }

  .exported-container,
  .imported-container {
    max-width: 800px;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
  }

  sub {}

  .export-btn,
  .import-btn {
    margin-top: 10px !important;
    display: block !important;
    margin-left: auto !important;
  }

  #import-message,
  #export-message {
    color: red;
    position: absolute;
    transform: translateY(-100%);
  }

  textarea {
    display: block;
    width: 100%;
    max-width: 800px;
  }
</style>

<script>
  (function($) {
    $('.export-btn').on('click', function() {
      $.ajax({
        type: "get",
        url: "admin-ajax.php",
        data: {
          action: 'keystone_get_options'
        },
        success: function(response) {
          $('#exported-code-textarea').val(response);
        }
      });
    })

    function IsValidJSONString(str) {
      try {
        JSON.parse(str);
      } catch (e) {
        return false;
      }
      return true;
    }

    $('#imported-code-textarea').on('keyup', function() {
      $('#import-message').html('');
      $('#imported-code-textarea').css('outline', 'none');
    })

    $('.import-btn').on('click', function() {
      var cmb2_meta_box_object = $('#imported-code-textarea').val();

      if (IsValidJSONString(cmb2_meta_box_object)) {
        $.ajax({
          type: "post",
          url: "admin-ajax.php",
          data: {
            action: 'keystone_update_options',
            'cmb2_meta_box_object': cmb2_meta_box_object
          },
          success: function(response) {
            $('#import-message').html('');
            $('#imported-code-textarea').css('outline', 'none');
          },
          error: function(error) {
            alert(
              '<?php _e('An error has occured while trying to import your data. Contact your website administrator.', 'keystone') ?>'
            )
          }
        });
      } else {
        if (cmb2_meta_box_object.trim() == '') {
          $('#import-message').html(
            "<?php  _e('The field below is required.', 'keystone') ?>"
          )
          $('#imported-code-textarea').css('outline', '1px solid red');
        } else {
          $('#import-message').html(
            "<?php  _e('The content you are trying to import is not valid JSON. To override JSON validation check the checkbox below the data field.', 'keystone') ?>"
          )
          $('#imported-code-textarea').css('outline', '1px solid red');
        }

      }

    })

  })(jQuery)
</script>
<?php
}

add_action('admin_post_export_meta', 'wpse10500_admin_action');

function wpse10500_admin_action() {
    error_log('echo here');

    wp_redirect($_SERVER['HTTP_REFERER']);
    exit();
}

add_action('wp_ajax_keystone_get_options', 'keystone_get_options');
add_action('wp_ajax_nopriv_keystone_get_options', 'keystone_get_options');
function keystone_get_options() {
    $box_options_json = json_encode(get_option('cmb2_key_header_styles_box'));
    echo $box_options_json;
    error_log('hi mom');
    return;
}
