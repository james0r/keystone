<?php
/**
* Countup Module Template
*/

$instance = $template_args['instance'];

$script_dependencies = [
  'countup'
];

$style_dependencies = [
  'module-countup'
];

apply_filters('render_dynamic_scripts', $script_dependencies);
apply_filters('render_dynamic_css', $style_dependencies);

$cert_array = keystone_meta_with_module_id('cmb2_id_field_certificate_file_list', $instance);

?>
<div class="countup-module-container">
  <div class="countup-module-container-inner">

  </div>
</div>

<script>
  $(function() {

  })
</script>