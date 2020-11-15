<?php

use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;

Container::make( 'user_meta', 'Social Media Info' )
	->add_fields( array(
		Field::make( 'image', 'crb_profile_image', __( 'Profile Image', 'crb' ) ),
		Field::make( 'text', 'crb_social_facebook', __( 'Facebook', 'crb' ) ),
		Field::make( 'text', 'crb_social_twitter', __( 'Twitter', 'crb' ) ),
		Field::make( 'text', 'crb_social_instagram', __( 'Instagram', 'crb' ) ),
		Field::make( 'text', 'crb_social_googleplus', __( 'Google+', 'crb' ) ),
		Field::make( 'text', 'crb_social_linkedin', __( 'LinkedIn', 'crb' ) ),
		Field::make( 'text', 'crb_social_youtube', __( 'YouTube', 'crb' ) ),
	) );
