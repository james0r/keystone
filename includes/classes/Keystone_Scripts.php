<?php
/**
 * This handles the enqueueing of styles and scripts
 *
 */

class Keystone_Scripts {
  public function __construct() {
    add_action('wp_enqueue_scripts', array($this, 'register_module_scripts'));
    add_action('wp_enqueue_scripts', array($this, 'enqueue_critical_scripts'));
    add_action('wp_enqueue_scripts', array($this, 'add_comment_script'));
  }

  public function add_comment_script() {
    if (is_singular() && comments_open() && get_option('thread_comments')) {
      wp_enqueue_script('comment-reply');
    }
  }

  public function enqueue_critical_scripts() {
    // Enqueue critical stylesheets
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('jquery-datetimepicker-css', get_template_directory_uri() . '/assets/css/jquery.datetimepicker.min.css');
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style('user-styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('jquery-3.5.1', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', null, 1.0, false);
    wp_enqueue_script('header-js', get_template_directory_uri() . '/assets/js/header-bundle.js', null, 1.0, false);
    wp_enqueue_script('knockout', get_template_directory_uri() . '/assets/js/knockout-3.5.1.js', null, 1.0, true);
    wp_enqueue_script('alpine-js', get_template_directory_uri() . '/assets/js/alpine.js', null, 1.0, true);
    wp_enqueue_script('footer-js', get_template_directory_uri() . '/assets/js/footer-bundle.js', array('jquery-3.5.1'), 1.0, true);
    wp_enqueue_script('jquery-datetimepicker-js', get_template_directory_uri() . '/assets/js/jquery.datetimepicker.min.js', array('jquery-3.5.1'), 1.0, true);
  }

  public function register_module_scripts() {
    // Regsiter stylesheets for standard css loading

    wp_register_style('slick-css', get_stylesheet_directory_uri() . '/assets/css/slick.css');
    wp_register_style('slick-theme-css', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');
    wp_register_style('twenty-twenty-css', get_stylesheet_directory_uri() . '/assets/css/twenty-twenty.css');
    wp_register_style('swiper-bundle-css', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.css');
    wp_register_style('slick-lightbox-css', get_stylesheet_directory_uri() . '/assets/css/slick-lightbox.css');
    wp_register_style('lightbox2-css', get_stylesheet_directory_uri() . '/assets/css/lightbox.min.css');
    wp_register_style('flaticon-dental-css', get_stylesheet_directory_uri() . '/assets/css/flaticon-set-dental.css');
    wp_register_style('flaticon-medical-css', get_stylesheet_directory_uri() . '/assets/css/flaticon-set-medical.css');
    wp_register_style('module-about-css', get_stylesheet_directory_uri() . '/assets/css/module-about.css');
    wp_register_style('module-certs-css', get_stylesheet_directory_uri() . '/assets/css/module-certs.css');
    wp_register_style('module-services-style-1-css', get_stylesheet_directory_uri() . '/assets/css/module-services-style-1.css');

    // Register scripts for standard javascript loading

    wp_register_script('twenty-twenty-js', get_template_directory_uri() . '/assets/js/jquery.twentytwenty.js', array('jquery-3.5.1'), 1.0, true);
    wp_register_script('event-move-js', get_template_directory_uri() . '/assets/js/jquery.event.move.js', array('jquery-3.5.1'), 1.0, true);
    wp_register_script('slick-js', get_template_directory_uri() . '/assets/js/slick.js', array('jquery-3.5.1'), 1.0, true);
    wp_register_script('swiper-bundle-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(''), 1.0, true);
    wp_register_script('slick-lightbox-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery-3.5.1', 'slick-js'), 1.0, true);
    wp_register_script('countup-js', get_template_directory_uri() . '/assets/js/countUp.min.js', array(''), 1.0, true);
    wp_register_script('lightbox2-js', get_template_directory_uri() . '/assets/js/lightbox.min.js', array('jquery-3.5.1'), 1.0, true);
  }
}

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
