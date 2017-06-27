<?php


// include functions files
require get_template_directory() . '/inc/LOE_script_enqueue.php';
require get_template_directory() . '/inc/navMenu.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/theme_support.php';


// add action of a function
add_action( 'init', 'LOE_Nav_Menu');
add_action('widgets_init','LOE_widgets');
add_action('after_setup_theme','LOE_theme_support');


// add filter of a functions

