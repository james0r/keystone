<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type"
    content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <?php
    echo '<style id="keystone-css-vars">';
    keystone_render_template('theme-css-vars');
    echo '</style>';
    keystone_render_template('theme-fonts');
    echo '<script>console.log("Keystone Theme ' . KEYSTONE_VERSION . ' https://www.clinicrevenue.com")</script>';
    Keystone()->modules->enqueue_module_deps(get_the_ID());
    wp_head(); 
  ?>
</head>

<body <?php body_class(); ?>>

  <!-- Begin wrapper for use with boxed layouts -->
  <div id="wrapper">
    <?php keystone_render_template('preloader') ?>
    <?php Keystone()->header->render_header(); ?>

