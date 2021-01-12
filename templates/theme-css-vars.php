:root {
<?php 
  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb_primary_color'))) {
    $primary_color_hex = cmb2_get_option('cmb_theme_colors', 'cmb_primary_color');
    $primary_color_hsl = Keystone_Colors::hexToHsl($primary_color_hex);
    ?>

    --keystone-primary-color-h: <?php echo $primary_color_hsl['H'] ?>;
    --keystone-primary-color-s: <?php echo $primary_color_hsl['S'] . '%' ?>;
    --keystone-primary-color-l: <?php echo $primary_color_hsl['L'] . '%' ?>;
    --keystone-primary-color:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),var(--keystone-primary-color-l));--keystone-primary-color-l1:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) + 5%));--keystone-primary-color-l2:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) + 10%));--keystone-primary-color-l3:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) + 15%));--keystone-primary-color-l4:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) + 20%));--keystone-primary-color-l5:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) + 25%));--keystone-primary-color-l6:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) + 30%));--keystone-primary-color-l7:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) + 35%));--keystone-primary-color-l8:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) + 40%));--keystone-primary-color-d1:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) - 5%));--keystone-primary-color-d2:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) - 10%));--keystone-primary-color-d3:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) - 15%));--keystone-primary-color-d4:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) - 20%));--keystone-primary-color-d5:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) - 25%));--keystone-primary-color-d6:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) - 30%));--keystone-primary-color-d7:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) - 35%));--keystone-primary-color-d8:hsl(var(--keystone-primary-color-h),var(--keystone-primary-color-s),calc(var(--keystone-primary-color-l) - 40%));
   <?php
  }
?>

