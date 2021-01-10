<?php
if (cmb2_get_option('cmb2_key_box_advanced_settings', 'cmb2_id_field_script_load_method') == 'progressive-script-loading') {
  apply_filters('render_dynamic_scripts', $template_args[0]);
}

if (cmb2_get_option('cmb2_key_box_advanced_settings', 'cmb2_id_field_stylesheet_load_method') == 'progressive-css-loading') {
  apply_filters('render_dynamic_css', $template_args[1]);
}

?>