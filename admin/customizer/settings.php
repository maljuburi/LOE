<?php 


// image 1
$wp_customize->add_setting('slider_image1',array(
	'default'				=>	get_bloginfo('template_directory').'/assets/cover1.jpg',
	'type'					=>	'theme_mod'
	));


// image 1 heading
$wp_customize->add_setting('slider_heading1',array(
	'default'				=>	_x('Caption to be Written #1','LOE'),
	'type'					=>	'theme_mod'
	));

// image 1 text
$wp_customize->add_setting('slider_text1',array(
	'default'				=>	_x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum magnam illo #1','LOE'),
	'type'					=>	'theme_mod'
	));

// image 2
$wp_customize->add_setting('slider_image2',array(
	'default'				=>	get_bloginfo('template_directory').'/assets/cover2.jpg',
	'type'					=>	'theme_mod'
	));


// image 2 heading
$wp_customize->add_setting('slider_heading2',array(
	'default'				=>	_x('Caption to be Written #2','LOE'),
	'type'					=>	'theme_mod'
	));


// image 2 text
$wp_customize->add_setting('slider_text2',array(
	'default'				=>	_x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum magnam illo #2','LOE'),
	'type'					=>	'theme_mod'
	));

// image 3
$wp_customize->add_setting('slider_image3',array(
	'default'				=>	get_bloginfo('template_directory').'/assets/cover3.jpg',
	'type'					=>	'theme_mod'
	));


// image 3 heading
$wp_customize->add_setting('slider_heading3',array(
	'default'				=>	_x('Caption to be Written #3','LOE'),
	'type'					=>	'theme_mod'
	));


// image 3 text
$wp_customize->add_setting('slider_text3',array(
	'default'				=>	_x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum magnam illo #3','LOE'),
	'type'					=>	'theme_mod'
	));



// Beginner Level
// =================================================
// Beginner heading
$wp_customize->add_setting('beginner_heading',array(
	'default'				=>	_x('Beginner','LOE'),
	'type'					=>	'theme_mod'
));

// Beginner Caption
$wp_customize->add_setting('beginner_title',array(
	'default'				=>	_x('Add Title','LOE'),
	'type'					=>	'theme_mod'
));
// Beginner Caption
$wp_customize->add_setting('beginner_caption',array(
	'default'				=>	_x('With supporting text below as a natural lead-in to additional content.','LOE'),
	'type'					=>	'theme_mod'
));
// Beginner Caption
$wp_customize->add_setting('beginner_button',array(
	'default'				=>	_x('Start Learning','LOE'),
	'type'					=>	'theme_mod'
));
// =================================================


// Intermediate Level
// =================================================
// Intermediate heading
$wp_customize->add_setting('intermediate_heading',array(
	'default'				=>	_x('Intermediate','LOE'),
	'type'					=>	'theme_mod'
));

// Intermediate Caption
$wp_customize->add_setting('intermediate_title',array(
	'default'				=>	_x('Add Title','LOE'),
	'type'					=>	'theme_mod'
));
// Intermediate Caption
$wp_customize->add_setting('intermediate_caption',array(
	'default'				=>	_x('With supporting text below as a natural lead-in to additional content.','LOE'),
	'type'					=>	'theme_mod'
));
// Intermediate Caption
$wp_customize->add_setting('intermediate_button',array(
	'default'				=>	_x('Start Learning','LOE'),
	'type'					=>	'theme_mod'
));
// =================================================


// Advance Level
// =================================================
// Advance heading
$wp_customize->add_setting('advance_heading',array(
	'default'				=>	_x('Advance','LOE'),
	'type'					=>	'theme_mod'
));

// Advance Caption
$wp_customize->add_setting('advance_title',array(
	'default'				=>	_x('Add Title','LOE'),
	'type'					=>	'theme_mod'
));
// Advance Caption
$wp_customize->add_setting('advance_caption',array(
	'default'				=>	_x('With supporting text below as a natural lead-in to additional content.','LOE'),
	'type'					=>	'theme_mod'
));
// Advance Caption
$wp_customize->add_setting('advance_button',array(
	'default'				=>	_x('Start Learning','LOE'),
	'type'					=>	'theme_mod'
));
// =================================================






// navbar background color
$wp_customize->add_setting('navbar_bg_color', array(

	'default'				=>	'#181A1F',
	'transport'				=>	'refresh'

	));

// Logo and links color
$wp_customize->add_setting('navbar_text_color', array(

	'default'				=>	'#FFFFFF',
	'transport'				=>	'refresh'

	));



// footer background color
$wp_customize->add_setting('footer_bg_color', array(

	'default'				=>	'#181A1F',
	'transport'				=>	'refresh'

	));


// footer text color
$wp_customize->add_setting('footer_text_color', array(

	'default'				=>	'#FFFFFF',
	'transport'				=>	'refresh'

	));



?>


