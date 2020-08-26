<?php

if ( ! function_exists( 'wp_dev_setup' ) ) :

	function wp_dev_setup() {
		load_theme_textdomain( 'wordpresswebpack',
		                       get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
	}

endif;
add_action( 'after_setup_theme', 'wp_dev_setup' );

if ( ! function_exists( 'add_dev_js_css' ) ) :
	function add_dev_js_css() {
		wp_enqueue_script( 'bundle',
		                   get_template_directory_uri() . '/bundled/bundle.js',
		                   'jquery',
		                   '2.0',
		                   true );
		wp_enqueue_style( 'main',
		                  get_template_directory_uri() . '/bundled/main.css',
		                  'bootstrap',
		                  '2.0',
		                  'all' );

		// Enqueue bootstrap
		wp_enqueue_script( 'bootstrap_js',
		                   get_template_directory_uri()
		                   . '/node_modules/bootstrap/dist/js/bootstrap.bundle.js' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'add_dev_js_css' );
