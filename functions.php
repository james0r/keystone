<?php
/**
* This file bootstraps the Keystone Theme.
* It is intentionally minimal.
*/

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( ! defined( 'KEYSTONE_VERSION' ) ) {
	define( 'KEYSTONE_VERSION', '8.0.0' );
}

if ( ! defined( 'KEYSTONE_MIN_PHP_VER_REQUIRED' ) ) {
	define( 'KEYSTONE_MIN_PHP_VER_REQUIRED', '7.4' );
}

if ( ! defined( 'KEYSTONE_MIN_CP_VER_REQUIRED' ) ) {
	define( 'KEYSTONE_MIN_CP_VER_REQUIRED', '1.2.0' );
}

// Developer mode.
if ( ! defined( 'KEYSTONE_DEV_MODE' ) ) {
	define( 'KEYSTONE_DEV_MODE', false );
}

require_once wp_normalize_path(get_template_directory() . '/includes/classes/Keystone.php');

Keystone::$template_dir_path = wp_normalize_path(get_template_directory());
Keystone::$template_dir_url = get_template_directory_uri();
Keystone::$stylesheet_dir_path = wp_normalize_path(get_stylesheet_directory());
Keystone::$stylesheet_dir_url = get_stylesheet_directory_uri();

require_once wp_normalize_path(get_template_directory() . '/includes/classes/Keystone_Autoload.php');

new Keystone_Autoload;

function Keystone() { 
    return Keystone::getInstance();
}

Keystone();

// Fire the hook to load helper function from OOP classes
do_action('keystone_load_helper_functions');

/**
 * Print enqueued style/script handles
 * https://lakewood.media/list-enqueued-scripts-handle/
 */
function lakewood_print_scripts_styles() {
  if( !is_admin() && is_user_logged_in() && current_user_can( 'manage_options' )) {
      // Print Scripts
      global $wp_scripts;
      foreach( $wp_scripts->queue as $handle ) :
         echo '<div style="margin: 5px 3%; border: 1px solid #eee; padding: 20px;">Script <br />';
         echo "Handle: " . $handle . '<br />';
         echo "URL: " . $wp_scripts->registered[$handle]->src;
         echo '</div>';
      endforeach;
   
      // Print Styles
      global $wp_styles;
      foreach( $wp_styles->queue as $handle ) :
         echo '<div style="margin: 5px 3%; border: 1px solid #eee; padding: 20px; background-color: #e0e0e0;">Style <br />';
         echo "Handle: " . $handle . '<br />';
         echo "URL: " . $wp_styles->registered[$handle]->src;
         echo '</div>';
      endforeach;
  }
}
add_action( 'wp_print_scripts', 'lakewood_print_scripts_styles', 101 );