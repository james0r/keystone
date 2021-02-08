<?php
/**
* Core class for the Keystone Theme.
*/

class Keystone {
  public static $instance = null;

  private static $theme_prefix;

  public static $template_dir_path = '';

  public static $template_dir_url = '';

  public static $stylesheet_dir_path = '';

  public static $stylesheet_dir_url = '';

  public static $scripts_dir_path = '';

  public static $scripts_dir_url = '';

  public static $version = KEYSTONE_VERSION;

  private function __construct() {
    self::$theme_prefix = 'keystone';

    add_filter('use_block_editor_for_post', '__return_false', 10);
    add_action('wp_footer', array($this, 'display_template_toast'));
  }

  // The Keystone Monolith is the Keystone instance that contains static member variables for all other class instances.
  // Here, Keystone object is instantiated from within the class itself
  // and stored as a static variable..

  public static function getInstance() {
    if (self::$instance == null) {
      self::$instance = new Keystone();

      self::$instance->init = new Keystone_Init;
      self::$instance->scripts = new Keystone_Scripts;
      self::$instance->helpers = new Keystone_Helpers;
      self::$instance->cmb2 = new Keystone_CMB2;
      self::$instance->modules = new Keystone_Modules;
      self::$instance->options = new Keystone_Options;
      self::$instance->body_classes = new Keystone_Body_Classes;
      self::$instance->dynamic_css = new Keystone_Dynamic_CSS;
      self::$instance->dynamic_scripts = new Keystone_Dynamic_Scripts;
      self::$instance->sidebars = new Keystone_Sidebars;
      self::$instance->icons = new Keystone_Icons;
      self::$instance->menus = new Keystone_Menus;
      self::$instance->demos = new Keystone_Demos;
      self::$instance->admin = new Keystone_Admin;
      self::$instance->images = new Keystone_Images;
      self::$instance->a11y = new Keystone_A11y;
      self::$instance->header = new Keystone_Header;
      self::$instance->tools = new Keystone_Tools;
      self::$instance->widgets = new Keystone_Widgets;
      self::$instance->walker = new Keystone_Walker;
    }

    return self::$instance;
  }

  public function getPrefix() {
    return self::$theme_prefix;
  }

  public function requireOnce($path = '', $base = '') {
    if ($base === '') {
      $base = self::$template_dir_path;
    }

    if (strpos($path, '/') != 0) {
      $path = '/' . $path;
    }

    if ($this->ifFileExists($base . $path)) {
      require_once $base . $path;
    } else {
      throw new Exception($path . 'File Not Found');
    }
    return $this; // Return class instance for method chaining
  }

  private function ifFileExists($full_path) {
    if (file_exists($full_path)) {
      return true;
    }
  }

  public function render_progressive_assets($script_handles, $style_handles) {
    if (cmb2_get_option('cmb2_key_box_advanced_settings', 'cmb2_id_field_script_load_method') == 'progressive-script-loading') {
      apply_filters('render_dynamic_scripts', $script_handles);
    }

    if (cmb2_get_option('cmb2_key_box_advanced_settings', 'cmb2_id_field_stylesheet_load_method') == 'progressive-css-loading') {
      apply_filters('render_dynamic_css', $style_handles);
    }
  }

  public static function get_normalized_theme_version() {
    $theme_version = self::$version;
    $theme_version_array = explode('.', $theme_version);

    if (isset($theme_version_array[2]) && '0' === $theme_version_array[2]) {
      $theme_version = $theme_version_array[0] . '.' . $theme_version_array[1];
    }

    return $theme_version;
  }

  // Adds a toast in the bottom right corner displaying current template while logged into admin
  public static function display_template_toast() {
    if (is_super_admin()) {
      global $template;

      $markup = '<div class="wp-template-toast">
						%s
						</div>
						<style>
							.wp-template-toast {
								position: fixed;
								height: 20px;
								width: 150px;
								background: rgba(255,0,0,.5);
								color: white;
								bottom: 0px;
								display: flex;
								justify-content: center;
								font-size: 12px;
								right: 0px;
								border-radius: 5px;
								animation: fadeout 1s 2s forwards;
							}
							@keyframes fadeout {
								from {
									opacity: 1;
								}
								to {
									opacity: 0;
								}
							}
						</style>';

      echo sprintf($markup, basename($template));
    }
  }
}
