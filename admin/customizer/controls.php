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


// image 2 text
$wp_customize->add_control('slider_text2', array(

	'label'				=>	__('Image Text #2', 'LOE'),
	'section'			=>	'slider',
	'settings'			=>	'slider_text2',
	'priority'			=>	6

	));

// image 3
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_image3', array(

	'label'				=>	__('Slider Image #3', 'LOE'),
	'section'			=>	'slider',
	'settings'			=>	'slider_image3',
	'priority'			=>	7


	)));


// image 3 heading
$wp_customize->add_control('slider_heading3', array(

	'label'				=>	__('Image Heading #3', 'LOE'),
	'section'			=>	'slider',
	'settings'			=>	'slider_heading3',
	'priority'			=>	8


	));


// image 3 text
$wp_customize->add_control('slider_text3', array(

	'label'				=>	__('Image Text #3', 'LOE'),
	'section'			=>	'slider',
	'settings'			=>	'slider_text3',
	'priority'			=>	9

));




// Beginner Controls
// =============================================================
// Beginner Card header
$wp_customize->add_control('beginner_card_header', array(

	'label'				=>	__('Beginner Header', 'LOE'),
	'section'			=>	'levels_cards',
	'settings'			=>	'beginner_heading',
	'priority'			=>	1

	));

// Beginner Card Title
$wp_customize->add_control('beginner_card_title', array(

	'label'				=>	__('Beginner Title', 'LOE'),
	'section'			=>	'levels_cards',
	'settings'			=>	'beginner_title',
	'priority'			=>	2

	));

// Beginner Card caption
$wp_customize->add_control('beginner_card_caption', array(

	'label'				=>	__('Beginner Caption', 'LOE'),
	'section'			=>	'levels_cards',
	'settings'			=>	'beginner_caption',
	'priority'			=>	3

	));

// Beginner Card Button
$wp_customize->add_control('beginner_card_button', array(

	'label'				=>	__('Beginner Button', 'LOE'),
	'section'			=>	'levels_cards',
	'settings'			=>	'beginner_button',
	'priority'			=>	4

	));
// =============================================================



// Intermediate Controls
// =============================================================
// Intermediate Card header
$wp_customize->add_control('intermediate_card_header', array(

	'label'				=>	__('Intermediate Header', 'LOE'),
	'section'			=>	'levels_cards',
	'settings'			=>	'intermediate_heading',
	'priority'			=>	5

	));

// Intermediate Card Title
$wp_customize->add_control('intermediate_card_title', array(

	'label'				=>	__('Intermediate Title', 'LOE'),
	'section'			=>	'levels_cards',
	'settings'			=>	'intermediate_title',
	'priority'			=>	6

	));

// Intermediate Card caption
$wp_customize->add_control('intermediate_card_caption', array(

	'label'				=>	__('Intermediate Caption', 'LOE'),
	'section'			=>	'levels_cards',
	'settings'			=>	'intermediate_caption',
	'priority'			=>	7

	));

// Intermediate Card Button
$wp_customize->add_control('intermediate_card_button', array(

	'label'				=>	__('Intermediate Button', 'LOE'),
	'section'			=>	'levels_cards',
	'settings'			=>	'intermediate_button',
	'priority'			=>	8

	));
// =============================================================



// Advance Controls
// =============================================================
// Advance Card header
$wp_customize->add_control('advance_card_header', array(

	'label'				=>	__('Advance Header', 'LOE'),
	'section'			=>	'levels_cards',
	'settings'			=>	'advance_heading',
	'priority'			=>	9
	));

// Advance Card Title
$wp_customize->add_control('advance_card_title', array(

	'label'				=>	__('Advance Title', 'LOE'),
	'section'			=>	'levels_cards',
	'settings'			=>	'advance_title',
	'priority'			=>	10
	));

// Advance Card caption
$wp_customize->add_control('advance_card_caption', array(

	'label'				=>	__('Advance Caption', 'LOE'),
	'section'			=>	'levels_cards',
	'settings'			=>	'advance_caption',
	'priority'			=>	11
	));

// Advance Card Button
$wp_customize->add_control('advance_card_button', array(

	'label'				=>	__('Advance Button', 'LOE'),
	'section'			=>	'levels_cards',
	'settings'			=>	'advance_button',
	'priority'			=>	12
	));
// =============================================================






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
