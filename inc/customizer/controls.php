<?php 


// image 1
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_image1', array(

	'label'				=>	__('Slider Image #1', 'LOE'),
	'section'			=>	'slider',
	'settings'			=>	'slider_image1',
	'priority'			=>	1


	)));

// image 1 heading

$wp_customize->add_control('slider_heading1', array(

	'label'				=>	__('Image Heading #1', 'LOE'),
	'section'			=>	'slider',
	'settings'			=>	'slider_heading1',
	'priority'			=>	2


	));

// image 1 text
$wp_customize->add_control('slider_text1', array(

	'label'				=>	__('Image Text #1', 'LOE'),
	'section'			=>	'slider',
	'settings'			=>	'slider_text1',
	'priority'			=>	3

	));



// image 2
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_image2', array(

	'label'				=>	__('Slider Image #2', 'LOE'),
	'section'			=>	'slider',
	'settings'			=>	'slider_image2',
	'priority'			=>	4


	)));


// image 2 heading
$wp_customize->add_control('slider_heading2', array(

	'label'				=>	__('Image Heading #2', 'LOE'),
	'section'			=>	'slider',
	'settings'			=>	'slider_heading2',
	'priority'			=>	5


	));


// image 1 text
$wp_customize->add_control('slider_text2', array(

	'label'				=>	__('Image Text #2', 'LOE'),
	'section'			=>	'slider',
	'settings'			=>	'slider_text2',
	'priority'			=>	6

	));


// header background color
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'navbar_bg_color', array(

	'label'				=>	__('Header BG Color', 'LOE'),
	'section'			=>	'theme_colors',
	'settings'			=>	'navbar_bg_color',
	'priority'			=>	1


	)));


// Logo and Links Color
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'navbar_text_color', array(

	'label'				=>	__('Header Text Color', 'LOE'),
	'section'			=>	'theme_colors',
	'settings'			=>	'navbar_text_color',
	'priority'			=>	2


	)));


// footer background color
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_bg_color', array(

	'label'				=>	__('Footer BG Color', 'LOE'),
	'section'			=>	'theme_colors',
	'settings'			=>	'footer_bg_color',
	'priority'			=>	3


	)));


// Footer text Color
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_text_color', array(

	'label'				=>	__('Footer Text Color', 'LOE'),
	'section'			=>	'theme_colors',
	'settings'			=>	'footer_text_color',
	'priority'			=>	4


	)));



 ?>