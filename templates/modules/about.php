<?php
/**
* ABOUT MODULE
*/

$instance = $template_args['instance'];

$script_dependencies = [
    'twenty-twenty',
    'event-move'
];

$style_dependencies = [
    'twenty-twenty',
    'module-about'
];

$twentytwenty_enabled = keystone_meta_with_module_id('cmb2_id_field_toggle_reveal_slider', $instance);

if ($twentytwenty_enabled) {
  apply_filters('render_dynamic_scripts', $script_dependencies);
  apply_filters('render_dynamic_css', $style_dependencies);
}
?>
<div class="about-module-container">
  <div class="about-module-container-inner">
    <div class="flex">
      <div class="start">
        <div class="image-wrapper reveal-image-container">
          <?php echo wp_get_attachment_image(keystone_get_the_meta('cmb2_id_field_before_image_' . $instance . '_id'), ['458', '350']) ?>
          <?php 
          if ($twentytwenty_enabled) {
            echo wp_get_attachment_image(keystone_get_the_meta('cmb2_id_field_after_image_' . $instance . '_id'), ['458', '350']);
          }
          ?>
        </div>
      </div>
      <div class="end">
        <div class="content">
          <h2 class="about-header">
            <?php 
             $header_text = keystone_meta_with_module_id('cmb2_id_field_about_header_text', $instance); 
             $highlighted_text = keystone_meta_with_module_id('cmb2_id_field_about_highlighted_header_text', $instance);
             $replacement = '<span class="theme-color-primary">' . $highlighted_text . '</span>';
             $header_with_highlighted = str_replace($highlighted_text, $replacement, $header_text );
             echo $header_with_highlighted;
             ?>
          </h2>
          <div class="about-body">
            <?php echo keystone_meta_with_module_id('cmb2_id_field_about_body_text', $instance); ?>
          </div>
          <div class="about-thumbnail-group">
            <ul class="about-thumbnail-list">
              <?php
            $entries = keystone_meta_with_module_id('cmb2_id_field_award_images', $instance);

            foreach ((array) $entries as $key => $entry) {
                echo '<li class="about-thumbnail-list-item">';
                echo wp_get_attachment_image($key, [80, 80]);
                echo '</li>';
            }
          ?>
            </ul>
          </div>
          <div class="button-row">
            <a href="<?php echo keystone_meta_with_module_id('cmb2_id_field_about_button_link_url', $instance); ?>"
              class="btn btn-primary btn-circled btn-lg">
              <?php echo keystone_meta_with_module_id('cmb2_id_field_about_button_text', $instance); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  $(".reveal-image-container").twentytwenty();
</script>