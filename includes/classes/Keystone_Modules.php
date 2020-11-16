<?php

/**
* THIS CLASS HANDLES THE DYNAMIC MODULES
*/

class Keystone_Modules {
    public function __construct() {
      Keystone()->requireOnce('includes/modules/admin-template.php');
      add_action('cmb2_admin_init', [$this, 'register_module_fields']);
      add_action('after_switch_theme', [$this, 'createModulesTable']);
    }

    public function createModulesTable() {
        $sql =
         'CREATE TABLE IF NOT EXISTS modules (
           id int(32) NOT NULL auto_increment ,
           module varchar(100) NOT NULL,
           name varchar(255) NOT NULL,
           page int(32) NOT NULL,
           display_order int(32) NOT NULL,
           PRIMARY KEY  (id)
         )';
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta($sql);
    }

    public static function register_module_fields() {
      Keystone()->requireOnce('/includes/modules/modules.php');
    }
   
}
