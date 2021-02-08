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

<ul class="social-squares social-squares-list animate__animated animate__fadeInUp animate__faster">
  <?php if (!empty($facebook)) : ?>
  <li class="social-squares-list-item">
    <a target="_blank" href="<?php echo $facebook; ?>" class="social-squares-link facebook-link"
      rel="noopener">
      <i class="fab fa-facebook-f"><span class="sr-only">Facebook link for <?php echo $company_name; ?></span></i>
    </a>
  </li>
  <?php endif; ?>
  <?php if (!empty($twitter)) : ?>
  <li class="social-squares-list-item">
    <a target="_blank" href="<?php echo $twitter; ?>" class="social-squares-link twitter-link"
      rel="noopener">
      <i class="fab fa-twitter"><span class="sr-only">Twitter link for <?php echo $company_name; ?></span></i>
    </a>
  </li>
  <?php endif; ?>
  <?php if (!empty($instagram)) : ?>
  <li class="social-squares-list-item">
    <a target="_blank" href="<?php echo $instagram; ?>" class="social-squares-link instagram-link"
      rel="noopener">
      <i class="fab fa-instagram"><span class="sr-only">Instagram link for <?php echo $company_name; ?></span></i>
    </a>
  </li>
  <?php endif; ?>
  <?php if (!empty($linkedin)) : ?>
  <li class="social-squares-list-item">
    <a target="_blank" href="<?php echo $linkedin; ?>" class="social-squares-link linkedin-link"
      rel="noopener">
      <i class="fab fa-linkedin-in"><span class="sr-only">LinkedIn link for <?php echo $company_name; ?></span></i>
    </a>
  </li>
  <?php endif; ?>
  <?php if (!empty($pinterest)) : ?>
  <li class="social-squares-list-item">
    <a target="_blank" href="<?php echo $pinterest; ?>" class="social-squares-link pinterest-link"
      rel="noopener">
      <i class="fab fa-pinterest-p"><span class="sr-only">Pinterest link for <?php echo $company_name; ?></span></i>
    </a>
  </li>
  <?php endif; ?>
  <?php if (!empty($youtube)) : ?>
  <li class="social-squares-list-item">
    <a target="_blank" href="<?php echo $youtube; ?>" class="social-squares-link youtube-link"
      rel="noopener">
      <i class="fab fa-youtube"><span class="sr-only">Youtube link for <?php echo $company_name; ?></span></i>
    </a>
  </li>
  <?php endif; ?>
</ul>