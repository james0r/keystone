<?php
/**
* MODULE META FIELD GENERATOR
*/

global $wpdb;

$current_page = 0;
if (isset($_REQUEST['post'])) {
    $current_page = absint($_REQUEST['post']);
} elseif (isset($_REQUEST['post_ID'])) {
    $current_page = absint($_REQUEST['post_ID']);
}
$modules = $wpdb->get_results('SELECT * FROM modules WHERE page = ' . $current_page . ' ORDER BY display_order ASC');

foreach ($modules as $m) {
    $suffix = '_' . $m->id;

    $box = new_cmb2_box([
        'id'           => $m->id,
        'title'        => $m->name,
        'object_types' => ['page'], // post type
        'show_on'	     => ['id' => [$m->page, ]],
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ]);

    //for all blocks

    switch ($m->module) {
      case 'about':

          require __DIR__ . '/metaboxes/about.php';

          break;
      case 'certs':

          require __DIR__ . '/metaboxes/certs.php';

          break;
      case 'hero-slider-swiper':

          require __DIR__ . '/metaboxes/hero-slider-swiper.php';
          require __DIR__ . '/metaboxes/hero-slides.php';

          break;
      case 'home-boxes-style-1':

          require __DIR__ . '/metaboxes/home-boxes-style-1.php';

          break;
      case 'home-boxes-style-2':

          require __DIR__ . '/metaboxes/home-boxes-style-2.php';

          break;
      case 'home-boxes-style-3':

          require __DIR__ . '/metaboxes/home-boxes-style-3.php';

          break;
      case 'cta-divider-3-column':

          require __DIR__ . '/metaboxes/cta-divider-3-column.php';

          break;
      case 'cta-divider-appointment':

          require __DIR__ . '/metaboxes/cta-divider-appointment.php';

          break;
      case 'services-style-1':

          require __DIR__ . '/metaboxes/services-style-1.php';

          break;
      case 'countup':

          require __DIR__ . '/metaboxes/countup.php';

          break;
    }
}
