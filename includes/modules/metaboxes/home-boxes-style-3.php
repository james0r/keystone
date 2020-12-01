<?php
/**
* HOME BOXES STYLE 3 MODULE META FIELDS
* DESCRIPTION:
* THIS MODULE IS ORANGE IN THE DEMO WITH
* AN ICON, A TITLE, AND DESCRIPTION FOR EACH BOX
*/

$prefix = 'cmb2_id_field_hbs3_';

$box->add_field([
    'name' => __('Box 1', 'keystone'),
    'type' => 'title',
    'id'   => $prefix.'title_1'.$suffix,
]);

$box->add_field( array(
  'name' => __( 'Select Icon', 'keystone' ),
  'id'   => $prefix . 'box_1_icon'.$suffix,
  'desc' => __('Select icon (these are from the Font Awesome icon set version 5 Brands and Solids.', 'keystone'),
  'type' => 'faiconselect',
  'options_cb' => 'returnRayFapsa',
  'attributes' => array(
    'faver' => 5
  )
) );

$box->add_field([
    'name'       => __('Box Title', 'keystone'),
    'id'         => $prefix.'box_1_title'.$suffix,
    'type'       => 'text_medium'
]);

$box->add_field([
    'name'       => __('Box Description', 'keystone'),
    'id'         => $prefix.'box_1_description'.$suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
  'name' => __('Box 2', 'keystone'),
  'type' => 'title',
  'id'   => $prefix.'title_2'.$suffix,
]);

$box->add_field( array(
  'name' => __( 'Select Icon', 'keystone' ),
  'id'   => $prefix . 'box_2_icon',
  'desc' => __('Select icon (these are from the Font Awesome icon set version 5 Brands and Solids.', 'keystone'),
  'type' => 'faiconselect',
  'options_cb' => 'returnRayFapsa',
  'attributes' => array(
    'faver' => 5
  )
) );

$box->add_field([
    'name'       => __('Box Title', 'keystone'),
    'id'         => $prefix.'box_2_title'.$suffix,
    'type'       => 'text_medium'
]);

$box->add_field([
    'name'       => __('Box Description', 'keystone'),
    'id'         => $prefix.'box_2_description'.$suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
  'name' => __('Box 3', 'keystone'),
  'type' => 'title',
  'id'   => $prefix.'title_3'.$suffix,
]);

$box->add_field( array(
  'name' => __( 'Select Icon', 'keystone' ),
  'id'   => $prefix . 'box_3_icon',
  'desc' => __('Select icon (these are from the Font Awesome icon set version 5 Brands and Solids.', 'keystone'),
  'type' => 'faiconselect',
  'options_cb' => 'returnRayFapsa',
  'attributes' => array(
    'faver' => 5
  )
) );

$box->add_field([
    'name'       => __('Box Title', 'keystone'),
    'id'         => $prefix.'box_3_title'.$suffix,
    'type'       => 'text_medium'
]);

$box->add_field([
    'name'       => __('Box Description', 'keystone'),
    'id'         => $prefix.'box_3_description'.$suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
  'name' => __('Box 4', 'keystone'),
  'type' => 'title',
  'id'   => $prefix.'title_4'.$suffix,
]);

$box->add_field( array(
  'name' => __( 'Select Icon', 'keystone' ),
  'id'   => $prefix . 'box_4_icon',
  'desc' => __('Select icon (these are from the Font Awesome icon set version 5 Brands and Solids.', 'keystone'),
  'type' => 'faiconselect',
  'options_cb' => 'returnRayFapsa',
  'attributes' => array(
    'faver' => 5
  )) );

$box->add_field([
    'name'       => __('Box Title', 'keystone'),
    'id'         => $prefix.'box_4_title'.$suffix,
    'type'       => 'text_medium'
]);

$box->add_field([
    'name'       => __('Box Description', 'keystone'),
    'id'         => $prefix.'box_4_description'.$suffix,
    'type'       => 'text_medium',
]);

// $cmb2Grid = new \Cmb2Grid\Grid\Cmb2Grid($box);
// $row = $cmb2Grid->addRow();
// $row->addColumns(array($cmb2_id_field_booking_title, $cmb2_id_field_booking_subtitle));
// $row = $cmb2Grid->addRow();
// $row->addColumns(array($cmb2_id_field_blurb_2_title, $cmb2_id_field_blurb_2_subtitle));