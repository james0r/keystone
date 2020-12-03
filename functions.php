<?php
/**
* THIS FILE BOOTSTRAPS THE KEYSTONE THEME
* AND SHOULD REMAIN MINIMAL
*/

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

add_action('admin_menu', 'my_menu_pages');
function my_menu_pages(){
    add_menu_page('My Page Title', 'My Menu Title', 'manage_options', 'my-menu', 'my_menu_output' );
    add_submenu_page('my-menu', 'Submenu Page Title', 'Whatever You Want', 'manage_options', 'my-menu' );
    add_submenu_page('my-menu', 'Submenu Page Title2', 'Whatever You Want2', 'manage_options', 'my-menu2' );
}
