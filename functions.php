<?php

if ( ! function_exists( 'wp_webboot_setup' ) ) :

	function wp_dev_setup() {
		load_theme_textdomain( 'wp_webboot',
		                       get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
	}

	add_action( 'after_setup_theme', 'wp_dev_setup' );

	if ( ! function_exists( 'add_dev_js_css' ) ) :
		function add_dev_js_css() {
			wp_enqueue_script( 'bundle',
			                   get_template_directory_uri()
			                   . '/bundled/bundle.js',
			                   'jquery',
			                   '0.7.1',
			                   true );
			wp_enqueue_style( 'main',
			                  get_template_directory_uri()
			                  . '/bundled/main.css',
			                  'bootstrap',
			                  '0.7.1',
			                  'all' );

			// Enqueue bootstrap
			wp_enqueue_script( 'bootstrap_js',
			                   get_template_directory_uri()
			                   . '/node_modules/bootstrap/dist/js/bootstrap.bundle.js',
			                   'jquery',
			                   '0.7.1',
			                   true );
		}
	endif;
	add_action( 'wp_enqueue_scripts', 'add_dev_js_css' );

	register_nav_menu( 'navbar', 'Navbar menu' );

	function wp_webboot_widgets_init() {
		register_sidebar( array(
			                  'name'          => __( 'Primary Sidebar',
			                                         'wp_webboot' ),
			                  'id'            => 'primary-sb',
			                  'before_widget' => '<aside id="%1$s" class="%2$s">',
			                  'after_widget'  => '</aside>',
			                  'before_title'  => '<h3 class="widget-title">',
			                  'after_title'   => '</h3>'

		                  ) );
	}

	add_action( 'widgets_init', 'wp_webboot_widgets_init' );

	function register_navwalker() {
		require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';
	}
	add_action('after_setup_theme', 'register_navwalker');

endif;
