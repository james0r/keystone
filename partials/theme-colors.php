<!-- Theme CSS Start -->
<style>
<?php 
  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb_text_color'))) {
    echo sprintf("html body {\ncolor: %s;\n}\n", cmb2_get_option('cmb_theme_colors', 'cmb_text_color'));
  }
  if (!empty(cmb2_get_option('cmb_theme_colors', 'cmb_brand_color'))) {
    echo sprintf("html body a {\ncolor: %s;\n}\n", cmb2_get_option('cmb_theme_colors', 'cmb_brand_color'));
  }
?>
</style>
<!-- Theme CSS End -->