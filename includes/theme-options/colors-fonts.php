<?php
/**
* Header Theme Options
*/

$string = file_get_contents(get_template_directory() . '/includes/google-fonts-dump.json');
$google_fonts_data_json = json_decode($string, true);

$args = [
    'id'           => 'cmb_theme_colors',
    'object_types' => ['options-page'],
    'option_key'   => 'cmb_theme_colors',
    'parent_slug'  => 'cmb_main_options',
    'title'        => __('Color & Typography', 'keystone')
];

$cmb_theme_colors = new_cmb2_box($args);

$cmb_theme_colors->add_field([
    'name'    => __('Primary Color', 'keystone'),
    'default' => '#1196CC',
    'id'      => 'cmb_primary_color',
    'type'    => 'colorpicker',
]);

$cmb_theme_colors->add_field([
    'name'    => __('Secondary Color', 'keystone'),
    'default' => '#202c45',
    'id'      => 'cmb_secondary_color',
    'type'    => 'colorpicker',
]);

$cmb_theme_colors->add_field([
    'name'    => __('Background Color', 'keystone'),
    'id'      => 'cmb_background_color',
    'type'    => 'colorpicker',
]);

$cmb_theme_colors->add_field([
    'name'    => __('Background "light" Gray', 'keystone'),
    'id'      => 'cmb_background_light_gray',
    'type'    => 'colorpicker',
    'default' => '#F5F5F5',
    'desc'    => __('It is recommended to leave this color as-is.', 'keystone')
]);

$cmb_theme_colors->add_field([
    'name'    => __('Background "lighter" Gray', 'keystone'),
    'id'      => 'cmb_background_lighter_gray',
    'type'    => 'colorpicker',
    'default' => '#F7F7F7',
    'desc'    => __('It is recommended to leave this color as-is.', 'keystone')
]);

$cmb_theme_colors->add_field([
    'name'    => __('Background "lightest" Gray', 'keystone'),
    'id'      => 'cmb_background_lightest_gray',
    'type'    => 'colorpicker',
    'default' => '#FCFCFC',
    'desc'    => __('It is recommended to leave this color as-is.', 'keystone')
]);

$cmb_theme_colors->add_field([
    'name'    => __('Dark Theme Background Color', 'keystone'),
    'default' => '#222222',
    'id'      => 'cmb_dark_background_color',
    'type'    => 'colorpicker',
]);

$cmb_theme_colors->add_field([
  'name'    => __('Global Heading Text Color', 'keystone'),
  'description' => __('Set the color for all headings.', 'keystone'),
  'default' => '#222222',
  'id'      => 'cmb2_id_field_global_heading_text_color',
  'type'    => 'colorpicker',
]);

$cmb_theme_colors->add_field([
    'name'    => __('Global Body Text Color', 'keystone'),
    'description' => __('This does not apply to headings', 'keystone'),
    'default' => '#777777',
    'id'      => 'cmb2_id_field_global_body_text_color',
    'type'    => 'colorpicker',
]);

$cmb_theme_colors->add_field([
    'name'          => __('Body Font Family', 'keystone'),
    'desc'          => __('Choose from these Google fonts.', 'keystone'),
    'id'            => 'cmb2_id_body_font',
    'after_field'   => __('Current Font: ', 'keystone') . cmb2_get_option('cmb_theme_colors', 'cmb2_id_body_font'),
    'type'          => 'font',
    'attributes'    => [
        'data-placeholder' => __('Choose a font', 'keystone'),
    ]
]);

$cmb_theme_colors->add_field([
    'name'          => __('Heading Font Family', 'keystone'),
    'desc'          => __('Choose from these Google fonts.', 'keystone'),
    'id'            => 'cmb2_id_heading_font',
    'after_field'   => 'Current Font: ' . cmb2_get_option('cmb_theme_colors', 'cmb2_id_heading_font'),
    'type'          => 'font',
    'attributes'    => [
        'data-placeholder' => __('Choose a font', 'keystone'),
    ]
]);

$google_font_array = $google_fonts_data_json['items'];
$google_font_weight_options = array();

foreach($google_font_array as $font) {
  if (strtolower($font['family']) === strtolower(cmb2_get_option('cmb_theme_colors', 'cmb2_id_heading_font'))) {
    foreach($font['variants'] as $variant) {
      if (strpos($variant, 'italic') == false && $variant != 'italic') {
        $google_font_weight_options[$variant] = $variant;
      }
    }
  }
}

$cmb_theme_colors->add_field([
  'name'          => __('Heading Font Weight', 'keystone'),
  'id'            => 'cmb2_id_field_global_heading_font_weight',
  'type'          => 'radio_inline',
  'default'       => cmb2_get_option('cmb_theme_colors', 'cmb2_id_heading_font') === 'Open Sans' ? '600' : 'regular',
  'options'       => $google_font_weight_options
]);

