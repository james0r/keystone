<?php

$font_body = cmb2_get_option('cmb_theme_colors', 'cmb2_id_body_font');
$font_header = cmb2_get_option('cmb_theme_colors', 'cmb2_id_header_font');

if(!empty($font_body)) {
  echo '@import url("https://fonts.googleapis.com/css?family=' . str_replace( ' ', '+', $font_body ) . '");
          body {
              font-family: "' . $font_body . '" !important;
          }';
}

if(!empty($font_header)) {
  echo '@import url("https://fonts.googleapis.com/css?family=' . str_replace( ' ', '+', $font_header ) . '");
          h1, h2, h3, h4, h5, h6 {
              font-family: "' . $font_header . '" !important;
          }';
}
