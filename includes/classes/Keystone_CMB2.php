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
        ->requireOnce('/includes/libs/CMB2/plugins/cmb2-field-order/cmb2-field-order.php')
        ->requireOnce('/includes/libs/CMB2/plugins/CMB2-grid/Cmb2GridPlugin.php')
        ->requireOnce('/includes/libs/CMB2/plugins/cmb2-field-faiconselect/iconselect.php')
        ->requireOnce('/includes/libs/CMB2/plugins/cmb2-field-faiconselect/predefined-array-fontawesome.php')
        ->requireOnce('/includes/libs/CMB2/plugins/cmb2-radio-image.php')
        ->requireOnce('/includes/libs/CMB2/plugins/cmb2-switch-button.php')
        ->requireOnce('/includes/libs/CMB2/plugins/cmb2-attached-posts/cmb2-attached-posts-field.php');

        add_action('keystone_load_helper_functions', [$this, 'loadHelperFunctions']);
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
                'cmb-font-select2-styles',
                self::$template_dir_url . '/includes/libs/CMB2/plugins/cmb-field-font/css/select2.min.css',
                [],
                1
            ],
            [
                'cmb-field-font-styles',
                self::$template_dir_url . '/includes/libs/CMB2/plugins/cmb-field-font/css/font.css',
                [],
                1
            ]
        ];

        foreach ($styles as $style) {
            Keystone()->addAdminStyle(
                $style[0],
                $style[1],
                $style[2],
                $style[3]
            );
        }
    }

    public function loadHelperFunctions() {
        // Callback function to be used with Checkbox and Switch fields.
        function sanitize_checkbox($value, $field_args, $field) {
            // Return 0 instead of false if null value given.
            error_log($value);
            return is_null($value) ? 0 : $value;
        }

        function absint_with_default_fallback($value, $field_args, $field) {
            if ($value == false) {
                $value = $field_args['default'];
            }
            return abs(intval($value));
        }

        function keystone_sanitize_text_callback($value, $field_args, $field) {
            $value = strip_tags($value, '<span><p><a><br><br/><b><strong>');

            return $value;
        }

        function get_entered_social_links_array () {
          $social_links = cmb2_get_option('cmb_social_links', 'all');
          $capitalized_values_array = array();
          
          foreach($social_links as $key => $value) {
            $capitalized_values_array[$key] = ucfirst($key);
          }

          return $capitalized_values_array;
        }

        function keystone_meta_with_module_id($key, $instance, $single = true) {
          $value = get_post_meta(get_the_ID(), $key . '_' . $instance, $single);
          return $value;
        }
    }

    public function fetch_cmb2_box_from_db($box_key) {
      $box_values = get_option($box_key);
      var_dump($box_values);
    }
}
