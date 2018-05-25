<?php


function LOE_admin_menu(){
	// Creating the Admin page
	add_menu_page(
		// page title
		'LOE Theme Options',
		// Menu title
		'Theme Options',
		// capability
		'manage_options',
		// Page Slug
		'LOE_theme_options',
		// callback function to generate page
		'LOE_quiz_option'
		// Other Options can be added:
			// custom icon
			// the position of the menu
		);

	// Adding Submenu to the above main menu
	add_submenu_page(
		// Parent Slug
		'LOE_theme_options',
		// Page title
		'Quiz Control',
		// Menu title
		'Quiz',
		// capability
		'manage_options',
		// Sub page Slug
		'LOE_theme_options',
		// Callback function to generate the page
		'LOE_quiz_option'
	);

	// // Adding Submenu to the above main menu
	// add_submenu_page(
	// 	// Parent Slug
	// 	'LOE_theme_options',
	// 	// Page title
	// 	'Contact Form Activation',
	// 	// Menu title
	// 	'Contact Form',
	// 	// capability
	// 	'manage_options',
	// 	// Sub page Slug
	// 	'LOE_theme_contact_form',
	// 	// Callback function to generate the page
	// 	'LOE_theme_contact_form_page'
	// );




}
