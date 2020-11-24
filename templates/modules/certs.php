<?php
/**
* CERTIFICATES MODULE
*/

$instance = $template_args['instance'];

// Array of arrays containing stylesheet slug and boolean for if it
// should be considered critical CSS and included in the <head>
$script_dependencies = [
    'slick',
    'slick-lightbox'
];

$style_dependencies = [
    'slick',
    'slick-theme',
    'slick-lightbox'
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
  $(function() {
    $(window).on('load resize orientationChange', function(event) {
      if ($(window).width() > 599) {
        $slickFrame = $('.certs-slider-inner:not(.slick-initialized)')
        $slickFrame.on('init', function() {
          $slickFrame.css({
            visibility: 'visible'
          });
        });
        $('.certs-slider-inner:not(.slick-initialized)').slick({
            dots: false,
            slidesToShow: 4,
            arrows: false,
            autoplay: true,
            responsive: [{
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                infinite: true
              }
            }, {
              breakpoint: 600,
              settings: "unslick"
            }]
          })
          .slickLightbox({
            src: 'src',
            itemSelector: '.cert-list-item img'
          });
      }
    });
  })
</script>