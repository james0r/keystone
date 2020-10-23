<?php
/**
 * Plugin Name: Carbon Fragment
 * Description: A tiny plugin that provides theme utilities.
 * Version: 1.0
 * Requires at least: 4.0
 * Tested up to: 4.5.3
 */

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once( 'vendor/autoload.php' );
} else {
	require_once( 'carbon-fragment.php' );
}
