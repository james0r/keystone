<?php
/**
* Footer Theme Options
*/

$cmb2_box_footer_style = new_cmb2_box([
  'id'           => 'cmb2_id_footer_styles_box',
  'option_key'   => 'cmb2_key_footer_styles_box',
  'title'        => __('Footer', 'keystone'),
  'object_types' => ['options-page'],
  'parent_slug'  => 'cmb_main_options',
]);

$cmb2_box_footer_style->add_field([
    'name'          => __('Footer Layout Style', 'keystone'),
    'id'            => 'cmb2_id_footer_style',
    'type'          => 'select',
    'default'       => 'footer-style-5',
    'options'       => [
        'fixed-footer'              => __('Fixed Footer', 'keystone'),
        'footer-style-1'            => __('Footer Style 1', 'keystone'),
        'footer-style-2'            => __('Footer Style 2', 'keystone'),
        'footer-style-3'            => __('Footer Style 3', 'keystone'),
        'footer-style-4'            => __('Footer Style 4', 'keystone'),
        'footer-style-5'            => __('Footer Style 5', 'keystone'),
        'footer-style-6'            => __('Footer Style 6', 'keystone'),
        'footer-style-7'            => __('Footer Style 7', 'keystone'),
        'footer-style-8'            => __('Footer Style 8', 'keystone'),
        'footer-style-9'            => __('Footer Style 9', 'keystone'),
    ]
]);


$cmb2_box_footer_style->add_field([
  'name'    => 'Copyright Line',
  'id'      => 'cmb_footer_copyright',
  'type'    => 'text'
]);