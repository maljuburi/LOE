<?php

	global $wpdb;

	$table_name = $wpdb->prefix . "quiz";
	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name){
		$results = $wpdb->get_results("
		SELECT * FROM $table_name ORDER BY topic_level;
		");
	}

	