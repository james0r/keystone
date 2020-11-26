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

$cert_array = keystone_gtmwi('cmb2_id_field_certificate_file_list', $instance);

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
            foreach ((array) $cert_array as $key => $cert) {
                echo '<li class="hero-slider-swiper-slide swiper-slide">';
                echo wp_get_attachment_image($key, [400, 308]);
                echo '</li>';
            }
            ?>
          </ul>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

          <!-- If we need scrollbar -->
          <div class="swiper-scrollbar"></div>
        </div>
      </ul>
    </div>
  </div>
</div>

<?php
  $slider_options = [
      'autoplay'   => keystone_gtmwi('cmb2_id_field_swiper_autoplay', $instance),
      'loop'       => keystone_gtmwi('cmb2_id_field_swiper_loop_mode', $instance),
      'speed'      => keystone_gtmwi('cmb2_id_field_swiper_speed', $instance)
  ];

  if (keystone_gtmwi('cmb2_id_field_swiper_show_pagination', $instance)) {
      $pagination_style = keystone_gtmwi('cmb2_id_field_swiper_pagination_style', $instance);

      $pagination_options = [
          'el'  => '.swiper-pagination'
      ];

      echo $pagination_style;

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
          # code...
          break;
      } 

      if ($pagination_style != 'scrollbar') {
          $slider_options = array_merge($slider_options, [
              'pagination' => $pagination_options
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

  var_dump($slider_options);
?>

<script>
  var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'vertical',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })
</script>