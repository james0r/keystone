<?php
define('KEYSTONE_THEME_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('THEME_ASSETS', get_stylesheet_directory_uri() . '/assets');
define('THEME_DIRECTORY', KEYSTONE_THEME_DIR);

/*----------------------------------------------------
KEYSTONE CORE OOP ADDITIONS
-----------------------------------------------------*/

require get_template_directory() . '/includes/classes/class-keystone.php';
require get_template_directory() . '/includes/helper-functions.php';

function Keystone() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName
	return Keystone::getInstance();
}

Keystone();

Keystone()->addNavMenus([
    'primary' => 'Primary',
]);

//==========================================
// THEME INCLUDES
//==========================================

Keystone()->requireOnce('includes/libs/cmb2/init.php')
->requireOnce('/includes/libs/CMB2/plugins/cmb2-radio-image.php')
->requireOnce('/includes/libs/CMB2/plugins/cmb2-switch-button.php')
->requireOnce('/includes/libs/CMB2/plugins/cmb-field-font/cmb2-field-font.php')
->requireOnce('/includes/custom-modules.php');

//==========================================
// CMB2 FUNCTIONS
//==========================================

function cmb2_meta_init() {
    wp_register_script('cmb-font-webfont', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/js/webfont.js', ['jquery'], 1, true);
    wp_enqueue_script('cmb-font-webfont');

    // https://select2.org/
    wp_register_script('cmb-font-select2', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/js/select2.full.min.js', ['jquery'], 1, true);
    wp_enqueue_script('cmb-font-select2');

    wp_enqueue_style('cmb-font-select2', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/css/select2.min.css', [], 1);
    wp_enqueue_style('cmb-font-select2');

    // https://github.com/saadqbal/HiGoogleFonts
    // Note: HiGoogleFonts has been modified to add search box, custom placeholder and use select2 default theme (instead of the horrible classic theme)
    wp_register_script('cmb-font-higooglefonts', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/js/higooglefonts.js', ['jquery', 'cmb-font-webfont', 'cmb-font-select2'], 1, true);
    wp_enqueue_script('cmb-font-higooglefonts');

    wp_register_script('cmb-field-font', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/js/font.js', ['jquery'], 1, true);
    wp_enqueue_script('cmb-field-font');

    wp_enqueue_style('cmb-field-font', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/css/font.css', [], 1);
    wp_enqueue_style('cmb-field-font');


}

add_action('cmb2_admin_init', 'cmb2_meta_init');

//==========================================
// ENQUEUE SCRIPTS
//==========================================

Keystone()->addStyle('style', get_template_directory_uri() . '/assets/main.css')
->addStyle('font-awesome', get_template_directory_uri() . '/assets/all.min.css')
->addStyle('theme-styles', get_template_directory_uri() . '/style.css')
->addScript('header_js', get_template_directory_uri() . '/assets/header-bundle.js', null, 1.0, false)
->addScript('footer_js', get_template_directory_uri() . '/assets/footer-bundle.js', null, 1.0, true);

Keystone()->addAdminStyle('admin-styles', get_template_directory_uri() . '/assets/admin.css')
->addAdminScript('jquery-ui', get_template_directory_uri() . '/assets/jquery-ui.min.js')
->addAdminScript('admin-scripts', get_template_directory_uri() . '/assets/admin.js', null, 1.0, true)
->addAdminScript('cmb2-conditional-logic', get_template_directory_uri() . '/assets/cmb2-conditional-logic.js', null, 1.0, true);

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

// ================================================ keystone THEME DEFAULTS

function keystone_theme_setup() {

    if (file_exists(KEYSTONE_THEME_DIR . 'includes/post-types.php')) {
        require_once KEYSTONE_THEME_DIR . 'includes/post-types.php';
    }
    if (file_exists(KEYSTONE_THEME_DIR . 'includes/shortcodes.php')) {
        require_once KEYSTONE_THEME_DIR . 'includes/shortcodes.php';
    }
    if (file_exists(KEYSTONE_THEME_DIR . 'includes/taxonomies.php')) {
        require_once KEYSTONE_THEME_DIR . 'includes/taxonomies.php';
    }
    if (file_exists(KEYSTONE_THEME_DIR . '/includes/helpers.php')) {
        require_once KEYSTONE_THEME_DIR . 'includes/helpers.php';
    }
}

add_action('after_setup_theme', 'keystone_theme_setup');

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
