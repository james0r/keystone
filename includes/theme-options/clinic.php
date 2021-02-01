<?php
/**
* Clinic general information and business hours.
*/

$args = [
    'id'              => 'cmb2_id_box_theme_options',
    'object_types'    => ['options-page'],
    'title'           => __('Clinic Information', 'keystone'),
    'option_key'      => 'cmb_main_options',
    'menu_title'      => __('Keystone Options', 'keystone'),
    'capability'      => 'unknown', // Cap required to view options-page.
];

$cmb2_options_clinic_info = new_cmb2_box($args);

$args = [
  'id'              => 'cmb2_id_box_theme_options_1',
  'object_types'    => ['options-page'],
  'option_key'      => 'cmb_main_clinic_information',
  'menu_title'      => __('Clinic Information', 'keystone'),
  'title'						=> __('Clinic Information', 'keystone'),
  'parent_slug'     => 'cmb_main_options',
  'position'        => 2,
  'capability'      => 'manage_options', // Cap required to view options-page.
];

$cmb2_options_clinic_info = new_cmb2_box($args);

$cmb2_options_clinic_info->add_field([
    'name' => __('Company Name', 'keystone'),
    'id'   => 'cmb_company_name',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field([
    'name'    => __('Desktop Logo', 'keystone'),
    'id'      => 'cmb_desktop_logo',
    'type'    => 'file'
]);

$cmb2_options_clinic_info->add_field([
    'name'    => __('Mobile Logo', 'keystone'),
    'id'      => 'cmb_mobile_logo',
    'type'    => 'file'
]);

$cmb2_options_clinic_info->add_field([
    'name' => __('Company Tagline or Description', 'keystone'),
    'id'   => 'cmb_company_tagline',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field([
    'name' => __('New Patients Phone #', 'keystone'),
    'id'   => 'cmb_company_new_patients_phone',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field([
    'name' => __('Current Patients Phone #', 'keystone'),
    'id'   => 'cmb_company_current_patients_phone',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field([
    'name' => __('Company Fax #', 'keystone'),
    'id'   => 'cmb_company_fax',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field([
    'name' => __('Company Email Address', 'keystone'),
    'id'   => 'cmb_company_email',
    'type' => 'text_email',
]);

$cmb2_options_clinic_info->add_field([
    'name' => __('Company Address Line 1', 'keystone'),
    'id'   => 'cmb_company_address_1',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field([
    'name' => __('Company Address Line 2', 'keystone'),
    'id'   => 'cmb_company_address_2',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field([
    'name' => __('Company Address Line 2', 'keystone'),
    'id'   => 'cmb_company_address_2',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field([
    'name'       => __('Business Hours', 'keystone'),
    'desc'       => __('Each line contains a label and a time range. Example: Sunday 8am - 4pm, Mon-Fri 8am - 7pm. You may create a line for each day of the week if you prefer.', 'keystone'),
    'id'         => 'cmb2_id_field',
    'type'       => 'title',
]);

$cmb2_options_clinic_hours = $cmb2_options_clinic_info->add_field([
    'id'          => 'cmb2_id_group_field_hours_entry',
    'type'        => 'group',
    'options'     => [
        'group_title'       => __('Line {#}', 'keystone'),
        'add_button'        => __('Add Another Line', 'keystone'),
        'remove_button'     => __('Remove Line', 'keystone'),
        'sortable'          => true,
    ],
]);

$label = $cmb2_options_clinic_info->add_group_field($cmb2_options_clinic_hours, [
    'name' => __('Label', 'keystone'),
    'id'   => 'label',
    'type' => 'text_small',
]);

$start_time = $cmb2_options_clinic_info->add_group_field($cmb2_options_clinic_hours, [
    'name'       => __('Start Time', 'keystone'),
    'id'         => 'start_time',
    'type'       => 'text_time',
    'attributes' => [
        'data-timepicker' => json_encode([
            'timeOnlyTitle' => __('Start Time', 'keystone'),
            'stepMinute'    => 15 // 1 minute increments instead of the default 5
        ]),
    ],
    'time_format' => 'h:i:s A',
]);

$end_time = $cmb2_options_clinic_info->add_group_field($cmb2_options_clinic_hours, [
    'name'       => __('End Time', 'keystone'),
    'id'         => 'end_time',
    'type'       => 'text_time',
    'attributes' => [
        'data-timepicker' => json_encode([
            'timeOnlyTitle' => __('End Time', 'keystone'),
            'stepMinute'    => 15 // 1 minute increments instead of the default 5
        ]),
    ],
    'time_format' => 'h:i:s A',
]);

$cmb2Grid = new \Cmb2Grid\Grid\Cmb2Grid($cmb2_options_clinic_info);
$cmb2GroupGrid = $cmb2Grid->addCmb2GroupGrid($cmb2_options_clinic_hours);
$row = $cmb2GroupGrid->addRow();
$row->addColumns([$label, $start_time, $end_time]);
$row = $cmb2Grid->addRow();
$row->addColumns([$cmb2GroupGrid]);
