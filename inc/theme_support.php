<?php 

function LOE_theme_support(){
	//adding post thumbnail feature
	add_theme_support('post-thumbnails');

	//adding post formats options
	add_theme_support('post-formats',array('aside','gallery'));
}