<?php
/**
* Header Theme Options
*/

$prefix = 'cmb2_id_header_';

$cmb2_box_header_style = new_cmb2_box([
    'id'           => 'cmb2_id_header_styles_box',
    'option_key'   => 'cmb2_key_header_styles_box',
    'title'        => __('Header', 'keystone'),
    'object_types' => ['options-page'],
    'parent_slug'  => 'cmb_main_options',
]);

$cmb2_box_header_style->add_field([
    'id'               => 'cmb2_id_header_layout_style',
    'name'             => __('Header Layout Style', 'keystone'),
    'option_key'       => 'cmb2_field_header_layout_style',
    'type'             => 'select',
    'show_option_none' => false,
    'default'          => 'custom',
    'options'          => [
        'header-style-1'           => __('Header Style 1', 'keystone'),
        'header-style-2'           => __('Header Style 2', 'keystone'),
        'header-style-3'           => __('Header Style 3', 'keystone'),
        'header-style-4'           => __('Header Style 4', 'keystone'),
        'header-style-5'           => __('Header Style 5', 'keystone'),
        'header-style-6'           => __('Header Style 6', 'keystone'),
        'header-style-7'           => __('Header Style 7', 'keystone'),
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
$cmb2_box_header_style->add_field([
    'name'          => __('Header Colors', 'keystone'),
    'desc'          => __('These change based on which Header Layout Style is chosen.', 'keystone'),
    'id'            => 'cmb2_id_header_style_color_options_1',
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
        'data-conditional-id'     => 'cmb2_id_header_layout_style',
        'data-conditional-value'  => wp_json_encode(['header_modern_style_1']),
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
        'dark'              => __('Dark', 'keystone'),
        'white'             => __('White', 'keystone'),
        'theme-colored'     => __('Theme Colored', 'keystone'),
        'theme-colored-2'   => __('Theme Colored 2', 'keystone'),
    ],
    'attributes'    => [
        'data-conditional-id'     => 'cmb2_id_header_layout_style',
        'data-conditional-value'  => wp_json_encode(['header_modern_style_4']),
    ],
]);

$cmb2_box_header_style->add_field([
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

$cmb2_box_header_style->add_field([
  'name'    => __('Disable Mega Menu', 'keystone'),
  'desc'    => __('The Mega Menu is a large drop-down menu that appears when you hover over its button in the primary header menu of your site.', 'keystone'),
  'type'    => 'checkbox',
  'default' => false,
  'id'      => $prefix.'disable_mega_menu'
]);

$cmb2_box_header_style->add_field([
  'name'    => __('Hide Search Icon', 'keystone'),
  'desc'    => __('Users will not have the ability to search your site from the header if you disable this.', 'keystone'),
  'type'    => 'checkbox',
  'default' => false,
  'id'      => $prefix.'disable_header_search'
]);

$cmb2_box_header_style->add_field([
  'name'    => __('Hide Shopping Cart Icon', 'keystone'),
  'desc'    => __('This only applies if you have enabled E-commerce functionality on your site.', 'keystone'),
  'type'    => 'checkbox',
  'default' => false,
  'id'      => $prefix.'disable_cart_icon'
]);

$cmb2_box_header_style->add_field([
  'name'    => __('Disable Top Bar', 'keystone'),
  'desc'    => __('This disables the thin bar at the very top of the page that sometimes contains business hours and/or a navigation menu. This setting only applies if the header style you have selected includes a top bar.', 'keystone'),
  'type'    => 'checkbox',
  'default' => false,
  'id'      => $prefix.'disable_top_bar'
]);

$field1 = $cmb2_box_header_style->add_field([
  'name'    => __('Override Top Bar Color', 'keystone'),
  'desc'    => __('If this setting is checked, the color in the next input will be used for the top bar background.', 'keystone'),
  'type'    => 'checkbox',
  'default' => false,
  'id'      => $prefix.'disable_top_bar'
]);

$field2 = $cmb2_box_header_style->add_field([
  'name'    => __('Top Bar Color Override', 'keystone'),
  'default' => '#1196CC',
  'id'      => $prefix.'top_bar_color_override',
  'type'    => 'colorpicker',
]);

if(!is_admin()){
	return;
}
$cmb2Grid = new \Cmb2Grid\Grid\Cmb2Grid($cmb2_box_header_style);
$row = $cmb2Grid->addRow();
$row->addColumns(array($field1, $field2));

$cmb2_header_widget_1 = $cmb2_box_header_style->add_field( array(
  'id'          => 'cmb2_id_group_header_widget_1',
  'type'        => 'group',
  // 'description' => __( 'Generates reusable form entries', 'cmb2' ),
  'repeatable'  => false, // use false if you want non-repeatable group
  'options'     => array(
    'group_title'       => __( 'Header Widget 1', 'keystone' ), // since version 1.1.4, {#} gets replaced by row number
    'sortable'          => true,
    // 'closed'         => true, // true to have the groups closed by default
    // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
  ),
) );

$cmb2_box_header_style->add_group_field( $cmb2_header_widget_1, array(
  'name'        => __('Icon Classes', 'keystone'),
  'id'          => 'icon',
  'desc'        => __('For example:', 'keystone') . ' <b>fas fa-camera</b>' . '<br><br>' . __('To reference an icon, you need to know two bits of information. 1) its name, prefixed with fa- (if you choose a Font Awesome Icon) and 2) the style you want to use’s corresponding prefix**. For icons from the Flaticon set you only need to enter a single class. Example: .flaticon-dental-amalgam-capsule', 'keystone'),
  'type'        => 'text',
  'after_field' => Keystone()->icons->getIconReferenceTable(),
  'classes'     => 'icon-field-table'
));

$cmb2_box_header_style->add_group_field( $cmb2_header_widget_1, array(
  'name' => __('Line 1', 'keystone'),
  'desc' => __('Plain text.', 'keystone'),
  'id'   => 'cta-text',
  'type' => 'text_medium',
) );

$cmb2_box_header_style->add_group_field( $cmb2_header_widget_1, array(
  'name' => __('Line 2', 'keystone'),
  'desc' => __('Plain text or link.', 'keystone'),
  'id'   => 'cta-bold-text',
  'type' => 'text_medium',
) );

$cmb2_header_widget_2 = $cmb2_box_header_style->add_field( array(
  'id'          => 'cmb2_id_group_header_widget_2',
  'type'        => 'group',
  // 'description' => __( 'Generates reusable form entries', 'cmb2' ),
  'repeatable'  => false, // use false if you want non-repeatable group
  'options'     => array(
    'group_title'       => __( 'Header Widget 2', 'keystone' ), // since version 1.1.4, {#} gets replaced by row number
    'sortable'          => true,
    // 'closed'         => true, // true to have the groups closed by default
    // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
  ),
) );

$cmb2_box_header_style->add_group_field( $cmb2_header_widget_2, array(
  'name'        => __('Icon Classes', 'keystone'),
  'id'          => 'icon',
  'desc'        => __('For example:', 'keystone') . ' <b>fas fa-camera</b>' . '<br><br>' . __('To reference an icon, you need to know two bits of information. 1) its name, prefixed with fa- (if you choose a Font Awesome Icon) and 2) the style you want to use’s corresponding prefix**. For icons from the Flaticon set you only need to enter a single class. Example: .flaticon-dental-amalgam-capsule', 'keystone'),
  'type'        => 'text',
  'after_field' => Keystone()->icons->getIconReferenceTable(),
  'classes'     => 'icon-field-table'
));

$cmb2_box_header_style->add_group_field( $cmb2_header_widget_2, array(
  'name' => __('Line 1', 'keystone'),
  'desc' => __('Plain text.', 'keystone'),
  'id'   => 'cta-text',
  'type' => 'text_medium',
) );

$cmb2_box_header_style->add_group_field( $cmb2_header_widget_2, array(
  'name' => __('Line 2', 'keystone'),
  'desc' => __('Plain text or link.', 'keystone'),
  'id'   => 'cta-bold-text',
  'type' => 'text_medium',
) );

$cmb2_header_widget_3 = $cmb2_box_header_style->add_field( array(
  'id'          => 'cmb2_id_group_header_widget_3',
  'type'        => 'group',
  // 'description' => __( 'Generates reusable form entries', 'cmb2' ),
  'repeatable'  => false, // use false if you want non-repeatable group
  'options'     => array(
    'group_title'       => __( 'Header Widget 3', 'keystone' ), // since version 1.1.4, {#} gets replaced by row number
    'sortable'          => true,
    // 'closed'         => true, // true to have the groups closed by default
    // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
  ),
) );

$cmb2_box_header_style->add_group_field( $cmb2_header_widget_3, array(
  'name'        => __('Icon Classes', 'keystone'),
  'id'          => $prefix . 'widget_3_icon',
  'desc'        => __('For example:', 'keystone') . ' <b>fas fa-camera</b>' . '<br><br>' . __('To reference an icon, you need to know two bits of information. 1) its name, prefixed with fa- (if you choose a Font Awesome Icon) and 2) the style you want to use’s corresponding prefix**. For icons from the Flaticon set you only need to enter a single class. Example: .flaticon-dental-amalgam-capsule', 'keystone'),
  'type'        => 'text',
  'after_field' => Keystone()->icons->getIconReferenceTable(),
  'classes'     => 'icon-field-table'
));

$cmb2_box_header_style->add_group_field( $cmb2_header_widget_3, array(
  'name' => __('Line 1', 'keystone'),
  'desc' => __('Plain text.', 'keystone'),
  'id'   => 'text',
  'type' => 'text_medium',
) );

$cmb2_box_header_style->add_group_field( $cmb2_header_widget_3, array(
  'name' => __('Line 2', 'keystone'),
  'desc' => __('Plain text or link. Wrap in [square braces] if this should be a clickable link', 'keystone'),
  'id'   => 'bold-text',
  'type' => 'text_medium',
) );

$cmb2_header_cta = $cmb2_box_header_style->add_field( array(
  'id'          => $prefix. 'header-cta',
  'type'        => 'group',
  // 'description' => __( 'Generates reusable form entries', 'cmb2' ),
  'repeatable'  => false, // use false if you want non-repeatable group
  'options'     => array(
    'group_title'       => __( 'Call-To-Action Button', 'keystone' ), // since version 1.1.4, {#} gets replaced by row number
    // 'closed'         => true, // true to have the groups closed by default
    // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
  ),
) );

$cmb2_box_header_style->add_group_field( $cmb2_header_cta, array(
  'name' => __('Button Text', 'keystone'),
  'desc' => __('Text shown on call-to-action button.', 'keystone'),
  'id'   => 'button-text',
  'type' => 'text_medium',
) );

$cmb2_box_header_style->add_group_field( $cmb2_header_cta, array(
  'name' => __('Button Link URL', 'keystone'),
  'desc' =>  __('https://www.example.com', 'keystone'),
  'id'   => 'button-link-url',
  'type' => 'text_url',
  'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
) );