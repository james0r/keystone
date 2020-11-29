<?php
/**
* HOME BOXES STYLE 1 MODULE TEMPLATE
*/

$instance = $template_args['instance'];

$script_dependencies = [

];

$style_dependencies = [

];

apply_filters('render_dynamic_scripts', $script_dependencies);
apply_filters('render_dynamic_css', $style_dependencies);

$cert_array = keystone_gtmwi('cmb2_id_field_certificate_file_list', $instance);

?>
<div class="certs-module-container">
  <div class="certs-module-container-inner">
    <div class="certs-slider">
      <ul class="certs-slider-inner">
        <?php
          foreach ((array) $cert_array as $key => $cert) {
              echo '<li class="cert-list-item">';
              echo wp_get_attachment_image($key, [400, 308]);
              echo '</li>';
          }
        ?>
      </ul>
    </div>
  </div>
</div>

<script>
  
</script>