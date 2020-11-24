<?php

$box->add_field([
  'name'             => esc_html__( 'Enable Reveal Slider', 'keystone' ),
  'id'               => 'cmb2_id_field_toggle_reveal_slider' . $suffix,
  'desc'             =>  __('This enables the before & after Reveal Slider.', 'keystone'),
  'type'	           => 'switch',
  'default'          => true, //If it's checked by default 
  'active_value'     => true,
  'inactive_value'   => false
]);

$box->add_field( array(
	'name'    => __('Before Image', 'keystone'),
	'desc'    => __('Recommended Size: 1100px by 840px. This image serves as the "before" image if the Reveal Slider is Enabled above. If the Reveal Slider is disabled, this image becomes the static image used.', 'keystone'),
	'id'      => 'cmb2_id_field_before_image' . $suffix,
	'type'    => 'file',
	// Optional:
	'options' => array(
		'url' => false, // Hide the text input for the url
	),
	'text'    => array(
		'add_upload_file_text' => 'Add Image' // Change upload button text. Default: "Add or Upload File"
	),
	// query_args are passed to wp.media's library query.
	'query_args' => array(
		'type' => array(
			'image/gif',
			'image/jpeg',
			'image/png',
		),
	),
	'preview_size' => 'reveal-image', // Image size to use when previewing in the admin.
) );

$box->add_field( array(
	'name'    => __('After Image', 'keystone'),
	'desc'    => __('Recommended Size: 1100px by 840px. This image serves as the "after" image if the Reveal Slider is Enabled above. If the Reveal Slider is disabled, this image is not used.', 'keystone'),
	'id'      => 'cmb2_id_field_after_image' . $suffix,
	'type'    => 'file',
	// Optional:
	'options' => array(
		'url' => false, // Hide the text input for the url
	),
	'text'    => array(
		'add_upload_file_text' => 'Add Image' // Change upload button text. Default: "Add or Upload File"
	),
	// query_args are passed to wp.media's library query.
	'query_args' => array(
		'type' => array(
			'image/gif',
			'image/jpeg',
			'image/png',
		),
	),
  'preview_size' => 'reveal-image', // Image size to use when previewing in the admin.
  'attributes'    => [
    'data-conditional-id'     => 'cmb2_id_field_toggle_reveal_slider' . $suffix,
    'data-conditional-value'  => 'true',
  ],
) );

$box->add_field( array(
	'name'    => __('Section Header Text', 'keystone'),
	'desc'    => __('This is larger text that will appear in bold at the top. It should remain less than 8 words.', 'keystone'),
	'default' => 'We Care About Your Health',
	'id'      => 'cmb2_id_field_about_header_text' . $suffix,
	'type'    => 'text',
) );

$box->add_field( array(
	'name'    => __('Section Header Highlighted Text', 'keystone'),
	'desc'    => __('Enter the words that you want highlighted with the themes primary color from the header text above.', 'keystone'),
	'default' => 'About Your',
	'id'      => 'cmb2_id_field_about_highlighted_header_text' . $suffix,
	'type'    => 'text',
) );

$box->add_field( array(
	'name' => __('Section Body Text', 'keystone'),
	'desc' => __('This text should be around one paragraph in size.', 'keystone'),
	'default' => __('We sincerely believe that visiting a clinic shouldn’t be a frightening or stressful experience! We provide an equally comfortable experience of relaxation for all our young and adult customers!', 'keystone'),
	'id' => 'cmb2_id_field_about_body_text' . $suffix,
	'type' => 'textarea_small'
) );

$box->add_field( array(
	'name' => __('Award Images'),
	'desc' => __('Recommended Size: 80px by 80px. Select between 4 and 6 images.', 'keystone'),
	'id'   => 'cmb2_id_field_award_images'.$suffix,
	'type' => 'file_list',
	'preview_size' => array( 80, 80 ), // Default: array( 50, 50 )
	'query_args' => array( 'type' => 'image' ), // Only images attachment
	// Optional, override default text strings
	'text' => array(
		'add_upload_files_text' => __('Add or Upload Images', 'keystone'), // default: "Add or Upload Files"
		'remove_image_text' => __('Remove Image', 'keystone'), // default: "Remove Image"
		'file_text' => __('File:', 'keystone'), // default: "File:"
		'file_download_text' => __('Download', 'keystone'), // default: "Download"
		'remove_text' => __('Remove Image', 'keystone'), // default: "Remove"
	),
) );

$box->add_field( array(
	'name'    => __('CTA Button Text'),
	'desc'    => __('This text will appear inside the call-to-action button in the about section.', 'keystone'),
	'default' => __('Make Appointment Now', 'keystone'),
	'id'      => 'cmb2_id_field_about_button_text'.$suffix,
	'type'    => 'text_medium'
) );

$box->add_field( array(
  'name' => __( 'Button Link URL', 'keystone' ),
  'description' => __('This needs to be either an absolute or relative URL. Ex. www.example.com/page or /page', 'keystone'),
  'id'   => 'cmb2_id_field_about_button_link_url'.$suffix,
  'default' => '/schedule-an-appointment',
	'type' => 'text_url'
) );