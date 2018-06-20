<?php 


// Slider Section
$wp_customize->add_section('slider',array(

	'title'					=>	__('Home Page Slider','LOE'),
	'description'			=>	'Options to edit slider',
	'priority'				=>	200

	));

// Slider Section
$wp_customize->add_section('logo',array(

	'title'					=>	__('Logo','LOE'),
	'description'			=>	'Select your logo',
	'priority'				=>	201

	));

// Level Cards Section
$wp_customize->add_section('levels_cards',array(

	'title'					=>	__('Levels Cards','LOE'),
	'description'			=>	'Options to edit level cards texts',
	'priority'				=>	202

	));

// LOE Theme Colors
$wp_customize->add_section('theme_colors',array(

	'title'					=>	__('Theme Colors','LOE'),
	'description'			=>	'Options to edit the theme colors',
	'priority'				=>	203

	));


?>