<?php
	// functions.php
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	function theme_enqueue_styles() {
		// Get parent style.css file
		wp_enqueue_style('parent-style', 
		get_template_directory_uri() . '/style.css' );
		
		// Get the reset.css file (from parent)
		wp_enqueue_style('parent-style', 
		get_template_directory_uri() . '/reset.css' );
		
		// Load child theme styles
		wp_enqueue_style('child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array('parent-style')
		);
	}
?>