<?php
/**
* Header Theme Options
*/

$cmb2_box_widget_bar = new_cmb2_box([
    'id'           => 'cmb2_id_box_widget_bar',
    'option_key'   => 'cmb2_key_box_widget_bar',
    'title'        => __('Widget Bar', 'keystone'),
    'object_types' => ['options-page'],
    'parent_slug'  => 'cmb_main_options',
]);

$cmb2_box_widget_bar->add_field([
    'name' => __('Blurb Widget', 'keystone'),
    'type' => 'title',
    'id'   => 'cmb2_widget_bar_title_1',
]);

$cmb2_box_widget_bar->add_field([
    'name'       => __('Blurb Title', 'keystone'),
    'id'         => 'cmb2_id_field_blurb_1_title',
    'type'       => 'text_medium',
]);

$cmb2_box_widget_bar->add_field([
    'name'       => __('Blurb Subtitle', 'keystone'),
    'id'         => 'cmb2_id_field_blurb_1_subtitle',
    'type'       => 'text_medium',
]);

$cmb2_box_widget_bar->add_field([
    'name'    => __('Blurb Body Text', 'keystone'),
    'desc'    => __('Recommended: Between 15 to 25 words.', 'keystone'),
    'id'      => 'cmb2_id_field_blurb_1_body',
    'type'    => 'textarea_small',
]);

$cmb2_box_widget_bar->add_field([
    'name' => __('Hours Widget', 'keystone'),
    'type' => 'title',
    'id'   => 'cmb2_widget_bar_title_2',
]);

$cmb2_box_widget_bar->add_field([
    'name'    => __('Widget Title', 'keystone'),
    'id'      => 'cmb2_id_field_widget_hours_title',
    'type'    => 'text_medium',
]);

$cmb2_box_widget_bar->add_field([
    'name'        => __('Hours Row', 'keystone'),
    'desc'        => __('Use [spacer] between day and hours.', 'keystone'),
    'id'          => 'cmb2_id_field_widget_hours_row',
    'type'        => 'text_medium',
    'repeatable'  => true
]);

$cmb2_box_widget_bar->add_field([
    'name' => __('Blurb Widget', 'keystone'),
    'type' => 'title',
    'id'   => 'cmb2_widget_bar_title_3',
]);

$cmb2_id_field_blurb_2_title = $cmb2_box_widget_bar->add_field([
    'name'       => __('Blurb Title', 'keystone'),
    'id'         => 'cmb2_id_field_blurb_2_title',
    'type'       => 'text_medium',
]);

$cmb2_id_field_blurb_2_subtitle = $cmb2_box_widget_bar->add_field([
    'name'       => __('Blurb Subtitle', 'keystone'),
    'id'         => 'cmb2_id_field_blurb_2_subtitle',
    'type'       => 'text_medium',
]);

$cmb2_box_widget_bar->add_field([
    'name'    => __('Blurb Body Text', 'keystone'),
    'desc'    => __('Recommended: Between 15 to 25 words.', 'keystone'),
    'id'      => 'cmb2_id_field_blurb_2_body',
    'type'    => 'textarea_small',
]);

$cmb2_box_widget_bar->add_field([
    'name' => __('Booking Widget', 'keystone'),
    'type' => 'title',
    'id'   => 'cmb2_widget_bar_title_4',
]);

$cmb2_id_field_booking_title = $cmb2_box_widget_bar->add_field([
    'name'       => __('Booking Title', 'keystone'),
    'id'         => 'cmb2_id_field_booking_title',
    'type'       => 'text_medium',
]);

$cmb2_id_field_booking_subtitle = $cmb2_box_widget_bar->add_field([
    'name'       => __('Booking Subtitle', 'keystone'),
    'id'         => 'cmb2_id_field_booking_subtitle',
    'type'       => 'text_medium',
]);

$cmb2_box_widget_bar->add_field([
    'name'       => __('Booking Phone Number', 'keystone'),
    'id'         => 'cmb2_id_field_booking_phone',
    'type'       => 'text_medium',
]);

$cmb2_box_widget_bar->add_field([
    'name'       => __('Call To Action Button Text', 'keystone'),
    'id'         => 'cmb2_id_field_booking_cta_button_text',
    'type'       => 'text_medium',
]);

$cmb2_box_widget_bar->add_field([
    'name'       => __('Call To Action Button Link URL', 'keystone'),
    'id'         => 'cmb2_id_field_booking_cta_button_link_url',
    'type'       => 'text_medium',
]);

// $cmb2Grid = new \Cmb2Grid\Grid\Cmb2Grid($cmb2_box_widget_bar);
// $row = $cmb2Grid->addRow();
// $row->addColumns(array($cmb2_id_field_booking_title, $cmb2_id_field_booking_subtitle));
// $row = $cmb2Grid->addRow();
// $row->addColumns(array($cmb2_id_field_blurb_2_title, $cmb2_id_field_blurb_2_subtitle));