<ul class="social-icons-list">
  <div class="social-icons-list-inner">
    <?php if (!empty(cmb2_get_option('cmb_social_links', 'facebook'))) : ?>
    <li class="social-icons-item">
      <a href="<?php echo cmb2_get_option('cmb_social_links', 'facebook'); ?>">
        <i class="fab fa-facebook"></i>
      </a>
    </li>
    <?php endif; ?>
    <?php if (!empty(cmb2_get_option('cmb_social_links', 'twitter'))) : ?>
    <li class="social-icons-item">
      <a href="<?php echo cmb2_get_option('cmb_social_links', 'twitter'); ?>">
        <i class="fab fa-twitter"></i>
      </a>
    </li>
    <?php endif; ?>
    <?php if (!empty(cmb2_get_option('cmb_social_links', 'instagram'))) : ?>
    <li class="social-icons-item">
      <a href="<?php echo cmb2_get_option('cmb_social_links', 'instagram'); ?>">
        <i class="fab fa-instagram"></i>
      </a>
    </li>
    <?php endif; ?>
    <?php if (!empty(cmb2_get_option('cmb_social_links', 'linkedin'))) : ?>
    <li class="social-icons-item">
      <a href="<?php echo cmb2_get_option('cmb_social_links', 'linkedin'); ?>">
        <i class="fab fa-linkedin"></i>
      </a>
    </li>
    <?php endif; ?>
    <?php if (!empty(cmb2_get_option('cmb_social_links', 'pinterest'))) : ?>
    <li class="social-icons-item">
      <a href="<?php echo cmb2_get_option('cmb_social_links', 'pinterest'); ?>">
        <i class="fab fa-pinterest"></i>
      </a>
    </li>
    <?php endif; ?>
    <?php if (!empty(cmb2_get_option('cmb_social_links', 'youtube'))) : ?>
    <li class="social-icons-item">
      <a href="<?php echo cmb2_get_option('cmb_social_links', 'youtube'); ?>">
        <i class="fab fa-youtube"></i>
      </a>
    </li>
    <?php endif; ?>
  </div>
</ul>