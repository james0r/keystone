<?php

/**
* This class handles the creation of menus during and
* after the user activates the Keystone theme
*/

class Keystone_Menus {
  public function __construct() {
    add_action('after_setup_theme', array($this, 'keystone_register_site_menus'), 0);
  }

  public function keystone_register_site_menus() {
    register_nav_menus(array(
      'header-primary'     => __('Header Primary Menu', 'keystone'),
      'header-secondary'   => __('Header Secondary Menu', 'keystone'),
      'footer-primary'     => __('Footer Primary Menu', 'keystone'),
      'footer-secondary'   => __('Footer Secondary Menu', 'keystone')
    ));
  }
}
