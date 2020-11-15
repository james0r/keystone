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
    'name'       => __('Facebook Url', 'cmb2'),
    'id'         => 'facebook',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('Twitter Url', 'cmb2'),
    'id'         => 'twitter',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('Instagram Url', 'cmb2'),
    'id'         => 'instagram',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('LinkedIn Url', 'cmb2'),
    'id'         => 'linkedin',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('Pinterest Url', 'cmb2'),
    'id'         => 'pinterest',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('Youtube Url', 'cmb2'),
    'id'         => 'youtube',
    'type'       => 'text_url'
]);
