<?php

/**
* THIS CLASS HANDLES SCRIPTS
*/

class Keystone_Sidebars {
  public function __construct() {
    add_action('widgets_init', array($this, 'keystone_register_sidebars'));
  }

  public function keystone_register_sidebars() {
    // Register the Mega Menu Sidebar
    register_sidebar(
      array(
        'id'            => 'keystone-mega-menu',
        'name'          => __('Keystone Mega Menu', 'keystone'),
        'description'   => __('A row of 4 widgets.', 'keystone'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
      )
    );
    // Register the 'primary' sidebar.
    register_sidebar(
      array(
        'id'            => 'keystone-widget-bar',
        'name'          => __('Keystone Widget Bar', 'keystone'),
        'description'   => __('A row of 4 widgets.', 'keystone'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
      )
    );
  }
}
