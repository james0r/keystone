<?php

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

function cmb_get_option( $key = '', $default = false ) {
  if ( function_exists( 'cmb2_get_option' ) ) {
      // Use cmb2_get_option as it passes through some key filters.
      return cmb2_get_option( 'cmb_main_options', $key, $default );
  }

  // Fallback to get_option if CMB2 is not loaded yet.
  $opts = get_option( 'cmb_main_options', $default );

  $val = $default;

  if ( 'all' == $key ) {
      $val = $opts;
  } elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
      $val = $opts[ $key ];
  }

  return $val;
}

function get_meta($id, $key) {
  $value = get_post_meta($id);
  return $value[$key][0];
}

function get_the_meta($key, $single = true) {
  $value = get_post_meta(get_the_ID(), $key, $single);
  return $value;
}

// MODIFIED GET TEMPLATE PART TO ACCEPT ARGUMENTS
function get_partial( $file, $template_args = array(), $cache_args = array() ) {
  $template_args = wp_parse_args( $template_args );
  $cache_args = wp_parse_args( $cache_args );
  if ( $cache_args ) {
      foreach ( $template_args as $key => $value ) {
          if ( is_scalar( $value ) || is_array( $value ) ) {
              $cache_args[$key] = $value;
          } else if ( is_object( $value ) && method_exists( $value, 'get_id' ) ) {
              $cache_args[$key] = call_user_method( 'get_id', $value );
          }
      }
      if ( ( $cache = wp_cache_get( $file, serialize( $cache_args ) ) ) !== false ) {
          if ( ! empty( $template_args['return'] ) )
              return $cache;
          echo $cache;
          return;
      }
  }
  $file_handle = $file;
  do_action( 'start_operation', 'hm_template_part::' . $file_handle );
  if ( file_exists( get_stylesheet_directory() . '/' . $file . '.php' ) )
      $file = get_stylesheet_directory() . '/' . $file . '.php';
  elseif ( file_exists( get_template_directory() . '/' . $file . '.php' ) )
      $file = get_template_directory() . '/' . $file . '.php';
  ob_start();
  $return = require( $file );
  $data = ob_get_clean();
  do_action( 'end_operation', 'hm_template_part::' . $file_handle );
  if ( $cache_args ) {
      wp_cache_set( $file, $data, serialize( $cache_args ), 3600 );
  }
  if ( ! empty( $template_args['return'] ) )
      if ( $return === false )
          return false;
      else
          return $data;
  echo $data;
}


// --- helpers ---

function do_truncate( $text, $limit ) {
  $return = $text;
  if(strlen($text) > $limit) {
    $return = substr($text, 0, $limit);
    $return .= '..';
  }
  return $return;
}

function get_directions( $address ) {
  return sprintf('https://www.google.com/maps/dir/?api=1&destination=%s', $address);
}

function slugify( $text ) {
  return str_replace( ' ', '-', strtolower($text) );
}

function get_nav( $menu_name, $args = array() ) {
  $return = array();
  $wp_nav = wp_get_nav_menu_items($menu_name, $args);
  if(is_array($wp_nav) === true) {
    $tree_like = buildTree($wp_nav);
    $return = parse_nav($tree_like);
  }
  return $return;
}

// Adds a toast in the bottom right corner displaying current template while logged into admin

function display_template_toast() {
	if ( is_super_admin() ) {
		global $template;

		$markup = '<div class="wp-template-toast">
						%s
						</div>
						<style>
							.wp-template-toast {
								position: fixed;
								height: 20px;
								width: 150px;
								background: rgba(255,0,0,.5);
								color: white;
								bottom: 0px;
								display: flex;
								justify-content: center;
								font-size: 12px;
								right: 0px;
								border-radius: 5px;
								animation: fadeout 1s 2s forwards;
							}
							@keyframes fadeout {
								from {
									opacity: 1;
								}

								to {
									opacity: 0;
								}
							}
						</style>';

			echo sprintf($markup, basename($template));
	}
}
 
add_action( 'wp_footer', 'display_template_toast' );