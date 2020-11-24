<?php

/**
* Metabox fields specific to the swiper slider
*/

$box->add_field([
    'name' => __('Slider Options', 'keystone'),
    'type' => 'title',
    'id'   => 'cmb2_id_field_swiper_title' . $suffix
]);

$box->add_field([
    'name'              => __('Swiper Slider Options', 'keystone'),
    'desc'              => __('Choose which slider options you would like enabled.', 'keystone'),
    'id'                => 'cmb2_id_field_swiper_options' . $suffix,
    'select_all_button' => false,
    'type'              => 'multicheck',
    'options'           => [
        'show_arrows'     => __('Show Arrows', 'keystone'),
        'show_pagination' => __('Show Pagination', 'keystone'),
        'center_slides'   => __('Center Slides', 'keystone'),
    ],
]);

$box->add_field([
    'name'           => __('Pagination Style', 'keystone'),
    'description'    => __('This determines how users will see which slide they\'re on.', 'keystone'),
    'id'             => 'cmb2_id_field_swiper_pagination_style' . $suffix,
    'type'           => 'radio',
    'default'        => 'bullets',
    'options'        => [
        'bullets'          => __('Bullets', 'keystone'),
        'numbered_bullets' => __('Numbered Bullets', 'keystone'),
        'dynamic_bullets'  => __('Dynamic Bullets', 'keystone'),
        'progress_bar'     => __('Progress Bar', 'keystone'),
        'fractions'        => __('Fractions', 'keystone'),
        'scrollbar'        => __('Scrollbar', 'keystone'),
    ],
    'default' => 'standard',
]);

$box->add_field([
    'name'             => __('Show Advanced Options', 'keystone'),
    'desc'             => __('These options are usually left alone. Please consult with your website administrator before altering these settings.', 'keystone'),
    'id'               => 'cmb2_id_field_swiper_advanced_options' . $suffix,
    'type'	            => 'switch',
    'default'          => false, //If it's checked by default
    'active_value'     => true,
    'inactive_value'   => false
]);

$box->add_field([
    'name'             => __('Slider Direction', 'keystone'),
    'id'               => 'cmb2_id_field_swiper_direction' . $suffix,
    'type'             => 'radio',
    'default'          => 'horizontal',
    'options'          => [
        'horizontal' => __('Horizontal', 'keystone'),
        'vertical'   => __('Vertical', 'keystone'),
    ],
    'attributes'    => [
        'data-conditional-id'     => 'cmb2_id_field_swiper_advanced_options'.$suffix,
        'data-conditional-value'  => 'true',
    ],
]);

$box->add_field([
    'name'          => __('Space Between Slides', 'keystone'),
    'desc'          => __('In Pixels. Adds a separator between slides.', 'keystone'),
    'default'       => '0',
    'id'            => 'cmb2_id_field_swiper_space_between_slides' . $suffix,
    'type'          => 'text_small',
    'attributes'    => [
        'data-conditional-id'     => 'cmb2_id_field_swiper_advanced_options'.$suffix,
        'data-conditional-value'  => 'true',
    ],
]);

$box->add_field([
    'name'          => __('# of Slides Per View', 'keystone'),
    'desc'          => __('The number of slides visible at a time. (Use "Auto" fits as many slides in as possible based on their width. This setting is usually not recommended.', 'keystone'),
    'default'       => '1',
    'id'            => 'cmb2_id_field_swiper_slides_per_view' . $suffix,
    'type'          => 'text_small',
    'attributes'    => [
        'data-conditional-id'     => 'cmb2_id_field_swiper_advanced_options'.$suffix,
        'data-conditional-value'  => 'true',
    ],
]);

$box->add_field([
    'name'             => __('Disable Keyboard Navigation', 'keystone'),
    'desc'             => __('This is not recommended as it makes the slider inoperable for users with disabilities.', 'keystone'),
    'id'               => 'cmb2_id_field_swiper_disable_keyboard' . $suffix,
    'type'	            => 'switch',
    'attributes'       => [
        'data-conditional-id'     => 'cmb2_id_field_swiper_advanced_options'.$suffix,
        'data-conditional-value'  => 'true',
    ],
    'default'          => false, //If it's checked by default
    'active_value'     => true,
    'inactive_value'   => false,
]);
