<?php
  /*
  Template Name: Dynamic Sections
  */
  get_header();
?>

<div style="color: var(--keystone-primary-color);">Primary Color</div>
<div style="color: var(--keystone-secondary-color);">Secondary Color</div>

<div class="<?php echo slugify($pagename); ?>">
  <div class="<?php echo slugify($pagename); ?>-inner">
    <?php get_partial('partials/module-loop'); ?>
  </div>
</div>

<?php get_footer(); ?>