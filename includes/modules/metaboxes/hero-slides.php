<?php

/**
* Metabox fields for slides used in all sliders
*/

$box->add_field( array(
	'name' => __('Slides', 'keystone'),
	'type' => 'title',
	'id'   => 'cmb2_id_field_swiper_slides_title'.$suffix
) );

$cmb2_id_group_slides = $box->add_field([
    'id'          => 'cmb2_id_group_slides' . $suffix,
    'type'        => 'group',
    'description' => __('Add desired amount of slides to your slider.', 'keystone'),
    // 'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Slide {#}', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
        'add_button'        => __('Add Another Slide', 'keystone'),
        'remove_button'     => __('Remove Slide', 'keystone'),
        'sortable'          => true,
        // 'closed'         => true, // true to have the groups closed by default
        // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
    ],
]);

$box->add_group_field($cmb2_id_group_slides, [
    'name'    => __('Slide Background Image'),
    'desc'    => __('Recommended Size: 1920px x 1200px. Upload an image or enter an URL.', 'keystone'),
    'id'      => 'cmb2_id_field_slide_background_image',
    'type'    => 'file',
    // Optional:
    'options' => [
        'url' => true, // Hide the text input for the url
    ],
    'text'    => [
        'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
    ],
    // query_args are passed to wp.media's library query.
    'query_args' => [
        'type' => [
            'image/gif',
            'image/jpeg',
            'image/png',
        ],
    ],
    'preview_size' => 'medium', // Image size to use when previewing in the admin.
]);

$box->add_group_field($cmb2_id_group_slides, array(
	'name'    => __('Align Content:', 'keystone'),
	'id'      => 'cmb2_id_field_slide_align_content',
	'type'    => 'radio_inline',
	'options' => array(
		'left' => __( 'Left Aligned', 'keystone' ),
		'center'   => __( 'Center Aligned', 'keystone' ),
		'right'     => __( 'Right Aligned', 'keystone' ),
	),
	'default' => 'left',
) );

// Id's for group's fields only need to be unique for the group. Prefix is not needed.
$box->add_group_field($cmb2_id_group_slides, [
    'name'        => __('Slide Tagline', 'keystone'),
    'description' => __('This text is smaller and appears above the slide title.', 'keystone'),
    'id'          => 'cmb2_id_field_slide_tagline',
    'type'        => 'text',
    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
]);

$box->add_group_field($cmb2_id_group_slides, [
    'name'        => __('Slide Title'),
    'description' => __('This is the H1 of your page and should encapsulate the purpose or meaning of the page or section.', 'keystone'),
    'id'          => 'cmb2_id_field_slide_title',
    'type'        => 'text',
]);

$box->add_group_field($cmb2_id_group_slides, [
    'name' => __('Slide Paragraph Text', 'keystone'),
    'id'   => 'cmb2_id_field_slide_paragraph_text',
    'type' => 'textarea_small',
]);

$box->add_group_field($cmb2_id_group_slides, [
    'name' => __('Button Text', 'keystone'),
    'id'   => 'cmb2_id_field_slide_button_text',
    'type' => 'text',
]);

$box->add_group_field($cmb2_id_group_slides, [
    'name'        => __('Button Link URL', 'keystone'),
    'description' => __('Ex. https:://www.example.com/page or /page', 'keystone'),
    'id'          => 'cmb2_id_field_slide_button_link_url',
    'type'        => 'text',
]);
