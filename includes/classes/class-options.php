<?php
/**
* THIS CLASS HANDLES THE GLOBAL KEYSTONE
* THEME OPTIONS
*/

class Keystone_Options {
    public $section_names = [];

    public $sections = [];

    private static $fields;

    private static $instance = null;

    public function __construct() {
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
