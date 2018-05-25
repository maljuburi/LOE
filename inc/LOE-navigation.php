<?php


set_nav_location('Main Menu','header_menu');
set_nav_location('Footer 1','footer_menu_1');
set_nav_location('Footer 2','footer_menu_2');
set_nav_location('Footer 3','footer_menu_3');



function LOE_Nav_Menu(){
	// registering the main menu & 3 footer menus

	register_nav_menus(array(
		'header_menu'						=>	__('Header Menu', 'LOE'),
		'footer_menu_1'					=>	__('Footer Menu 1', 'LOE'),
		'footer_menu_2'					=>	__('Footer Menu 2', 'LOE'),
		'footer_menu_3'					=>	__('Footer Menu 3', 'LOE')

		) );

}


function set_nav_location($name, $loc){

  // setup navigation automatically
  
  $menu = get_term_by( 'name', $name, 'nav_menu' );
	$menu_exists = wp_get_nav_menu_object($name);
	if( !$menu_exists){
		$menu_id = wp_create_nav_menu($name);
		$menu = get_term_by( 'name', $name, 'nav_menu' );

	}

	//then you set the wanted theme location
	$locations = get_theme_mod('nav_menu_locations');
	$locations[$loc] = $menu->term_id;
	set_theme_mod( 'nav_menu_locations', $locations );

}




