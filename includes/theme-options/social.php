<?php
/**
* Header Theme Options
*/

$args = [
    'id'           => 'cmb_social_links',
    'object_types' => ['options-page'],
    'option_key'   => 'cmb_social_links',
    'parent_slug'  => 'cmb_main_options',
    'title'        => 'Social Links'
];

$cmb_social_links = new_cmb2_box($args);

$cmb_social_links->add_field([
    'name'       => __('Facebook URL', 'cmb2'),
    'id'         => 'facebook',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('Twitter URL', 'cmb2'),
    'id'         => 'twitter',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('Instagram URL', 'cmb2'),
    'id'         => 'instagram',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('LinkedIn URL', 'cmb2'),
    'id'         => 'linkedin',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('Pinterest URL', 'cmb2'),
    'id'         => 'pinterest',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('Youtube URL', 'cmb2'),
    'id'         => 'youtube',
    'type'       => 'text_url'
]);
