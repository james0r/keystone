<?php 
/**
* DATE MODULE
*/

$instance = $template_args['instance']; 

// Array of arrays containing stylesheet slug and boolean for if it
// should be considered critical CSS and included in the <head>
$style_dependencies = array(
  '1'
);

 echo apply_filters('render_dynamic_css', $style_dependencies);
?>

<div class="date-module-contents">
  <?php echo keystone_get_the_meta('cmb_event_date_'.$instance); ?>
</div>
