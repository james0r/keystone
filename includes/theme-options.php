<?php
  $args = [
    'id'           => 'cmb_options_parent',
    'object_types' => ['options-page'],
    'option_key'   => 'cmb_options_parent',
    'icon_url'     => 'dashicons-building',
    'menu_title' => __('Clinic Settings', 'keystone')
  ];

  $parent_box = new_cmb2_box($args);

  // Company Theme Options

  $args = [
      'id'           => 'cmb_company_info_page',
      'title'        => __('Clinic Information', 'keystone'),
      'object_types' => ['options-page'],
      'option_key'   => 'cmb_main_options',
      'parent_slug'  => 'cmb_options_parent',
      'menu_title' => __('Clinic Information', 'keystone')
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
      'id'           => 'cmb_social_links',
      'object_types' => ['options-page'],
      'option_key'   => 'cmb_social_links',
      'parent_slug'  => 'cmb_options_parent',
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
      'parent_slug'  => 'cmb_options_parent',
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


  // Homapage Layout Inputs
    
$cmb_demo = new_cmb2_box([
  'id'            => 'cmb2_metabox_homepage_styles',
  'option_key'    => 'cmb_homepage_layout',
  'title'         => __('Homepage Layout', 'keystone'),
  'object_types'  => ['options-page'], // Post type
  'parent_slug'  => 'cmb_options_parent',
  'show_names'    => true
]);

$cmb_demo->add_field([
  'name'             => __('Homepage Layout', 'cmb2'),
  'id'               => $prefix . 'radioimg',
  'type'             => 'radio_image',
  'options'          => [
      'multipage-layout-1'    => __('Multipage Layout 1', 'keystone'),
      'multipage-layout-2'    => __('Multipage Layout 2', 'keystone'),
      'multipage-layout-3'    => __('Multipage Layout 3', 'keystone'),
      'multipage-layout-4'    => __('Multipage Layout 4', 'keystone'),
      'multipage-layout-5'    => __('Multipage Layout 5', 'keystone'),
      'multipage-layout-6'    => __('Multipage Layout 6', 'keystone'),
      'multipage-layout-7'    => __('Multipage Layout 7', 'keystone'),
      'multipage-layout-8'    => __('Multipage Layout 8', 'keystone'),
      'multipage-layout-9'    => __('Multipage Layout 9', 'keystone'),
      'multipage-layout-10'    => __('Multipage Layout 10', 'keystone'),
      'multipage-layout-11'    => __('Multipage Layout 11', 'keystone'),
      'multipage-layout-12'    => __('Multipage Layout 12', 'keystone'),
  ],
  'images_path'      => get_template_directory_uri(),
  'images'           => [
      'multipage-layout-1'    => 'assets/images/meta/multipage-1.png',
      'multipage-layout-2'    => 'assets/images/meta/multipage-2.png',
      'multipage-layout-3'    => 'assets/images/meta/multipage-3.png',
      'multipage-layout-4'    => 'assets/images/meta/multipage-4.jpg',
      'multipage-layout-5'    => 'assets/images/meta/multipage-5.jpg',
      'multipage-layout-6'    => 'assets/images/meta/multipage-6.jpg',
      'multipage-layout-7'    => 'assets/images/meta/multipage-7.jpg',
      'multipage-layout-8'    => 'assets/images/meta/multipage-8.jpg',
      'multipage-layout-9'    => 'assets/images/meta/multipage-9.jpg',
      'multipage-layout-10'    => 'assets/images/meta/multipage-10.jpg',
      'multipage-layout-11'    => 'assets/images/meta/multipage-11.jpg',
      'multipage-layout-12'    => 'assets/images/meta/multipage-12.jpg',
  ]
]);

// Blog Inputs

$cmb2_box_blog = new_cmb2_box([
  'id'           => 'cmb2_id_blog_box',
  'option_key'   => 'cmb2_key_blog_box',
  'title'        => __('Blog', 'keystone'),
  'object_types' => ['options-page'],
  'parent_slug'  => 'cmb_options_parent',
]);

$cmb2_box_blog->add_field([
  'id' => 'cmb2_id_blog_layout_style',
  'name' => __('Blog Layout Style', 'keystone'),
  'option_key' => 'cmb2_field_blog_layout_style',
  'type'  => 'select',
  'show_option_none' => false,
  'default'          => 'custom',
  'options'          => array(
      'blog-class-no-sidebar' => __( 'Blog Classic No Sidebar', 'keystone' ),
      'blog-class-left-sidebar' => __( 'Blog Classic Left Sidebar', 'keystone' ),
      'blog-class-right-sidebar' => __( 'Blog Classic Right Sidebar', 'keystone' ),
      'blog-class-both-sidebar' => __( 'Blog Classic Both Sidebar', 'keystone' ),
      'blog-class-left-thumbs' => __( 'Blog Classic Both Sidebar', 'keystone' ),
      'blog-grid-2-column' => __( 'Blog Grid 2 Column', 'keystone' ),
      'blog-grid-3-column' => __( 'Blog Grid 3 Column', 'keystone' ),
      'blog-grid-4-column' => __( 'Blog Grid 4 Column', 'keystone' ),
      'blog-masonry-2-column' => __( 'Blog Grid 2 Column', 'keystone' ),
      'blog-masonry-3-column' => __( 'Blog Grid 3 Column', 'keystone' ),
      'blog-masonry-4-column' => __( 'Blog Grid 4 Column', 'keystone' ),
      'blog-single-no-sidebar' => __( 'Blog Single No Sidebar', 'keystone' ),
      'blog-single-left-sidebar' => __( 'Blog Single Left Sidebar', 'keystone' ),
      'blog-single-right-sidebar' => __( 'Blog Single Right Sidebar', 'keystone' ),
      'blog-single-both-sidebar' => __( 'Blog Single Both Sidebar', 'keystone' ),
      'blog-single-discuss-comments' => __( 'Blog Single Discuss Comments', 'keystone' ),
      'blog-single-facebook-comments' => __( 'Blog Single Facebook Comments', 'keystone' ),
      'blog-infinity-scroll-default' => __( 'Blog Infinity Scroll Default', 'keystone' ),
      'blog-infinity-scroll-lazyload' => __( 'Blog Infinity Scroll Lazyload', 'keystone' ),
      'blog-timeline-default' => __( 'Blog Timeline Default', 'keystone' ),
      'blog-timeline-masonry' => __( 'Blog Timeline Masonry', 'keystone' ),
  ),
]);

$cmb2_box_blog->add_field([
  'name'             => esc_html__( 'Disable Blog', 'keystone' ),
  'id'               => 'cmb2_id_field_disable_blog',
  'desc'             => '<span style="color: red;">' . __('<span style="color: red;">This will totally disable all blog functionality on your website.', 'keystone') . '</span>',
  'type'	           => 'switch',
  'default'          => false, //If it's checked by default 
  'active_value'     => true,
  'inactive_value'   => false
]);

// Header Inputs
  
$cmb2_box_header_style = new_cmb2_box([
    'id'           => 'cmb2_id_header_styles_box',
    'option_key'   => 'cmb2_key_header_styles_box',
    'title'        => __('Header', 'keystone'),
    'object_types' => ['options-page'],
    'parent_slug'  => 'cmb_options_parent',
]);

$cmb2_box_header_style->add_field([
  'id' => 'cmb2_id_header_layout_style',
  'name' => __('Header Layout Style', 'keystone'),
  'option_key' => 'cmb2_field_header_layout_style',
  'type'  => 'select',
  'show_option_none' => false,
  'default'          => 'custom',
  'options'          => array(
      'header_style_1' => __( 'Header Style 1', 'keystone' ),
      'header_style_2' => __( 'Header Style 2', 'keystone' ),
      'header_style_3' => __( 'Header Style 3', 'keystone' ),
      'header_style_4' => __( 'Header Style 4', 'keystone' ),
      'header_style_5' => __( 'Header Style 5', 'keystone' ),
      'header_style_6' => __( 'Header Style 6', 'keystone' ),
      'header_style_7' => __( 'Header Style 7', 'keystone' ),
      'header_style_8' => __( 'Header Style 8', 'keystone' ),
      'header_style_9' => __( 'Header Style 9', 'keystone' ),
      'header_style_10' => __( 'Header Style 10 Logo Middle', 'keystone' ),
      'header_style_11' => __( 'Header Style 11 Logo Centered', 'keystone' ),
      'header_style_12' => __( 'Header Style 11 Logo Centered Transparent', 'keystone' ),
      'header_modern_style_1' => __('Header Modern Style 1', 'keystone'),
      'header_modern_style_2' => __('Header Modern Style 2', 'keystone'),
      'header_modern_style_3' => __('Header Modern Style 3', 'keystone'),
      'header_modern_style_4' => __('Header Modern Style 4', 'keystone'),
      'header_modern_style_5' => __('Header Modern Style 5', 'keystone'),
      'header_modern_style_6' => __('Header Modern Style 6', 'keystone'),
      'header_modern_style_7' => __('Header Modern Style 7', 'keystone'),
      'header_modern_style_8' => __('Header Modern Style 8', 'keystone'),
      'header_floating_style_1' => __('Header Floating Style 1', 'keystone'),
      'header_floating_style_2' => __('Header Floating Style 2', 'keystone'),
      'header_floating_style_3' => __('Header Floating Style 3', 'keystone'),
      'header_floating_style_4' => __('Header Floating Style 4', 'keystone'),
      'header_floating_style_5' => __('Header Floating Style 5', 'keystone'),
      'header_floating_style_6' => __('Header Floating Style 6', 'keystone'),
      'header_floating_style_7' => __('Header Floating Style 7', 'keystone'),
      'header_floating_style_8' => __('Header Floating Style 8', 'keystone'),
      'header_floating_style_9' => __('Header Floating Style 9', 'keystone'),
      'header_floating_style_10' => __('Header Floating Style 10', 'keystone'),
      'header_floating_style_11' => __('Header Floating Style 11', 'keystone'),
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
    'desc'             => 'Choose a style.',
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


// Footer Layout Inputs

$cmb2_box_footer_style = new_cmb2_box([
  'id'           => 'cmb2_id_footer_styles_box',
  'option_key'   => 'cmb2_key_footer_styles_box',
  'title'        => __('Footer', 'keystone'),
  'object_types' => ['options-page'],
  'parent_slug'  => 'cmb_options_parent',
]);

$cmb2_box_footer_style->add_field([
    'name'          => __('Footer Layout Style', 'keystone'),
    'id'            => 'cmb2_id_footer_style',
    'type'          => 'select',
    'default'       => 'footer-style-5',
    'options'       => [
        'fixed-footer'              => __('Fixed Footer', 'keystone'),
        'footer-style-1'            => __('Footer Style 1', 'keystone'),
        'footer-style-2'            => __('Footer Style 2', 'keystone'),
        'footer-style-3'            => __('Footer Style 3', 'keystone'),
        'footer-style-4'            => __('Footer Style 4', 'keystone'),
        'footer-style-5'            => __('Footer Style 5', 'keystone'),
        'footer-style-6'            => __('Footer Style 6', 'keystone'),
        'footer-style-7'            => __('Footer Style 7', 'keystone'),
        'footer-style-8'            => __('Footer Style 8', 'keystone'),
        'footer-style-9'            => __('Footer Style 9', 'keystone'),
    ]
]);


$cmb2_box_footer_style->add_field([
  'name'    => 'Copyright Line',
  'id'      => 'cmb_footer_copyright',
  'type'    => 'text'
]);

// Other Theme Settings
  
$cmb2_box_general_settings = new_cmb2_box([
  'id'            => 'cmb2_id_box_general_settings',
  'option_key'    => 'cmb2_key_box_general_settings',
  'title'         => __('Advanced Settings', 'keystone'),
  'object_types'  => ['options-page'], // Post type
  'parent_slug'  => 'cmb_options_parent',
  'show_names'    => true
]);

$cmb2_box_general_settings->add_field([
  'name'             => esc_html__( 'Show Popup Promo Box', 'keystone' ),
  'id'               => 'cmb2_id_field_popup_promo_box',
  'desc'             => esc_html__('Visitors to your site will see a popup window with everything else grayed out. This kind of window is typically used for a newsletter signup or perhaps an important notice. A cookie is stored in the user\'s browser so that promo wont be shown twice.', 'keystone'),
  'type'	           => 'switch',
  'default'          => false, //If it's checked by default 
  'active_value'     => true,
  'inactive_value'   => false
]);

$cmb2_box_general_settings->add_field([
  'name'             => esc_html__( 'Show Preloader Animation', 'keystone' ),
  'id'               => 'cmb2_id_field_preloader_toggle',
  'desc'             => esc_html__('Visitors to your site will see the animation you choose while the page downloads from the internet.', 'keystone'),
  'type'	           => 'switch',
  'default'          => false, //If it's checked by default 
  'active_value'     => true,
  'inactive_value'   => false
]);

$cmb2_box_general_settings->add_field([
  'name'             => esc_html__( 'Enable Mega Menu', 'keystone' ),
  'id'               => 'cmb2_id_field_enable_mega_menu',
  'desc'             => __('Adds a large flydown menu to your site\'s main menu.') . '<span style="color: red;">You must add the <b>mega-menu</b> class to the corresponding menu item.</span>',
  'type'	           => 'switch',
  'default'          => false, //If it's checked by default 
  'active_value'     => true,
  'inactive_value'   => false
]);

$cmb2_box_general_settings->add_field([
  'name'          => __('Appointment Form Style', 'keystone'),
  'id'            => 'cmb2_id_appointment_form_style',
  'type'          => 'select',
  'default'       => 'form-style-1',
  'options'       => [
      'form-style-1'              => __('Form Style 1', 'keystone'),
      'form-style-2'              => __('Form Style 2', 'keystone'),
      'form-style-3'              => __('Form Style 3', 'keystone'),
  ]
]);

$cmb2_box_general_settings->add_field([
  'name'             => esc_html__( 'Show Coming Soon', 'keystone' ),
  'id'               => 'cmb2_id_field_show_coming_soon',
  'desc'             => '<span style="color: red;">' . esc_html__('Users will not be able to view your website if this is ON.', 'keystone') . '</span> A countdown timer will be shown instead.',
  'type'	           => 'switch',
  'classes' => 'coming-soon-toggle',
  'default'          => false, //If it's checked by default 
  'active_value'     => true,
  'inactive_value'   => false
]);

$cmb2_box_general_settings->add_field([
  'name'          => __('Coming Soon Layout Style', 'keystone'),
  'id'            => 'cmb2_id_coming_soon_style',
  'type'          => 'select',
  'options'       => [
      'style-1'            => __('Style 1', 'keystone'),
      'style-2'            => __('Style 2', 'keystone'),
      'style-3'            => __('Style 3', 'keystone'),
      'style-4'            => __('Style 4', 'keystone'),
  ],
  'attributes'    => [
      'data-conditional-id'     => 'cmb2_id_field_show_coming_soon',
      'data-conditional-value'  => 'true',
  ],
]);

$cmb2_box_general_settings->add_field([
  'name'             => esc_html__( 'Show Under Construction', 'keystone' ),
  'id'               => 'cmb2_id_field_show_under_construction',
  'desc'             => '<span style="color: red;">' . esc_html__('Users will not be able to view your website if this is ON.', 'keystone') . '</span> An "Under Construction" page will be shown instead.',
  'type'	           => 'switch',
  'classes' => 'under-construction-toggle',
  'default'          => false, //If it's checked by default 
  'active_value'     => true,
  'inactive_value'   => false
]);

$cmb2_box_general_settings->add_field([
  'name'          => __('Under Construction Layout Style', 'keystone'),
  'id'            => 'cmb2_id_under_construction_style',
  'type'          => 'select',
  'options'       => [
      'style-1'            => __('Style 1', 'keystone'),
      'style-2'            => __('Style 2', 'keystone'),
      'style-3'            => __('Style 3', 'keystone'),
  ],
  'attributes'    => [
      'data-conditional-id'     => 'cmb2_id_field_show_under_construction',
      'data-conditional-value'  => 'true',
  ],
]);

$cmb2_box_general_settings->add_field([
  'name'          => __('Global Page Title Style', 'keystone'),
  'id'            => 'cmb2_id_page_title_style',
  'type'          => 'select',
  'default'       => 'text-center',
  'options'       => [
      'text-left'            => __('Text Left', 'keystone'),
      'text-center'            => __('Text Center', 'keystone'),
      'text-right'            => __('Text Right', 'keystone'),
      'mini-version'            => __('Mini Version', 'keystone'),
      'big-version'            => __('Big Version', 'keystone'),
      'extra-big-version'            => __('Extra Big Version', 'keystone'),
      'bg-white'            => __('BG White', 'keystone'),
      'bg-image'            => __('BG Image', 'keystone'),
      'bg-image-parallax'            => __('BG Image Parallax', 'keystone'),
      'bg-video'            => __('BG Video', 'keystone'),
      'full-transparent'            => __('Full Transparent', 'keystone'),
  ]
]);


