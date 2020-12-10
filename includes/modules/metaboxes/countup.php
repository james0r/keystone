<?php
/**
* Countup Module Meta Fields
*/

$prefix = 'cmb2_id_field_countup_';

$box->add_field([
  'name'    => __('Custom Background Color', 'keystone'),
  'id'      => $prefix.'custom_background_color'.$suffix,
  'type'    => 'colorpicker',
]);

$countup_group = $box->add_field( array(
	'id'          => $prefix.'group',
	'type'        => 'group',
	'description' => __( 'Create either 3 or 4 count up items.', 'keystone' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
	'options'     => array(
		'group_title'       => __( 'Item {#}', 'keystone' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'        => __( 'Add Another Item', 'keystone' ),
		'remove_button'     => __( 'Remove Item', 'keystone' ),
		'sortable'          => true,
		// 'closed'         => true, // true to have the groups closed by default
		// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
	),
) );

$box->add_group_field($countup_group, [
  'name'        => __('Icon Classes', 'keystone'),
  'id'          => 'icon',
  'desc'        => __('For example:', 'keystone') . ' <b>fas fa-camera</b>' . '<br><br>' . __('To reference an icon, you need to know two bits of information. 1) its name, prefixed with fa- (if you choose a Font Awesome Icon) and 2) the style you want to use’s corresponding prefix**. For icons from the Flaticon set you only need to enter a single class. Example: .flaticon-dental-amalgam-capsule', 'keystone'),
  'type'        => 'text',
  'after_field' => Keystone()->icons->getIconReferenceTable(),
  'classes'     => 'icon-field-table'
]);

$box->add_group_field($countup_group, array(
	'name' => __( 'Number To Count Up To', 'keystone' ),
  'id'   => 'number',
  'default' => 1000,
	'type' => 'text_small',
	'attributes' => array(
		'type' => 'number',
		'pattern' => '\d*',
	),
	'sanitization_cb' => 'absint',
        'escape_cb'       => 'absint',
) );

$box->add_group_field( $countup_group, array(
  'name' => __('Label', 'keystone'),
  'desc'  => __('This text appears below the count up number.', 'keystone'),
	'id'   => 'label',
	'type' => 'text',
	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
) );

