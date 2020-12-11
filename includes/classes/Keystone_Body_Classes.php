<?php

/**
* THIS CLASS HANDLES ADDING THEME SETTING CLASSES TO THE <BODY> TAG
*/

class Keystone_Body_Classes {
    private $prefix;

    public function __construct() {
      $this->$prefix = Keystone()->getPrefix();

      add_filter( 'body_class', [$this, 'add_custom_body_classes'] );
    }

    public function add_custom_body_classes($classes) {
      $custom_classes = $this->get_options_map();
      foreach($custom_classes as $custom_class) {
        if (!empty(cmb2_get_option($custom_class[0], $custom_class[1]))) {
          array_push($classes, $this->$prefix . '-' . cmb2_get_option($custom_class[0], $custom_class[1]));
        }
      }

      return $classes;
    }

    private function get_options_map() {
      return [
          ['cmb2_key_header_styles_box', 'cmb2_id_header_group_header_style'],
          ['cmb2_key_blog_box', 'cmb2_id_blog_layout_style'],
          ['cmb2_key_footer_styles_box', 'cmb2_id_footer_style'],
          ['cmb2_key_box_advanced_settings', 'cmb2_id_page_title_style'],
          ['cmb2_key_box_advanced_settings', 'cmb2_id_appointment_form_style'],
          ['cmb2_key_box_advanced_settings', 'cmb2_id_coming_soon_style'],
          ['cmb2_key_box_advanced_settings', 'cmb2_id_under_construction_style'],
          ['cmb_homepage_layout', 'cmb2_id_homepage_style'],
          ['cmb2_key_box_general_settings', 'cmb2_id_side_push_panel_style']
      ];
    }
   
}
