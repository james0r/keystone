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
      'loop'       => keystone_gtmwi('cmb2_id_field_swiper_loop_mode', $instance)
  ];

  if (keystone_gtmwi('cmb2_id_field_swiper_show_pagination', $instance)) {
      array_merge($slider_options, [
          'pagination'   => [
              'el'  => '.swiper-pagination'
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