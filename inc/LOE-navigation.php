<?php


set_nav_location('Main Menu','header_menu');
set_nav_location('Footer 1','footer_menu_1');
set_nav_location('Footer 2','footer_menu_2');
set_nav_location('Footer 3','footer_menu_3');



function LOE_Nav_Menu(){
	// registering the main menu & 3 footer menus

	register_nav_menus(array(
		'header_menu'					=>	__('Header Menu', 'LOE'),
		'footer_menu_1'					=>	__('Footer Menu 1', 'LOE'),
		'footer_menu_2'					=>	__('Footer Menu 2', 'LOE'),
		'footer_menu_3'					=>	__('Footer Menu 3', 'LOE')

		) );

}


function set_nav_location($name, $loc){

  // setup navigation automatically
  
  $menu = get_term_by( 'name', $name, 'nav_menu' );
	$menu_exists = wp_get_nav_menu_object($name);
	if($name == "Main Menu"){
		
		if( !$menu_exists){
			$menu_id = wp_create_nav_menu($name);
			$menu = get_term_by( 'name', $name, 'nav_menu' );
			
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title'	=> __('Home'),
				'menu-item-url'		=> home_url('/'),
				'menu-item-status'	=> 'publish'
			));
			
			$LevelsItem = wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'	=> __('Levels'),
				'menu-item-url'		=> home_url('#'),
				'menu-item-status'	=> 'publish'
			));

			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title'	=> __('Beginner'),
				'menu-item-url'		=> home_url('/beginner'),
				'menu-item-parent-id' => $LevelsItem,
				'menu-item-status'	=> 'publish'
			));
			
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title'	=> __('Intermediate'),
				'menu-item-url'		=> home_url('/intermediate'),
				'menu-item-parent-id' => $LevelsItem,
				'menu-item-status'	=> 'publish'
			));
			
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title'	=> __('Advance'),
				'menu-item-url'		=> home_url('/advance'),
				'menu-item-parent-id' => $LevelsItem,
				'menu-item-status'	=> 'publish'
			));
		}else{

			// Delete Quiz Page if Added to Menu
			// -------------------------

			$quiz = get_page_by_path("quiz");
			$menu_name = wp_get_nav_menu_object( $name );
			$menu_items = wp_get_nav_menu_items( $menu_name);
			// var_dump($menu_items);
			foreach($menu_items as $item){
				if($item->title == "Quiz" || $item->title == "quiz"){
					echo $item->title;
					wp_delete_post($item->db_id);
				}
			}

			
			
			

			
			
		}	

	}else{
		
		if( !$menu_exists){
			$menu_id = wp_create_nav_menu($name);
			$menu = get_term_by( 'name', $name, 'nav_menu' );
	
		}
	}

	//then you set the wanted theme location
	$locations = get_theme_mod('nav_menu_locations');
	$locations[$loc] = $menu->term_id;
	set_theme_mod( 'nav_menu_locations', $locations );

}





