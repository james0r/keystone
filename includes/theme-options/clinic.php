<?php
/**
* Clinic general information and business hours.
*/

$us_state_abbrevs_names = array(
  'AL'=> 'ALABAMA',
  'AK'=> 'ALASKA',
  'AS'=> 'AMERICAN SAMOA',
  'AZ'=> 'ARIZONA',
  'AR'=> 'ARKANSAS',
  'CA'=> 'CALIFORNIA',
  'CO'=> 'COLORADO',
  'CT'=> 'CONNECTICUT',
  'DE'=> 'DELAWARE',
  'DC'=> 'DISTRICT OF COLUMBIA',
  'FM'=> 'FEDERATED STATES OF MICRONESIA',
  'FL'=> 'FLORIDA',
  'GA'=> 'GEORGIA',
  'GU'=> 'GUAM GU',
  'HI'=> 'HAWAII',
  'ID'=> 'IDAHO',
  'IL'=> 'ILLINOIS',
  'IN'=> 'INDIANA',
  'IA'=> 'IOWA',
  'KS'=> 'KANSAS',
  'KY'=> 'KENTUCKY',
  'LA'=> 'LOUISIANA',
  'ME'=> 'MAINE',
  'MH'=> 'MARSHALL ISLANDS',
  'MD'=> 'MARYLAND',
  'MA'=> 'MASSACHUSETTS',
  'MI'=> 'MICHIGAN',
  'MN'=> 'MINNESOTA',
  'MS'=> 'MISSISSIPPI',
  'MO'=> 'MISSOURI',
  'MT'=> 'MONTANA',
  'NE'=> 'NEBRASKA',
  'NV'=> 'NEVADA',
  'NH'=> 'NEW HAMPSHIRE',
  'NJ'=> 'NEW JERSEY',
  'NM'=> 'NEW MEXICO',
  'NY'=> 'NEW YORK',
  'NC'=> 'NORTH CAROLINA',
  'ND'=> 'NORTH DAKOTA',
  'MP'=> 'NORTHERN MARIANA ISLANDS',
  'OH'=> 'OHIO',
  'OK'=> 'OKLAHOMA',
  'OR'=> 'OREGON',
  'PW'=> 'PALAU',
  'PA'=> 'PENNSYLVANIA',
  'PR'=> 'PUERTO RICO',
  'RI'=> 'RHODE ISLAND',
  'SC'=> 'SOUTH CAROLINA',
  'SD'=> 'SOUTH DAKOTA',
  'TN'=> 'TENNESSEE',
  'TX'=> 'TEXAS',
  'UT'=> 'UTAH',
  'VT'=> 'VERMONT',
  'VI'=> 'VIRGIN ISLANDS',
  'VA'=> 'VIRGINIA',
  'WA'=> 'WASHINGTON',
  'WV'=> 'WEST VIRGINIA',
  'WI'=> 'WISCONSIN',
  'WY'=> 'WYOMING',
  'AE'=> 'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
  'AA'=> 'ARMED FORCES AMERICA (EXCEPT CANADA)',
  'AP'=> 'ARMED FORCES PACIFIC'
);

$args = array(
  'id'              => 'cmb2_id_box_theme_options',
  'object_types'    => array('options-page'),
  'title'           => __('Clinic Information', 'keystone'),
  'option_key'      => 'cmb_main_options',
  'menu_title'      => __('Keystone Options', 'keystone'),
  'capability'      => 'unknown', // Cap required to view options-page.
);

$cmb2_options_clinic_info = new_cmb2_box($args);

$args = array(
  'id'              => 'cmb2_id_box_theme_options_1',
  'object_types'    => array('options-page'),
  'option_key'      => 'cmb_main_clinic_information',
  'menu_title'      => __('Clinic Information', 'keystone'),
  'title'						     => __('Clinic Information', 'keystone'),
  'parent_slug'     => 'cmb_main_options',
  'position'        => 2,
  'capability'      => 'manage_options', // Cap required to view options-page.
);

$cmb2_options_clinic_info = new_cmb2_box($args);

