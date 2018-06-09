
<?php

function LOE_social_settings(){
	add_settings_section( 'LOE-social-media-options', 'Social Media Control', 'LOE_social_media_options','LOE_theme_options');
	
	register_setting( 'LOE-social-media-group', 'facebook');
	register_setting( 'LOE-social-media-group', 'instagram');
	register_setting( 'LOE-social-media-group', 'twitter');

	add_settings_field( 'facebook-link', 'Facebook Link', 'LOE_facebook_link', 'LOE_theme_options', 'LOE-social-media-options');
	add_settings_field( 'instagram-link', 'Instagram Link', 'LOE_instagram_link', 'LOE_theme_options', 'LOE-social-media-options');
	add_settings_field( 'twitter-link', 'Twitter Link', 'LOE_twitter_link', 'LOE_theme_options', 'LOE-social-media-options');
}


function LOE_social_media_options(){

}


function LOE_facebook_link(){
	$facebookLink = esc_attr(get_option('facebook'));
	echo "<input type='text' name='facebook' value='".$facebookLink."' placeholder='Enter facebook link' />";
}

function LOE_instagram_link(){
	$instagramLink = esc_attr(get_option('instagram'));
	echo "<input type='text' name='instagram' value='".$instagramLink."' placeholder='Enter instagram link' />";
}

function LOE_twitter_link(){
	$twitterLink = esc_attr(get_option('twitter'));
	echo "<input type='text' name='twitter' value='".$twitterLink."' placeholder='Enter twitter link' />";
}
