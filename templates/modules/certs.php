<?php
/**
* CERTIFICATES MODULE
*/

$instance = $template_args['instance'];

$script_dependencies = [
    'slick',
    'lightbox2'
];

$style_dependencies = [
    'slick',
    'slick-theme',
    'lightbox2',
    'module-certs'
];

apply_filters('render_dynamic_scripts', $script_dependencies);
apply_filters('render_dynamic_css', $style_dependencies);

$cert_array = keystone_meta_with_module_id('cmb2_id_field_certificate_file_list', $instance);

?>
<div class="certs-module-container">
  <div class="certs-module-container-inner">
    <div class="certs-slider">
      <ul class="certs-slider-inner">
        <?php
          foreach ((array) $cert_array as $key => $cert) {
              $title = get_the_title($key);
              $url = wp_get_attachment_image_url($key, 'certificate');
              echo '<li class="cert-list-item">';
              echo '<a href="'.$url.'" data-lightbox="'.$key.'" data-title="'.$title.'">';
              echo '<img src="'.$url.'" alt="'.$title.'" title="'.$title.'">';
              echo '</a>';
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
              breakpoint: 680,
              settings: "unslick"
            }]
          });
      }
    });
  })
</script>