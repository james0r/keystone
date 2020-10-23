<?php

// Add Shortcode
function year_shortcode( $atts , $content = null ) {

	echo date('Y');

}
add_shortcode( 'year', 'year_shortcode' );