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
    'name'             => __('Autoplay', 'keystone'),
    'desc'             => __('The slides start changing on their own.', 'keystone'),
    'id'               => 'cmb2_id_field_swiper_autoplay' . $suffix,
    'type'	            => 'switch',
    'default'          => true, //If it's checked by default
    'active_value'     => true,
    'inactive_value'   => false,
    'sanitization_cb' => array(keystone()->cmb2, 'sanitize_checkbox')
]);

$box->add_field([
    'name'       => __('Slider Speed', 'keystone'),
    'desc'       => __('This only applies if slider is using autoplay mode.', 'keystone'),
    'id'         => 'cmb2_id_field_swiper_speed' . $suffix,
    'type'       => 'text_small',
    'default'    => 400,
    'attributes' => [
        'type'    => 'number',
        'pattern' => '\d*',
    ],
    'sanitization_cb' => 'absint',
    'escape_cb'       => 'absint',
]);

$box->add_field([
    'name'             => __('Loop Mode / Infinite Loop', 'keystone'),
    'desc'             => __('When the end of your slides is reached, the slider continues from the beginning.', 'keystone'),
    'id'               => 'cmb2_id_field_swiper_loop_mode' . $suffix,
    'type'	            => 'switch',
    'default'          => true, //If it's checked by default
    'active_value'     => true,
    'inactive_value'   => false,
    'sanitization_cb' => array(keystone()->cmb2, 'sanitize_checkbox')
]);

$box->add_field([
    'name'             => __('Show Arrows', 'keystone'),
    'desc'             => __('Show navigation arrows on the left and right.', 'keystone'),
    'id'               => 'cmb2_id_field_swiper_show_arrows' . $suffix,
    'type'	            => 'switch',
    'default'          => true, //If it's checked by default
    'active_value'     => true,
    'inactive_value'   => false,
    'sanitization_cb' => array(keystone()->cmb2, 'sanitize_checkbox')
]);

$box->add_field([
    'name'             => __('Fade Effect', 'keystone'),
    'id'               => 'cmb2_id_field_swiper_fade_effect' . $suffix,
    'type'	            => 'switch',
    'default'          => false, //If it's checked by default
    'active_value'     => true,
    'inactive_value'   => false,
    'sanitization_cb' => array(keystone()->cmb2, 'sanitize_checkbox')
]);

$box->add_field([
    'name'             => __('Center Slides', 'keystone'),
    'desc'             => __('This only applies if more than one slide is in view at a time.', 'keystone'),
    'id'               => 'cmb2_id_field_swiper_center_slides' . $suffix,
    'type'	            => 'switch',
    'default'          => true, //If it's checked by default
    'active_value'     => true,
    'inactive_value'   => false,
    'sanitization_cb' => array(keystone()->cmb2, 'sanitize_checkbox')
]);

$box->add_field([
    'name'             => __('Show Pagination', 'keystone'),
    'desc'             => __('Indicate to the user which slide they\'re on.', 'keystone'),
    'id'               => 'cmb2_id_field_swiper_show_pagination' . $suffix,
    'type'	            => 'switch',
    'default'          => true, //If it's checked by default
    'active_value'     => true,
    'inactive_value'   => false,
    'sanitization_cb' => array(keystone()->cmb2, 'sanitize_checkbox')
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
    ]
]);

$box->add_field([
    'name'             => __('Slider Direction', 'keystone'),
    'id'               => 'cmb2_id_field_swiper_direction' . $suffix,
    'type'             => 'radio',
    'default'          => 'horizontal',
    'options'          => [
        'horizontal' => __('Horizontal', 'keystone'),
        'vertical'   => __('Vertical', 'keystone'),
    ]
]);

$box->add_field([
    'name'          => __('Space Between Slides', 'keystone'),
    'desc'          => __('In Pixels. Adds a separator between slides.', 'keystone'),
    'default'       => '0',
    'id'            => 'cmb2_id_field_swiper_space_between_slides' . $suffix,
    'type'          => 'text_small'
]);

$box->add_field([
    'name'          => __('# of Slides Per View', 'keystone'),
    'desc'          => __('The number of slides visible at a time. (Use "Auto" fits as many slides in as possible based on their width. This setting is usually not recommended.', 'keystone'),
    'default'       => '1',
    'id'            => 'cmb2_id_field_swiper_slides_per_view' . $suffix,
    'type'          => 'text_small'
]);

$box->add_field([
    'name'             => __('Free Mode / No Fixed Positions', 'keystone'),
    'desc'             => __('Users can scroll through your slides without the slides snapping to the edges of the screen.', 'keystone'),
    'id'               => 'cmb2_id_field_swiper_freemode' . $suffix,
    'type'	            => 'switch',
    'default'          => false, //If it's checked by default
    'active_value'     => true,
    'inactive_value'   => false,
    'sanitization_cb' => array(keystone()->cmb2, 'sanitize_checkbox')
]);

$box->add_field([
    'name'             => __('Disable Keyboard Navigation', 'keystone'),
    'desc'             => __('This is not recommended as it makes the slider inoperable for users with disabilities.', 'keystone'),
    'id'               => 'cmb2_id_field_swiper_disable_keyboard' . $suffix,
    'type'	            => 'switch',
    'default'          => false, //If it's checked by default
    'active_value'     => true,
    'inactive_value'   => false,
    'sanitization_cb' => array(keystone()->cmb2, 'sanitize_checkbox')
]);

$box->add_field([
    'name'             => __('Lazy Load Images', 'keystone'),
    'desc'             => __('The user will download the image only once they have arrived at the slide containing the image.', 'keystone'),
    'id'               => 'cmb2_id_field_swiper_lazy' . $suffix,
    'type'	            => 'switch',
    'default'          => false, //If it's checked by default
    'active_value'     => true,
    'inactive_value'   => false,
    'sanitization_cb' => array(keystone()->cmb2, 'sanitize_checkbox')
]);

$box->add_field([
    'name'             => __('Auto Height', 'keystone'),
    'desc'             => __('The slider will vertically flex to match the height of the slide in view.', 'keystone'),
    'id'               => 'cmb2_id_field_swiper_auto_height' . $suffix,
    'type'	            => 'switch',
    'default'          => false, //If it's checked by default
    'active_value'     => true,
    'inactive_value'   => false,
    'sanitization_cb' => array(keystone()->cmb2, 'sanitize_checkbox')
]);