<?php 
  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb_secondary_color'))) {
    $secondary_color_hex = cmb2_get_option('cmb_theme_colors', 'cmb_secondary_color');
    $secondary_color_hsl = Keystone_Colors::hexToHsl($secondary_color_hex);
    ?>

    --keystone-secondary-color-h: <?php echo $secondary_color_hsl['H'] ?>;
    --keystone-secondary-color-s: <?php echo $secondary_color_hsl['S'] . '%' ?>;
    --keystone-secondary-color-l: <?php echo $secondary_color_hsl['L'] . '%' ?>;
    --keystone-secondary-color:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),var(--keystone-secondary-color-l));--keystone-secondary-color-l1:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) + 5%));--keystone-secondary-color-l2:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) + 10%));--keystone-secondary-color-l3:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) + 15%));--keystone-secondary-color-l4:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) + 20%));--keystone-secondary-color-l5:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) + 25%));--keystone-secondary-color-l6:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) + 30%));--keystone-secondary-color-l7:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) + 35%));--keystone-secondary-color-l8:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) + 40%));--keystone-secondary-color-d1:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) - 5%));--keystone-secondary-color-d2:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) - 10%));--keystone-secondary-color-d3:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) - 15%));--keystone-secondary-color-d4:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) - 20%));--keystone-secondary-color-d5:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) - 25%));--keystone-secondary-color-d6:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) - 30%));--keystone-secondary-color-d7:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) - 35%));--keystone-secondary-color-d8:hsl(var(--keystone-secondary-color-h),var(--keystone-secondary-color-s),calc(var(--keystone-secondary-color-l) - 40%));
   <?php
  }

  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb_background_color'))) {
    $background_color_hex = cmb2_get_option('cmb_theme_colors', 'cmb_background_color');
    $background_color_hsl = Keystone_Colors::hexToHsl($background_color_hex);
    ?>

    --keystone-background-color-h: <?php echo $background_color_hsl['H'] ?>;
    --keystone-background-color-s: <?php echo $background_color_hsl['S'] . '%' ?>;
    --keystone-background-color-l: <?php echo $background_color_hsl['L'] . '%' ?>;
    --keystone-background-color:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),var(--keystone-background-color-l));--keystone-background-color-l1:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) + 5%));--keystone-background-color-l2:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) + 10%));--keystone-background-color-l3:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) + 15%));--keystone-background-color-l4:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) + 20%));--keystone-background-color-l5:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) + 25%));--keystone-background-color-l6:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) + 30%));--keystone-background-color-l7:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) + 35%));--keystone-background-color-l8:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) + 40%));--keystone-background-color-d1:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) - 5%));--keystone-background-color-d2:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) - 10%));--keystone-background-color-d3:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) - 15%));--keystone-background-color-d4:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) - 20%));--keystone-background-color-d5:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) - 25%));--keystone-background-color-d6:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) - 30%));--keystone-background-color-d7:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) - 35%));--keystone-background-color-d8:hsl(var(--keystone-background-color-h),var(--keystone-background-color-s),calc(var(--keystone-background-color-l) - 40%));
   <?php
  }

  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb_background_light_gray'))) {
    $background_color_gray_light_hex = cmb2_get_option('cmb_theme_colors', 'cmb_background_light_gray');
    $background_color_gray_light_hsl = Keystone_Colors::hexToHsl($background_color_gray_light_hex);
    ?>
  
    --keystone-background-color-gray-light-h: <?php echo $background_color_gray_light_hsl['H'] ?>;
    --keystone-background-color-gray-light-s: <?php echo $background_color_gray_light_hsl['S'] . '%' ?>;
    --keystone-background-color-gray-light-l: <?php echo $background_color_gray_light_hsl['L'] . '%' ?>;
    --keystone-background-color-gray-light:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),var(--keystone-background-color-gray-light-l));--keystone-background-color-gray-light-l1:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) + 5%));--keystone-background-color-gray-light-l2:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) + 10%));--keystone-background-color-gray-light-l3:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) + 15%));--keystone-background-color-gray-light-l4:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) + 20%));--keystone-background-color-gray-light-l5:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) + 25%));--keystone-background-color-gray-light-l6:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) + 30%));--keystone-background-color-gray-light-l7:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) + 35%));--keystone-background-color-gray-light-l8:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) + 40%));--keystone-background-color-gray-light-d1:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) - 5%));--keystone-background-color-gray-light-d2:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) - 10%));--keystone-background-color-gray-light-d3:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) - 15%));--keystone-background-color-gray-light-d4:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) - 20%));--keystone-background-color-gray-light-d5:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) - 25%));--keystone-background-color-gray-light-d6:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) - 30%));--keystone-background-color-gray-light-d7:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) - 35%));--keystone-background-color-gray-light-d8:hsl(var(--keystone-background-color-gray-light-h),var(--keystone-background-color-gray-light-s),calc(var(--keystone-background-color-gray-light-l) - 40%));
   <?php
  }

  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb_background_lighter_gray'))) {
    $background_color_gray_lighter_hex = cmb2_get_option('cmb_theme_colors', 'cmb_background_lighter_gray');
    $background_color_gray_lighter_hsl = Keystone_Colors::hexToHsl($background_color_gray_lighter_hex);
    ?>
  
    --keystone-background-color-gray-lighter-h: <?php echo $background_color_gray_lighter_hsl['H'] ?>;
    --keystone-background-color-gray-lighter-s: <?php echo $background_color_gray_lighter_hsl['S'] . '%' ?>;
    --keystone-background-color-gray-lighter-l: <?php echo $background_color_gray_lighter_hsl['L'] . '%' ?>;
    --keystone-background-color-gray-lighter:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),var(--keystone-background-color-gray-lighter-l));--keystone-background-color-gray-lighter-l1:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) + 5%));--keystone-background-color-gray-lighter-l2:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) + 10%));--keystone-background-color-gray-lighter-l3:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) + 15%));--keystone-background-color-gray-lighter-l4:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) + 20%));--keystone-background-color-gray-lighter-l5:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) + 25%));--keystone-background-color-gray-lighter-l6:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) + 30%));--keystone-background-color-gray-lighter-l7:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) + 35%));--keystone-background-color-gray-lighter-l8:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) + 40%));--keystone-background-color-gray-lighter-d1:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) - 5%));--keystone-background-color-gray-lighter-d2:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) - 10%));--keystone-background-color-gray-lighter-d3:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) - 15%));--keystone-background-color-gray-lighter-d4:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) - 20%));--keystone-background-color-gray-lighter-d5:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) - 25%));--keystone-background-color-gray-lighter-d6:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) - 30%));--keystone-background-color-gray-lighter-d7:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) - 35%));--keystone-background-color-gray-lighter-d8:hsl(var(--keystone-background-color-gray-lighter-h),var(--keystone-background-color-gray-lighter-s),calc(var(--keystone-background-color-gray-lighter-l) - 40%));
   <?php
  }

  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb_background_lightest_gray'))) {
    $background_color_gray_lightest_hex = cmb2_get_option('cmb_theme_colors', 'cmb_background_lightest_gray');
    $background_color_gray_lightest_hsl = Keystone_Colors::hexToHsl($background_color_gray_lightest_hex);
    ?>
  
    --keystone-background-color-gray-lightest-h: <?php echo $background_color_gray_lightest_hsl['H'] ?>;
    --keystone-background-color-gray-lightest-s: <?php echo $background_color_gray_lightest_hsl['S'] . '%' ?>;
    --keystone-background-color-gray-lightest-l: <?php echo $background_color_gray_lightest_hsl['L'] . '%' ?>;
    --keystone-background-color-gray-lightest:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),var(--keystone-background-color-gray-lightest-l));--keystone-background-color-gray-lightest-l1:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) + 5%));--keystone-background-color-gray-lightest-l2:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) + 10%));--keystone-background-color-gray-lightest-l3:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) + 15%));--keystone-background-color-gray-lightest-l4:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) + 20%));--keystone-background-color-gray-lightest-l5:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) + 25%));--keystone-background-color-gray-lightest-l6:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) + 30%));--keystone-background-color-gray-lightest-l7:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) + 35%));--keystone-background-color-gray-lightest-l8:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) + 40%));--keystone-background-color-gray-lightest-d1:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) - 5%));--keystone-background-color-gray-lightest-d2:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) - 10%));--keystone-background-color-gray-lightest-d3:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) - 15%));--keystone-background-color-gray-lightest-d4:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) - 20%));--keystone-background-color-gray-lightest-d5:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) - 25%));--keystone-background-color-gray-lightest-d6:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) - 30%));--keystone-background-color-gray-lightest-d7:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) - 35%));--keystone-background-color-gray-lightest-d8:hsl(var(--keystone-background-color-gray-lightest-h),var(--keystone-background-color-gray-lightest-s),calc(var(--keystone-background-color-gray-lightest-l) - 40%));
   <?php
  }

  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb_dark_background_color'))) {
    $dark_background_color_hex = cmb2_get_option('cmb_theme_colors', 'cmb_dark_background_color');
    $dark_background_color_hsl = Keystone_Colors::hexToHsl($dark_background_color_hex);
    ?>

    --keystone-dark-background-color-h: <?php echo $dark_background_color_hsl['H'] ?>;
    --keystone-dark-background-color-s: <?php echo $dark_background_color_hsl['S'] . '%' ?>;
    --keystone-dark-background-color-l: <?php echo $dark_background_color_hsl['L'] . '%' ?>;
    --keystone-dark-background-color:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),var(--keystone-dark-background-color-l));--keystone-dark-background-color-l1:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) + 5%));--keystone-dark-background-color-l2:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) + 10%));--keystone-dark-background-color-l3:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) + 15%));--keystone-dark-background-color-l4:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) + 20%));--keystone-dark-background-color-l5:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) + 25%));--keystone-dark-background-color-l6:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) + 30%));--keystone-dark-background-color-l7:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) + 35%));--keystone-dark-background-color-l8:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) + 40%));--keystone-dark-background-color-d1:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) - 5%));--keystone-dark-background-color-d2:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) - 10%));--keystone-dark-background-color-d3:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) - 15%));--keystone-dark-background-color-d4:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) - 20%));--keystone-dark-background-color-d5:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) - 25%));--keystone-dark-background-color-d6:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) - 30%));--keystone-dark-background-color-d7:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) - 35%));--keystone-dark-background-color-d8:hsl(var(--keystone-dark-background-color-h),var(--keystone-dark-background-color-s),calc(var(--keystone-dark-background-color-l) - 40%));
   <?php
  }

  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb2_id_field_global_body_text_color'))) {
    $body_text_color_hex = cmb2_get_option('cmb_theme_colors', 'cmb2_id_field_global_body_text_color');
    $body_text_color_hsl = Keystone_Colors::hexToHsl($body_text_color_hex);
    ?>
  
    --keystone-body-text-color-h: <?php echo $body_text_color_hsl['H'] ?>;
    --keystone-body-text-color-s: <?php echo $body_text_color_hsl['S'] . '%' ?>;
    --keystone-body-text-color-l: <?php echo $body_text_color_hsl['L'] . '%' ?>;
    --keystone-body-text-color:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),var(--keystone-body-text-color-l));--keystone-body-text-color-l1:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) + 5%));--keystone-body-text-color-l2:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) + 10%));--keystone-body-text-color-l3:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) + 15%));--keystone-body-text-color-l4:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) + 20%));--keystone-body-text-color-l5:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) + 25%));--keystone-body-text-color-l6:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) + 30%));--keystone-body-text-color-l7:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) + 35%));--keystone-body-text-color-l8:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) + 40%));--keystone-body-text-color-d1:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) - 5%));--keystone-body-text-color-d2:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) - 10%));--keystone-body-text-color-d3:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) - 15%));--keystone-body-text-color-d4:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) - 20%));--keystone-body-text-color-d5:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) - 25%));--keystone-body-text-color-d6:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) - 30%));--keystone-body-text-color-d7:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) - 35%));--keystone-body-text-color-d8:hsl(var(--keystone-body-text-color-h),var(--keystone-body-text-color-s),calc(var(--keystone-body-text-color-l) - 40%));
   <?php
  }

  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb2_id_field_global_heading_text_color'))) {
    $heading_text_color_hex = cmb2_get_option('cmb_theme_colors', 'cmb2_id_field_global_heading_text_color');
    $heading_text_color_hsl = Keystone_Colors::hexToHsl($heading_text_color_hex);
    ?>
  
    --keystone-heading-text-color-h: <?php echo $heading_text_color_hsl['H'] ?>;
    --keystone-heading-text-color-s: <?php echo $heading_text_color_hsl['S'] . '%' ?>;
    --keystone-heading-text-color-l: <?php echo $heading_text_color_hsl['L'] . '%' ?>;
    --keystone-heading-text-color:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),var(--keystone-heading-text-color-l));--keystone-heading-text-color-l1:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) + 5%));--keystone-heading-text-color-l2:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) + 10%));--keystone-heading-text-color-l3:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) + 15%));--keystone-heading-text-color-l4:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) + 20%));--keystone-heading-text-color-l5:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) + 25%));--keystone-heading-text-color-l6:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) + 30%));--keystone-heading-text-color-l7:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) + 35%));--keystone-heading-text-color-l8:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) + 40%));--keystone-heading-text-color-d1:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) - 5%));--keystone-heading-text-color-d2:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) - 10%));--keystone-heading-text-color-d3:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) - 15%));--keystone-heading-text-color-d4:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) - 20%));--keystone-heading-text-color-d5:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) - 25%));--keystone-heading-text-color-d6:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) - 30%));--keystone-heading-text-color-d7:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) - 35%));--keystone-heading-text-color-d8:hsl(var(--keystone-heading-text-color-h),var(--keystone-heading-text-color-s),calc(var(--keystone-heading-text-color-l) - 40%));
   <?php
  }
?>

  --keystone-module-inner-max-width: <?php echo cmb2_get_option('cmb2_key_box_advanced_settings', 'cmb2_id_field_container_max_width').'px;'; ?>
  --keystone-heading-font-weight: <?php echo cmb2_get_option('cmb_theme_colors', 'cmb2_id_field_global_heading_font_weight').';'; ?>
}