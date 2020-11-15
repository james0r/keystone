<?php
/**
* Header Theme Options
*/
  

$cmb2_box_blog = new_cmb2_box([
  'id'           => 'cmb2_id_blog_box',
  'option_key'   => 'cmb2_key_blog_box',
  'title'        => __('Blog', 'keystone'),
  'object_types' => ['options-page'],
  'parent_slug'  => 'cmb_main_options',
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
  'desc'             => '<span style="color: red;">' . __('<span style="color: red;">This will completely disable all blog functionality on your website.', 'keystone') . '</span>',
  'type'	           => 'switch',
  'default'          => false, //If it's checked by default 
  'active_value'     => true,
  'inactive_value'   => false
]);