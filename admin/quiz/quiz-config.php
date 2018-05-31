<?php

global $wpdb;
$table_name = $wpdb->prefix . "quiz"; 

if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
	$sql = "CREATE TABLE $table_name (
		id int(6) unsigned NOT NULL AUTO_INCREMENT,
		topic_level varchar(50) NOT NULL,
		topic varchar(50) NOT NULL,
		question varchar(200) NOT NULL,
		ch1 varchar(50) NOT NULL,
		ch2 varchar(50) NOT NULL,
		ch3 varchar(50) NOT NULL,
		ch4 varchar(50) NOT NULL,
		answer varchar(50) NOT NULL,
		PRIMARY KEY (id)
		)";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}
