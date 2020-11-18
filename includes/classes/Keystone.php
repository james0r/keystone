<?php
/**
* THIS CLASS EXTENDS WAUBLE AND IS MEANT FOR CORE
* FUNCTIONALITY THAT IS NOT ALREADY AVAILABLE IN
* THE WAUBLE PARENT CLASS
*/

require_once wp_normalize_path(get_template_directory() . '/includes/classes/Wauble.php');

class Keystone extends Wauble {
    public static $instance = null;

    private static $theme_prefix;

    private function __construct() {

        self::$theme_prefix = 'keystone';

        add_filter('use_block_editor_for_post', '__return_false', 10);

        parent::__construct();
    }

    // The object is created from within the class itself
    // only if the class has no instance.

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Keystone();

            self::$instance->cmb2 = new Keystone_CMB2;
            self::$instance->modules = new Keystone_Modules;
            self::$instance->options = new Keystone_Options;
            self::$instance->body_classes = new Keystone_Body_Classes;
        }

        return self::$instance;
    }

    public function getPrefix() {
      return self::$theme_prefix;
    }
}
