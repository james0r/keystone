<?php
/**
* Home Boxes Style 1 Module Meta Fields
*/

$prefix = 'cmb2_id_field_hbs1_';

$box->add_field([
    'name' => __('Blurb Box', 'keystone'),
    'type' => 'title',
    'id'   => $prefix . 'title_backend' . $suffix,
]);

$box->add_field([
    'name'       => __('Box Title', 'keystone'),
    'id'         => $prefix . 'blurb_1_title' . $suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name'       => __('Box Subtitle', 'keystone'),
    'id'         => $prefix . 'subtitle' . $suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name'    => __('Box Body Text', 'keystone'),
    'desc'    => __('Recommended: Between 15 to 25 words.', 'keystone'),
    'id'      => $prefix . 'body_text' . $suffix,
    'type'    => 'textarea_small',
]);

$box->add_field([
    'name' => __('Hours Box', 'keystone'),
    'type' => 'title',
    'id'   => $prefix . 'hours_title_backend' . $suffix,
]);

$box->add_field([
    'name'    => __('Hours Box Title', 'keystone'),
    'id'      => $prefix . 'hours_title' . $suffix,
    'type'    => 'text_medium',
]);

$box->add_field([
    'desc' => __('Hours of operation for this widget are taken from the ', 'keystone') . '<b style="color: black;">' . __('Clinic Information', 'keystone') . '</b>' . __(' section found in the Wordpress Administration Sidebar Menu to the left.', 'keystone'),
    'type' => 'title',
    'id'   => $prefix . 'hours_desc' . $suffix,
]);

$box->add_field([
    'name'       => __('Call To Action Button Text', 'keystone'),
    'id'         => $prefix . 'hours_button_text' . $suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name'       => __('Call To Action Button Link URL', 'keystone'),
    'id'         => $prefix . 'hours_button_link_url' . $suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name' => __('Blurb Box', 'keystone'),
    'type' => 'title',
    'id'   => $prefix . 'blurb_box_2_title_backend' . $suffix,
]);

$cmb2_id_field_blurb_2_title = $box->add_field([
    'name'       => __('Box Title', 'keystone'),
    'id'         => $prefix . 'blurb_2_title' . $suffix,
    'type'       => 'text_medium',
]);

$cmb2_id_field_blurb_2_subtitle = $box->add_field([
    'name'       => __('Box Subtitle', 'keystone'),
    'id'         => $prefix . 'blurb_2_subtitle' . $suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name'    => __('Box Body Text', 'keystone'),
    'desc'    => __('Recommended: Between 15 to 25 words.', 'keystone'),
    'id'      => $prefix . 'blurb_2_body' . $suffix,
    'type'    => 'textarea_small',
]);

$box->add_field([
    'name'       => __('Call To Action Button Text', 'keystone'),
    'id'         => $prefix . 'blurb_2_button_text' . $suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name'       => __('Call To Action Button Link URL', 'keystone'),
    'id'         => $prefix . 'blurb_2_button_link_url' . $suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name' => __('Booking Box', 'keystone'),
    'type' => 'title',
    'id'   => $prefix . 'booking_box_title_backend' . $suffix,
]);

$cmb2_id_field_booking_title = $box->add_field([
    'name'       => __('Box Title', 'keystone'),
    'id'         => $prefix . 'booking_title' . $suffix,
    'type'       => 'text_medium',
]);

$cmb2_id_field_booking_subtitle = $box->add_field([
    'name'       => __('Box Subtitle', 'keystone'),
    'id'         => $prefix . 'booking_subtitle' . $suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name'       => __('Phone Number', 'keystone'),
    'id'         => $prefix . 'booking_phone' . $suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name'       => __('Call-to-action Text', 'keystone'),
    'id'         => $prefix . 'booking_cta_text' . $suffix,
    'type'       => 'text',
]);

$box->add_field([
    'name'       => __('Call To Action Button Text', 'keystone'),
    'id'         => $prefix . 'booking_button_text' . $suffix,
    'type'       => 'text_medium',
]);

$box->add_field([
    'name'       => __('Call To Action Button Link URL', 'keystone'),
    'id'         => $prefix . 'booking_button_link_url' . $suffix,
    'type'       => 'text_medium',
]);

// $cmb2Grid = new \Cmb2Grid\Grid\Cmb2Grid($box);
// $row = $cmb2Grid->addRow();
// $row->addColumns(array($cmb2_id_field_booking_title, $cmb2_id_field_booking_subtitle));
// $row = $cmb2Grid->addRow();
// $row->addColumns(array($cmb2_id_field_blurb_2_title, $cmb2_id_field_blurb_2_subtitle));
