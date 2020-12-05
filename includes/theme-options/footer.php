<?php
/**
* Footer Theme Options
*/

$prefix = 'cmb2_id_footer_';

$cmb2_box_footer_style = new_cmb2_box([
    'id'           => $prefix . 'box',
    'option_key'   => 'cmb2_key_footer_box',
    'title'        => __('Footer', 'keystone'),
    'object_types' => ['options-page'],
    'parent_slug'  => 'cmb_main_options',
]);

$footer_style_layout = $cmb2_box_footer_style->add_field([
    'id'          => $prefix . 'group_style_layout',
    'type'        => 'group',
    'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Footer Style & Layout', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
    ],
]);

$cmb2_box_footer_style->add_group_field($footer_style_layout, [
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

$cmb2_box_footer_style->add_group_field($footer_style_layout, [
    'name'    => __('Copyright Line', 'keystone'),
    'desc'    => __('This text appears at the very bottom of the page and often has a copyright symbol and the current year. To output the current year, you can enter [current-year] where you would like it to appear.', 'keystone'),
    'id'      => 'cmb_footer_copyright',
    'type'    => 'text'
]);

$footer_main_area = $cmb2_box_footer_style->add_field([
    'id'          => $prefix . 'group_main_area',
    'type'        => 'group',
    'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Footer Main Area', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
    ],
]);

$cmb2_box_footer_style->add_group_field($footer_main_area, [
    'name'    => __('Footer Logo Image', 'keystone'),
    'id'      => 'footer_logo',
    'type'    => 'file',
    'text'    => [
        'add_upload_file_text' => __('Add or Upload Image', 'keystone') // Change upload button text. Default: "Add or Upload File"
    ],
    'query_args' => [
        'type' => [
            'image/gif',
            'image/jpeg',
            'image/png',
        ],
    ],
    'preview_size' => 'medium', // Image size to use when previewing in the admin.
]);

$cmb2_box_footer_style->add_group_field($footer_main_area, [
    'name' => __('Clinic Description', 'keystone'),
    'desc' => __('This area is best used for a company description or mission statement. A concise and clear description or message is recommended.', 'keystone'),
    'id'   => __('clinic_description', 'keystone'),
    'type' => 'textarea_small'
]);

$cmb2_box_footer_style->add_group_field($footer_main_area, [
    'name'              => __('Social Links To Display In Header', 'keystone'),
    'desc'              => __('Links must be provided in on the Social Links settings page under Keystone Options. If no links are provided in Keystone Options > Social Links, no options will be available here.', 'keystone'),
    'id'                => 'social_links_to_display',
    'type'              => 'multicheck',
    'select_all_button' => false,
    'options_cb'        => 'get_entered_social_links_array',
]);

$footer_primary_menu = $cmb2_box_footer_style->add_field([
    'id'          => $prefix . 'group_primary_navigation_menu',
    'type'        => 'group',
    'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Footer Primary Navigation Menu', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
    ],
]);

$cmb2_box_footer_style->add_group_field($footer_primary_menu, [
    'name'    => __('Footer Menu Title', 'keystone'),
    'desc'    => __('This will show up above the navigation menu in the footer.', 'keystone'),
    'default' => __('Useful Links', 'keystone'),
    'id'      => 'menu_title',
    'type'    => 'text_medium'
]);

$cmb2_box_footer_style->add_group_field($footer_primary_menu, [
    'desc' => __('To add, remove, or arrange links for this menu, go to <b> Appearance > Menus </b> on the administrator sidebar and edit the Footer Primary Menu.', 'keystone'),
    'type' => 'title',
    'id'   => 'wiki_test_title24533'
]);

$footer_secondary_menu = $cmb2_box_footer_style->add_field([
    'id'          => $prefix . 'group_secondary_navigation_menu',
    'type'        => 'group',
    'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Footer Secondary Navigation Menu', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
    ],
]);

$cmb2_box_footer_style->add_group_field($footer_secondary_menu, [
    'name'    => __('Footer Secondary Menu Title', 'keystone'),
    'desc'    => __('This will show up above the navigation menu in the footer.', 'keystone'),
    'default' => __('Useful Links', 'keystone'),
    'id'      => 'menu_title',
    'type'    => 'text_medium'
]);

