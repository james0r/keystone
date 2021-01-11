<?php
/**
* Services Style 1 Module Template
*/

$instance = $template_args['instance'];

$meta_prefix = 'cmb2_id_field_services_1_';

$script_dependencies = Keystone()->modules->get_module_script_deps('about');
$style_dependencies = Keystone()->modules->get_module_style_deps('about');

Keystone()->render_progressive_assets($script_dependencies, $style_dependencies);

?>
<div class="services-style-1-module-container">
  <div class="services-style-1-module-container-inner">
    <div class="section-head-row">
      <div class="title-row">
        <h2 class="section-title">
          <?php echo keystone_meta_with_module_id($meta_prefix.'section_title', $instance); ?>
        </h2>
      </div>
      <div class="title-image-row">
        <?php apply_filters('render_title_image', keystone_meta_with_module_id($meta_prefix.'custom_title_image', $instance)) ?>
      </div>
      <div class="section-desc-row">
        <p>
          <?php echo keystone_meta_with_module_id($meta_prefix.'section_desc', $instance); ?>
        </p>
      </div>
    </div>
    <div class="section-body-row">
      <div class="grid">
      <?php $services_items = keystone_meta_with_module_id($meta_prefix.'services_group', $instance); ?>
      <?php if ($services_items) : foreach($services_items as $item) : ?>
        <a href="<?php echo $item['link']; ?>" class="services-item flex">
          <div class="start">
            <div class="icon-wrapper">
              <?php apply_filters('keystone_render_icon', $item['icon']); ?>
            </div>
          </div>
          <div class="end">
            <h3>
              <?php echo $item['title']; ?>
            </h3>
            <p>
              <?php echo $item['description']; ?>
            </p>
          </div>
        </a>
      <?php endforeach; endif; ?>
      </div>
    </div>
  </div>
</div>