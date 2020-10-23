<?php
require_once( __DIR__ . '/Carbon_Avatar.php' );

/**
 * Register an attachment to serve as a default avatar throughout the site
 */
function crb_register_default_avatar( $attachment_id ) {
	Carbon_Avatar::register_default_avatar( $attachment_id );
}

/**
 * Register a user meta key which will be checked for a valid attachment id
 * whenever an avatar has to be displayed for a site user
 *
 * Can be called multiple times to register fallbacks
 */
function crb_register_avatar_user_meta_key( $meta_key ) {
	Carbon_Avatar::register_avatar_user_meta_key( $meta_key );
}

Carbon_Avatar::apply_hooks();
