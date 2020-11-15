<?php
/**
* THIS CLASS EXTENDS WAUBLE AND IS MEANT FOR CORE
* FUNCTIONALITY THAT IS NOT ALREADY AVAILABLE IN
* THE WAUBLE PARENT CLASS
*/

require get_template_directory() . '/includes/classes/class-wauble.php';

// Keystone()->requireOnce(Keystone()->$template_dir_path . '/includes/classes/class-cmb2');

class Keystone extends Wauble {
    private function __construct() {
      
        Keystone::$template_dir_path = wp_normalize_path(get_template_directory());
        Keystone::$template_dir_url = get_template_directory_uri();
        Keystone::$stylesheet_dir_path = wp_normalize_path(get_stylesheet_directory());
        Keystone::$stylesheet_dir_url = get_stylesheet_directory_uri();

        // $this->cmb2 = Keystone_CMB2::getInstance();

        parent::__construct();
    }

    // The object is created from within the class itself
    // only if the class has no instance.
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Keystone();
        }

        return self::$instance;
    }
}
