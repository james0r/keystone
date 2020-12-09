<?php
/**
 * Various helper methods for Keystone.
 *
 */

class Keystone_Helpers {
    public static function percent_to_pixels($percent, $max_width = 1920) {
        return intval((intval($percent) * $max_width) / 100);
    }

    public static function ems_to_pixels($ems, $font_size = 14) {
        return intval(Fusion_Sanitize::number($ems) * $font_size);
    }

    public static function is_url($value) {
      return parse_url($value, PHP_URL_SCHEME) && parse_url($value, PHP_URL_HOST);
    }
}

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