$cmb2_box_footer_style->add_group_field($footer_secondary_menu, [
    'desc' => __('To add, remove, or arrange links for this menu, go to <b> Appearance > Menus </b> on the administrator sidebar and edit the Footer Secondary Menu.', 'keystone'),
    'type' => 'title',
    'id'   => 'wiki_test_title22352'
]);

$footer_blog_area = $cmb2_box_footer_style->add_field([
    'id'          => $prefix . 'group_blog_area',
    'type'        => 'group',
    'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Footer Blog / News Area', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
    ],
]);

$cmb2_box_footer_style->add_group_field($footer_blog_area, [
    'name'    => __('Blog / News Title', 'keystone'),
    'desc'    => __('This title will be displayed above the 3 newest blog or news entries.', 'keystone'),
    'default' => __('Latest News', 'keystone'),
    'id'      => 'blog_title',
    'type'    => 'text_medium'
]);

$cmb2_box_footer_style->add_group_field($footer_blog_area, [
    'name'        => __('Manually Select Posts', 'keystone'),
    'desc'        => __('Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.', 'keystone'),
    'id'          => $prefix . 'manual_posts',
    'before_row'  => '<span style="color: red; font-weight: bold;">' . __('Important! If you have any posts attached here, the footer will not show new posts and will continue to only show posts attached here.', 'keystone') . '</span>',
    'type'        => 'custom_attached_posts',
    'column'      => true, // Output in the admin post-listing as a custom column. https://github.com/CMB2/CMB2/wiki/Field-Parameters#column
    'options'     => [
        'show_thumbnails' => true, // Show thumbnails on the left
        'filter_boxes'    => true, // Show a text box for filtering the results
        'query_args'      => [
            'posts_per_page' => 10,
            'post_type'      => 'post',
        ], // override the get_posts args
    ],
]);

$footer_call_us = $cmb2_box_footer_style->add_field([
    'id'          => $prefix . 'group_call_us',
    'type'        => 'group',
    'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Footer "Call Us" Area', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
    ],
]);

$cmb2_box_footer_style->add_group_field($footer_call_us, [
    'name'    => __('Area Title', 'keystone'),
    'default' => __('Call Us Now', 'keystone'),
    'desc'    => __('This title will show up above the phone numbers you provide.', 'keystone'),
    'type'    => 'text_medium',
    'id'      => 'title'
]);

$cmb2_box_footer_style->add_group_field($footer_call_us, [
    'name'    => __('Phone Number Entries', 'keystone'),
    'desc'    => __('Enter phone numbers and/or labels before the phone numbers. Note: If no phone numbers are provided here, your phone numbers from the Clinic Information page will be used.', 'keystone'),
    'id'      => 'phone',
    'type'    => 'text_medium',
    'repeatable'  => true
]);

$footer_hours = $cmb2_box_footer_style->add_field([
    'id'          => $prefix . 'group_hours',
    'type'        => 'group',
    'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Footer Business Hours', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
    ],
]);

$cmb2_box_footer_style->add_group_field($footer_hours, [
    'desc' => __('This area uses the business hours entered on the <a href="/wp-admin/admin.php?page=cmb_main_clinic_information">Keystone Options > Clinic Information</a> page.', 'keystone'),
    'type' => 'title',
    'id'   => 'cmb2_id_field_title_footer_hours'
]);

$footer_hours = $cmb2_box_footer_style->add_field([
    'id'          => $prefix . 'group_newsletter',
    'type'        => 'group',
    'repeatable'  => false, // use false if you want non-repeatable group
    'options'     => [
        'group_title'       => __('Footer Newsletter Signup', 'keystone'), // since version 1.1.4, {#} gets replaced by row number
    ],
]);

$cmb2_box_footer_style->add_group_field($footer_hours, [
    'name'    => __('Footer Newsletter Title', 'keystone'),
    'desc'    => __('This title will be displayed above the newsletter email signup.', 'keystone'),
    'default' => __('Subscribe With Us', 'keystone'),
    'id'      => 'title',
    'type'    => 'text_medium'
]);

$cmb2_box_footer_style->add_group_field($footer_hours, [
    'name'             => __('Disable Newsletter Signup in Footer', 'keystone'),
    'id'               => 'disable_signup',
    'desc'             => __('This will not disable any other newsletter functionality, it will merely hide the newsletter section in the footer.', 'keystone'),
    'type'	            => 'switch',
    'sanitization_cb'  => 'sanitize_checkbox',
    'default'          => false, //If it's checked by default
    'active_value'     => true,
    'inactive_value'   => false
]);
