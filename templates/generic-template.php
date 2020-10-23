<?php
  /*
  Template Name: Generic Template
  */
  get_header();
  the_post();
?>

<article class="generic">
    <div class="major-container">
      <div class="minor-container">
        <div class="generic-inner">
          <?php the_content(); ?>
        </div>
      </div>
    </div>

</article>

<?php get_footer(); ?>
