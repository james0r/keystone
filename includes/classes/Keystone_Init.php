<?php
/**
 * This handles the enqueueing of styles and scripts
 *
 */

class Keystone_Init {
  public function __construct() {
    // Register support for specific wordpress features
    add_action('after_setup_theme', array($this, 'add_theme_supports'));
    add_action('after_setup_theme', array($this, 'add_image_sizes'));

    Keystone()->requireOnce('/includes/helper-functions.php');
  }

  public function add_image_sizes() {
    // Register wordpress image sizes
    add_image_size('full-width', 1600);
    add_image_size('logo-wide', 1340);
    add_image_size('logo-square', 500, 500, true);
  }

  public function add_theme_supports() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption'
    ));
    add_theme_support('automatic-feed-links');
    add_theme_support('menus');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('dark-editor-style');
    add_theme_support('responsive-embed');
  }
}

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
