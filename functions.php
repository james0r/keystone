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

add_action( 'cmb2_save_options-page_fields_cmb_company_info_page', 'my_post_save_function', 10, 3 );

function my_post_save_function( string $object_id, array $updated, CMB2 $cmb )
{
    
}