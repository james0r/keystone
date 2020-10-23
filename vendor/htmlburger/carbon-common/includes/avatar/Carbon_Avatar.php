<?php

class Carbon_Avatar {
	private static $default_avatar = 0;

	private static $avatar_user_meta_keys = array();

	public static function apply_hooks() {
		add_filter( 'get_avatar_url', array( 'Carbon_Avatar', 'add_custom_avatars' ), 10, 3 );
	}

	public static function register_default_avatar( $attachment_id ) {
		self::$default_avatar = $attachment_id;
	}

	public static function unregister_default_avatar() {
		self::$default_avatar = 0;
	}

	public static function register_avatar_user_meta_key( $user_meta_key ) {
		self::$avatar_user_meta_keys[$user_meta_key] = $user_meta_key;
	}

	public static function unregister_avatar_user_meta_key( $user_meta_key ) {
		unset( self::$avatar_user_meta_keys[$user_meta_key] );
	}

	public static function add_custom_avatars( $url, $id_or_email, $args ) {
		if ( self::$default_avatar == 0 && empty( self::$avatar_user_meta_keys ) ) {
			return $url;
		}

		if ( is_a( $id_or_email, 'WP_Comment' ) ) {
			$id_or_email = $id_or_email->user_id;
		} elseif ( !is_numeric( $id_or_email ) ) {
			$user = get_user_by( 'email', $id_or_email );
			if ( $user ) {
				$id_or_email = $user->ID;
			}
		}
		
		if ( is_numeric( $id_or_email ) && empty( $args['force_default'] ) ) {
			$size = 'full';
			if ( !empty( $args['width'] ) && !empty( $args['height'] ) ) {
				$size = array( $args['width'], $args['height'] );
			} elseif ( !empty( $args['size'] ) ) {
				$size = array( $args['size'], $args['size'] );
			}

			$attachments_fallback_chain = array();

			foreach ( self::$avatar_user_meta_keys as $user_meta_key ) {
				$attachment_id = get_user_meta( $id_or_email, $user_meta_key, true );
				if ( is_numeric( $attachment_id ) ) {
					$attachments_fallback_chain[] = $attachment_id;
				}
			}

			if ( self::$default_avatar != 0 ) {
				$attachments_fallback_chain[] = self::$default_avatar;
			}

			foreach ( $attachments_fallback_chain as $attachment_id ) {
				$image = wp_get_attachment_image_src( $attachment_id, $size );
				if ( !empty( $image ) ) {
					$url = $image[0];
					break;
				}
			}
		}
		return $url;
	}
}
