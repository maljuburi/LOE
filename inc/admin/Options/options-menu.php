<?php 


function LOE_admin_menu(){

	add_menu_page( 
		'LOE Theme Options',
		'Theme Options',
		'manage_options',
		'LOE_theme_options',
		'LOE_theme_options_page'
		);
}