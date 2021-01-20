<?php

/**
* THIS CLASS HANDLES ADDING THEME SETTING CLASSES TO THE <BODY> TAG
*/

class Keystone_Body_Classes {
  private $prefix;

  public function __construct() {
    $this->$prefix = Keystone()->getPrefix();

    add_filter('body_class', array($this, 'add_custom_body_classes'));
  }

  public function add_custom_body_classes($classes) {
    $color_options_1 = array('header-modern-style-1');
    $color_options_2 = array(
      'header-modern-style-2',
      'header-modern-style-3',
      'header-modern-style-6',
      'header-modern-style-7',
      'header-modern-style-8'
    );
    $color_options_3 = array('header-modern-style-4');

    $header_style = cmb2_get_option('cmb2_key_header_styles_box', 'cmb2_id_header_group_style')[0]['layout'];

    if (in_array($header_style, $color_options_1)) {
      $header_style = $header_style . '-' . cmb2_get_option('cmb2_key_header_styles_box', 'cmb2_id_header_group_style')[0]['color1'];
    }

    if (in_array($header_style, $color_options_2)) {
      $header_style = $header_style . '-' . cmb2_get_option('cmb2_key_header_styles_box', 'cmb2_id_header_group_style')[0]['color2'];
    }

    if (in_array($header_style, $color_options_3)) {
      $header_style = $header_style . '-' . cmb2_get_option('cmb2_key_header_styles_box', 'cmb2_id_header_group_style')[0]['color3'];
    }

    $new_classes = array(
      'keystone-' . $header_style,
      'keystone-' . cmb2_get_option('cmb2_key_blog_box', 'cmb2_id_blog_layout_style'),
      'keystone-' . cmb2_get_option('cmb2_key_footer_box', 'cmb2_id_footer_group_style_layout')[0]['footer_style'],
      'keystone-' . cmb2_get_option('cmb2_key_box_advanced_settings', 'cmb2_id_page_title_style'),
      'keystone-' . cmb2_get_option('cmb2_key_box_advanced_settings', 'cmb2_id_appointment_form_style'),
      'keystone-' . cmb2_get_option('cmb2_key_box_advanced_settings', 'cmb2_id_coming_soon_style'),
      'keystone-' . cmb2_get_option('cmb2_key_box_advanced_settings', 'cmb2_id_under_construction_style'),
      'keystone-' . cmb2_get_option('cmb2_key_box_advanced_settings', 'cmb2_id_field_stylesheet_load_method'),
      'keystone-' . cmb2_get_option('cmb2_key_box_advanced_settings', 'cmb2_id_field_script_load_method'),
      'keystone-' . cmb2_get_option('cmb_homepage_layout', 'cmb2_id_homepage_style'),
      'keystone-' . cmb2_get_option('cmb2_key_box_general_settings', 'cmb2_id_side_push_panel_style'),
    );

    $classes = array_merge($classes, $new_classes);

    return $classes;
  }
}
