<div id="header-bottom-bar" class="header-bottom-bar">
  <div class="header-bottom-bar-inner">
    <div class="flex">

      <!-- Bottom Bar Navigation Start -->
      <nav class="nav-wrapper">
        <?php
          wp_nav_menu(array(
            'menu'              => 'header-primary',
            'menu_class'        => 'header-primary-menu',
            'menu_id'           => 'header-primary-menu',
            'theme_location'    => 'header-primary',
            'container'         => false,
            'depth'             => 4,
            'link_after'        => '<i class="fas fa-chevron-down"></i>',
            'walker'            => Keystone()->walker
          ));
        ?>
      </nav>
      <!-- Bottom Bar Navigation End -->

      <!-- Bottom Bar Search Toggler Start -->
      <div id="header-search-toggler-wrapper" class="header-search-toggler-wrapper">
        <button id="header-search-toggler" class="header-search-toggler">
          <img
            src="<?php echo Keystone::$stylesheet_dir_url . '/assets/images/keystone-header-search-icon.png' ?>"
            alt="">
        </button>
      </div>
      <!-- Bottom Bar Search Toggler End -->

      <!-- Bottom Bar Cart Icon Start -->
      <a href="#" class="header-cart-link">
        <div id="header-cart-icon-wrapper" class="header-cart-icon-wrapper">
          <img id="header-cart-icon" class="header-cart-icon"
            src="<?php echo Keystone::$stylesheet_dir_url . '/assets/images/keystone-shopping-cart.png' ?>"
            alt="Shopping Cart Icon">
          <div id="header-cart-item-count" class="header-cart-item-count">0</div>
        </div>
      </a>
      <!-- Bottom Bar Cart Icon End -->

      <!-- Bottom Bar Side Panel Toggler Start -->
      <div class="side-panel-toggler-wrapper">
        <button id="bottom-bar-side-panel-toggler" class="side-panel-toggler">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- Bottom Bar Side Panel Toggler End -->

      <!-- Bottom Bar CTA Button Start -->
      <div id="bottom-bar-cta-button-wrapper" class="cta-button-wrapper">
        <button class="btn btn-flat btn-primary">
          <?php echo cmb2_get_option('cmb2_key_header_styles_box', 'cmb2_id_header_group_cta')[0]['button-text'] ?>
        </button>
      </div>
      <!-- Bottom Bar CTA Button End -->


      <!-- Bottom Bar Side Panel Toggler Start -->
      <div class="mobile-menu-toggler-wrapper">
        <button id="mobile-menu-toggler" class="mobile-menu-toggler">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <!-- Bottom Bar Side Panel Toggler End -->

    </div>

    <!-- Bottom Bar Mobile Navigation Start -->
    <nav class="mobile-nav-wrapper">
      <?php
          wp_nav_menu(array(
            'menu'              => 'header-primary',
            'menu_class'        => 'header-primary-menu-mobile',
            'menu_id'           => 'header-primary-menu-mobile',
            'theme_location'    => 'header-primary',
            'container'         => false,
            'depth'             => 4,
            'link_after'        => '<i class="fas fa-chevron-down"></i>',
            'walker'            => Keystone()->walker
          ));
        ?>
    </nav>
    <!-- Bottom Bar Mobile Navigation End -->
    
  </div>
</div>

<script>
  // Handle roll-up and roll-down of header sub menus
  $(function() {
    $('#header-bottom-bar').find('li').on('mouseenter', function(e) {
      $(e.currentTarget).children('.sub-menu').slideDown('fast');
    })
    $('#header-bottom-bar').find('li').on('mouseleave', function(e) {
      $(e.currentTarget).children('.sub-menu').slideUp('fast');
    })
  })
</script>