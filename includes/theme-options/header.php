<?php
/**
* Header Theme Options
*/

$prefix = 'cmb2_id_header_';

$cmb2_box_header_options = new_cmb2_box([
    'id'           => $prefix.'styles_box',
    'option_key'   => 'cmb2_key_header_styles_box',
    'title'        => __('Header', 'keystone'),
    'object_types' => ['options-page'],
    'parent_slug'  => 'cmb_main_options',
]);

$cmb2_group_header_style = $cmb2_box_header_options->add_field([
    'id'          => $prefix . 'group_style',
    'type'        => 'group',
    // 'description' => __( 'Generates reusable form entries', 'cmb2' ),
    'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Header Style & Layout', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
        'add_button'        => false,
        'remove_button'     => false,
        // 'closed'         => true, // true to have the groups closed by default
        // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
    ],
]);

$cmb2_box_header_options->add_group_field($cmb2_group_header_style, [
    'id'               => 'layout',
    'name'             => __('Header Layout Style', 'keystone'),
    'type'             => 'select',
    'show_option_none' => false,
    'default'          => 'header-style-1',
    'options'          => [
        'header-style-1'           => __('Header Style 1', 'keystone'),
        'header-style-2'           => __('Header Style 2', 'keystone'),
        'header-style-3'           => __('Header Style 3', 'keystone'),
        'header-style-4'           => __('Header Style 4', 'keystone'),
        'header-style-5'           => __('Header Style 5', 'keystone'),
        'header-style-6'           => __('Header Style 6', 'keystone'),
        'header-style-8'           => __('Header Style 8', 'keystone'),
        'header-style-9'           => __('Header Style 9', 'keystone'),
        'header-style-10'          => __('Header Style 10 Logo Middle', 'keystone'),
        'header-style-11'          => __('Header Style 11 Logo Centered', 'keystone'),
        'header-style-12'          => __('Header Style 11 Logo Centered Transparent', 'keystone'),
        'header-modern-style-1'    => __('Header Modern Style 1', 'keystone'),
        'header-modern-style-2'    => __('Header Modern Style 2', 'keystone'),
        'header-modern-style-3'    => __('Header Modern Style 3', 'keystone'),
        'header-modern-style-4'    => __('Header Modern Style 4', 'keystone'),
        'header-modern-style-5'    => __('Header Modern Style 5', 'keystone'),
        'header-modern-style-6'    => __('Header Modern Style 6', 'keystone'),
        'header-modern-style-7'    => __('Header Modern Style 7', 'keystone'),
        'header-modern-style-8'    => __('Header Modern Style 8', 'keystone'),
        'header-floating-style-1'  => __('Header Floating Style 1', 'keystone'),
        'header-floating-style-2'  => __('Header Floating Style 2', 'keystone'),
        'header-floating-style-3'  => __('Header Floating Style 3', 'keystone'),
        'header-floating-style-4'  => __('Header Floating Style 4', 'keystone'),
        'header-floating-style-5'  => __('Header Floating Style 5', 'keystone'),
        'header-floating-style-6'  => __('Header Floating Style 6', 'keystone'),
        'header-floating-style-7'  => __('Header Floating Style 7', 'keystone'),
        'header-floating-style-8'  => __('Header Floating Style 8', 'keystone'),
        'header-floating-style-9'  => __('Header Floating Style 9', 'keystone'),
        'header-floating-style-10' => __('Header Floating Style 10', 'keystone'),
        'header-floating-style-11' => __('Header Floating Style 11', 'keystone'),
    ],
]);

// conditional header color fields
$cmb2_box_header_options->add_group_field($cmb2_group_header_style, [
    'name'          => __('Header Colors', 'keystone'),
    'desc'          => __('These options change based on which Header Layout Style is chosen.', 'keystone'),
    'id'            => 'color1',
    'type'          => 'select',
    'options'       => [
        'dark'                          => __('Dark', 'keystone'),
        'white'                         => __('White', 'keystone'),
        'theme-colored'                 => __('Theme Colored', 'keystone'),
        'side-push-panel'               => __('Side Push Panel', 'keystone'),
        'side-push-panel-2'             => __('Side Push Panel 2', 'keystone'),
        'with-content-info-box'         => __('With Content Info Box', 'keystone'),
        'with-content-info-box-small'   => __('With Content Info Box Small', 'keystone'),
    ],
    'attributes'    => [
        'data-conditional-id'     => 'layout',
        'data-conditional-value'  => wp_json_encode(['header-modern-style-1']),
    ],
]);

