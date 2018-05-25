<?php

/*
 * Adding the column
 */
function rd_user_id_column( $columns ) {
	$columns['user_id'] = 'ID';
	return $columns;
}

 
/*
 * Column content
 */
function rd_user_id_column_content($value, $column_name, $user_id) {
	if ( 'user_id' == $column_name )
		return $user_id;
	return $value;
}
