<?php
/**
* Advanced Theme Options
*/
  
$cmb2_box_advanced_settings = new_cmb2_box([
  'id'            => 'cmb2_id_box_advanced_settings',
  'option_key'    => 'cmb2_key_box_advanced_settings',
  'title'         => __('Advanced Settings', 'keystone'),
  'object_types'  => ['options-page'], // Post type
  'parent_slug'  => 'cmb_main_options',
  'show_names'    => true
]);

$cmb2_box_advanced_settings->add_field([
  'name'             => __( 'CSS Stylesheet Load Method', 'keystone' ),
  'id'               => 'cmb2_id_field_stylesheet_load_method',
  'desc'             => __('This setting changes the way that stylesheet files are loaded upon page load.', 'keystone') . '<br><span style="color: red;">'. __('Changing this setting may hurt or improve page load performance. Use with caution.', 'keystone') . '</span>',
  'type'    => 'radio_inline',
  'options' => array(
      'standard-css-loading' => __( 'Standard Loading (Inside '.esc_html('<head> tag', 'keystone').')', 'keystone' ),
      'progressive-css-loading'   => __( 'Progressive Loading (Inside '.esc_html('<body> tag', 'keystone').')', 'keystone' ),
  ),
  'default' => 'progressive-css-loading'
]);

$cmb2_box_advanced_settings->add_field([
  'name'             => __( 'Javascript Script Load Method', 'keystone' ),
  'id'               => 'cmb2_id_field_script_load_method',
  'desc'             => __('This setting changes the way that javascript scripts files are loaded upon page load.', 'keystone') . '<br><span style="color: red;">'. __('Changing this setting may hurt or improve page load performance. Use with caution.', 'keystone') . '</span>',
  'type'    => 'radio_inline',
  'options' => array(
      'standard-script-loading' => __( 'Standard Loading (Inside '.esc_html('<head> and <footer> tags', 'keystone').')', 'keystone' ),
      'progressive-script-loading'   => __( 'Progressive Loading (Inside '.esc_html('<body> tag', 'keystone').')', 'keystone' ),
  ),
  'default' => 'progressive-script-loading'
]);