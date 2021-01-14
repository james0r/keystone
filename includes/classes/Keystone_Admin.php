<?php

/**
* A class to manage various stuff in the WordPress admin area.
*/

class Keystone_Admin {
  private $theme_version;

  private $theme_url = 'https://www.clinicrevenue.com/';

  public static $hubspot_code = '';

  public function __construct() {
    $this->set_theme_version();

    add_action('admin_footer_text', array($this, 'filter_admin_footer_credits'));
    add_action('update_footer', array($this, 'filter_change_footer_version'), 9999);
    add_action('admin_enqueue_scripts', array($this, 'filter_enqueue_admin_scripts'));
  }

  /**
   * Modifies the admin credits.
   */
  public function filter_admin_footer_credits($footer_text) {
    $footer_text = __('Thank you for using Keystone %s by <a href="%s" target="_blank">Clinic Revenue</a>', 'keystone');

    return sprintf($footer_text, $this->theme_version, $this->theme_url);
  }

  public function filter_change_footer_version($cp_version) {
    return 'Classic Press ' . $cp_version;
  }

  public function set_theme_version() {
    $this->theme_version = Keystone()->get_normalized_theme_version();
  }

  public function filter_enqueue_admin_scripts() {
    // Enqueue critical admin stylesheets
    wp_enqueue_style('admin-styles', get_template_directory_uri() . '/assets/admin/admin.css');
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/admin/jquery-ui.min.js');
    wp_enqueue_script('admin-scripts', get_template_directory_uri() . '/assets/admin/admin.js', null, 1.0, true);
  }
}
