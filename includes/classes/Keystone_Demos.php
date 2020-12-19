<?php

/**
* This class handles the downloading and loading of demo content.
*/

class Keystone_Demos {
    public static $demo_images_base_url;

    public static $demo_module_schemas_base_path;

    public function __construct() {
      self::$demo_images_base_url = 'https://clinicrevenue.com/keystone/demos/images/';
      self::$demo_module_schemas_base_path = Keystone::$template_dir_path . '/assets/demos/';

      error_log( print_r(self::$demo_images_base_url, TRUE) );
    }

    private function get_module_schema_from_slug($slug) {
      return $json_content = file_get_contents(self::$demo_module_schemas_base_path . $slug . '.json');
    }

    private function import_content_from_schema($json, $post_id, $module_id) {
      $content_for_inputs = json_decode($json, 'Array_A');

      error_log( print_r($content_for_inputs, TRUE) );

      foreach($content_for_inputs as $i) {
        switch ($i['meta_field_type']) {
          case 'file':
            $attach_id = Keystone_Images::keystone_add_image_to_media_library(self::$demo_images_base_url . $i['url']);
            $new_url = wp_get_attachment_image_url($attach_id);

            update_post_meta($post_id, $i['meta_id'] . $module_id, $new_url);
            update_post_meta($post_id, $i['meta_id'] . $module_id . '_id', $attach_id);
            break;
          case 'file_list':
            $images = array();
            foreach ($i['files'] as $file) {
              $attach_id = Keystone_Images::keystone_add_image_to_media_library(self::$demo_images_base_url . $file);
              $new_url = wp_get_attachment_image_url($attach_id);

              $images[$attach_id] = $new_url;
            }
            update_post_meta($post_id, $i['meta_id'] . $module_id, $images);
            break;
          default:
            # code...
            break;
        }
      }
    }

    public function maybe_load_demo_content($module_id) {
      global $wpdb;
      $modules = $wpdb->get_results('SELECT * FROM modules', 'ARRAY_A');
      $module_slug = '';
      $module_id;
      $module_page;
      $json;

      if (!$this->is_demo_loaded($module_id)) {
        foreach ($modules as $module) {
          if ($module['id'] == $module_id) {
            $module_slug = $module['module'];
            $module_id = $module['id'];
            $module_page = $module['page'];
          }
        }

        $json = $this->get_module_schema_from_slug($module_slug);

        $this->import_content_from_schema($json, $module_page, $module_id);

        global $wpdb;
        $result = $wpdb->update(
            'modules',
            [
                'demo_assets_loaded' => 1
            ],
            [
                'id' => $module_id
            ],
            ['%d'],
            ['%d']
        );
        
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
