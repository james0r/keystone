<?php
/**
* THIS CLASS HANDLES THE GLOBAL KEYSTONE
* THEME OPTIONS
*/

class Keystone_Options {
    public $section_names = [];

    public $sections = [];

    private static $fields;

    public function __construct() {
        add_action('cmb2_admin_init', [$this, 'init_sections']);
    }

    public static function init_sections() {
        $sections = self::get_sections_map();
        $section_base_path = '/includes/theme-options/';

        foreach ($sections as $section) {
            $path = $section_base_path . $section . '.php';
            Keystone()->requireOnce($path);
        }
    }

    protected static function get_sections_map() {
        return [
            'clinic',
            'homepage-layout',
            'colors-fonts',
            'social',
            'blog',
            'header',
            'footer',
            'advanced',
        ];
    }
}
