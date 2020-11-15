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

        $this->cmb2 = new Keystone_CMB2;
        $this->modules = new Keystone_Modules;

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
