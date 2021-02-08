<div id="header-bottom-bar" class="header-bottom-bar">
  <div class="header-bottom-bar-inner">
    <div class="flex">
      <nav class="nav-wrapper">
        <?php 
          wp_nav_menu( array(
            'menu'              => "header-primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
            'menu_class'        => "header-primary-menu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
            'menu_id'           => "header-primary-menu", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
            'theme_location'    => "header-primary",
            'container' => false,
            'depth' => 4,
            'link_after' => '<i class="fas fa-chevron-down"></i>',
            'walker' => Keystone()->walker
        ) );
        ?>
      </nav>
    </div>
  </div>
</div>

<script>

</script>