$cmb2_box_header_options->add_group_field($cmb2_group_header_style, [
    'name'          => __('Header Colors', 'keystone'),
    'desc'          => __('These options change based on which Header Layout Style is chosen.', 'keystone'),
    'id'            => 'color2',
    'type'          => 'select',
    'options'       => [
        'dark'            => __('Dark', 'keystone'),
        'white'           => __('White', 'keystone'),
        'theme-colored'   => __('Theme Colored', 'keystone'),
    ],
    'attributes'    => [
        'data-conditional-id'     => 'layout',
        'data-conditional-value'  => wp_json_encode(['header-modern-style-2',
            'header-modern-style-3',
            'header-modern-style-6',
            'header-modern-style-7',
            'header-modern-style-8']),
    ],
]);

$cmb2_box_header_options->add_group_field($cmb2_group_header_style, [
    'name'          => __('Header Colors', 'keystone'),
    'desc'          => __('These options change based on which Header Layout Style is chosen.', 'keystone'),
    'id'            => 'color3',
    'type'          => 'select',
    'options'       => [
        'dark'              => __('Dark', 'keystone'),
        'white'             => __('White', 'keystone'),
        'theme-colored'     => __('Theme Colored', 'keystone'),
        'theme-colored-2'   => __('Theme Colored 2', 'keystone'),
    ],
    'attributes'    => [
        'data-conditional-id'     => 'layout',
        'data-conditional-value'  => 'header-modern-style-4',
    ],
]);

$cmb2_box_header_options->add_group_field($cmb2_group_header_style, [
  'name'          => __('Header Colors', 'keystone'),
  'desc'          => __('These options change based on which Header Layout Style is chosen.', 'keystone'),
  'id'            => 'color4',
  'type'          => 'select',
  'options'       => [
      'dark'              => __('Dark', 'keystone'),
      'white'             => __('White', 'keystone'),
  ],
  'attributes'    => [
      'data-conditional-id'     => 'layout',
      'data-conditional-value'  => 'header-modern-style-5',
  ],
]);

$cmb2_box_header_options->add_group_field($cmb2_group_header_style, [
    'name'             => __('Header Search Form Style', 'keystone'),
    'id'               => 'cmb2_id_field_header_search_style',
    'type'             => 'select',
    'default'          => 'custom',
    'options'          => [
        'fullscreen-search'         => __('Fullscreen Search', 'keystone'),
        'inline-fullwidth-search'   => __('Inline Fullwidth Search', 'keystone'),
        'inline-fullwidth-dropdown' => __('Inline Fullwidth Dropdown', 'keystone'),
        'top-dropdown'              => __('Top Dropdown', 'keystone'),
        'pushdown-from-top'         => __('Pushdown From Top', 'keystone'),
        'dropdown'                  => __('Dropdown', 'keystone'),
        'simple-search-box'         => __('Simple Search Box', 'keystone'),
    ],
]);

$cmb2_box_header_options->add_group_field($cmb2_group_header_style, [
    'name'        => __('Top Bar Message Icon Classes', 'keystone'),
    'id'          => 'top-bar-message-icon',
    'desc'        => __('For example:', 'keystone') . ' <b>fas fa-camera</b>' . '<br><br>' . __('To reference an icon, you need to know two bits of information. 1) its name, prefixed with fa- (if you choose a Font Awesome Icon) and 2) the style you want to use’s corresponding prefix**. For icons from the Flaticon set you only need to enter a single class. Example: .flaticon-dental-amalgam-capsule', 'keystone'),
    'type'        => 'text',
    'after_field' => Keystone()->icons->getIconReferenceTable(),
    'classes'     => 'icon-field-table',
    'before'      => '<img src="' . get_template_directory_uri() . '/assets/images/meta/top-bar-message-icon-screenshot.jpg' . '" height="100" width="auto"><br><br>'
]);

$cmb2_box_header_options->add_group_field($cmb2_group_header_style, [
    'name'            => __('Top Bar Message Text', 'keystone'),
    'desc'            => __('This field may contain any of the following HTML tags ' . esc_html('<span><p><a><br><br/><b><strong>') . '.', 'keystone'),
    'id'              => 'top-bar-message-text',
    'type'            => 'text',
    'sanitization_cb' => 'keystone_sanitize_text_callback'
]);

$cmb2_box_header_options->add_group_field($cmb2_group_header_style, [
    'name'              => __('Social Links To Display In Header', 'keystone'),
    'desc'              => __('Links must be first entered in on the Social Links settings page under Keystone Options.', 'keystone'),
    'id'                => 'social_links_to_display',
    'type'              => 'multicheck',
    'select_all_button' => false,
    'options_cb'        => 'get_entered_social_links_array',
]);

