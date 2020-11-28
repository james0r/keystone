<?php
// =============================================================== SERVICE TEMPLATE META

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
      case 'name':

          require __DIR__ . '/metaboxes/name.php';

          break;

      case 'date':

          require __DIR__ . '/metaboxes/date.php';

          break;
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
    }
}