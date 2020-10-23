<?php
  /*
  Template Name: Dynamic Sections
  */
  get_header();
?>

<div class="<?php echo slugify($pagename); ?>">
  <div class="<?php echo slugify($pagename); ?>-inner">
    <?php get_partial('partials/module-loop'); ?>
  </div>
</div>

<?php get_footer(); ?>