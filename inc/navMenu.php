<?php

function LOE_Nav_Menu(){
	// registering the main menu
	register_nav_menus(array(
		'primary'					=>	'Primary Menu'

		) );

	register_nav_menus(array(
		'secondary'					=>	'Footer Menu'

		) );

}