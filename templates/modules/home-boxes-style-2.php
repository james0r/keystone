<?php
/**
* HOME BOXES STYLE 2 MODULE TEMPLATE
*/

$instance = $template_args['instance'];

$script_dependencies = [

];

$style_dependencies = [
  'flaticon-dental-css',
];

$prefix = 'cmb2_id_field_hbs2_';

apply_filters('render_dynamic_scripts', $script_dependencies);
apply_filters('render_dynamic_css', $style_dependencies);

?>
<div class="home-boxes-style-2-module-container">
  <div class="home-boxes-style-2-module-container-inner">
    <?php echo str_replace('[current-year]', date("Y") ,(cmb2_get_option('cmb2_key_footer_box', 'cmb2_id_footer_group_style_layout')[0]['cmb_footer_copyright']))  ?>
    <?php apply_filters('keystone_render_icon', keystone_gtmwi($prefix.'box_1_icon', $instance)) ?>
    <?php apply_filters('keystone_render_icon', keystone_gtmwi($prefix.'box_1_icon', $instance)) ?>
  </div>
</div>