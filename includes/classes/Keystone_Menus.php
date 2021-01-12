<?php

/**
* This class handles the creation of menus during and
* after the user activates the Keystone theme
*/

class Keystone_Menus {
    public function __construct() {
        add_action('after_switch_theme', [$this, 'my_after_switch_theme']);

        Keystone()->addNavMenus([
            'header-primary'     => __('Header Primary Menu', 'keystone'),
            'header-secondary'   => __('Header Secondary Menu', 'keystone'),
            'footer-primary'     => __('Footer Primary Menu', 'keystone'),
            'footer-secondary'   => __('Footer Secondary Menu', 'keystone')
        ]);

        add_action('keystone_load_helper_functions', [$this, 'loadHelperFunctions']);
    }

    public function generate_site_nav_menu_item($term_id, $title, $url) {
        wp_update_nav_menu_item($term_id, 0, [
            'menu-item-title'   => sprintf(__('%s', 'keystone'), $title),
            'menu-item-url'     => home_url('/' . $url),
            'menu-item-status'  => 'publish'
        ]);
    }

    public function generate_site_nav_menu($menu_name, $menu_items_array, $location_target) {
        $menu_primary = $menu_name;
        wp_create_nav_menu($menu_primary);
        $menu_primary_obj = get_term_by('name', $menu_primary, 'nav_menu');

        foreach ($menu_items_array as $page_name => $page_location) {
            generate_site_nav_menu_item($menu_primary_obj->term_id, $page_name, $page_location);
        }

        $locations_primary_arr = get_theme_mod('nav_menu_locations');
        $locations_primary_arr[$location_target] = $menu_primary_obj->term_id;
        set_theme_mod('nav_menu_locations', $locations_primary_arr);

        update_option('menu_check', true);
    }

      /**
     * Runs when user switches to your custom theme
     *
     */
    public function my_after_switch_theme() {
        /**
         * Setup the site navigation
         */
        $run_menu_maker_once = get_option('menu_check');

        if (!$run_menu_maker_once) {
            /**
             * Setup Navigation for : Header Menu - Logged In
             */
            $primary_menu_items = [
                'Listings'  => 'listings',
                'Submit Ad' => 'submit-ad',
                'Messages'  => 'messages',
                'Account'   => 'account',
                'Logout'    => 'account?action=logout' // You need to setup your logout url using wp_logout()
            ];
            cvf_generate_site_nav_menu('Header Menu - Logged In', $primary_menu_items, 'primary');

            /**
             * Setup Navigation for : Header Menu - Logged Out
             */
            $secondary_menu_items = [
                'Listings'  => 'listings',
                'Submit Ad' => 'submit-ad',
                'Register'  => 'register',
                'Login'     => 'login'
            ];
            cvf_generate_site_nav_menu('Header Menu - Logged Out', $secondary_menu_items, 'secondary');
        }
    }

    public function loadHelperFunctions() {
        function fallback_menu_pages() {
            $list_pages = '';
            $args = [
                'sort_order'   => 'asc',
                'sort_column'  => 'post_title',
                'hierarchical' => 1,
                'child_of'     => 0,
                'parent'       => -1,
                'offset'       => 0,
                'number'       => 5,
                'post_type'    => 'page',
                'post_status'  => 'publish'
            ];
            $pages = get_pages($args);

            foreach ($pages as $key => $page) {
                $list_pages .= '<li><a href = "' . get_permalink($page->ID) . '">' . $page->post_title . '</a></li>';
            }

            echo $list_pages;
        }
    }
}
