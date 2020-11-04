<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <?php echo get_partial('partials/theme-colors'); ?>
  <?php echo get_partial('partials/theme-fonts'); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>

<?php echo cmb2_get_option('cmb_secondary_options', 'cmb_footer_copyright') ?>