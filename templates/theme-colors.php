<!-- Theme CSS Start -->
<style>
:root {
<?php 
  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb_primary_color'))) {
    $primary_color_hex = cmb2_get_option('cmb_theme_colors', 'cmb_primary_color');
    $primary_color_hex_no_hash = sanitize_hex_color_no_hash($primary_color_hex);
    $primary_color_hsl = keystone_hex2hsl($primary_color_hex_no_hash);
    ?>

    --keystone-primary-color-h: <?php echo $primary_color_hsl[0] ?>;
    --keystone-primary-color-s: <?php echo $primary_color_hsl[1] . '%' ?>;
    --keystone-primary-color-l: <?php echo $primary_color_hsl[2] . '%' ?>;

    <?php
  ?>

   --keystone-primary-color: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), var(--keystone-primary-color-l));
   --keystone-primary-color-l1: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) + 5%));
   --keystone-primary-color-l2: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) + 10%));
   --keystone-primary-color-l3: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) + 15%));
   --keystone-primary-color-l4: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) + 20%));
   --keystone-primary-color-l5: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) + 25%));
   --keystone-primary-color-l6: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) + 30%));
   --keystone-primary-color-l7: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) + 35%));
   --keystone-primary-color-l8: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) + 40%));
   --keystone-primary-color-d1: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) - 5%));
   --keystone-primary-color-d2: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) - 10%));
   --keystone-primary-color-d3: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) - 15%));
   --keystone-primary-color-d4: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) - 20%));
   --keystone-primary-color-d5: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) - 25%));
   --keystone-primary-color-d6: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) - 30%));
   --keystone-primary-color-d7: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) - 35%));
   --keystone-primary-color-d8: hsl(var(--keystone-primary-color-h), var(--keystone-primary-color-s), calc(var(--keystone-primary-color-l) - 40%));
   <?php
  }
?>

<?php 
  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb_secondary_color'))) {
    $secondary_color_hex = cmb2_get_option('cmb_theme_colors', 'cmb_secondary_color');
    $secondary_color_hex_no_hash = sanitize_hex_color_no_hash($secondary_color_hex);
    $secondary_color_hsl = keystone_hex2hsl($secondary_color_hex_no_hash);
    ?>

    --keystone-secondary-color-h: <?php echo $secondary_color_hsl[0] ?>;
    --keystone-secondary-color-s: <?php echo $secondary_color_hsl[1] . '%' ?>;
    --keystone-secondary-color-l: <?php echo $secondary_color_hsl[2] . '%' ?>;

    <?php
  ?>

   --keystone-secondary-color: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), var(--keystone-secondary-color-l));
   --keystone-secondary-color-l1: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) + 5%));
   --keystone-secondary-color-l2: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) + 10%));
   --keystone-secondary-color-l3: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) + 15%));
   --keystone-secondary-color-l4: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) + 20%));
   --keystone-secondary-color-l5: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) + 25%));
   --keystone-secondary-color-l6: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) + 30%));
   --keystone-secondary-color-l7: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) + 35%));
   --keystone-secondary-color-l8: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) + 40%));
   --keystone-secondary-color-d1: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) - 5%));
   --keystone-secondary-color-d2: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) - 10%));
   --keystone-secondary-color-d3: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) - 15%));
   --keystone-secondary-color-d4: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) - 20%));
   --keystone-secondary-color-d5: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) - 25%));
   --keystone-secondary-color-d6: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) - 30%));
   --keystone-secondary-color-d7: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) - 35%));
   --keystone-secondary-color-d8: hsl(var(--keystone-secondary-color-h), var(--keystone-secondary-color-s), calc(var(--keystone-secondary-color-l) - 40%));
   <?php
  }

  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb_background_color'))) {
    $background_color_hex = cmb2_get_option('cmb_theme_colors', 'cmb_background_color');
    $background_color_hex_no_hash = sanitize_hex_color_no_hash($background_color_hex);
    $background_color_hsl = keystone_hex2hsl($background_color_hex_no_hash);
    ?>

    --keystone-background-color-h: <?php echo $background_color_hsl[0] ?>;
    --keystone-background-color-s: <?php echo $background_color_hsl[1] . '%' ?>;
    --keystone-background-color-l: <?php echo $background_color_hsl[2] . '%' ?>;

    <?php
  ?>

   --keystone-background-color: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), var(--keystone-background-color-l));
   --keystone-background-color-l1: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) + 5%));
   --keystone-background-color-l2: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) + 10%));
   --keystone-background-color-l3: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) + 15%));
   --keystone-background-color-l4: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) + 20%));
   --keystone-background-color-l5: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) + 25%));
   --keystone-background-color-l6: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) + 30%));
   --keystone-background-color-l7: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) + 35%));
   --keystone-background-color-l8: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) + 40%));
   --keystone-background-color-d1: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) - 5%));
   --keystone-background-color-d2: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) - 10%));
   --keystone-background-color-d3: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) - 15%));
   --keystone-background-color-d4: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) - 20%));
   --keystone-background-color-d5: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) - 25%));
   --keystone-background-color-d6: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) - 30%));
   --keystone-background-color-d7: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) - 35%));
   --keystone-background-color-d8: hsl(var(--keystone-background-color-h), var(--keystone-background-color-s), calc(var(--keystone-background-color-l) - 40%));
   <?php
  }

  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb_dark_background_color'))) {
    $dark_background_color_hex = cmb2_get_option('cmb_theme_colors', 'cmb_dark_background_color');
    $dark_background_color_hex_no_hash = sanitize_hex_color_no_hash($dark_background_color_hex);
    $dark_background_color_hsl = keystone_hex2hsl($dark_background_color_hex_no_hash);
    ?>

    --keystone-dark-background-color-h: <?php echo $background_color_hsl[0] ?>;
    --keystone-dark-background-color-s: <?php echo $background_color_hsl[1] . '%' ?>;
    --keystone-dark-background-color-l: <?php echo $background_color_hsl[2] . '%' ?>;

    <?php
  ?>

   --keystone-dark-background-color: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), var(--keystone-dark-background-color-l));
   --keystone-dark-background-color-l1: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) + 5%));
   --keystone-dark-background-color-l2: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) + 10%));
   --keystone-dark-background-color-l3: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) + 15%));
   --keystone-dark-background-color-l4: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) + 20%));
   --keystone-dark-background-color-l5: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) + 25%));
   --keystone-dark-background-color-l6: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) + 30%));
   --keystone-dark-background-color-l7: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) + 35%));
   --keystone-dark-background-color-l8: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) + 40%));
   --keystone-dark-background-color-d1: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) - 5%));
   --keystone-dark-background-color-d2: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) - 10%));
   --keystone-dark-background-color-d3: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) - 15%));
   --keystone-dark-background-color-d4: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) - 20%));
   --keystone-dark-background-color-d5: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) - 25%));
   --keystone-dark-background-color-d6: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) - 30%));
   --keystone-dark-background-color-d7: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) - 35%));
   --keystone-dark-background-color-d8: hsl(var(--keystone-dark-background-color-h), var(--keystone-dark-background-color-s), calc(var(--keystone-dark-background-color-l) - 40%));
   <?php
  }
?>
}
</style>
<!-- Theme CSS End -->