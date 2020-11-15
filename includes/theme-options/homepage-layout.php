<?php
/**
* Header Theme Options
*/

$cmb2_homepage_layout = new_cmb2_box([
  'id'            => 'cmb2_metabox_homepage_styles',
  'option_key'    => 'cmb_homepage_layout',
  'title'         => __('Homepage Layout', 'keystone'),
  'object_types'  => ['options-page'], // Post type
  'parent_slug'  => 'cmb_main_options',
  'show_names'    => true
]);

$cmb2_homepage_layout->add_field([
  'name'             => __('Homepage Layout', 'cmb2'),
  'id'               => 'cmb2_id_homepage_style',
  'type'             => 'radio_image',
  'options'          => [
      'homepage-multipage-layout-1'    => __('Multipage Layout 1', 'keystone'),
      'homepage-multipage-layout-2'    => __('Multipage Layout 2', 'keystone'),
      'homepage-multipage-layout-3'    => __('Multipage Layout 3', 'keystone'),
      'homepage-multipage-layout-4'    => __('Multipage Layout 4', 'keystone'),
      'homepage-multipage-layout-5'    => __('Multipage Layout 5', 'keystone'),
      'homepage-multipage-layout-6'    => __('Multipage Layout 6', 'keystone'),
      'homepage-multipage-layout-7'    => __('Multipage Layout 7', 'keystone'),
      'homepage-multipage-layout-8'    => __('Multipage Layout 8', 'keystone'),
      'homepage-multipage-layout-9'    => __('Multipage Layout 9', 'keystone'),
      'homepage-multipage-layout-10'    => __('Multipage Layout 10', 'keystone'),
      'homepage-multipage-layout-11'    => __('Multipage Layout 11', 'keystone'),
      'homepage-multipage-layout-12'    => __('Multipage Layout 12', 'keystone'),
      'homepage-singlepage-layout-1'    => __('Singlepage Layout 1', 'keystone'),
      'homepage-singlepage-layout-2'    => __('Singlepage Layout 2', 'keystone'),
      'homepage-boxed-layout-1'    => __('Boxed Layout 1 - Side', 'keystone'),
      'homepage-boxed-layout-2'    => __('Boxed Layout 2 - Short', 'keystone'),
      'homepage-hot-parallax-layout'    => __('Hot Parallax Layout', 'keystone'),
      'homepage-hot-fullpage-slider'    => __('Hot Fullpage Slider', 'keystone'),
      'homepage-hot-pagepiling-slider'    => __('Hot Pagepiling Slider', 'keystone'),
      'homepage-hot-split-slider'    => __('Hot Split Slider', 'keystone'),
      'homepage-hot-vertical-revolution-slider'    => __('Hot Vertical Revolution Slider', 'keystone'),
  ],
  'images_path'      => get_template_directory_uri(),
  'images'           => [
      'homepage-multipage-layout-1'    => 'assets/images/meta/multipage-1.png',
      'homepage-multipage-layout-2'    => 'assets/images/meta/multipage-2.png',
      'homepage-multipage-layout-3'    => 'assets/images/meta/multipage-3.png',
      'homepage-multipage-layout-4'    => 'assets/images/meta/multipage-4.jpg',
      'homepage-multipage-layout-5'    => 'assets/images/meta/multipage-5.jpg',
      'homepage-multipage-layout-6'    => 'assets/images/meta/multipage-6.jpg',
      'homepage-multipage-layout-7'    => 'assets/images/meta/multipage-7.jpg',
      'homepage-multipage-layout-8'    => 'assets/images/meta/multipage-8.jpg',
      'homepage-multipage-layout-9'    => 'assets/images/meta/multipage-9.jpg',
      'homepage-multipage-layout-10'    => 'assets/images/meta/multipage-10.jpg',
      'homepage-multipage-layout-11'    => 'assets/images/meta/multipage-11.jpg',
      'homepage-multipage-layout-12'    => 'assets/images/meta/multipage-12.jpg',
      'homepage-singlepage-layout-1'    => 'assets/images/meta/singlepage-layout-1.jpg',
      'homepage-singlepage-layout-2'    => 'assets/images/meta/singlepage-layout-2.jpg',
      'homepage-boxed-layout-1'    => 'assets/images/meta/boxed-layout-1.jpg',
      'homepage-boxed-layout-2'    => 'assets/images/meta/boxed-layout-2.jpg',
      'homepage-hot-parallax-layout'    => 'assets/images/meta/hot-parallax-layout.jpg',
      'homepage-hot-fullpage-slider'    => 'assets/images/meta/hot-fullpage-slider.jpg',
      'homepage-hot-pagepiling-slider'    => 'assets/images/meta/hot-pagepiling-slider.jpg',
      'homepage-hot-split-slider'    => 'assets/images/meta/hot-split-slider.jpg',
      'homepage-hot-vertical-revolution-slider'    => 'assets/images/meta/hot-vertical-revolution-slider.jpg',
  ]
]);