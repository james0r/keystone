<?php
/**
* Header Theme Options
*/

$args = [
    'id'           => 'cmb_social_links',
    'object_types' => ['options-page'],
    'option_key'   => 'cmb_social_links',
    'parent_slug'  => 'cmb_main_options',
    'title'        => __('Social Links', 'keystone')
];

$cmb_social_links = new_cmb2_box($args);

$cmb_social_links->add_field([
    'name'       => __('Facebook URL', 'keystone'),
    'desc'       => __('For example, a personal URL on Facebook may be http://www.facebook.com/username.', 'keystone'),
    'id'         => 'facebook',
    'type'       => 'text_url',
    	'protocols' => array('https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
]);

$cmb_social_links->add_field([
    'name'       => __('Twitter URL', 'keystone'),
    'desc'      => __('Sign in to Twitter\'s website, select the gear icon and then tap “Settings.” Your full Twitter URL emerges instantly under the Username box in this: http://twitter.com/[username].', 'keystone'),
    'id'         => 'twitter',
    'type'       => 'text_url',
    'protocols' => array('http','https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
]);

$cmb_social_links->add_field([
    'name'       => __('Instagram URL', 'keystone'),
    'desc'       => __('For example, if the username is "johnsmith," type in instagram.com/johnsmith as the URL.', 'keystone'),
    'id'         => 'instagram',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('LinkedIn URL', 'keystone'),
    'desc'       => __('For example, if your name is Bob Lewis your LinkedIn URL might be https://www.linkedin.com/in/boblewis/', 'keystone'),
    'id'         => 'linkedin',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('Pinterest URL', 'keystone'),
    'desc'       => __('When you log in to your Pinterest Account and click on your profile picture, the text in the address bar is your Pinterest URL and the text after \'www.pinterest.com/\', is your Username.', 'keystone'),
    'id'         => 'pinterest',
    'type'       => 'text_url'
]);

$cmb_social_links->add_field([
    'name'       => __('Youtube URL', 'keystone'),
    'desc'      => __('Some YouTube URLs look very different. Please read <a href="https://support.google.com/youtube/answer/6180214?hl=en" target="_blank">this article</a> to learn more about finding your channel\'s URL', 'keystone'),
    'id'         => 'youtube',
    'type'       => 'text_url'
]);
