<?php
/**
 * Handles accessibility logic for Keystone
 *
 */

class Keystone_A11y {
    public function __construct() {
        add_filter('language_attributes', [$this, 'add_a11y_html_classes'], 10, 2);
    }

    public function add_a11y_html_classes($output, $doctype) {
        if ('html' !== $doctype) {
            return $output;
        }

        $output .= ' class="no-focus-outline"';

        return $output;
    }
}

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
