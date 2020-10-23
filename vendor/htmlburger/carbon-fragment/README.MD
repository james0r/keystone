# Carbon Fragment

A tiny tool that allows passing variables to theme fragment files.

## Usage

	// Render the fragments/layout-block-left.php fragment
	crb_render_fragment('layout-block-left');

	// Render the fragments/layout-block-left.php fragment; fallback to fragments/layout-block.php if "layout-block-left.php" is missing (uses locate_template internally)
	crb_render_fragment(array('layout-block-left', 'layout-block'));

	// Render the fragments/profile.php fragment and pass get_current_user_id() as $user_id in it
	crb_render_fragment('profile', array('user_id'=>get_current_user_id()));

	// Render the fragments/tweets.php fragment, pass "cnn" as $handle, cache the output for 1 day
	Carbon_Fragment::create('tweets', array('handle'=>'cnn'))->cache(60*60*24)->render();

	// Render the fragments/tweets.php fragment, pass the value of $wp_user_twitter_handle as $handle, cache the output for 1 day with a cache key of get_current_user_id() to allow per-user cache, for example
	Carbon_Fragment::create('tweets', array('handle'=>$wp_user_twitter_handle))->cache(60*60*24, get_current_user_id())->render();