$cmb2_options_clinic_info->add_field(array(
  'name' => __('Company Name', 'keystone'),
  'id'   => 'cmb_company_name',
  'type' => 'text_medium',
));

$cmb2_options_clinic_info->add_field(array(
  'name'         => __('Wide Company Logo', 'keystone'),
  'desc'         => __('Recommended Size: 1340px by 200px. Images uploaded with a different aspect ratio may display poorly on your website.', 'keystone'),
  'id'           => 'cmb_logo_wide',
  'type'         => 'file',
  'preview_size' => 'large', // Image size to use when previewing in the admin.
  'text'         => array(
    'add_upload_file_text' => __('Upload Image', 'keystone') // Change upload button text. Default: "Add or Upload File"
  ),
  'query_args' => array(
		'type' => array(
			'image/png',
		),
	),
));

$cmb2_options_clinic_info->add_field(array(
  'name'         => __('Dark Wide Company Logo', 'keystone'),
  'desc'         => __('This image will be shown when your logo appears in a dark themed element on the page. Recommended Size: 1340px by 200px.', 'keystone'),
  'id'           => 'cmb_logo_dark_wide',
  'type'         => 'file',
  'preview_size' => 'large', // Image size to use when previewing in the admin.
  'text'         => array(
    'add_upload_file_text' => __('Upload Image', 'keystone') // Change upload button text. Default: "Add or Upload File"
  ),
  'query_args' => array(
		'type' => array(
			'image/png',
		),
	),
));

$cmb2_options_clinic_info->add_field(array(
  'name'         => __('Square Company Logo', 'keystone'),
  'desc'         => __('Recommended Size: 500px by 500px.', 'keystone'),
  'id'           => 'cmb_logo_square',
  'type'         => 'file',
  'preview_size' => 'large', // Image size to use when previewing in the admin.
  'text'         => array(
    'add_upload_file_text' => __('Upload Image', 'keystone') // Change upload button text. Default: "Add or Upload File"
  ),
  'query_args' => array(
		'type' => array(
			'image/png',
		),
	),
));

$cmb2_options_clinic_info->add_field(array(
  'name'         => __('Dark Square Company Logo', 'keystone'),
  'desc'         => __('Recommended Size: 500px by 500px.', 'keystone'),
  'id'           => 'cmb_logo_dark_square',
  'type'         => 'file',
  'preview_size' => 'large', // Image size to use when previewing in the admin.
  'text'         => array(
    'add_upload_file_text' => __('Upload Image', 'keystone') // Change upload button text. Default: "Add or Upload File"
  ),
  'query_args' => array(
		'type' => array(
			'image/png',
		),
	),
));

$cmb2_options_clinic_info->add_field(array(
  'name' => __('Company Tagline', 'keystone'),
  'id'   => 'cmb_company_tagline',
  'type' => 'text',
));

$new_patient_phone = $cmb2_options_clinic_info->add_field(array(
  'name' => __('New Patients Phone #', 'keystone'),
  'id'   => 'cmb_company_new_patients_phone',
  'type' => 'text_medium',
));

$current_patient_phone = $cmb2_options_clinic_info->add_field(array(
  'name' => __('Current Patients Phone #', 'keystone'),
  'id'   => 'cmb_company_current_patients_phone',
  'type' => 'text_medium',
));

$company_fax = $cmb2_options_clinic_info->add_field(array(
  'name' => __('Company Fax #', 'keystone'),
  'id'   => 'cmb_company_fax',
  'type' => 'text_medium',
));

$company_email = $cmb2_options_clinic_info->add_field(array(
  'name' => __('Company Email Address', 'keystone'),
  'id'   => 'cmb_company_email',
  'type' => 'text_email',
));

$address1 = $cmb2_options_clinic_info->add_field(array(
  'name' => __('Address Line 1', 'keystone'),
  'id'   => 'cmb_company_address_1',
  'type' => 'text_medium',
));

$address2 = $cmb2_options_clinic_info->add_field(array(
  'name' => __('Address Line 2 (Optional)', 'keystone'),
  'id'   => 'cmb_company_address_2',
  'type' => 'text_medium',
));

