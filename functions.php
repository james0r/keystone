<?php
define('KEYSTONE_THEME_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('THEME_ASSETS', get_stylesheet_directory_uri() . '/assets');
define('THEME_DIRECTORY', KEYSTONE_THEME_DIR);

/*----------------------------------------------------
KEYSTONE CORE OOP ADDITIONS
-----------------------------------------------------*/

require_once wp_normalize_path(get_template_directory() . '/includes/classes/Keystone.php');

Keystone::$template_dir_path = wp_normalize_path(get_template_directory());
Keystone::$template_dir_url = get_template_directory_uri();
Keystone::$stylesheet_dir_path = wp_normalize_path(get_stylesheet_directory());
Keystone::$stylesheet_dir_url = get_stylesheet_directory_uri();

require_once wp_normalize_path(get_template_directory() . '/includes/classes/Keystone_Autoload.php');

new Keystone_Autoload;

function Keystone() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName
    return Keystone::getInstance();
}

Keystone();

Keystone()->requireOnce('/includes/libs/CMB2/init.php');

new Keystone_CMB2;
new Keystone_Modules;

require_once wp_normalize_path(get_template_directory() . '/includes/helper-functions.php');

Keystone()->addNavMenus([
    'primary' => 'Primary',
]);

//==========================================
// THEME INCLUDES
//==========================================

Keystone()->requireOnce('/includes/libs/CMB2/plugins/cmb2-radio-image.php')
->requireOnce('/includes/libs/CMB2/plugins/cmb2-switch-button.php');

//==========================================
// ENQUEUE SCRIPTS
//==========================================

// Main Theme Styles and Scripts
Keystone()->addStyle('style', get_template_directory_uri() . '/assets/main.css')
->addStyle('font-awesome', get_template_directory_uri() . '/assets/all.min.css')
->addStyle('theme-styles', get_template_directory_uri() . '/style.css')
->addScript('header_js', get_template_directory_uri() . '/assets/header-bundle.js', null, 1.0, false)
->addScript('footer_js', get_template_directory_uri() . '/assets/footer-bundle.js', null, 1.0, true);

// Admin Scripts and Styles
Keystone()->addAdminStyle('admin-styles', get_template_directory_uri() . '/assets/admin.css')
->addAdminScript('jquery-ui', get_template_directory_uri() . '/assets/jquery-ui.min.js')
->addAdminScript('admin-scripts', get_template_directory_uri() . '/assets/admin.js', null, 1.0, true);

/*----------------------------------------------------
THEME SUPPORTS
-----------------------------------------------------*/

Keystone()->addSupport('post-thumbnails')
->addSupport('automatic-feed-links')
->addSupport('post-thumbnails')
->addSupport('title-tag')
->addSupport('menus')
->addSupport('html5', ['gallery'])
->addSupport('align-wide')
->addSupport('editor-styles')
->addSupport('wp-block-styles')
->addSupport('dark-editor-style')
->addSupport('responsive-embed');

/*----------------------------------------------------
REGISTER IMAGE SIZES
-----------------------------------------------------*/

Keystone()->addImageSize('full-width', 1600)
->addImageSize('small-thumbnail', 720, 720, true)
->addImageSize('square-thumbnail', 80, 80, true)
->addImageSize('banner-image', 1024, 1024, true);

 //AUTO GENERATE MODULES TABLE
 function createModulesTable() {
     $sql =
      'CREATE TABLE IF NOT EXISTS modules (
        id int(32) NOT NULL auto_increment ,
        module varchar(100) NOT NULL,
        name varchar(255) NOT NULL,
        page int(32) NOT NULL,
        display_order int(32) NOT NULL,
        PRIMARY KEY  (id)
      )';
     require_once ABSPATH . 'wp-admin/includes/upgrade.php';
     dbDelta($sql);
 }

add_action('after_switch_theme', 'createModulesTable');
