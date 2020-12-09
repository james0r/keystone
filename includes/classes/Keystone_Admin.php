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

        add_filter('admin_footer_text', [$this, 'filter_admin_footer_credits']);
        add_filter('update_footer', [$this, 'filter_change_footer_version'], 9999);
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
}
