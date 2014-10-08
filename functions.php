<?php
	add_action( 'after_setup_theme', 'child_theme_language' );
	function child_theme_language() {
		load_child_theme_textdomain( 'theretailer', get_stylesheet_directory() . '/languages' );
	}

    add_action('wp_enqueue_scripts', 'add_custom_js');
    function add_custom_js() {
        wp_register_script('custom_js', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), true );
        wp_enqueue_script('custom_js');
    }
?>