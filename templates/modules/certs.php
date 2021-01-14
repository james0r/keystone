<?php
/**
* Certificates Module
*/

$instance = $template_args['instance'];

$script_dependencies = Keystone()->modules->get_module_script_deps('certs');
$style_dependencies = Keystone()->modules->get_module_style_deps('certs');

Keystone()->render_progressive_assets($script_dependencies, $style_dependencies);

Keystone()->demos->maybe_load_demo_content($instance);
$cert_array = keystone_meta_with_module_id('cmb2_id_field_certificates_file_list', $instance);

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
              echo '<a href="' . $url . '" data-lightbox="certificate-lightbox-group" data-title="' . $title . '">';
              echo '<img src="' . $url . '" alt="' . $title . '" title="' . $title . '">';
              echo '<i class="fas fa-search"></i>';
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
          settings: {
            slidesToShow: 2,
            infinite: true,
            centerMode: true,
            centerPadding: '40px'
          }
        },
        {
          breakpoint: 520,
          settings: {
            slidesToShow: 1,
            infinite: true,
            centerMode: true,
            centerPadding: '80px'
          }
        },
        {
          breakpoint: 420,
          settings: {
            slidesToShow: 1,
            infinite: true,
            centerMode: true,
            centerPadding: '20px'
          }
        }]
      });
    });

    lightbox.option({
      'resizeDuration': 500,
      'wrapAround': true,
      'showImageNumberLabel': false
    })
  })
</script>