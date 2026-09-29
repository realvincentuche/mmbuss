<?php
/**
 * MMBuss theme setup.
 *
 * @package MMBuss
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MMBUSS_VERSION', '0.1.0' );

/**
 * Theme setup: menus, title tag, thumbnails, HTML5, feed links.
 */
function mmbuss_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'mmbuss' ),
			'footer'  => __( 'Footer Menu', 'mmbuss' ),
		)
	);
}
add_action( 'after_setup_theme', 'mmbuss_setup' );

/**
 * Enqueue theme styles and scripts.
 */
function mmbuss_assets() {
	wp_enqueue_style(
		'mmbuss-style',
		get_stylesheet_uri(),
		array(),
		MMBUSS_VERSION
	);

	wp_enqueue_style(
		'mmbuss-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'mmbuss-style' ),
		MMBUSS_VERSION
	);

	wp_enqueue_script(
		'mmbuss-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		MMBUSS_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'mmbuss_assets' );

/**
 * Fallback menu when no menu is assigned in wp-admin.
 * Keeps local == live identical on first activate.
 */
function mmbuss_menu_fallback() {
	echo '<ul>';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'mmbuss' ) . '</a></li>';
	echo '</ul>';
}

/**
 * Seed v1 content on theme activation so local == live on first activate.
 *
 * Creates a Home page using front-page.php and assigns it as the static
 * front page. Safe to run once; never overwrites existing content.
 */
function mmbuss_seed_on_activate() {
	$home = get_page_by_path( 'home' );

	if ( ! $home ) {
		$home_id = wp_insert_post(
			array(
				'post_title'   => 'Home',
				'post_name'    => 'home',
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_content' => '',
			)
		);
	} else {
		$home_id = $home->ID;
	}

	if ( $home_id && ! is_wp_error( $home_id ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $home_id );
	}
}
add_action( 'after_switch_theme', 'mmbuss_seed_on_activate' );
