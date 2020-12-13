<?php

$prefix = 'cmb2_id_field_certificates_';

$box->add_field( array(
	'name' => __('Certificate Images', 'keystone'),
	'desc' => __('Add as many images as you would like. Recommended image width is between 600px and 1000px. 4 images will be shown on the screen at a time for visitors on desktop computers, 1 for mobile phones.', 'keystone'),
	'id'   => $prefix.'file_list'.$suffix,
	'type' => 'file_list',
	'preview_size' => array( 200, 154 ), // Default: array( 50, 50 )
	'query_args' => array( 'type' => 'image' ), // Only images attachment
	// Optional, override default text strings
	'text' => array(
		'add_upload_files_text' => __('Add Image', 'keystone'), // default: "Add or Upload Files"
		'remove_image_text' => __('Remove Image', 'keystone'), // default: "Remove Image"
		'file_text' => __('File:', 'keystone'), // default: "File:"
		'file_download_text' => __('Download Image', 'keystone'), // default: "Download"
		'remove_text' => __('Remove Image', 'keystone'), // default: "Remove"
	),
) );