<?php

/**
* THIS CLASS HANDLES SCRIPTS
*/

class Keystone_Sidebars {
    public function __construct() {
        add_action('widgets_init', [$this, 'my_register_sidebars']);
    }

    public function my_register_sidebars() {
        /* Register the 'primary' sidebar. */
        register_sidebar(
            [
                'id'            => 'keystone-widget-bar',
                'name'          => __('Keystone Widget Bar'),
                'description'   => __('A row of 4 widgets.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            ]
        );
    }
}
