<?php

/**
* This class handles Keystone and ClinicRevenue branding.
*/

class Keystone_Branding {
    public function __construct() {
        add_filter('admin_footer_text', [$this, 'filter_admin_footer_credits']);
        add_filter( 'update_footer', [$this, 'filter_change_footer_version'], 9999 );
    }

    /**
     * Modifies the admin credits.
     */
    public function filter_admin_footer_credits($footer_text) {
        $footer_text = __('Thank you for using Keystone 8 by <a href="https://www.clinicrevenue.com" target="_blank">Clinic Revenue</a>', 'keystone');

        return $footer_text;
    }

    function filter_change_footer_version($cp_version) {
      return 'Classic Press ' . $cp_version;
    }
}
