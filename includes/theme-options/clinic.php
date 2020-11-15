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

  $tertiary_options = new_cmb2_box($args);

  $tertiary_options->add_field([
      'name' => 'Company Name',
      'id'   => 'cmb_company_name',
      'type' => 'text_medium',
  ]);

  $tertiary_options->add_field([
      'name'    => 'Desktop Logo',
      'id'      => 'cmb_desktop_logo',
      'type'    => 'file'
  ]);

  $tertiary_options->add_field([
      'name'    => 'Mobile Logo',
      'id'      => 'cmb_mobile_logo',
      'type'    => 'file'
  ]);

  $tertiary_options->add_field([
      'name' => 'Company Tagline or Description',
      'id'   => 'cmb_company_tagline',
      'type' => 'text_medium',
  ]);

  $tertiary_options->add_field([
      'name' => 'Company Phone #',
      'id'   => 'cmb_company_phone',
      'type' => 'text_medium',
  ]);

  $tertiary_options->add_field([
      'name' => 'Company Fax #',
      'id'   => 'cmb_company_fax',
      'type' => 'text_medium',
  ]);

  $tertiary_options->add_field([
      'name' => 'Company Email',
      'id'   => 'cmb_company_email',
      'type' => 'text_email',
  ]);

  $tertiary_options->add_field([
      'name' => 'Company Address Line 1',
      'id'   => 'cmb_company_address_1',
      'type' => 'text_medium',
  ]);

  $tertiary_options->add_field([
      'name' => 'Company Address Line 2',
      'id'   => 'cmb_company_address_2',
      'type' => 'text_medium',
  ]);

  $tertiary_options->add_field([
      'name' => 'Company Address Line 2',
      'id'   => 'cmb_company_address_2',
      'type' => 'text_medium',
  ]);
