<?php
/**
* Clinic Information Theme Options
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
  'desc'       => __( 'Time ranges that your clinic is open throughout the day.', 'keystone' ),
  'id'         => 'cmb2_id_field',
  'type'       => 'title',
) );

$cmb2_options_clinic_hours = $cmb2_options_clinic_info->add_field( array(
  'id'          => 'cmb2_id_group_field_hours_entry',
  'type'        => 'group',
  // 'description' => __( 'Generates reusable form entries', 'cmb2' ),
  'options'     => array(
    'group_title'       => __( 'Line {#}', 'keystone' ), // since version 1.1.4, {#} gets replaced by row number
    'add_button'        => __( 'Add Another Line', 'keystone' ),
    'remove_button'     => __( 'Remove Line', 'keystone' ),
    'sortable'          => true,
  ),
) );

$cmb2_options_clinic_info->add_group_field( $cmb_options_clinic_hours, array(
  'name' => __('Label', 'keystone'),
  'id'   => 'label',
  'type' => 'text_small',
) );

$cmb2_options_clinic_info->add_group_field( $cmb_options_clinic_hours, array(
  'name' => 'Test Time Picker',
  'id' => 'wiki_test_texttime',
  'type' => 'text_time',
  'attributes' => array(
      'data-timepicker' => json_encode( array(
          'timeOnlyTitle' => __( 'Choose your Time', 'cmb2' ),
          'timeFormat' => 'HH:mm',
          'stepMinute' => 1, // 1 minute increments instead of the default 5
      ) ),
  ),
  'time_format' => 'h:i:s A',
) );