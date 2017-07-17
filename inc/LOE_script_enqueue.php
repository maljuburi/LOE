<?php


function LOE_scripts(){
	//CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 'all' );	
	wp_enqueue_style( 'customStyle', get_template_directory_uri() . '/css/custom-style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'awesomeFont', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0', 'all' );

	//JS
	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery.js', array(), false );
	wp_enqueue_script( 'tooltips', 'http://www.atlasestateagents.co.uk/javascript/tether.min.js', array(), true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true );
	wp_enqueue_script( 'customScript', get_template_directory_uri() . '/js/custom-script.js', array(),'1.0.0', true );
	wp_enqueue_script( 'customGallery', get_template_directory_uri() . '/js/post-gallery.js', array(),'1.0.0', true );
	
}

add_action( 'wp_enqueue_scripts', 'LOE_scripts');