<div id="header-top-bar" class="header-top-bar">
  <div class="header-top-bar-inner">
    <div class="flex">

      <!-- Top Bar Message Block Start -->

      <div class="message">
        <?php apply_filters('keystone_render_icon', $template_args['header-style-group']['top-bar-message-icon']) ?>
        <span>
          <?php echo $template_args['header-style-group']['top-bar-message-text'] ?>
        </span>
      </div>

      <!-- Top Bar Message Block End -->

      <!-- Top Bar Social Squares Start -->

      <?php keystone_render_template('social-squares'); ?>

      <!-- Top Bar Social Squares End -->

      <!-- Top Bar Contact Block Start -->

      <address class="contact">
        <?php if (!empty(cmb2_get_option('cmb_main_clinic_information', 'cmb_company_new_patients_phone'))) : ?>
        <div class="floating-divider"></div>
        <?php apply_filters('keystone_render_icon', 'fas fa-phone-alt'); ?>
        <?php endif; ?>
        <button id="top-bar-contact-dropdown-toggle" aria-haspopup="listbox">

          <?php _e('Call Us', 'keystone') ?>:
          <?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_company_new_patients_phone') ?>
          <?php apply_filters('keystone_render_icon', 'fas fa-caret-down'); ?>
          <ul id="top-bar-contact-dropdown" class="contact-list" style="display: none;" tabindex="-1"
            aria-role="listbox" aria-expanded="false">
            <li aria-label="close" aria-role="button" tabindex="0">
              Close Menu
            </li>
            <?php if (!empty(cmb2_get_option('cmb_main_clinic_information', 'cmb_company_new_patients_phone'))) : ?>
            <li class="contact-item" role="option">
              <a
                href="tel:<?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_company_new_patients_phone') ?>">
                <span><?php _e('New Patients', 'keystone') ?>:</span>
                <span><?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_company_new_patients_phone') ?></span>
              </a>
            </li>
            <?php endif; ?>
            <?php if (!empty(cmb2_get_option('cmb_main_clinic_information', 'cmb_company_new_patients_phone'))) : ?>
            <li class="contact-item" role="option">
              <a
                href="tel:<?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_company_new_patients_phone') ?>">
                <span><?php _e('Current Patients', 'keystone') ?>:</span>
                <span><?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_company_current_patients_phone') ?></span>
              </a>
            </li>
            <?php endif; ?>
            <?php if (!empty(cmb2_get_option('cmb_main_clinic_information', 'cmb_company_email'))) : ?>
            <li class="contact-item" role="option">
              <?php apply_filters('keystone_render_icon', 'far fa-envelope'); ?>
              <a class="email"
                href="mailto:<?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_company_email') ?>">
                <?php _e('Send us an email', 'keystone') ?>
              </a>
            </li>
            <?php endif; ?>
            <li class="contact-item" role="option">
              <a
                href="tel:<?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_company_new_patients_phone') ?>">
                <span>
                  <?php apply_filters('keystone_render_icon', 'far fa-calendar-check') ?>
                  <?php _e('Make an appointment', 'keystone') ?>
                </span>
              </a>
            </li>
          </ul>
        </button>
        <div class="floating-divider"></div>
        <br class="lg-and-smaller">
        <?php if (!empty(cmb2_get_option('cmb_main_clinic_information', 'cmb_company_email'))) : ?>
        <?php apply_filters('keystone_render_icon', 'far fa-envelope'); ?>
        <a class="email"
          href="mailto:<?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_company_email') ?>">
          <?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_company_email') ?>
        </a>
        <div class="floating-divider"></div>
        <?php endif; ?>
      </address>

      <!-- Top Bar Contact Block End -->

      <!-- Top Bar Navigation Start -->

      <div class="nav-wrapper">
        <nav>
          <?php
            wp_nav_menu(array(
              'menu'              => 'Top Bar Menu', // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
              'menu_class'        => 'header-secondary-menu', // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
              'menu_id'           => 'header-secondary-menu', // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
              'container'         => false, // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
              'theme_location'    => 'header-secondary', // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
            ));
          ?>
        </nav>
        <button id="top-bar-side-panel-toggler" class="side-panel-toggler">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Top Bar Navigation End -->

      <!-- Request An Appointment Button Start -->

      <button id="top-bar-schedule-appointment-trigger" class="top-bar-schedule-appointment-trigger">
        <?php _e('SCHEDULE APPOINTMENT', 'keystone') ?>
      </button>

      <!-- Request An Appointment Button End -->

      <!-- Language Toggler Dropdown Start -->

      <div class="header-language-toggler-wrapper">
        <select id="header-language-toggler" class="header-language-toggler">
          <option value="es" alt="Spanish">Spanish</option>
          <option value="en" alt="English">English</option>
        </select>
        <?php apply_filters('keystone_render_icon', 'fas fa-caret-down'); ?>
      </div>

      <!-- Language Toggler End -->

      <!-- Top Bar Social Circles Start -->

      <?php keystone_render_template('social-circles'); ?>

      <!-- Top Bar Social Circles End -->

    </div>
  </div>
</div>

<script>
  $(function() {
    $('html').click(function() {
      $('#top-bar-contact-dropdown').fadeOut(300);
      var $topbarDropdown = $('#top-bar-contact-dropdown');
      $topbarDropdown.attr('aria-expanded', 'false');
    })
    $('#top-bar-contact-dropdown-toggle').on('click', function(e) {
      e.stopPropagation();
      var $topbarDropdown = $('#top-bar-contact-dropdown');
      $topbarDropdown.fadeToggle(300, function() {
        var isExpanded = ($topbarDropdown.attr('aria-expanded') == 'true');
        $topbarDropdown.attr('aria-expanded', !isExpanded);
      });
    })
  })
</script>

<?php if ($template_args['header-advanced-group']['cmb2_id_header_override_top_bar_color']) : ?>
<style>
  .header-top-bar {
    background-color:
      <?php echo $template_args['header-advanced-group']['cmb2_id_header_top_bar_override_color'] ; ?>
       !important;
  }
</style>
<?php endif;
