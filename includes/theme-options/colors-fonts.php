<?php
/**
* Header Theme Options
*/

$args = [
    'id'           => 'cmb_theme_colors',
    'object_types' => ['options-page'],
    'option_key'   => 'cmb_theme_colors',
    'parent_slug'  => 'cmb_main_options',
    'title'        => 'Color & Typography'
];

$cmb_theme_colors = new_cmb2_box($args);

$cmb_theme_colors->add_field([
    'name'    => 'Primary Color',
    'id'      => 'cmb_primary_color',
    'type'    => 'colorpicker',
]);

$cmb_theme_colors->add_field([
    'name'    => 'Secondary Color',
    'id'      => 'cmb_secondary_color',
    'type'    => 'colorpicker',
]);

$cmb_theme_colors->add_field([
    'name'    => 'Background Color',
    'id'      => 'cmb_background_color',
    'type'    => 'colorpicker',
]);

$cmb_theme_colors->add_field([
    'name'    => 'Dark Theme Background Color',
    'id'      => 'cmb_dark_background_color',
    'type'    => 'colorpicker',
]);

$cmb_theme_colors->add_field([
    'name'          => __('Body Font', 'keystone'),
    'desc'          => __('Choose from these Google fonts.', 'keystone'),
    'id'            => 'cmb2_id_body_font',
    'after_field'   => 'Current: ' . cmb2_get_option('cmb_theme_colors', 'cmb2_id_body_font'),
    'type'          => 'font',
    'attributes'    => [
        'data-placeholder' => __('Choose a font', 'keystone'),
    ]
]);

$cmb_theme_colors->add_field([
    'name'          => __('Header Font', 'keystone'),
    'desc'          => __('Choose from these Google fonts.', 'keystone') . cmb2_get_option('cmb_theme_colors', 'cmb2_id_header_font'),
    'id'            => 'cmb2_id_header_font',
    'after_field'   => 'Current: ' . cmb2_get_option('cmb_theme_colors', 'cmb2_id_header_font'),
    'type'          => 'font',
    'attributes'    => [
        'data-placeholder' => __('Choose a font', 'keystone'),
    ]
]);
