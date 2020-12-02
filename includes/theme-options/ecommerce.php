<?php
/**
* E-commerce Theme Options
*/

$prefix = 'cmb2_id_options_ecommerce_';

$cmb2_box_ecommerce_options = new_cmb2_box([
  'id'           => $prefix . 'box',
  'option_key'   => 'cmb2_key_box_ecommerce',
  'title'        => __('E-commerce', 'keystone'),
  'object_types' => ['options-page'],
  'parent_slug'  => 'cmb_main_options',
]);

$cmb2_box_ecommerce_options->add_field( array(
  'name'    => __('Payment Gateway', 'keystone'),
  'desc'    => __('Choose from one of the availble payment gateways or select "None" to disable e-commerce functionality completely.', 'keystone'),
	'id'      => $prefix . 'payment_gateway',
  'type'    => 'radio_inline',
	'options' => array(
		'none' => __( 'None', 'keystone' ),
		'woocommerce'   => __( 'Woocommerce', 'keystone' ),
    'stripe'     => __( 'Stripe', 'keystone' ),
    'paypal'    => __('Paypal', 'keystone')
	),
	'default' => 'none',
) );