<?php

/**
 * THIS FILE SERVES AS THE DEFAULT TEMPLATE FOR PAGES
 */

get_header();
?>

<div class="<?php echo slugify($pagename); ?>">
  <div class="<?php echo slugify($pagename); ?>-inner">
    <?php keystone_get_template('module-loop'); ?>
  </div>
</div>

<?php
get_footer();

