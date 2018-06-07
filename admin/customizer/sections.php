<?php 


// Slider Section
$wp_customize->add_section('slider',array(

	'title'					=>	__('Home Page Slider','LOE'),
	'description'			=>	'Options to edit slider',
	'priority'				=>	200

	));

// Level Cards Section
$wp_customize->add_section('levels_cards',array(

	'title'					=>	__('Levels Cards','LOE'),
	'description'			=>	'Options to edit level cards texts',
	'priority'				=>	201

	));

// LOE Theme Colors
$wp_customize->add_section('theme_colors',array(

	'title'					=>	__('Theme Colors','LOE'),
	'description'			=>	'Options to edit the theme colors',
	'priority'				=>	202

	));


?>