<?php

/**
* THIS CLASS CONTAINS INIT AND CMB2
* METHODS AND VARIABLES FOR KEYSTONE
*/

class Keystone_CMB2 {
    private static $template_dir_url;

    private static $template_dir_path;

    public function __construct() {
        self::$template_dir_url = Keystone::$template_dir_url;
        self::$template_dir_path = Keystone::$template_dir_path;

        $this->enqueue_scripts();
        $this->enqueue_styles();

        Keystone()->requireOnce('/includes/libs/CMB2/init.php')
        ->requireOnce('/includes/libs/CMB2/plugins/cmb-field-font/cmb2-field-font.php')
        ->requireOnce('/includes/libs/CMB2/plugins/cmb2-radio-image.php')
        ->requireOnce('/includes/libs/CMB2/plugins/cmb2-switch-button.php');
    }

    protected static function enqueue_scripts() {
        $scripts = [
            [
                'cmb-font-webfont',
                self::$template_dir_url . '/includes/libs/CMB2/plugins/cmb-field-font/js/webfont.js',
                ['jquery'],
                1,
                true,
            ],
            [
                'cmb-font-higooglefonts',
                self::$template_dir_url . '/includes/libs/CMB2/plugins/cmb-field-font/js/higooglefonts.js',
                ['jquery', 'cmb-font-webfont', 'cmb-font-select2'],
                1,
                true,
            ],
            [
                'cmb-font-select2',
                self::$template_dir_url . '/includes/libs/CMB2/plugins/cmb-field-font/js/select2.full.min.js',
                ['jquery'],
                1,
                true,
            ],
            [
                'cmb-field-font',
                self::$template_dir_url . '/includes/libs/CMB2/plugins/cmb-field-font/js/font.js',
                ['jquery'],
                1,
                true,
            ],
            [
                'cmb-field-font',
                self::$template_dir_url . '/includes/libs/CMB2/plugins/cmb-field-font/js/font.js',
                ['jquery'],
                1,
                true,
            ],
            [
                'cmb2-conditional-logic',
                self::$template_dir_url . '/includes/libs/CMB2/plugins/cmb2-conditional-logic.js',
                ['jquery'],
                1,
                true,
            ]
        ];

        foreach ($scripts as $script) {
            Keystone()->addAdminScript(
                $script[0],
                $script[1],
                $script[2],
                $script[3],
                $script[4]
            );
        }
    }

    protected function enqueue_styles() {
        $styles = [
            [
                'cmb-font-select2',
                self::$template_dir_url . '/includes/libs/CMB2/plugins/cmb-field-font/css/select2.min.css',
                [],
                1
            ],
            [
                'cmb-field-font',
                self::$template_dir_url . '/includes/libs/CMB2/plugins/cmb-field-font/css/font.css',
                [],
                1
            ]
        ];

        foreach ($styles as $style) {
            Keystone()->addAdminStyle(
                $script[0],
                $script[1],
                $script[2],
                $script[3]
            );
        }
    }
}
