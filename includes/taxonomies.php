<?php

// Add new taxonomy, NOT hierarchical (like tags)
$labels = array(
  'name'                       => _x( 'Writers', 'taxonomy general name', 'textdomain' ),
  'singular_name'              => _x( 'Writer', 'taxonomy singular name', 'textdomain' ),
  'search_items'               => __( 'Search Writers', 'textdomain' ),
  'popular_items'              => __( 'Popular Writers', 'textdomain' ),
  'all_items'                  => __( 'All Writers', 'textdomain' ),
  'parent_item'                => null,
  'parent_item_colon'          => null,
  'edit_item'                  => __( 'Edit Writer', 'textdomain' ),
  'update_item'                => __( 'Update Writer', 'textdomain' ),
  'add_new_item'               => __( 'Add New Writer', 'textdomain' ),
  'new_item_name'              => __( 'New Writer Name', 'textdomain' ),
  'separate_items_with_commas' => __( 'Separate writers with commas', 'textdomain' ),
  'add_or_remove_items'        => __( 'Add or remove writers', 'textdomain' ),
  'choose_from_most_used'      => __( 'Choose from the most used writers', 'textdomain' ),
  'not_found'                  => __( 'No writers found.', 'textdomain' ),
  'menu_name'                  => __( 'Writers', 'textdomain' ),
);

$args = array(
  'hierarchical'          => false,
  'labels'                => $labels,
  'show_ui'               => true,
  'show_admin_column'     => true,
  'update_count_callback' => '_update_post_term_count',
  'query_var'             => true,
  'rewrite'               => array( 'slug' => 'writer' ),
);

register_taxonomy( 'writer', 'book', $args );
