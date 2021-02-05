<?php

/**
* This class handles Keystone custom widgets
*/

class Keystone_Widgets {
  public function __construct() {
    Keystone()->requireOnce('/includes/classes/widgets/Example_Widget.php');

    add_action('widgets_init', [$this, 'wpb_load_widget']);
  }

  // Register and load the widget
  public function wpb_load_widget() {
    register_widget('wpb_widget');
  }
}



