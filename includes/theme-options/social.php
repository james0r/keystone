<?php
/**
* Header Theme Options
*/

$args = [
    'id'           => 'cmb_social_links',
    'object_types' => ['options-page'],
    'option_key'   => 'cmb_social_links',
    'parent_slug'  => 'cmb_main_options',
    'title'        => __('Social Links', 'keystone')
];

$cmb_social_links = new_cmb2_box($args);

$cmb_social_links->add_field([
    'name'       => __('Facebook URL', 'keystone'),
    'id'         => 'facebook',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('Twitter URL', 'keystone'),
    'id'         => 'twitter',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('Instagram URL', 'keystone'),
    'id'         => 'instagram',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('LinkedIn URL', 'keystone'),
    'id'         => 'linkedin',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('Pinterest URL', 'keystone'),
    'id'         => 'pinterest',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('Youtube URL', 'keystone'),
    'id'         => 'youtube',
    'type'       => 'text_url'
]);