$city = $cmb2_options_clinic_info->add_field(array(
  'name' => __('City', 'keystone'),
  'id'   => 'cmb_company_city',
  'type' => 'text_medium',
));

$state = $cmb2_options_clinic_info->add_field(array(
  'name'             => __('State or Territory', 'keystone'),
  'id'               => 'cmb_company_state',
  'type'             => 'select',
  'show_option_none' => true,
  'default'          => 'PR',
  'options'          => $us_state_abbrevs_names,
));

$zip = $cmb2_options_clinic_info->add_field([
    'name'       => __('Zip Code', 'keystone'),
    'desc'       => __('Enter your 5 or 9 digit zip code. Example: 00966 or 00966-5555', 'keystone'),
    'id'         => 'cmb_company_zip',
    'type'       => 'text_small'
]);

if(!is_admin()){
	return;
}
$cmb2GridInfo = new \Cmb2Grid\Grid\Cmb2Grid($cmb2_options_clinic_info);
$rowInfo1 = $cmb2GridInfo->addRow();
$rowInfo1->addColumns(array($new_patient_phone, $current_patient_phone));
$rowInfo2 = $cmb2GridInfo->addRow();
$rowInfo2->addColumns(array($company_fax, $company_email));
$rowInfo3 = $cmb2GridInfo->addRow();
$rowInfo3->addColumns(array($address1, $address2));
$rowInfo4 = $cmb2GridInfo->addRow();
$rowInfo4->addColumns(array($city, $state));
$rowInfo5 = $cmb2GridInfo->addRow();
$rowInfo5->addColumns(array($zip));

$cmb2_options_clinic_info->add_field(array(
  'name'       => __('Business Hours', 'keystone'),
  'desc'       => __('Each line contains a label and a time range. Example: Sunday 8am - 4pm, Mon-Fri 8am - 7pm. You may create a line for each day of the week if you prefer.', 'keystone'),
  'id'         => 'cmb2_id_field',
  'type'       => 'title',
));

$cmb2_options_clinic_hours = $cmb2_options_clinic_info->add_field(array(
  'id'          => 'cmb2_id_group_field_hours_entry',
  'type'        => 'group',
  'options'     => array(
    'group_title'       => __('Line {#}', 'keystone'),
    'add_button'        => __('Add Another Line', 'keystone'),
    'remove_button'     => __('Remove Line', 'keystone'),
    'sortable'          => true,
  ),
));

$label = $cmb2_options_clinic_info->add_group_field($cmb2_options_clinic_hours, array(
  'name' => __('Label', 'keystone'),
  'id'   => 'label',
  'type' => 'text_small',
));

$start_time = $cmb2_options_clinic_info->add_group_field($cmb2_options_clinic_hours, array(
  'name'       => __('Start Time', 'keystone'),
  'id'         => 'start_time',
  'type'       => 'text_time',
  'attributes' => array(
    'data-timepicker' => json_encode(array(
      'timeOnlyTitle' => __('Start Time', 'keystone'),
      'stepMinute'    => 15 // 1 minute increments instead of the default 5
    )),
  ),
  'time_format' => 'h:i:s A',
));

$end_time = $cmb2_options_clinic_info->add_group_field($cmb2_options_clinic_hours, array(
  'name'       => __('End Time', 'keystone'),
  'id'         => 'end_time',
  'type'       => 'text_time',
  'attributes' => array(
    'data-timepicker' => json_encode(array(
      'timeOnlyTitle' => __('End Time', 'keystone'),
      'stepMinute'    => 15 // 1 minute increments instead of the default 5
    )),
  ),
  'time_format' => 'h:i:s A',
));

$cmb2Grid = new \Cmb2Grid\Grid\Cmb2Grid($cmb2_options_clinic_info);
$cmb2GroupGrid = $cmb2Grid->addCmb2GroupGrid($cmb2_options_clinic_hours);
$row = $cmb2GroupGrid->addRow();
$row->addColumns(array($label, $start_time, $end_time));
$row = $cmb2Grid->addRow();
$row->addColumns(array($cmb2GroupGrid));
