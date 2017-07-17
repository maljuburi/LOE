<?php 

function LOE_customize_register($wp_customize){

	require get_template_directory() . '/inc/admin/customizer/sections.php';
	require get_template_directory() . '/inc/admin/customizer/settings.php';
	require get_template_directory() . '/inc/admin/customizer/controls.php';
}


	require get_template_directory() . '/inc/admin/customizer/css_output.php';

