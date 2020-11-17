<?php
/*----------------------------------------------------
THIS FILE OUTPUTS CLASSES TO THE <BODY> TAG FOR VARIOUS
THEME ELEMENTS SUCH AS HEADER, FOOTER, WIDGETS, ETC...
-----------------------------------------------------*/

$prefix = 'keystone-';
$classes_array = array();

if (!empty(cmb2_get_option('cmb2_key_header_styles_box', 'cmb2_id_header_layout_style'))) {
  array_push($classes_array, $prefix . cmb2_get_option('cmb2_key_header_styles_box', 'cmb2_id_header_layout_style'));
}

if (!empty(cmb2_get_option('cmb2_key_blog_box', 'cmb2_id_blog_layout_style'))) {
  array_push($classes_array, $prefix . cmb2_get_option('cmb2_key_blog_box', 'cmb2_id_blog_layout_style'));
}

if (!empty(cmb2_get_option('cmb2_key_footer_styles_box', 'cmb2_id_footer_style'))) {
  array_push($classes_array, $prefix . cmb2_get_option('cmb2_key_footer_styles_box', 'cmb2_id_footer_style'));
}

if (!empty(cmb2_get_option('cmb2_key_box_general_settings', 'cmb2_id_page_title_style'))) {
  array_push($classes_array, $prefix . cmb2_get_option('cmb2_key_box_general_settings', 'cmb2_id_page_title_style'));
}

if (!empty(cmb2_get_option('cmb2_key_box_general_settings', 'cmb2_id_appointment_form_style'))) {
  array_push($classes_array, $prefix . cmb2_get_option('cmb2_key_box_general_settings', 'cmb2_id_appointment_form_style'));
}

if (!empty(cmb2_get_option('cmb2_key_box_general_settings', 'cmb2_id_coming_soon_style'))) {
  array_push($classes_array, $prefix . cmb2_get_option('cmb2_key_box_general_settings', 'cmb2_id_coming_soon_style'));
}

if (!empty(cmb2_get_option('cmb2_key_box_general_settings', 'cmb2_id_under_construction_style'))) {
  array_push($classes_array, $prefix . cmb2_get_option('cmb2_key_box_general_settings', 'cmb2_id_under_construction_style'));
}

if (!empty(cmb2_get_option('cmb_homepage_layout', 'cmb2_id_homepage_style'))) {
  array_push($classes_array, $prefix . cmb2_get_option('cmb_homepage_layout', 'cmb2_id_homepage_style'));
}

if (!empty(cmb2_get_option('cmb2_key_box_general_settings', 'cmb2_id_side_push_panel_style'))) {
  array_push($classes_array, $prefix . cmb2_get_option('cmb2_key_box_general_settings', 'cmb2_id_side_push_panel_style'));
}

define('KEYSTONE_THEME_CLASSES', $classes_array);