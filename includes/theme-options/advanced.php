<?php
/**
* Advanced Theme Options
*/
  
$cmb2_box_advanced_settings = new_cmb2_box([
  'id'            => 'cmb2_id_box_advanced_settings',
  'option_key'    => 'cmb2_key_box_advanced_settings',
  'title'         => __('Advanced Settings', 'keystone'),
  'object_types'  => ['options-page'], // Post type
  'parent_slug'  => 'cmb_main_options',
  'show_names'    => true
]);

$cmb2_box_advanced_settings->add_field([
  'name'             => __( 'Show Popup Promo Box', 'keystone' ),
  'id'               => 'cmb2_id_field_popup_promo_box',
  'desc'             => esc_html__('Visitors to your site will see a popup window with everything else grayed out. This kind of window is typically used for a newsletter signup or perhaps an important notice. A cookie is stored in the user\'s browser so that the promo wont be shown twice.', 'keystone'),
  'type'	           => 'switch',
  'default'          => false, //If it's checked by default 
  'active_value'     => true,
  'inactive_value'   => false
]);

$cmb2_box_advanced_settings->add_field([
  'name'             => __( 'Show Preloader Animation', 'keystone' ),
  'id'               => 'cmb2_id_field_preloader_toggle',
  'desc'             => esc_html__('Visitors to your site will see the animation you choose while the page downloads from the internet.', 'keystone'),
  'type'	           => 'switch',
  'default'          => true, //If it's checked by default 
  'active_value'     => true,
  'inactive_value'   => false
]);

$cmb2_box_advanced_settings->add_field([
  'name'             => __( 'Enable Mega Menu', 'keystone' ),
  'id'               => 'cmb2_id_field_enable_mega_menu',
  'desc'             => __('Adds a large flydown menu to your site\'s main menu.') . '<br><span style="color: red;">You must add the <b>mega-menu</b> class to the corresponding menu item.</span>',
  'type'	           => 'switch',
  'default'          => true, //If it's checked by default 
  'active_value'     => true,
  'inactive_value'   => false
]);

$cmb2_box_advanced_settings->add_field([
  'name'          => __('Appointment Form Style', 'keystone'),
  'id'            => 'cmb2_id_appointment_form_style',
  'type'          => 'select',
  'default'       => 'form-style-1',
  'options'       => [
      'appointment-form-style-1'              => __('Form Style 1', 'keystone'),
      'appointment-form-style-2'              => __('Form Style 2', 'keystone'),
      'appointment-form-style-3'              => __('Form Style 3', 'keystone'),
  ]
]);

$cmb2_box_advanced_settings->add_field([
  'name'             => __( 'Show Coming Soon', 'keystone' ),
  'id'               => 'cmb2_id_field_show_coming_soon',
  'desc'             => '<span style="color: red;">' . esc_html__('Users will not be able to view your website if this is ON.', 'keystone') . '</span> A countdown timer will be shown instead.',
  'type'	           => 'switch',
  'classes' => 'coming-soon-toggle',
  'default'          => false, //If it's checked by default 
  'active_value'     => true,
  'inactive_value'   => false
]);

$cmb2_box_advanced_settings->add_field([
  'name'          => __('Coming Soon Layout Style', 'keystone'),
  'id'            => 'cmb2_id_coming_soon_style',
  'type'          => 'select',
  'options'       => [
      'coming-soon-style-1'            => __('Style 1', 'keystone'),
      'coming-soon-style-2'            => __('Style 2', 'keystone'),
      'coming-soon-style-3'            => __('Style 3', 'keystone'),
      'coming-soon-style-4'            => __('Style 4', 'keystone'),
  ],
  'attributes'    => [
      'data-conditional-id'     => 'cmb2_id_field_show_coming_soon',
      'data-conditional-value'  => 'true',
  ],
]);

$cmb2_box_advanced_settings->add_field([
  'name'             => __( 'Show Under Construction', 'keystone' ),
  'id'               => 'cmb2_id_field_show_under_construction',
  'desc'             => '<span style="color: red;">' . esc_html__('Users will not be able to view your website if this is ON.', 'keystone') . '</span> An "Under Construction" page will be shown instead.',
  'type'	           => 'switch',
  'classes' => 'under-construction-toggle',
  'default'          => false, //If it's checked by default 
  'active_value'     => true,
  'inactive_value'   => false
]);

