<?php
/**
* This file bootstraps the Keystone Theme.
* It is intentionally minimal.
*/

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
  exit('Direct script access denied.');
}

if (!defined('KEYSTONE_VERSION')) {
  define('KEYSTONE_VERSION', '9.0.0');
}

if (!defined('KEYSTONE_MIN_PHP_VER_REQUIRED')) {
  define('KEYSTONE_MIN_PHP_VER_REQUIRED', '7.4');
}

// Developer mode.
if (!defined('KEYSTONE_DEV_MODE')) {
  define('KEYSTONE_DEV_MODE', true);
}

require_once wp_normalize_path(get_template_directory() . '/includes/classes/Keystone_Core.php');

Keystone_Core::$template_dir_path = wp_normalize_path(get_template_directory());
Keystone_Core::$template_dir_url = get_template_directory_uri();
Keystone_Core::$stylesheet_dir_path = wp_normalize_path(get_stylesheet_directory());
Keystone_Core::$stylesheet_dir_url = get_stylesheet_directory_uri();

require_once wp_normalize_path(get_template_directory() . '/includes/classes/Keystone_Autoload.php');

new Keystone_Autoload;

function Keystone() {
  return Keystone_Core::getInstance();
}

Keystone();


// Fire the hook to load helper function from classes
do_action('keystone_load_helper_functions');