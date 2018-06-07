<?php


function LOE_admin_menu(){
	// Creating the Admin page
	add_menu_page(
		// page title
		'LOE Theme Options',
		// Menu title
		'Options',
		// capability
		'manage_options',
		// Page Slug
		'LOE_theme_options',
		// callback function to generate page
		'LOE_quiz_option',
		// custom icon
		get_template_directory_uri().'/assets/icon.svg',
		// the position of the menu
		99
		);

	// Adding Submenu to the above main menu
	add_submenu_page(
		// Parent Slug
		'LOE_theme_options',
		// Page title
		'Quiz Control',
		// Menu title
		'Add Quiz',
		// capability
		'manage_options',
		// Sub page Slug
		'LOE_theme_options',
		// Callback function to generate the page
		'LOE_quiz_option'
	);


	add_submenu_page(
		// Parent Slug
		'LOE_theme_options',
		// Page title
		'Manage Quizes',
		// Menu title
		'Manage Quizes',
		// capability
		'manage_options',
		// Sub page Slug
		'LOE_quiz_table_page',
		// Callback function to generate the page
		'LOE_quiz_table'
	);





}
