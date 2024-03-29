<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type"
    content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <?php
    echo '<style id="keystone-css-vars">';
      get_template_part('template-parts/theme-css-vars');
    echo '</style>';
    echo '<script>console.log("Keystone Theme ' . KEYSTONE_VERSION . '")</script>';

    if (cmb2_get_option('cmb2_key_box_advanced_settings', 'cmb2_id_field_script_load_method') == 'standard-script-loading') {
      Keystone()->modules->enqueue_module_script_deps(get_the_ID());
    }

    if (cmb2_get_option('cmb2_key_box_advanced_settings', 'cmb2_id_field_stylesheet_load_method') == 'standard-css-loading') {
      Keystone()->modules->enqueue_module_style_deps(get_the_ID());
    }

    wp_head();
  ?>
</head>

<body <?php body_class(); ?>>

  <!-- Begin wrapper for use with boxed layouts -->
  <div id="keystone-wrapper">
    <?php echo get_template_part('template-parts/header/site-header') ?>