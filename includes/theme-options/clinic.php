<?php
/**
* CLINIC GENERAL INFORMATION AND BUSINESS HOURS.
*/

$args = [
    'id'           => 'cmb_company_info_page',
    'title'        => __('Clinic Information', 'keystone'),
    'object_types' => ['options-page'],
    'option_key'   => 'cmb_main_options',
    'menu_title'   => __('Clinic Information', 'keystone')
];

$cmb2_options_clinic_info = new_cmb2_box($args);

$cmb2_options_clinic_info->add_field( array(
  'name'       => __( 'General Information', 'keystone' ),
  'id'         => 'cmb2_id_field_clinic_information_title_1',
  'type'       => 'title',
) );

$cmb2_options_clinic_info->add_field([
    'name' => 'Company Name',
    'id'   => 'cmb_company_name',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field([
    'name'    => 'Desktop Logo',
    'id'      => 'cmb_desktop_logo',
    'type'    => 'file'
]);

$cmb2_options_clinic_info->add_field([
    'name'    => 'Mobile Logo',
    'id'      => 'cmb_mobile_logo',
    'type'    => 'file'
]);

$cmb2_options_clinic_info->add_field([
    'name' => 'Company Tagline or Description',
    'id'   => 'cmb_company_tagline',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field([
    'name' => 'Company Phone #',
    'id'   => 'cmb_company_phone',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field([
    'name' => 'Company Fax #',
    'id'   => 'cmb_company_fax',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field([
    'name' => 'Company Email',
    'id'   => 'cmb_company_email',
    'type' => 'text_email',
]);

$cmb2_options_clinic_info->add_field([
    'name' => 'Company Address Line 1',
    'id'   => 'cmb_company_address_1',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field([
    'name' => 'Company Address Line 2',
    'id'   => 'cmb_company_address_2',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field([
    'name' => 'Company Address Line 2',
    'id'   => 'cmb_company_address_2',
    'type' => 'text_medium',
]);

$cmb2_options_clinic_info->add_field( array(
  'name'       => __( 'Business Hours', 'keystone' ),
  'desc'       => __( 'Each line contains a label and a time range. Example: Sunday 8am - 4pm, Mon-Fri 8am - 7pm. You may create a line for each day of the week if you prefer.', 'keystone' ),
  'id'         => 'cmb2_id_field',
  'type'       => 'title',
) );

$cmb2_options_clinic_hours = $cmb2_options_clinic_info->add_field( array(
  'id'          => 'cmb2_id_group_field_hours_entry',
  'type'        => 'group',
  'options'     => array(
    'group_title'       => __( 'Line {#}', 'keystone' ),
    'add_button'        => __( 'Add Another Line', 'keystone' ),
    'remove_button'     => __( 'Remove Line', 'keystone' ),
    'sortable'          => true,
  ),
) );

$label = $cmb2_options_clinic_info->add_group_field( $cmb2_options_clinic_hours, array(
  'name' => __('Label', 'keystone'),
  'id'   => 'label',
  'type' => 'text_small',
) );

$start_time = $cmb2_options_clinic_info->add_group_field( $cmb2_options_clinic_hours, array(
  'name' => __('Start Time', 'keystone'),
  'id' => 'start_time',
  'type' => 'text_time',
  'attributes' => array(
      'data-timepicker' => json_encode( array(
          'timeOnlyTitle' => __( 'Start Time', 'keystone' ),
          'stepMinute' => 15 // 1 minute increments instead of the default 5
      ) ),
  ),
  'time_format' => 'h:i:s A',
) );

$end_time = $cmb2_options_clinic_info->add_group_field( $cmb2_options_clinic_hours, array(
  'name' => __('End Time', 'keystone'),
  'id' => 'end_time',
  'type' => 'text_time',
  'attributes' => array(
      'data-timepicker' => json_encode( array(
          'timeOnlyTitle' => __( 'End Time', 'keystone' ),
          'stepMinute' => 15 // 1 minute increments instead of the default 5
      ) ),
  ),
  'time_format' => 'h:i:s A',
) );

$cmb2Grid      = new \Cmb2Grid\Grid\Cmb2Grid($cmb2_options_clinic_info);
$cmb2GroupGrid = $cmb2Grid->addCmb2GroupGrid($cmb2_options_clinic_hours);
$row           = $cmb2GroupGrid->addRow();
$row->addColumns(array($label, $start_time, $end_time));
$row = $cmb2Grid->addRow();
$row->addColumns(array($cmb2GroupGrid));
