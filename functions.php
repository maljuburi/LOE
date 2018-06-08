<?php

// =============================
// include functions files
// ================================

// Front-End Functions
require get_template_directory() . '/inc/LOE-enqueue.php';
require get_template_directory() . '/inc/LOE-navigation.php';
require get_template_directory() . '/inc/LOE-widgets.php';
require get_template_directory() . '/inc/LOE-theme-support.php';
require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/templates/LOE-ajax.php';

// Back-End Functions
require get_template_directory() . '/admin/config/add_user_id_column.php';
require get_template_directory() . '/admin/config/add_page.php';
require get_template_directory() . '/admin/config/add_levels_pages.php';
require get_template_directory() . '/admin/options/options-config.php';
require get_template_directory() . '/admin/options/options-callback.php';
require get_template_directory() . '/admin/config/backend_enqueue.php';
require get_template_directory() . '/admin/customizer/customizer.php';
require get_template_directory() . '/admin/contact/contact-config.php';



// ==================================
// add action or Filter of functions
// =================================

// Fron-End Actions
// ----------------
add_action( 'init', 'LOE_Nav_Menu'); 
add_action('widgets_init','LOE_widgets');
add_action('after_setup_theme','LOE_theme_support');
add_action('wp_ajax_nopriv_LOE_submit_form','LOE_submit_form'); // contact form only logged in
add_action('wp_ajax_LOE_submit_form','LOE_submit_form'); // contact form everyone


// Back-End Actions
// ------------------
// Admin Settings
add_action('admin_menu','LOE_admin_menu');
// scripts/css links
add_action('admin_init','LOE_backend_scripts');
// Theme customizer
add_action('customize_register','LOE_customize_register');
add_action('wp_head','LOE_customize_css_output');
add_action('manage_users_custom_column',  'rd_user_id_column_content', 10, 3);
add_action( 'init', 'LOE_contact_form_custom_post');
add_action( 'manage_loe_contact_posts_custom_column', 'LOE_contact_custom_column', 10, 2 );



// Filters
// ---------
add_filter('manage_users_columns', 'rd_user_id_column');
add_filter('manage_loe_contact_posts_columns', 'LOE_set_contact_columns');


