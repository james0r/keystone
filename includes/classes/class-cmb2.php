<?php

/**
* THIS CLASS CONTAINS INIT AND CMB2
* METHODS AND VARIABLES FOR KEYSTONE
*/

class Keystone_CMB2 {
    public function __construct() {
        Keystone()->addScript('cmb-font-webfont', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/js/webfont.js', ['jquery'], 1, true)
      ->addScript('cmb-font-select2', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/js/select2.full.min.js', ['jquery'], 1, true)
      ->addScript('cmb-font-higooglefonts', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/js/higooglefonts.js', ['jquery', 'cmb-font-webfont', 'cmb-font-select2'], 1, true)
      ->addScript('cmb-field-font', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/js/font.js', ['jquery'], 1, true)
      ->addStyle('cmb-font-select2', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/css/select2.min.css', [], 1)
      ->addStyle('cmb-field-font', get_template_directory_uri() . '/includes/libs/CMB2/plugins/cmb-field-font/css/font.css', [], 1);

        Keystone()->requireOnce(Keystone()->$template_dir_path . '/includes/meta/meta-standard.php')
      ->requireOnce(Keystone()->$template_dir_path . '/includes/meta/meta-modules.php')
      ->requireOnce(Keystone()->$template_dir_path . '/includes/meta/meta-modules.php')
      ->requireOnce(Keystone()->$template_dir_path . '/includes/theme-options.php');
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
