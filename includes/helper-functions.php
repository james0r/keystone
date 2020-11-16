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

// COLOR HELPER FUNCTIONS


function hex2hsl($hex)
{
    $red = hexdec(substr($hex, 0, 2)) / 255;
    $green = hexdec(substr($hex, 2, 2)) / 255;
    $blue = hexdec(substr($hex, 4, 2)) / 255;

    $cmin = min($red, $green, $blue);
    $cmax = max($red, $green, $blue);
    $delta = $cmax - $cmin;

    if ($delta === 0) {
        $hue = 0;
    } elseif ($cmax === $red && $delta > 0) {
        $hue = (($green - $blue) / $delta) % 6;
    } elseif ($cmax === $green && $delta > 0) {
        $hue = ($blue - $red) / $delta + 2;
    } elseif ($delta > 0) {
        $hue = ($red - $green) / $delta + 4;
    }

    $hue = round($hue * 60);
    if ($hue < 0) {
        $hue += 360;
    }

    $lightness = (($cmax + $cmin) / 2) * 100;
    $saturation = $delta === 0 ? 0 : ($delta / (1 - abs(2 * $lightness - 1))) * 100;
    if ($saturation < 0) {
        $saturation += 100;
    }

    $lightness = round($lightness);
    $saturation = round($saturation);

    return array(
      0 => $hue,
      1 => $saturation,
      2 => $lightness
    );
}

function hex2rgb( $colour ) {
  if ( $colour[0] == '#' ) {
          $colour = substr( $colour, 1 );
  }
  if ( strlen( $colour ) == 6 ) {
          list( $r, $g, $b ) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
  } elseif ( strlen( $colour ) == 3 ) {
          list( $r, $g, $b ) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
  } else {
          return false;
  }
  $r = hexdec( $r );
  $g = hexdec( $g );
  $b = hexdec( $b );
  return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

function getColorLightness($hex = 'No Color Provided'){
	global $post;
	$id = $post->ID;
	
	//if meta id is present, get that, if not get primary color
	if(empty($hex)){
		$color = '#ffffff';
	} elseif($hex != 'No Color Provided'){
		$color = $hex;
	} else { 
		$color = site_ops_brand_color(false); 
	}
	
	$color_nohash = str_replace('#', '', $color);
		
	//get background lightness
	$hsl = hexToHsl($color_nohash);
	$lightness = $hsl[2]*1000;
	return $lightness;
}