<?php

    /**
     * Registering Meta fields for Theme Options
   * IMPORTANT: Don't change option_key from cmb_main_options or it will break helper function
  **/

    /**
     * Options fields ids only need
     * to be unique within this box.
     * Prefix is not needed.
     */

    /**
     * Registers secondary options page, and set main item as parent.
     */

  // Company Theme Options

  $args = [
      'id'           => 'cmb_company_info_page',
      'title'        => 'Clinic Info',
      'object_types' => ['options-page'],
      'option_key'   => 'cmb_main_options',
      'icon_url'     => 'dashicons-building',
  ];

  $tertiary_options = new_cmb2_box($args);

  $tertiary_options->add_field([
      'name' => 'Company Name',
      'id'   => 'cmb_company_name',
      'type' => 'text_medium',
  ]);

  $tertiary_options->add_field([
      'name'    => 'Desktop Logo',
      'id'      => 'cmb_desktop_logo',
      'type'    => 'file'
  ]);

  $tertiary_options->add_field([
      'name'    => 'Mobile Logo',
      'id'      => 'cmb_mobile_logo',
      'type'    => 'file'
  ]);

  $tertiary_options->add_field([
      'name' => 'Company Tagline or Description',
      'id'   => 'cmb_company_tagline',
      'type' => 'text_medium',
  ]);

  $tertiary_options->add_field([
      'name' => 'Company Phone #',
      'id'   => 'cmb_company_phone',
      'type' => 'text_medium',
  ]);

  $tertiary_options->add_field([
      'name' => 'Company Fax #',
      'id'   => 'cmb_company_fax',
      'type' => 'text_medium',
  ]);

  $tertiary_options->add_field([
      'name' => 'Company Email',
      'id'   => 'cmb_company_email',
      'type' => 'text_email',
  ]);

  $tertiary_options->add_field([
      'name' => 'Company Address Line 1',
      'id'   => 'cmb_company_address_1',
      'type' => 'text_medium',
  ]);

  $tertiary_options->add_field([
      'name' => 'Company Address Line 2',
      'id'   => 'cmb_company_address_2',
      'type' => 'text_medium',
  ]);

  $tertiary_options->add_field([
      'name' => 'Company Address Line 2',
      'id'   => 'cmb_company_address_2',
      'type' => 'text_medium',
  ]);

  $args = [
      'id'           => 'cmb_secondary_options_page',
      'title'   => 'Footer Options',
      'object_types' => ['options-page'],
      'option_key'   => 'cmb_footer_options',
      'parent_slug'   => 'cmb_main_options'
  ];

  $secondary_options = new_cmb2_box($args);

  $secondary_options->add_field([
      'name'    => 'Copyright Line',
      'id'      => 'cmb_footer_copyright',
      'type'    => 'text'
  ]);

  $args = [
      'id'           => 'cmb_social_links',
      'object_types' => ['options-page'],
      'option_key'   => 'cmb_social_links',
      'parent_slug'  => 'cmb_main_options',
      'title'        => 'Social Links'
  ];

  $cmb_social_links = new_cmb2_box($args);

  $cmb_social_links->add_field([
      'name'       => __('Facebook Url', 'cmb2'),
      'id'         => 'facebook',
      'type'       => 'text_url'
  ]);

  $cmb_social_links->add_field([
      'name'       => __('Twitter Url', 'cmb2'),
      'id'         => 'twitter',
      'type'       => 'text_url'
  ]);

  $cmb_social_links->add_field([
      'name'       => __('Instagram Url', 'cmb2'),
      'id'         => 'instagram',
      'type'       => 'text_url'
  ]);

  $cmb_social_links->add_field([
      'name'       => __('LinkedIn Url', 'cmb2'),
      'id'         => 'linkedin',
      'type'       => 'text_url'
  ]);

  $cmb_social_links->add_field([
      'name'       => __('Pinterest Url', 'cmb2'),
      'id'         => 'pinterest',
      'type'       => 'text_url'
  ]);

  $cmb_social_links->add_field([
      'name'       => __('Youtube Url', 'cmb2'),
      'id'         => 'youtube',
      'type'       => 'text_url'
  ]);

  $args = [
      'id'           => 'cmb_theme_colors',
      'object_types' => ['options-page'],
      'option_key'   => 'cmb_theme_colors',
      'parent_slug'  => 'cmb_main_options',
      'title'        => 'Theme Colors'
  ];

  $cmb_theme_colors = new_cmb2_box($args);

  $cmb_theme_colors->add_field([
      'name'    => 'Default Text Color',
      'id'      => 'cmb_text_color',
      'type'    => 'colorpicker',
      'default' => '#000000',
      'options' => [
          'alpha' => true, // Make this a rgba color picker.
      ]
  ]);

  $cmb_theme_colors->add_field([
      'name'    => 'Brand / Link Default Color',
      'id'      => 'cmb_brand_color',
      'type'    => 'colorpicker',
      'default' => '#0000ff',
      'options' => [
          'alpha' => true, // Make this a rgba color picker.
      ]
  ]);

$prefix = 'yourprefix_demo_';

$cmb_demo = new_cmb2_box([
    'id'            => $prefix . 'metabox',
    'option_key'    => 'cmb_homepage_layout',
    'title'         => __('Test Metabox', 'cmb2'),
    'object_types'  => ['options-page'], // Post type
    'parent_slug'   => 'cmb_main_options',
    'show_names'    => true
]);

$cmb_demo->add_field([
    'name'             => __('Test Radio Image', 'cmb2'),
    'desc'             => __('field description (optional)', 'cmb2'),
    'id'               => $prefix . 'radioimg',
    'type'             => 'radio_image',
    'options'          => [
        'multipage-layout-1'    => __('Full Width', 'cmb2'),
        'multipage-layout-2'    => __('Left Sidebar', 'cmb2'),
        'multipage-layout-3'    => __('Right Sidebar', 'cmb2'),
    ],
    'images_path'      => get_template_directory_uri(),
    'images'           => [
        'multipage-layout-1'    => 'assets/images/meta/multipage-1.png',
        'multipage-layout-2'    => 'assets/images/meta/multipage-2.png',
        'multipage-layout-3'    => 'assets/images/meta/multipage-3.png',
    ]
]);