$cmb2_header_widget_1 = $cmb2_box_header_options->add_field([
    'id'          => $prefix . 'group_widget_1',
    'type'        => 'group',
    // 'description' => __( 'Generates reusable form entries', 'cmb2' ),
    'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Header Widget 1', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
        'sortable'          => true,
        // 'closed'         => true, // true to have the groups closed by default
        // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
    ],
]);

$cmb2_box_header_options->add_group_field($cmb2_header_widget_1, [
    'name'        => __('Icon Classes', 'keystone'),
    'id'          => 'icon',
    'desc'        => __('For example:', 'keystone') . ' <b>fas fa-camera</b>' . '<br><br>' . __('To reference an icon, you need to know two bits of information. 1) its name, prefixed with fa- (if you choose a Font Awesome Icon) and 2) the style you want to use’s corresponding prefix**. For icons from the Flaticon set you only need to enter a single class. Example: .flaticon-dental-amalgam-capsule', 'keystone'),
    'type'        => 'text',
    'after_field' => Keystone()->icons->getIconReferenceTable(),
    'classes'     => 'icon-field-table'
]);

$cmb2_box_header_options->add_group_field($cmb2_header_widget_1, [
    'name' => __('Line 1', 'keystone'),
    'desc' => __('Plain text.', 'keystone'),
    'id'   => 'cta-text',
    'type' => 'text_medium',
]);

$cmb2_box_header_options->add_group_field($cmb2_header_widget_1, [
    'name' => __('Line 2', 'keystone'),
    'desc' => __('Plain text or link.', 'keystone'),
    'id'   => 'cta-bold-text',
    'type' => 'text_medium',
]);

$cmb2_header_widget_2 = $cmb2_box_header_options->add_field([
    'id'          => $prefix . 'group_widget_2',
    'type'        => 'group',
    // 'description' => __( 'Generates reusable form entries', 'cmb2' ),
    'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Header Widget 2', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
        'sortable'          => true,
        // 'closed'         => true, // true to have the groups closed by default
        // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
    ],
]);

$cmb2_box_header_options->add_group_field($cmb2_header_widget_2, [
    'name'        => __('Icon Classes', 'keystone'),
    'id'          => 'icon',
    'desc'        => __('For example:', 'keystone') . ' <b>fas fa-camera</b>' . '<br><br>' . __('To reference an icon, you need to know two bits of information. 1) its name, prefixed with fa- (if you choose a Font Awesome Icon) and 2) the style you want to use’s corresponding prefix**. For icons from the Flaticon set you only need to enter a single class. Example: .flaticon-dental-amalgam-capsule', 'keystone'),
    'type'        => 'text',
    'after_field' => Keystone()->icons->getIconReferenceTable(),
    'classes'     => 'icon-field-table'
]);

$cmb2_box_header_options->add_group_field($cmb2_header_widget_2, [
    'name' => __('Line 1', 'keystone'),
    'desc' => __('Plain text.', 'keystone'),
    'id'   => 'cta-text',
    'type' => 'text_medium',
]);

$cmb2_box_header_options->add_group_field($cmb2_header_widget_2, [
    'name' => __('Line 2', 'keystone'),
    'desc' => __('Plain text or link.', 'keystone'),
    'id'   => 'cta-bold-text',
    'type' => 'text_medium',
]);

$cmb2_header_widget_3 = $cmb2_box_header_options->add_field([
    'id'          => $prefix . 'group_widget_3',
    'type'        => 'group',
    // 'description' => __( 'Generates reusable form entries', 'cmb2' ),
    'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Header Widget 3', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
        'sortable'          => true,
        // 'closed'         => true, // true to have the groups closed by default
        // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
    ],
]);

$cmb2_box_header_options->add_group_field($cmb2_header_widget_3, [
    'name'        => __('Icon Classes', 'keystone'),
    'id'          => $prefix . 'widget_3_icon',
    'desc'        => __('For example:', 'keystone') . ' <b>fas fa-camera</b>' . '<br><br>' . __('To reference an icon, you need to know two bits of information. 1) its name, prefixed with fa- (if you choose a Font Awesome Icon) and 2) the style you want to use’s corresponding prefix**. For icons from the Flaticon set you only need to enter a single class. Example: .flaticon-dental-amalgam-capsule', 'keystone'),
    'type'        => 'text',
    'after_field' => Keystone()->icons->getIconReferenceTable(),
    'classes'     => 'icon-field-table'
]);

$cmb2_box_header_options->add_group_field($cmb2_header_widget_3, [
    'name' => __('Line 1', 'keystone'),
    'desc' => __('Plain text.', 'keystone'),
    'id'   => 'text',
    'type' => 'text_medium',
]);

