<?php
/**
 * Handles image logic for the Keystone theme
 *
 */

class Keystone_Images {
   public function __construct() {

    add_filter('render_image_template', [$this, 'filter_render_image_template']);
    add_filter('render_title_image', [$this, 'filter_render_title_image']);
   }

   public function filter_render_image_template($value, $alt = 'decorative image') {
    $is_url = Keystone_Helpers::is_url($value);

    if ($is_url) {
      echo sprintf('<img src="%s" alt="%s">', $value, $alt);
    } else {
      echo wp_get_attachment_image($value);
    }
   }
   public function filter_render_title_image($value, $alt = 'decorative image') {
      $value = $value ? $value : Keystone::$template_dir_url . '/assets/images/title-icon.png';

      $this->filter_render_image_template($value, $alt);
   }
}

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
