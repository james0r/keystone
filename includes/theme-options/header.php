<?php
/**
* Header Theme Options
*/
  
  $cmb2_box_header_style = new_cmb2_box([
      'id'           => 'cmb2_id_header_styles_box',
      'option_key'   => 'cmb2_key_header_styles_box',
      'title'        => __('Header', 'keystone'),
      'object_types' => ['options-page'],
      'parent_slug'  => 'cmb_main_options',
      ]);
  
  $cmb2_box_header_style->add_field([
    'id' => 'cmb2_id_header_layout_style',
    'name' => __('Header Layout Style', 'keystone'),
    'option_key' => 'cmb2_field_header_layout_style',
    'type'  => 'select',
    'show_option_none' => false,
    'default'          => 'custom',
    'options'          => array(
        'header-style-1' => __( 'Header Style 1', 'keystone' ),
        'header-style-2' => __( 'Header Style 2', 'keystone' ),
        'header-style-3' => __( 'Header Style 3', 'keystone' ),
        'header-style-4' => __( 'Header Style 4', 'keystone' ),
        'header-style-5' => __( 'Header Style 5', 'keystone' ),
        'header-style-6' => __( 'Header Style 6', 'keystone' ),
        'header-style-7' => __( 'Header Style 7', 'keystone' ),
        'header-style-8' => __( 'Header Style 8', 'keystone' ),
        'header-style-9' => __( 'Header Style 9', 'keystone' ),
        'header-style-10' => __( 'Header Style 10 Logo Middle', 'keystone' ),
        'header-style-11' => __( 'Header Style 11 Logo Centered', 'keystone' ),
        'header-style-12' => __( 'Header Style 11 Logo Centered Transparent', 'keystone' ),
        'header-modern-style-1' => __('Header Modern Style 1', 'keystone'),
        'header-modern-style-2' => __('Header Modern Style 2', 'keystone'),
        'header-modern-style-3' => __('Header Modern Style 3', 'keystone'),
        'header-modern-style-4' => __('Header Modern Style 4', 'keystone'),
        'header-modern-style-5' => __('Header Modern Style 5', 'keystone'),
        'header-modern-style-6' => __('Header Modern Style 6', 'keystone'),
        'header-modern-style-7' => __('Header Modern Style 7', 'keystone'),
        'header-modern-style-8' => __('Header Modern Style 8', 'keystone'),
        'header-floating-style-1' => __('Header Floating Style 1', 'keystone'),
        'header-floating-style-2' => __('Header Floating Style 2', 'keystone'),
        'header-floating-style-3' => __('Header Floating Style 3', 'keystone'),
        'header-floating-style-4' => __('Header Floating Style 4', 'keystone'),
        'header-floating-style-5' => __('Header Floating Style 5', 'keystone'),
        'header-floating-style-6' => __('Header Floating Style 6', 'keystone'),
        'header-floating-style-7' => __('Header Floating Style 7', 'keystone'),
        'header-floating-style-8' => __('Header Floating Style 8', 'keystone'),
        'header-floating-style-9' => __('Header Floating Style 9', 'keystone'),
        'header-floating-style-10' => __('Header Floating Style 10', 'keystone'),
        'header-floating-style-11' => __('Header Floating Style 11', 'keystone'),
    ),
  ]);
  
  // conditional header color fields
  $cmb2_box_header_style->add_field([
      'name'          => __('Header Colors', 'keystone'),
      'desc'          => __('These change based on which Header Layout Style is chosen.', 'keystone'),
      'id'            => 'cmb2_id_header_style_color_options_1',
      'type'          => 'select',
      'options'       => [
          'dark'   => __('Dark', 'keystone'),
          'white'   => __('White', 'keystone'),
          'theme-colored'   => __('Theme Colored', 'keystone'),
          'side-push-panel'   => __('Side Push Panel', 'keystone'),
          'side-push-panel-2'   => __('Side Push Panel 2', 'keystone'),
          'with-content-info-box'   => __('With Content Info Box', 'keystone'),
          'with-content-info-box-small'   => __('With Content Info Box Small', 'keystone'),
      ],
      'attributes'    => [
          'data-conditional-id'     => 'cmb2_id_header_layout_style',
          'data-conditional-value'  => wp_json_encode( array( 'header_modern_style_1' ) ),
      ],
  ]);
  
  $cmb2_box_header_style->add_field([
      'name'          => __('Header Colors', 'keystone'),
      'desc'          => __('These change based on which Header Layout Style is chosen.', 'keystone'),
      'id'            => 'cmb2_id_header_style_color_options_2',
      'type'          => 'select',
      'options'       => [
          'dark'            => __('Dark', 'keystone'),
          'white'           => __('White', 'keystone'),
          'theme-colored'   => __('Theme Colored', 'keystone'),
      ],
      'attributes'    => [
          'data-conditional-id'     => 'cmb2_id_header_layout_style',
          'data-conditional-value'  => wp_json_encode(['header_modern_style_2',
              'header_modern_style_3',
              'header_modern_style_6',
              'header_modern_style_7',
              'header_modern_style_8']),
      ],
  ]);
  
  $cmb2_box_header_style->add_field([
      'name'          => __('Header Colors', 'keystone'),
      'desc'          => __('These change based on which Header Layout Style is chosen.', 'keystone'),
      'id'            => 'cmb2_id_header_style_color_options_3',
      'type'          => 'select',
      'options'       => [
          'dark'            => __('Dark', 'keystone'),
          'white'           => __('White', 'keystone'),
          'theme-colored'   => __('Theme Colored', 'keystone'),
          'theme-colored-2'   => __('Theme Colored 2', 'keystone'),
      ],
      'attributes'    => [
          'data-conditional-id'     => 'cmb2_id_header_layout_style',
          'data-conditional-value'  => wp_json_encode(['header_modern_style_4']),
      ],
  ]);
  
  $cmb2_box_header_style->add_field([
      'name'             => 'Header Search Form Style',
      'id'               => 'cmb2_id_field_header_search_style',
      'type'             => 'select',
      'default'          => 'custom',
      'options'          => [
          'fullscreen-search'       => __('Fullscreen Search', 'keystone'),
          'inline-fullwidth-search' => __('Inline Fullwidth Search', 'keystone'),
          'inline-fullwidth-dropdown' => __('Inline Fullwidth Dropdown', 'keystone'),
          'top-dropdown' => __('Top Dropdown', 'keystone'),
          'pushdown-from-top' => __('Pushdown From Top', 'keystone'),
          'dropdown' => __('Dropdown', 'keystone'),
          'simple-search-box' => __('Simple Search Box', 'keystone'),
      ],
  ]);