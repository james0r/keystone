<?php
$box = 'cmb_social_links';

$social_links_array = array();
$company_name = cmb2_get_option('cmb_main_clinic_information', 'cmb_company_name');
$facebook = cmb2_get_option($box, 'facebook');
$twitter = cmb2_get_option($box, 'twitter');
$instagram = cmb2_get_option($box, 'instagram');
$linkedin = cmb2_get_option($box, 'linkedin');
$pinterest = cmb2_get_option($box, 'pinterest');
$youtube = cmb2_get_option($box, 'youtube');
?>

<ul class="social-circles social-circles-list">
  <?php if (!empty($facebook)) : ?>
  <li class="social-circles-list-item">
    <a target="_blank" href="<?php echo $facebook; ?>" class="social-circles-link facebook-link"
      rel="noopener">
      <i class="fab fa-facebook-f"><span class="sr-only">Facebook link for <?php echo $company_name; ?></span></i>
    </a>
  </li>
  <?php endif; ?>
  <?php if (!empty($twitter)) : ?>
  <li class="social-circles-list-item">
    <a target="_blank" href="<?php echo $twitter; ?>" class="social-circles-link twitter-link"
      rel="noopener">
      <i class="fab fa-twitter"><span class="sr-only">Twitter link for <?php echo $company_name; ?></span></i>
    </a>
  </li>
  <?php endif; ?>
  <?php if (!empty($instagram)) : ?>
  <li class="social-circles-list-item">
    <a target="_blank" href="<?php echo $instagram; ?>" class="social-circles-link instagram-link"
      rel="noopener">
      <i class="fab fa-instagram"><span class="sr-only">Instagram link for <?php echo $company_name; ?></span></i>
    </a>
  </li>
  <?php endif; ?>
  <?php if (!empty($linkedin)) : ?>
  <li class="social-circles-list-item">
    <a target="_blank" href="<?php echo $linkedin; ?>" class="social-circles-link linkedin-link"
      rel="noopener">
      <i class="fab fa-linkedin-in"><span class="sr-only">LinkedIn link for <?php echo $company_name; ?></span></i>
    </a>
  </li>
  <?php endif; ?>
  <?php if (!empty($pinterest)) : ?>
  <li class="social-circles-list-item">
    <a target="_blank" href="<?php echo $pinterest; ?>" class="social-circles-link pinterest-link"
      rel="noopener">
      <i class="fab fa-pinterest-p"><span class="sr-only">Pinterest link for <?php echo $company_name; ?></span></i>
    </a>
  </li>
  <?php endif; ?>
  <?php if (!empty($youtube)) : ?>
  <li class="social-circles-list-item">
    <a target="_blank" href="<?php echo $youtube; ?>" class="social-circles-link youtube-link"
      rel="noopener">
      <i class="fab fa-youtube"><span class="sr-only">Youtube link for <?php echo $company_name; ?></span></i>
    </a>
  </li>
  <?php endif; ?>
</ul>