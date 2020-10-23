<?php
/**
 * Carbon Fragment bootstrap code.
 */
require_once( __DIR__ . '/Carbon_Fragment.php' );

/**
 * Generic usage shortcut
 * Example usage:
 * - crb_render_fragment('layout-block-left');
 * - crb_render_fragment(array('layout-block-left', 'layout-block'), array('name'=>'John Doe'));
 */
if ( ! function_exists( 'crb_render_fragment' ) ) {
	function crb_render_fragment( $fragments, $context=array() ) {
		Carbon_Fragment::create( $fragments, $context )->render();
	}
}
