<?php

/**
* This class handles the downloading and loading of demo content.
*/

class Keystone_Demos {
    private $demo_images_base_url = 'https://clinicrevenue.com/keystone/demos/';

    private $demo_module_schemas_base_path;

    public function __construct() {
      $this->$demo_module_schemas_base_path = Keystone::$template_dir_path . '/assets/demos/';
    }

    private function get_module_schema_from_slug($slug) {
      return $json_content = file_get_contents($this->$demo_module_schemas_base_path . $slug . '.json');
    }

    private function import_content_from_schema($json) {
      $content_array = json_decode($json, 'Array_A');

      error_log( print_r($content_array, TRUE) );
    }

    public function maybe_load_demo_content($module_id) {
      global $wpdb;
      $modules = $wpdb->get_results('SELECT * FROM modules', 'ARRAY_A');
      $module_slug = '';
      $json;

      if (!$this->is_demo_loaded($module_id)) {
        foreach ($modules as $module) {
          if ($module['id'] == $module_id) {
            $module_slug = $module['module'];
          }
        }

        $json = $this->get_module_schema_from_slug($module_slug);

        $this->import_content_from_schema($json);
        
      }
    }

    public function is_demo_loaded($module_id) {
      global $wpdb;
      $modules = $wpdb->get_results('SELECT * FROM modules', 'ARRAY_A');

      foreach($modules as $module) {
        if ($module['id'] == $module_id) {
          return $module['demo_assets_loaded'] ? true : false;
        }
      }

      return false;
    }
}
