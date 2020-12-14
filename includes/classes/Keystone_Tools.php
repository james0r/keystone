<?php
/**
* Handles the Keystone Tools page in the admin
*/

class Keystone_Tools {
    public function __construct() {
        add_action('wp_ajax_keystone_get_option', [$this, 'keystone_get_option']);
        add_action('wp_ajax_keystone_update_option', [$this, 'keystone_update_option']);
        add_action('wp_ajax_keystone_get_module_meta', [$this, 'keystone_get_module_meta']);
        add_action('wp_ajax_nopriv_keystone_get_module_meta', [$this, 'keystone_get_module_meta']);
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

    public function keystone_update_option() {
        if (isset($_POST)) {
            $box_key = $_POST['box_key'];
            $box_value = $_POST['box_value'];

            if ($box_key == 'all'){
                  foreach($box_value as $key => $value) {
                    $result + update_option($key, $value);
                  }
            } else {
              $result = update_option($box_key, $box_value);
            }
        } 

        echo $result;

        // Don't forget to stop execution afterward.
        wp_die();
    }

    public function keystone_get_option() {
        if (isset($_POST)) {
            $option_key = $_POST['payload'];
            if ($option_key == 'all') {
              $all_options_array = array();
              foreach ($this->get_options_key_map() as $value) {
                $all_options_array[$value] = get_option($value);
              }
              $option_value = $all_options_array;
            } else {
              $option_value = get_option($option_key);
            }
            
            // Check if option key even exists
            if ($option_value === false) {
              _e('No option found for the provided key.', 'keystone');
            } elseif (empty($option_value)) {
              _e('The option you selected exists, but its value is empty.', 'keystone');
            } else {
              $box_value_json = json_encode($option_value);
              echo $box_value_json;
            }
        }

        // Don't forget to stop execution afterward.
        wp_die();
    }

    private function get_options_key_map() {
      return array(
        'cmb2_key_footer_box',
        'cmb_main_clinic_information',
        'cmb_theme_colors',
        'cmb2_key_blog_box',
        'cmb_social_links',
        'cmb2_key_box_advanced_settings'
      );
    }

    public function keystone_update_module_meta() {
        $options_array = json_decode($options_json);

        update_option($option_key, $options_json);
        // Don't forget to stop execution afterward.
        wp_die();
    }

    public function keystone_get_module_meta() {
        // Rest hook takes module id as single argument
        if (isset($_POST)) {
            $module_id = $_POST['payload'];
            echo $this->keystone_module_meta_from_instance_id($module_id);
        }

        // Don't forget to stop execution afterward.
        wp_die();
    }

    private function keystone_module_meta_from_instance_id($module_id) {
        global $wpdb;
        $module = $wpdb->get_results('SELECT * FROM modules WHERE id = ' . (int)$module_id, 'ARRAY_A')[0];
        $post_meta = get_post_meta($module['page']);

        error_log(print_r($post_meta, true));

        $post_meta_filtered = array_filter($post_meta, function ($k) use ($module_id) {
            $ending = '_' . (string)$module_id;
            return Keystone_Helpers::endsWith($k, $ending);
        }, ARRAY_FILTER_USE_KEY);

        $post_meta_json = json_encode($post_meta_filtered);
        return $post_meta_json;
    }

    public function cb_tools_page_template() {
        @include Keystone::$template_dir_path . '/templates/admin/keystone-tools.php';
    }
}
