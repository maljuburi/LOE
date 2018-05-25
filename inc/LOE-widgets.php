<?php

function LOE_widgets(){
	// registering sidebar
	register_sidebar(array(
		'name'					=>	__('Sidebar' , 'LOE'),
		'id'					=>	'loe_sidebar',
		'description'			=>	'Right Side Widget Area',
		'before_title'			=>	'<h4 class="card-header display-4">',
		'after_title'			=>	'</h4>',
		'before_widget' 		=> '<div class="sidebar-module">',
		'after_widget'			=>	'</div>'
		));


}