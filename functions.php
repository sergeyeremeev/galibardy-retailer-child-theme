<?php	
	add_action( 'after_setup_theme', 'child_theme_language' );
	function child_theme_language() {
		load_child_theme_textdomain( 'theretailer', get_stylesheet_directory() . '/languages' );
	}
?>