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

        add_action('init', [$this, 'reset_editor']);

        $this->addImageSize('reveal-image', 1100, 840);
        $this->addImageSize('award-thumb', 160, 160);
        $this->addImageSize('certificate', 1000);
        $this->addImageSize('hero-background', 1920, 1200);
        $this->addImageSize('title-image', 132, 40);

        parent::__construct();
    }

    // The object is created from within the class itself
    // only if the class has no instance.

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Keystone();

            self::$instance->helpers = new Keystone_Helpers;
            self::$instance->cmb2 = new Keystone_CMB2;
            self::$instance->modules = new Keystone_Modules;
            self::$instance->options = new Keystone_Options;
            self::$instance->body_classes = new Keystone_Body_Classes;
            self::$instance->dynamic_css = new Keystone_Dynamic_CSS;
            self::$instance->dynamic_scripts = new Keystone_Dynamic_Scripts;
            self::$instance->sidebars = new Keystone_Sidebars;
            self::$instance->icons = new Keystone_Icons;
            self::$instance->menus = new Keystone_Menus;
            self::$instance->demos = new Keystone_Demos;
            self::$instance->admin = new Keystone_Admin;
            self::$instance->images = new Keystone_Images;
            self::$instance->a11y = new Keystone_A11y;
        }

        return self::$instance;
    }

    public function getPrefix() {
        return self::$theme_prefix;
    }

    public function reset_editor() {
        global $_wp_post_type_features;

        $post_type = 'page';
        $feature = 'editor';
        if (!isset($_wp_post_type_features[$post_type])) {
        } elseif (isset($_wp_post_type_features[$post_type][$feature])) {
            unset($_wp_post_type_features[$post_type][$feature]);
        }
    }
}
