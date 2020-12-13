<?php
/**
* Handles the Keystone Tools page in the admin
*/

class Keystone_Tools {
    public function __construct() {
        add_action('wp_ajax_keystone_get_options', [$this, 'keystone_get_options']);
        add_action('wp_ajax_nopriv_keystone_get_options', [$this, 'keystone_get_options']);
        add_action('wp_ajax_keystone_update_options', [$this, 'keystones_update_options']);
        add_action('wp_ajax_nopriv_keystone_update_options', [$this, 'keystone_update_options']);
        add_action('admin_menu', [$this, 'register_tools_page']);
    }

    public function register_tools_page() {
        add_submenu_page(
            'tools.php',
            __('Keystone Tools (Administrators Only)', 'keystone'),
            __('Keystone Tools', 'keystone'),
            'manage_options',
            'keystone_demos',
            [$this, 'cb_tools_page_template']
        );
    }

    public function keystone_update_options($option_key, $options_json) {
        $options_array = json_decode($options_json);

        update_option($option_key, $options_json);
        // Don't forget to stop execution afterward.
        wp_die();
    }

    public function keystone_get_options() {
        if (isset($_POST)) {
            $option_key = $_POST['payload'];
            $box_options_json = json_encode(get_option($option_key));
            echo $box_options_json;
        }

        // Don't forget to stop execution afterward.
        wp_die();
    }

    public function cb_tools_page_template() {
        @include Keystone::$template_dir_path . '/templates/admin/keystone-tools.php';
    }
}
