<?php


// include functions files
require get_template_directory() . '/inc/LOE_script_enqueue.php';
require get_template_directory() . '/inc/navMenu.php';
require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/theme_support.php';
require get_template_directory() . '/inc/admin/options/options-menu.php';
require get_template_directory() . '/inc/admin/options/options-page.php';
require get_template_directory() . '/inc/admin/options/backend-scripts.php';
require get_template_directory() . '/inc/admin/customizer/customizer.php';


// add action of a function
add_action( 'init', 'LOE_Nav_Menu');
add_action('widgets_init','LOE_widgets');
add_action('after_setup_theme','LOE_theme_support');
add_action('admin_menu','LOE_admin_menu');
add_action('admin_init','LOE_backend_scripts');
add_action('customize_register','LOE_customize_register');
add_action('wp_head','LOE_customize_css_output');



// add filter of a functions

