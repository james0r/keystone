<?php
/**
* HERO SLIDER 1 MODULE
*/

$instance = $template_args['instance'];

$script_dependencies = [
    'swiper-bundle',
];

$style_dependencies = [
    'module-hero-slider-swiper',
    'swiper-bundle'
];

apply_filters('render_dynamic_scripts', $script_dependencies);
apply_filters('render_dynamic_css', $style_dependencies);

$slide_entries = keystone_meta_with_module_id('cmb2_id_group_slides', $instance);
$prefix = 'cmb2_id_field_slide_';
$tint_level = keystone_meta_with_module_id('cmb2_id_field_swiper_image_tint', $instance);

?>
<div class="hero-swiper-module-container">
  <div class="hero-swiper-module-container-inner">
        <!-- Slider main container -->
        <div class="swiper-container">
          <!-- Additional required wrapper -->
          <ul class="swiper-wrapper">


            <!-- Slides -->
            <?php foreach ((array) $slide_entries as $index => $slide) { ?>
            <li
              class="hero-slider-swiper-slide swiper-slide <?php echo 'keystone-slide-content-' . $slide['cmb2_id_field_slide_align_content'] ?>"
              style="background-image: linear-gradient(rgba(0,0,0,.<?php echo $tint_level ?>), rgba(0,0,0, .<?php echo $tint_level ?>)), url(<?php echo wp_get_attachment_image_url($slide['cmb2_id_field_slide_background_image_id'], [400, 308]); ?>);">
             <div class="container">
                <div class="content">
                  <?php if (!empty($slide['cmb2_id_field_slide_tagline'])) : ?>
                  <div class="tagline">
                    <h4>
                      <?php echo $slide['cmb2_id_field_slide_tagline']; ?>
                    </h4>
                  </div>
                  <?php endif; ?>
                  <div class="title">
                    <h1>
                      <?php echo $slide['cmb2_id_field_slide_title']; ?>
                    </h1>
                  </div>
                  <div class="subtitle">
                    <h2>
                      <?php echo $slide['cmb2_id_field_slide_paragraph_text']; ?>
                    </h2>
                  </div>
                  <?php if (!empty($slide['cmb2_id_field_slide_button_text']) || !empty($slide['cmb2_id_field_slide_button_2_text'])) : ?>
                  <div class="button-row">
                    <?php if (!empty($slide['cmb2_id_field_slide_button_text']) && !empty($slide['cmb2_id_field_slide_button_link_url'])) : ?>
                    <a class="btn btn-primary btn-xl"
                      href="<?php echo $slide['cmb2_id_field_slide_button_link_url'] ?>">
                      <?php echo $slide['cmb2_id_field_slide_button_text'] ?>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($slide['cmb2_id_field_slide_button_2_text']) && !empty($slide['cmb2_id_field_slide_button_2_link_url'])) : ?>
                    <a class="btn btn-primary btn-xl"
                      href="<?php echo $slide['cmb2_id_field_slide_button_2_link_url'] ?>">
                      <?php echo $slide['cmb2_id_field_slide_button_2_text'] ?>
                    </a>
                    <?php endif; ?>
                  </div>
                  <?php endif; ?>
                </div>
             </divc>
            </li>
            <?php } ?>
          </ul>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev icon-left-open-big">
          </div>
          <div class="swiper-button-next icon-right-open-big">
          </div>

          <?php if (keystone_meta_with_module_id('cmb2_id_field_swiper_pagination_style', $instance) == 'scrollbar'): ?>
          <div class="swiper-scrollbar"></div>
          <?php endif; ?>
    </div>
  </div>
</div>

<?php
  // Build out the sliders options array to encode to json
  $slider_options = [
      'autoplay'      => bool2truthy(keystone_meta_with_module_id('cmb2_id_field_swiper_autoplay', $instance)),
      'loop'          => bool2truthy(keystone_meta_with_module_id('cmb2_id_field_swiper_loop_mode', $instance)),
      'speed'         => intVal(keystone_meta_with_module_id('cmb2_id_field_swiper_speed', $instance)),
      'direction'     => keystone_meta_with_module_id('cmb2_id_field_swiper_direction', $instance),
      'freeMode'      => bool2truthy(keystone_meta_with_module_id('cmb2_id_field_swiper_freemode', $instance)),
      'centerSlides'  => bool2truthy(keystone_meta_with_module_id('cmb2_id_field_swiper_center_slides', $instance)),
      'spaceBetween'  => intVal(keystone_meta_with_module_id('cmb2_id_field_swiper_space_between_slides', $instance)),
      'slidesPerView' => intVal(keystone_meta_with_module_id('cmb2_id_field_swiper_slides_per_view', $instance)),
      'keyboard'      => [
          'enabled' => bool2truthy(!keystone_meta_with_module_id('cmb2_id_field_swiper_disable_keyboard', $instance))
      ],
      'lazy'        => bool2truthy(keystone_meta_with_module_id('cmb2_id_field_swiper_lazy', $instance)),
      'autoHeight'  => bool2truthy(keystone_meta_with_module_id('cmb2_id_field_swiper_auto_height', $instance))
  ];

  if (keystone_meta_with_module_id('cmb2_id_field_swiper_show_pagination', $instance)) {
      $pagination_style = keystone_meta_with_module_id('cmb2_id_field_swiper_pagination_style', $instance);

      $pagination_options = [
          'el'  => '.swiper-pagination'
      ];

      switch ($pagination_style) {
        case 'bullets':
          // This is the default style. Do nothing here.
          break;
        case 'numbered_bullets':
          $pagination_options['clickable'] = 'true';
          $pagination_options['renderBullet'] = 'function (index, className) {return \'<span class="\' + className + \'">\' + (index + 1) + \'</span>\';}';
          break;
        case 'dynamic_bullets':
          $pagination_options['dynamicBullets'] = 'true';
          break;
        case 'scrollbar':
          $slider_options = array_merge($slider_options, [
              'scrollbar' => [
                  'el'   => '.swiper-scrollbar',
                  'hide' => 'true'
              ]
          ]);
          break;
        case 'fraction':
          $pagination_options['type'] = 'fraction';
          break;
        case 'progressbar':
          $pagination_options['type'] = 'progressbar';
          break;
        default:
          // code...
          break;
      }

      if ($pagination_style != 'scrollbar') {
          $slider_options = array_merge($slider_options, [
              'pagination' => $pagination_options,
          ]);
      }
  }

  if (keystone_meta_with_module_id('cmb2_id_field_swiper_fade_effect', $instance)) {
      $slider_options['effect'] = 'fade';
  }

  if (keystone_meta_with_module_id('cmb2_id_field_swiper_show_arrows', $instance)) {
      $slider_options = array_merge($slider_options, [
          'navigation' => [
              'nextEl' => '.swiper-button-next',
              'prevEl' => '.swiper-button-prev'
          ]
      ]);
  }

  ?>

<script>
  var mySwiper_options = <?php echo json_encode($slider_options); ?> ;
  var mySwiper = new Swiper('.swiper-container', mySwiper_options);

  console.log(mySwiper_options);
</script>