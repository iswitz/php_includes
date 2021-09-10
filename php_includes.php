<?php

function ap( $array ) {

	if( current_user_can( 'editor' ) || current_user_can( 'administrator' ) ) {
		echo "<pre>";
		print_r( $array );
		echo "</pre>";
	}
}

function debugging() {
	
}
?>