$cmb2_box_header_options->add_group_field($cmb2_header_widget_3, [
    'name' => __('Line 2', 'keystone'),
    'desc' => __('Plain text or link. Wrap in [square braces] if this should be a clickable link', 'keystone'),
    'id'   => 'bold-text',
    'type' => 'text_medium',
]);

$cmb2_header_cta = $cmb2_box_header_options->add_field([
    'id'          => $prefix . 'group_cta',
    'type'        => 'group',
    // 'description' => __( 'Generates reusable form entries', 'cmb2' ),
    'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Call-To-Action Button', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
        // 'closed'         => true, // true to have the groups closed by default
        // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
    ],
]);

$cmb2_box_header_options->add_group_field($cmb2_header_cta, [
    'name' => __('Button Text', 'keystone'),
    'desc' => __('Text shown on call-to-action button.', 'keystone'),
    'id'   => 'button-text',
    'type' => 'text_medium',
]);

$cmb2_box_header_options->add_group_field($cmb2_header_cta, [
    'name'      => __('Button Link URL', 'keystone'),
    'desc'      => __('https://www.example.com', 'keystone'),
    'id'        => 'button-link-url',
    'type'      => 'text_url',
    'protocols' => ['http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'], // Array of allowed protocols
]);

$cmb2_header_advanced = $cmb2_box_header_options->add_field([
    'id'          => $prefix . 'group_advanced',
    'type'        => 'group',
    'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Header Advanced Settings', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
        'sortable'          => false,
        'closed'            => true, // true to have the groups closed by default
        // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
    ],
]);

$cmb2_box_header_options->add_group_field($cmb2_header_advanced, [
    'name'    => __('Disable Mega Menu', 'keystone'),
    'desc'    => __('The Mega Menu is a large drop-down menu that appears when you hover over its button in the primary header menu of your site.', 'keystone'),
    'type'    => 'checkbox',
    'default' => false,
    'active_value'     => true,
    'inactive_value'   => false,
    'sanitization_cb'  => 'sanitize_checkbox', //This is required to fix issue with default value loop cased by missing value in db. 
    'id'      => $prefix . 'disable_mega_menu'
]);

$cmb2_box_header_options->add_group_field($cmb2_header_advanced, [
    'name'    => __('Hide Search Icon', 'keystone'),
    'desc'    => __('Users will not have the ability to search your site from the header if you disable this.', 'keystone'),
    'type'    => 'checkbox',
    'default' => false,
    'active_value'     => true,
    'inactive_value'   => false,
    'sanitization_cb'  => 'sanitize_checkbox', //This is required to fix issue with default value loop cased by missing value in db. 
    'id'      => $prefix . 'disable_header_search'
]);

$cmb2_box_header_options->add_group_field($cmb2_header_advanced, [
    'name'    => __('Hide Shopping Cart Icon', 'keystone'),
    'desc'    => __('This only applies if you have enabled E-commerce functionality on your site.', 'keystone'),
    'type'    => 'checkbox',
    'default' => false,
    'active_value'     => true,
    'inactive_value'   => false,
    'sanitization_cb'  => 'sanitize_checkbox', //This is required to fix issue with default value loop cased by missing value in db. 
    'id'      => $prefix . 'disable_cart_icon'
]);


$cmb2_box_header_options->add_group_field($cmb2_header_advanced, [
    'name'    => __('Disable Language Drop-Down Menu', 'keystone'),
    'desc'    => __('If this setting is checked, the multilingual drop-down options will be hidden on header styles that include it.', 'keystone'),
    'type'    => 'checkbox',
    'default' => false,
    'active_value'     => true,
    'inactive_value'   => false,
    'sanitization_cb'  => 'sanitize_checkbox', //This is required to fix issue with default value loop cased by missing value in db. 
    'id'      => $prefix . 'disable_multilingual'
]);

$cmb2_box_header_options->add_group_field($cmb2_header_advanced, [
  'name'    => __('Override Top Bar Color', 'keystone'),
  'desc'    => __('If this setting is checked, the color in the next input will be used for the top bar background.', 'keystone'),
  'type'    => 'checkbox',
  'default' => false,
  'active_value'     => true,
  'inactive_value'   => false,
  'sanitization_cb'  => 'sanitize_checkbox', //This is required to fix issue with default value loop cased by missing value in db. 
  'id'      => $prefix . 'override_top_bar_color'
]);

$cmb2_box_header_options->add_group_field($cmb2_header_advanced, [
    'name'    => __('Top Bar Color Override', 'keystone'),
    'default' => '#1196CC',
    'id'      => $prefix . 'top_bar_override_color',
    'type'    => 'colorpicker',
]);
