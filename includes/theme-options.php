<?php

	/**
	 * Registering Meta fields for Theme Options
   * IMPORTANT: Don't change option_key from cmb_main_options or it will break helper function
  **/
  
	$args = array(
		'id'           => 'cmb_main_options_page',
		'title'        => 'Clinic Info',
		'object_types' => array( 'options-page' ),
		'option_key'   => 'cmb_main_options',
		'tab_group'    => 'cmb_main_options',
		'tab_title'    => 'Header',
	);

	// 'tab_group' property is supported in > 2.4.0.
	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$args['display_cb'] = 'cmb_options_display_with_tabs';
	}

	$main_options = new_cmb2_box( $args );

	/**
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */

	$main_options->add_field( array(
		'name'    => 'Desktop Logo',
		'id'      => 'cmb_desktop_logo',
		'type'    => 'file'
	) );

  $main_options->add_field( array(
		'name'    => 'Mobile Logo',
		'id'      => 'cmb_mobile_logo',
		'type'    => 'file'
	) );

	/**
	 * Registers secondary options page, and set main item as parent.
	 */

	$args = array(
		'id'           => 'cmb_secondary_options_page',
		'menu_title'   => 'Footer Options', // Use menu title, & not title to hide main h2.
		'object_types' => array( 'options-page' ),
		'option_key'   => 'cmb_secondary_options',
		'parent_slug'  => 'cmb_main_options',
		'tab_group'    => 'cmb_main_options',
		'tab_title'    => 'Footer'
	);

	// 'tab_group' property is supported in > 2.4.0.
	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$args['display_cb'] = 'cmb_options_display_with_tabs';
	}

	$secondary_options = new_cmb2_box( $args );

	$secondary_options->add_field( array(
		'name'    => 'Copyright Line',
		'id'      => 'cmb_footer_copyright',
		'type'    => 'text'
	) );

  // Company Theme Options
  
  $args = array(
		'id'           => 'cmb_company_info_page',
		'title'        => 'Company Info',
		'object_types' => array( 'options-page' ),
		'option_key'   => 'cmb_tertiary_options',
    'tab_group'    => 'cmb_main_options',
    'parent_slug'  => 'cmb_main_options',
    'tab_title'    => 'Company Info',
    'icon_url'     => 'dashicons-building',
	);

	// 'tab_group' property is supported in > 2.4.0.
	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$args['display_cb'] = 'cmb_options_display_with_tabs';
	}

	$tertiary_options = new_cmb2_box( $args );

  $tertiary_options->add_field( array(
		'name' => 'Company Name',
		'id'   => 'cmb_company_name',
		'type' => 'text_medium',
  ) );

  $tertiary_options->add_field( array(
		'name' => 'Company Tagline or Description',
		'id'   => 'cmb_company_tagline',
		'type' => 'text_medium',
  ) );

  $tertiary_options->add_field( array(
		'name' => 'Company Phone #',
		'id'   => 'cmb_company_phone',
		'type' => 'text_medium',
  ) );

  $tertiary_options->add_field( array(
		'name' => 'Company Fax #',
		'id'   => 'cmb_company_fax',
		'type' => 'text_medium',
  ) );

  $tertiary_options->add_field( array(
		'name' => 'Company Email',
		'id'   => 'cmb_company_email',
		'type' => 'text_email',
  ) );
  
  $tertiary_options->add_field( array(
		'name' => 'Company Address Line 1',
		'id'   => 'cmb_company_address_1',
		'type' => 'text_medium',
  ) );
  
  $tertiary_options->add_field( array(
		'name' => 'Company Address Line 2',
		'id'   => 'cmb_company_address_2',
		'type' => 'text_medium',
  ) );
  
  $tertiary_options->add_field( array(
		'name' => 'Company Address Line 2',
		'id'   => 'cmb_company_address_2',
		'type' => 'text_medium',
  ) );

  $args = array(
		'id'           => 'cmb_social_links',
		'object_types' => array( 'options-page' ),
		'option_key'   => 'cmb_social_links',
		'parent_slug'  => 'cmb_main_options',
		'tab_group'    => 'cmb_main_options',
    'tab_title'    => 'Social Links',
    'title'        => 'Social Links'
	);

	// 'tab_group' property is supported in > 2.4.0.
	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$args['display_cb'] = 'cmb_options_display_with_tabs';
	}

  $cmb_social_links = new_cmb2_box( $args );
  
  $cmb_social_links->add_field( array(
    'name'       => __( 'Facebook Url', 'cmb2' ),
    'id'         => 'facebook',
    'type'       => 'text_url'
  ) );

  $cmb_social_links->add_field( array(
    'name'       => __( 'Twitter Url', 'cmb2' ),
    'id'         => 'twitter',
    'type'       => 'text_url'
  ) );

  $cmb_social_links->add_field( array(
    'name'       => __( 'Instagram Url', 'cmb2' ),
    'id'         => 'instagram',
    'type'       => 'text_url'
  ) );

  $cmb_social_links->add_field( array(
    'name'       => __( 'LinkedIn Url', 'cmb2' ),
    'id'         => 'linkedin',
    'type'       => 'text_url'
  ) );

  $cmb_social_links->add_field( array(
    'name'       => __( 'Pinterest Url', 'cmb2' ),
    'id'         => 'pinterest',
    'type'       => 'text_url'
  ) );

  $cmb_social_links->add_field( array(
    'name'       => __( 'Youtube Url', 'cmb2' ),
    'id'         => 'youtube',
    'type'       => 'text_url'
  ) );

  $args = array(
		'id'           => 'cmb_theme_colors',
		'object_types' => array( 'options-page' ),
		'option_key'   => 'cmb_theme_colors',
		'parent_slug'  => 'cmb_main_options',
		'tab_group'    => 'cmb_main_options',
    'tab_title'    => 'Theme Colors',
    'title'        => 'Theme Colors'
	);

	// 'tab_group' property is supported in > 2.4.0.
	if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
		$args['display_cb'] = 'cmb_options_display_with_tabs';
	}

  $cmb_theme_colors = new_cmb2_box( $args );

  $cmb_theme_colors->add_field( array(
    'name'    => 'Default Text Color',
    'id'      => 'cmb_text_color',
    'type'    => 'colorpicker',
    'default' => '#000000',
    'options' => array(
        'alpha' => true, // Make this a rgba color picker.
    )
) );

  $cmb_theme_colors->add_field( array(
    'name'    => 'Brand / Link Default Color',
    'id'      => 'cmb_brand_color',
    'type'    => 'colorpicker',
    'default' => '#0000ff',
    'options' => array(
        'alpha' => true, // Make this a rgba color picker.
    )
) );

// Registering new menu item for Avail Media

// $args = array(
//   'id'           => 'cmb_avail_options',
//   'title'        => 'Avail Media',
//   'object_types' => array( 'options-page' ),
//   'option_key'   => 'cmb_avail_options',
//   'tab_group'    => 'cmb_avail_options',
//   'tab_title'    => 'Customer Settings',
//   'icon_url'     => 'dashicons-store'
// );

// // 'tab_group' property is supported in > 2.4.0.
// if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
//   $args['display_cb'] = 'cmb_options_display_with_tabs';
// }

// $cmb_avail_options = new_cmb2_box( $args );

// $cmb_avail_options->add_field( array(
//   'name'    => 'Support API Key',
//   'id'      => 'cmb_support_key',
//   'type'    => 'textarea_small',
//   'after' => '<div style="margin-top: 5px; font-style: italic;">This key must be obtained from Avail Media staff and is required to submit support tickets. If you have an issue and prefer to use email, you may email support@avail.media and we usually respond within 24 hours.</div>'
// ) );