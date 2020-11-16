<?php
/**
* THIS CLASS EXTENDS WAUBLE AND IS MEANT FOR CORE
* FUNCTIONALITY THAT IS NOT ALREADY AVAILABLE IN
* THE WAUBLE PARENT CLASS
*/

require_once wp_normalize_path(get_template_directory() . '/includes/classes/Wauble.php');

class Keystone extends Wauble {
    public static $instance = null;

    private function __construct() {

        add_filter('use_block_editor_for_post', '__return_false', 10);

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
