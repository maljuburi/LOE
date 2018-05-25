<?php 

function LOE_customize_register($wp_customize){

	require get_template_directory() . '/admin/customizer/sections.php';
	require get_template_directory() . '/admin/customizer/settings.php';
	require get_template_directory() . '/admin/customizer/controls.php';
}


	require get_template_directory() . '/admin/customizer/css_output.php';

