<?php
/**
* HOME BOXES STYLE 3 MODULE META FIELDS
* DESCRIPTION:
* THIS MODULE IS ORANGE IN THE DEMO WITH
* AN ICON, A TITLE, AND DESCRIPTION FOR EACH BOX
*/

$prefix = 'cmb2_id_field_cta_divider_style_1_';

$box->add_field([
    'name' => __('Box 1', 'keystone'),
    'type' => 'title',
    'id'   => $prefix.'title_1'.$suffix,
]);

$box->add_field([
  'name'        => __('Icon Classes', 'keystone'),
  'id'   => $prefix . 'box_1_icon'.$suffix,
  'desc'        => __('For example:', 'keystone') . ' <b>fas fa-camera</b>' . '<br><br>' . __('To reference an icon, you need to know two bits of information. 1) its name, prefixed with fa- (if you choose a Font Awesome Icon) and 2) the style you want to use’s corresponding prefix**. For icons from the Flaticon set you only need to enter a single class. Example: .flaticon-dental-amalgam-capsule', 'keystone'),
  'type'        => 'text',
  'after_field' => Keystone()->icons->getIconReferenceTable(),
  'classes'     => 'icon-field-table'
]);

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

$box->add_field([
  'name'        => __('Icon Classes', 'keystone'),
  'id'   => $prefix . 'box_2_icon'.$suffix,
  'desc'        => __('For example:', 'keystone') . ' <b>fas fa-camera</b>' . '<br><br>' . __('To reference an icon, you need to know two bits of information. 1) its name, prefixed with fa- (if you choose a Font Awesome Icon) and 2) the style you want to use’s corresponding prefix**. For icons from the Flaticon set you only need to enter a single class. Example: .flaticon-dental-amalgam-capsule', 'keystone'),
  'type'        => 'text',
  'after_field' => Keystone()->icons->getIconReferenceTable(),
  'classes'     => 'icon-field-table'
]);

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

$box->add_field([
  'name'        => __('Icon Classes', 'keystone'),
  'id'   => $prefix . 'box_3_icon'.$suffix,
  'desc'        => __('For example:', 'keystone') . ' <b>fas fa-camera</b>' . '<br><br>' . __('To reference an icon, you need to know two bits of information. 1) its name, prefixed with fa- (if you choose a Font Awesome Icon) and 2) the style you want to use’s corresponding prefix**. For icons from the Flaticon set you only need to enter a single class. Example: .flaticon-dental-amalgam-capsule', 'keystone'),
  'type'        => 'text',
  'after_field' => Keystone()->icons->getIconReferenceTable(),
  'classes'     => 'icon-field-table'
]);

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

// $cmb2Grid = new \Cmb2Grid\Grid\Cmb2Grid($box);
// $row = $cmb2Grid->addRow();
// $row->addColumns(array($cmb2_id_field_booking_title, $cmb2_id_field_booking_subtitle));
// $row = $cmb2Grid->addRow();
// $row->addColumns(array($cmb2_id_field_blurb_2_title, $cmb2_id_field_blurb_2_subtitle));