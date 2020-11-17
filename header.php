<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <?php echo keystone_get_template('theme-colors'); ?>
  <?php echo keystone_get_template('theme-fonts'); ?>
  <?php echo keystone_get_template('theme-body-classes'); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php echo '<pre>' . var_export(KEYSTONE_THEME_CLASSES, true) . '</pre>'; ?>