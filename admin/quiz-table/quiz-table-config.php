<?php

	global $wpdb;

	$table_name = $wpdb->prefix . "quiz";
	$results = $wpdb->get_results("
	SELECT * FROM $table_name ORDER BY topic_level;
	");

	