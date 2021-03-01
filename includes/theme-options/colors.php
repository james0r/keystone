<?php

$cmb2_box_colors = new_cmb2_box(array(
  'id'            => 'cmb2_id_box_colors',
  'option_key'    => 'cmb2_key_box_colors',
  'title'         => __('Colors', 'keystone'),
  'object_types'  => array('options-page'), // Post type
  'parent_slug'   => 'cmb_main_options',
  'show_names'    => true
));

$cmb2_box_colors->add_field( array(
  'name'    => __('Keystone Example Color Field', 'keystone'),
  'id'      => 'cmb2_field_id_example_color',
  'type'    => 'colorpicker',
  'default' => '#322A58',
  // 'options' => array(
  // 	'alpha' => true, // Make this a rgba color picker.
  // ),
) );