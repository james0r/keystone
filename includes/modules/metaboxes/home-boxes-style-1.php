<?php
/**
* Home Boxes Style 1 Module Meta Fields
*/

$box->add_field([
    'name' => __('Blurb Box', 'keystone'),
    'type' => 'title',
    'id'   => 'cmb2_widget_bar_title_1'.$suffix,
]);

$box->add_field([
    'name'       => __('Box Title', 'keystone'),
    'id'         => 'cmb2_id_field_blurb_1_title'.$suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name'       => __('Box Subtitle', 'keystone'),
    'id'         => 'cmb2_id_field_blurb_1_subtitle'.$suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name'    => __('Box Body Text', 'keystone'),
    'desc'    => __('Recommended: Between 15 to 25 words.', 'keystone'),
    'id'      => 'cmb2_id_field_blurb_1_body'.$suffix,
    'type'    => 'textarea_small',
]);

$box->add_field([
  'name' => __('Hours Box', 'keystone'),
  'type' => 'title',
  'id'   => 'cmb2_widget_bar_title_1'.$suffix,
]);

$box->add_field([
    'name' => __('Hours Box', 'keystone'),
    'desc' => __('Hours of operation for this widget are taken from the ', 'keystone') . '<b style="color: black;">' . __('Clinic Information', 'keystone') . '</b>' . __(' section found in the Wordpress Administration Sidebar Menu to the left.', 'keystone'),
    'type' => 'title',
    'id'   => 'cmb2_widget_bar_title_2'.$suffix,
]);

$box->add_field([
    'name'    => __('Widget Title', 'keystone'),
    'id'      => 'cmb2_id_field_widget_hours_title'.$suffix,
    'type'    => 'text_medium',
]);

$box->add_field([
    'name' => __('Blurb Box', 'keystone'),
    'type' => 'title',
    'id'   => 'cmb2_widget_bar_title_3'.$suffix,
]);

$cmb2_id_field_blurb_2_title = $box->add_field([
    'name'       => __('Box Title', 'keystone'),
    'id'         => 'cmb2_id_field_blurb_2_title'.$suffix,
    'type'       => 'text_medium',
]);

$cmb2_id_field_blurb_2_subtitle = $box->add_field([
    'name'       => __('Box Subtitle', 'keystone'),
    'id'         => 'cmb2_id_field_blurb_2_subtitle'.$suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name'    => __('Box Body Text', 'keystone'),
    'desc'    => __('Recommended: Between 15 to 25 words.', 'keystone'),
    'id'      => 'cmb2_id_field_blurb_2_body'.$suffix,
    'type'    => 'textarea_small',
]);

$box->add_field([
    'name' => __('Booking Box', 'keystone'),
    'type' => 'title',
    'id'   => 'cmb2_widget_bar_title_4'.$suffix,
]);

$cmb2_id_field_booking_title = $box->add_field([
    'name'       => __('Box Title', 'keystone'),
    'id'         => 'cmb2_id_field_booking_title'.$suffix,
    'type'       => 'text_medium',
]);

$cmb2_id_field_booking_subtitle = $box->add_field([
    'name'       => __('Box Subtitle', 'keystone'),
    'id'         => 'cmb2_id_field_booking_subtitle'.$suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name'       => __('Phone Number', 'keystone'),
    'id'         => 'cmb2_id_field_booking_phone'.$suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name'       => __('Call To Action Button Text', 'keystone'),
    'id'         => 'cmb2_id_field_booking_cta_button_text'.$suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name'       => __('Call To Action Button Link URL', 'keystone'),
    'id'         => 'cmb2_id_field_booking_cta_button_link_url'.$suffix,
    'type'       => 'text_medium',
]);

// $cmb2Grid = new \Cmb2Grid\Grid\Cmb2Grid($box);
// $row = $cmb2Grid->addRow();
// $row->addColumns(array($cmb2_id_field_booking_title, $cmb2_id_field_booking_subtitle));
// $row = $cmb2Grid->addRow();
// $row->addColumns(array($cmb2_id_field_blurb_2_title, $cmb2_id_field_blurb_2_subtitle));