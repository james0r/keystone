<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type"
    content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <style id="keystone-css-vars">
    <?php echo keystone_get_template('theme-css-vars') ?>
  </style>
  <?php echo keystone_get_template('theme-fonts'); ?>
  <?php echo '<script>console.log("Keystone Theme '.KEYSTONE_VERSION.' https://www.clinicrevenue.com")</script>'; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- Begin wrapper for use with boxed layouts -->
  <div id="wrapper">
    <?php keystone_get_template('preloader') ?>
    <?php Keystone()->header->render_header(); ?>