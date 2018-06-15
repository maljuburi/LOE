<?php 

// calling bootstrap style for the backend to style theme options
function LOE_backend_scripts(){

	// CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 'all' );
	wp_enqueue_style( 'backStyle', get_template_directory_uri() . '/css/back-style.css', array(), 'all' );
	wp_enqueue_style( 'fontAwesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css', array(), 'all' );

	// JS
	wp_enqueue_script( 'tooltips', 'http://www.atlasestateagents.co.uk/javascript/tether.min.js', array(), true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true );
	// wp_enqueue_script( 'backEndJS', get_template_directory_uri() . '/js/back-end.js', array(), false );
	
}