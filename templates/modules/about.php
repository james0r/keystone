<?php
/**
* ABOUT MODULE
*/

$instance = $template_args['instance'];

$script_dependencies = [
    'twenty-twenty-js',
    'event-move-js'
];

$style_dependencies = [
    'twenty-twenty-css',
    'module-about-css'
];

Keystone()->render_progressive_assets($script_dependencies, $style_dependencies);
Keystone()->demos->maybe_load_demo_content($instance);

$twentytwenty_enabled = keystone_meta_with_module_id('cmb2_id_field_about_enable_reveal', $instance);

if ($twentytwenty_enabled) {

}

?>
<div class="about-module-container">
  <div class="about-module-container-inner">
    <div class="flex">
      <div class="start">
        <div class="image-wrapper reveal-image-container">
          <?php echo Keystone()->images->keystone_get_attachment_image(keystone_meta_with_module_id('cmb2_id_field_about_before_image', $instance . '_id'), ['458', '350']) ?>
          <?php 
          if ($twentytwenty_enabled) {
            echo Keystone()->images->keystone_get_attachment_image(keystone_meta_with_module_id('cmb2_id_field_about_after_image', $instance . '_id'), ['458', '350']);
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
          <?php $thumbs = keystone_meta_with_module_id('cmb2_id_field_about_award_images', $instance); ?>
          <?php if (!empty($thumbs)) : ?>
          <div class="about-thumbnail-group">
            <ul class="about-thumbnail-list">
              <?php
                foreach ((array) $thumbs as $id => $url) {
                    echo '<li class="about-thumbnail-list-item">';
                    echo Keystone()->images->keystone_get_attachment_image($id, [80, 80]);
                    echo '</li>';
                }
              ?>
            </ul>
          </div>
            <?php endif; ?>
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
  $(function() {
    $(".reveal-image-container").twentytwenty();
  })
</script>