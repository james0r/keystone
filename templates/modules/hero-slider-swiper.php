<?php
/**
* HERO SLIDER 1 MODULE
*/

$instance = $template_args['instance'];

// Array of arrays containing stylesheet slug and boolean for if it
// should be considered critical CSS and included in the <head>
$script_dependencies = [
    'swiper-bundle',
];

$style_dependencies = [
    'swiper-bundle',
];

echo apply_filters('render_dynamic_scripts', $script_dependencies);
echo apply_filters('render_dynamic_css', $style_dependencies);

$slide_entries = keystone_gtmwi('cmb2_id_group_slides', $instance);
$prefix = 'cmb2_id_field_slide_';

?>
<div class="hero-swiper-module-container">
  <div class="hero-swiper-module-container-inner">
    <div class="slider">
      <ul class="slider-inner">
        <!-- Slider main container -->
        <div class="swiper-container">
          <!-- Additional required wrapper -->
          <ul class="swiper-wrapper">
            <!-- Slides -->
            <?php
            foreach ((array) $slide_entries as $index => $slide) {
                echo '<li class="hero-slider-swiper-slide swiper-slide">';
                echo wp_get_attachment_image($slide['cmb2_id_field_slide_background_image_id'], [400, 308]);
                echo '</li>';
            }
            ?>
          </ul>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

          <?php if (keystone_gtmwi('cmb2_id_field_swiper_pagination_style', $instance) == 'scrollbar'): ?>
          <div class="swiper-scrollbar"></div>
          <?php endif; ?>
        </div>
      </ul>
    </div>
  </div>
</div>


<?php
  // Build out the sliders options array to encode to json
  $slider_options = [
      'autoplay'      => bool2str(keystone_gtmwi('cmb2_id_field_swiper_autoplay', $instance)),
      'loop'          => bool2str(keystone_gtmwi('cmb2_id_field_swiper_loop_mode', $instance)),
      'speed'         => keystone_gtmwi('cmb2_id_field_swiper_speed', $instance),
      'direction'     => keystone_gtmwi('cmb2_id_field_swiper_direction', $instance),
      'freeMode'      => bool2str(keystone_gtmwi('cmb2_id_field_swiper_freemode', $instance)),
      'centerSlides'  => bool2str(keystone_gtmwi('cmb2_id_field_swiper_center_slides', $instance)),
      'spaceBetween'  => keystone_gtmwi('cmb2_id_field_swiper_space_between_slides', $instance),
      'slidesPerView' => keystone_gtmwi('cmb2_id_field_swiper_slides_per_view', $instance),
      'keyboard'      => [
          'enabled' => bool2str(!keystone_gtmwi('cmb2_id_field_swiper_disable_keyboard', $instance))
      ],
      'lazy'        => bool2str(keystone_gtmwi('cmb2_id_field_swiper_lazy', $instance)),
      'autoHeight'  => bool2str(keystone_gtmwi('cmb2_id_field_swiper_auto_height', $instance))
  ];

  if (keystone_gtmwi('cmb2_id_field_swiper_show_pagination', $instance)) {
      $pagination_style = keystone_gtmwi('cmb2_id_field_swiper_pagination_style', $instance);

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
        case 'progresbar':
          $pagination_options['type'] = 'progressbar';
          break;
        default:
          // code...
          break;
      }

      if ($pagination_style != 'scrollbar') {
          $slider_options = array_merge($slider_options, [
              'pagination' => $pagination_options,
              'scrollbar' =>'false'
          ]);
      }
  }

  if (keystone_gtmwi('cmb2_id_field_swiper_fade_effect', $instance)) {
      $slider_options['effect'] = 'fade';
  }

  if (keystone_gtmwi('cmb2_id_field_swiper_show_arrows', $instance)) {
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
</script>

<style>
  .swiper-container {
    width: 600px;
    height: 300px;
  }
</style>