<?php

$font_body = cmb2_get_option('cmb_theme_colors', 'cmb2_id_body_font');
$font_heading = cmb2_get_option('cmb_theme_colors', 'cmb2_id_heading_font');
$font_weight = cmb2_get_option('cmb_theme_colors', 'cmb2_id_field_global_heading_font_weight');

if (!empty($font_body)) {

    echo '<link id="keystone-body-google-font" href="https://fonts.googleapis.com/css?family=' . str_replace(' ', '+', $font_body) .'|'.str_replace(' ', '+', $font_heading) .':'. $font_weight. '&display=swap" rel="stylesheet">';
    echo '<style>';
    echo 'body {
              font-family: "' . $font_body . '" !important;
        }';
    echo '</style>';
}

if (!empty($font_heading)) {
    echo '<style>';
    echo 'h1, h2, h3, h4, h5, h6 {
              font-family: "' . $font_heading . '" !important;
        }';
    echo '</style>';
}
