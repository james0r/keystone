<?php
/**
* CTA DIVIDER APPOINTMENT MODULE META FIELDS
*/

$box->add_field( array(
  'name'       => __( 'Call-To-Action Text', 'keystone' ),
  'desc'       => __( 'This text is for a smaller heading left aligned then stacking on top', 'cmb2' ),
  'id'         => 'cmb2_id_field_cta_appointment_text'.$suffix,
  'type'       => 'text',
) );

$box->add_field( array(
  'name'       => __( 'Call-To-Action Button Text', 'keystone' ),
  'desc'       => __( 'This text shows up inside the button.', 'keystone' ),
  'id'         => 'cmb2_id_field_cta_appointment_button_text'.$suffix,
  'type'       => 'text_small',
) );

$box->add_field( array(
  'name'       => __( 'Call-To-Action Button Link URL', 'keystone' ),
  'desc'       => __( 'This is the destination of where you want your users to go after pressing the button.', 'keystone' ),
  'id'         => 'cmb2_id_field_cta_appointment_button_link_url'.$suffix,
  'type'       => 'text_url',
  'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
  'attributes' => array(
    'placeholder' => 'https://www.example.com'
  )
) );