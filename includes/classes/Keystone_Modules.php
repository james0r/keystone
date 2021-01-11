<?php

/**
* This class contains logic for dynamic modules
*/

class Keystone_Modules {
    public function __construct() {
        Keystone()->requireOnce('includes/modules/admin-template.php');
        add_action('cmb2_admin_init', [$this, 'register_module_fields']);
        add_action('after_switch_theme', [$this, 'createModulesTable']);
    }

    public function createModulesTable() {
        $sql =
         'CREATE TABLE IF NOT EXISTS modules (
           id int(32) NOT NULL auto_increment ,
           module varchar(100) NOT NULL,
           name varchar(255) NOT NULL,
           page int(32) NOT NULL,
           display_order int(32) NOT NULL,
           demo_assets_loaded boolean NOT NULL default 0
           PRIMARY KEY  (id)
         )';
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta($sql);
    }

    public function register_module_fields() {
        Keystone()->requireOnce('/includes/modules/modules.php');
    }

    public function enqueue_module_script_deps($post_id) {
        $post_modules = $this->get_post_modules($post_id);

        foreach ($post_modules as $module_name) {
            $script_deps = $this->get_module_script_deps($module_name);

            foreach ($script_deps as $dep_handle) {
                add_action('wp_enqueue_scripts', function () use ($dep_handle) {
                    wp_enqueue_script($dep_handle);
                });
            }
        }
    }

    public function enqueue_module_style_deps($post_id) {
        $post_modules = $this->get_post_modules($post_id);

        foreach ($post_modules as $module_name) {
            $style_deps = $this->get_module_style_deps($module_name);

            foreach ($style_deps as $dep_handle) {
                add_action('wp_enqueue_scripts', function () use ($dep_handle) {
                    wp_enqueue_style($dep_handle);
                });
            }
        }
    }

    public function get_post_modules($post_id) {
        global $wpdb;
        $modules_in_post = [];
        $modules = $wpdb->get_results('SELECT * FROM modules ORDER BY display_order ASC');
        foreach ($modules as $m) {
            if ($post_id == $m->page) {
                array_push($modules_in_post, $m->module);
            }
        }

        return $modules_in_post;
    }

    public function get_module_script_deps($module_name) {
        return $this->get_modules_scripts_map()[$module_name];
    }

    public function get_module_style_deps($module_name) {
        return $this->get_modules_styles_map()[$module_name];
    }

    private function get_modules_scripts_map() {
        return [
            'certs' => ['slick-js', 'lightbox2-js'],
            'about' => ['twenty-twenty-js', 'event-move-js'],
            'services-style-1' => []
        ];
    }

    private function get_modules_styles_map() {
        return [
            'certs' => ['slick-css', 'slick-theme-css', 'lightbox2-css', 'module-certs-css'],
            'about' => ['twenty-twenty-css','module-about-css'],
            'services-style-1' => ['flaticon-medical-css','flaticon-dental-css','module-services-style-1-css']
        ];
    }
}