$cmb2_box_advanced_settings->add_field([
  'name'          => __('Under Construction Layout Style', 'keystone'),
  'id'            => 'cmb2_id_under_construction_style',
  'type'          => 'select',
  'options'       => [
      'under-construction-style-1'            => __('Style 1', 'keystone'),
      'under-construction-style-2'            => __('Style 2', 'keystone'),
      'under-construction-style-3'            => __('Style 3', 'keystone'),
  ],
  'attributes'    => [
      'data-conditional-id'     => 'cmb2_id_field_show_under_construction',
      'data-conditional-value'  => 'true',
  ],
]);

$cmb2_box_advanced_settings->add_field([
  'name'          => __('Global Page Title Style', 'keystone'),
  'id'            => 'cmb2_id_page_title_style',
  'type'          => 'select',
  'default'       => 'text-center',
  'options'       => [
      'page-title-style-text-left'            => __('Text Left', 'keystone'),
      'page-title-style-text-center'            => __('Text Center', 'keystone'),
      'page-title-style-text-right'            => __('Text Right', 'keystone'),
      'page-title-style-mini-version'            => __('Mini Version', 'keystone'),
      'page-title-style-big-version'            => __('Big Version', 'keystone'),
      'page-title-style-extra-big-version'            => __('Extra Big Version', 'keystone'),
      'page-title-style-bg-white'            => __('BG White', 'keystone'),
      'page-title-style-bg-image'            => __('BG Image', 'keystone'),
      'page-title-style-bg-image-parallax'            => __('BG Image Parallax', 'keystone'),
      'page-title-style-bg-video'            => __('BG Video', 'keystone'),
      'page-title-style-full-transparent'            => __('Full Transparent', 'keystone'),
  ]
]);

$cmb2_box_advanced_settings->add_field([
  'name'          => __('Side Panel Style', 'keystone'),
  'id'            => 'cmb2_id_side_push_panel_style',
  'type'          => 'select',
  'default'       => 'side-push-panel-right-overlay',
  'options'       => [
      'side-push-panel-left-overlay'              => __('Left Overlay', 'keystone'),
      'side-push-panel-left-push'              => __('Left Push', 'keystone'),
      'side-push-panel-right-overlay'              => __('Right Overlay', 'keystone'),
      'side-push-panel-right-push'              => __('Right Push', 'keystone'),
  ]
]);

$cmb2_box_advanced_settings->add_field( array(
	'name' => __( 'Module Max-Width in Pixels', 'keystone' ),
	'desc' => '<br>' . __( 'Number of pixels for the maximum width of section containers.', 'keystone' ) . '<br><span style="color:red;">' . __('EXPERTS ONLY. Changing this can break your website!') .'</span>',
  'id'   => 'cmb2_id_field_container_max_width',
  'default' => 1170,
	'type' => 'text_small',
	'attributes' => array(
		'type' => 'number',
		'pattern' => '\d*',
	),
	'sanitization_cb' => 'absint',
        'escape_cb'       => 'absint',
) );

$cmb2_box_advanced_settings->add_field([
  'name'             => __( 'CSS Stylesheet Load Method', 'keystone' ),
  'id'               => 'cmb2_id_field_stylesheet_load_method',
  'desc'             => __('This setting changes the way that stylesheet files are loaded upon page load.', 'keystone') . '<br><span style="color: red;">'. __('Changing this setting may hurt or improve page load performance. Use with caution.', 'keystone') . '</span>',
  'type'    => 'radio_inline',
  'options' => array(
      'standard-css-loading' => __( 'Standard Loading (Inside '.esc_html('<head> tag', 'keystone').')', 'keystone' ),
      'progressive-css-loading'   => __( 'Progressive Loading (Inside '.esc_html('<body> tag', 'keystone').')', 'keystone' ),
  ),
  'default' => 'progressive-css-loading'
]);

$cmb2_box_advanced_settings->add_field([
  'name'             => __( 'Javascript Script Load Method', 'keystone' ),
  'id'               => 'cmb2_id_field_script_load_method',
  'desc'             => __('This setting changes the way that javascript scripts files are loaded upon page load.', 'keystone') . '<br><span style="color: red;">'. __('Changing this setting may hurt or improve page load performance. Use with caution.', 'keystone') . '</span>',
  'type'    => 'radio_inline',
  'options' => array(
      'standard-script-loading' => __( 'Standard Loading (Inside '.esc_html('<head> and <footer> tags', 'keystone').')', 'keystone' ),
      'progressive-script-loading'   => __( 'Progressive Loading (Inside '.esc_html('<body> tag', 'keystone').')', 'keystone' ),
  ),
  'default' => 'progressive-script-loading'
]);