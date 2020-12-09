<?php

$prefix = 'cmb2_id_field_services_style_1_';

$box->add_field([
    'name'    => __('Section Title', 'keystone'),
    'id'      => $prefix . 'section_title' . $suffix,
    'default' => __('SERVICES', 'keystone'),
    'type'    => 'text',
]);

$box->add_field([
    'name'    => __('Custom Image Below Title (Optional)', 'keystone'),
    'desc'    => __('This field is not required. Upload an image or enter an URL. Recommended Image Size: 132px by 40px', 'keystone'),
    'id'      => $prefix . 'custom_title_image' . $suffix,
    'type'    => 'file',
    'options' => [
        'url' => true, // Hide the text input for the url
    ],
    'text'    => [
        'add_upload_file_text' => 'Add Image' // Change upload button text. Default: "Add or Upload File"
    ],
    'query_args' => [
        'type' => [
            'image/gif',
            'image/jpeg',
            'image/png',
        ],
    ],
    'preview_size' => 'title-image', // Image size to use when previewing in the admin.
]);

$box->add_field( array(
	'name' => __('Short Section Description', 'keystone'),
	'desc' => __('This appears below the title image and should be between 2 and 5 sentences.', 'keystone'),
	'id' => $prefix.'section_desc'.$suffix,
	'type' => 'textarea_small'
) );

$services_group = $box->add_field( array(
	'id'          => $prefix. 'services_group' . $suffix,
	'type'        => 'group',
	'description' => __( 'Ideally this group will contain 3 or 6 key services your clinic provides.', 'keystone' ),
	'options'     => array(
		'group_title'       => __( 'Service {#}', 'keystone' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'        => __( 'Add Another Service', 'keystone' ),
		'remove_button'     => __( 'Remove Service', 'keystone' ),
		'sortable'          => true,
	),
) );

$box->add_group_field($services_group, [
  'name'        => __('Icon Classes', 'keystone'),
  'id'          => 'icon',
  'desc'        => __('For example:', 'keystone') . ' <b>fas fa-camera</b>' . '<br><br>' . __('To reference an icon, you need to know two bits of information. 1) its name, prefixed with fa- (if you choose a Font Awesome Icon) and 2) the style you want to use’s corresponding prefix**. For icons from the Flaticon set you only need to enter a single class. Example: .flaticon-dental-amalgam-capsule', 'keystone'),
  'type'        => 'text',
  'after_field' => Keystone()->icons->getIconReferenceTable(),
  'classes'     => 'icon-field-table'
]);

$box->add_group_field($services_group, [
	'name'    => __('Service Title', 'keystone'),
	'id'      => 'title',
	'type'    => 'text_medium'
 ] );

 $box->add_group_field($services_group, array(
	'name' => __('Service Description', 'keystone'),
	'desc' => __('Ideally between 15 to 20 words.', 'keystone'),
	'id' => 'description',
	'type' => 'textarea_small'
) );
