<?php
/**
 * This class handles header layout and functionality logic
 *
 */

class Keystone_Header {
    public function __construct() {
    }

    public function render_header() {
        echo '<header class="header" id="header">';
        keystone_render_template('header-top-bar');
        keystone_render_template('header-middle-bar');
        keystone_render_template('header-bottom-bar');
        echo '</header>';
    }

    private function get_options_array() {
        $header_options = [];
        $header_options_map = $this->get_options_map();
        foreach ($header_options_map as $slug => $value) {
            $box_key = $value[0];
            $field_id = $value[1];
            if (!empty(cmb2_get_option($box_key, $field_id))) {
                $header_options[$slug] = cmb2_get_option($box_key, $field_id);
            }
        }

        return $header_options;
    }

    // Simple slugs are created here for options groups and mapped to their
    // corresponding CMB2 input values
    private function get_options_map() {
        return [
            'header-style-group'         => ['cmb2_key_header_styles_box', 'cmb2_id_header_group_style'],
            'header-widget-1-group'      => ['cmb2_key_header_styles_box', 'cmb2_id_header_group_widget_1'],
            'header-widget-2-group'      => ['cmb2_key_header_styles_box', 'cmb2_id_header_group_widget_2'],
            'header-widget-3-group'      => ['cmb2_key_header_styles_box', 'cmb2_id_header_group_widget_3'],
            'header-cta-group'           => ['cmb2_key_header_styles_box', 'cmb2_id_header_group_cta'],
            'header-advanced-group'      => ['cmb2_key_header_styles_box', 'cmb2_id_header_group_advanced'],
        ];
    }
}

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
