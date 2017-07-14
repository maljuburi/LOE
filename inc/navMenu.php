<?php

function LOE_Nav_Menu(){
	// registering the main menu

	register_nav_menus(array(
		'header_menu'					=>	__('Main Menu', 'LOE'),
		'footer_menu_1'					=>	__('Footer Menu 1', 'LOE'),
		'footer_menu_2'					=>	__('Footer Menu 2', 'LOE'),
		'footer_menu_3'					=>	__('Footer Menu 3', 'LOE')

		) );

}