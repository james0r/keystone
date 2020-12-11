<?php

add_action('admin_menu', 'register_demos_page');


function register_demos_page() {
  add_submenu_page(
      'tools.php',
      __('Keystone Tools', 'keystone'),
      __('Keystone Tools', 'keystone'),
      'manage_options',
      'keystone_demos',
      'somehtml',
      5
  );
}

function somehtml() {
  ?>
    yay i'm some html
  <?php
}

