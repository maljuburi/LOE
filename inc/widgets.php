<?php

function LOE_widgets(){

	register_sidebar(array(
		'name'		=>	'Sidebar',
		'id'		=>	'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget'	=>	'</div>'
		));

}