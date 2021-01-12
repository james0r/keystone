<div id="header-top-bar" class="header-top-bar">
  <div class="header-top-bar-inner">
    <div class="flex">
      <div class="message">
        <?php apply_filters('keystone_render_icon', $template_args['header-style-group']['top-bar-message-icon']) ?>
        <span>
          <?php echo $template_args['header-style-group']['top-bar-message-text'] ?>
        </span>
      </div>
      <address class="contact">
        <a href="tel:<?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_company_new_patients_phone') ?>">
          <?php apply_filters('keystone_render_icon', 'fas fa-phone-alt'); ?>
          <?php echo cmb2_get_option('cmb_main_clinic_information', 'cmb_company_new_patients_phone') ?>
        </a>
      </address>
      <div class="nav-area">
        <nav>
          <?php 
            wp_nav_menu( array(
              'menu'              => "Top Bar Menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
              'menu_class'        => "header-secondary-menu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
              'menu_id'           => "header-secondary-menu", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
              'container'         => false, // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
              'theme_location'    => "header-secondary", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
            ) );
          ?>
        </nav>
        <button class="side-panel-toggler">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <?php error_log( print_r($template_args, TRUE) ); ?>
    </div>
  </div>
</div>

<?php if ($template_args['header-advanced-group']['cmb2_id_header_override_top_bar_color']) : ?>
  <style>
    .header-top-bar {
      background-color: <?php echo $template_args['header-advanced-group']['cmb2_id_header_top_bar_override_color'] ; ?> !important;
    }
  </style>
<?php endif; ?>