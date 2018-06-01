<?php


function LOE_admin_menu(){
	// Creating the Admin page
	add_menu_page(
		// page title
		'LOE Theme Options',
		// Menu title
		'LOE Options',
		// capability
		'manage_options',
		// Page Slug
		'LOE_theme_options',
		// callback function to generate page
		'LOE_quiz_option',
		// custom icon
		'dashicons-admin-tools',
		99
		// Other Options can be added:
			// the position of the menu
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
