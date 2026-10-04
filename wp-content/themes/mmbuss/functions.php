<?php
/**
 * MMBuss theme setup — Mastermind Business Systems LLC.
 *
 * @package MMBuss
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MMBUSS_VERSION', '0.3.6' );

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
		'mmbuss-fonts',
		'https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&family=Hanken+Grotesk:wght@400;500;600;700&display=swap',
		array(),
		MMBUSS_VERSION
	);

	wp_enqueue_style(
		'mmbuss-style',
		get_stylesheet_uri(),
		array(),
		MMBUSS_VERSION
	);

	wp_enqueue_style(
		'mmbuss-phosphor',
		get_template_directory_uri() . '/assets/css/phosphor-icon-regular.css',
		array(),
		MMBUSS_VERSION
	);

	wp_enqueue_style(
		'mmbuss-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'mmbuss-style', 'mmbuss-fonts', 'mmbuss-phosphor' ),
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
 * Contact details — single source of truth.
 */
function mmbuss_contact( $key = '' ) {
	$all = array(
		'email'     => 'info@mmbuss.com',
		'phone'     => '941 557 7219',
		'phone_href'=> 'tel:+19415577219',
		'tollfree'  => '1 888 830 3007',
		'web'       => 'www.mmbuss.com',
		'office'    => 'Pennsylvania, USA',
		'tagline'   => 'Structured Strategy. Sustainable Growth.',
	);
	if ( '' === $key ) {
		return $all;
	}
	return isset( $all[ $key ] ) ? $all[ $key ] : '';
}

/**
 * Fallback primary menu (keeps local == live identical before menus exist).
 */
function mmbuss_menu_fallback() {
	$services = array(
		home_url( '/services/business-management/' )          => __( 'Business Management', 'mmbuss' ),
		home_url( '/services/consulting/' )                   => __( 'Consulting', 'mmbuss' ),
		home_url( '/services/operational-solutions/' )        => __( 'Operational Solutions', 'mmbuss' ),
		home_url( '/services/supply-of-goods-and-services/' ) => __( 'Supply of Goods and Services', 'mmbuss' ),
	);
	echo '<ul class="menu">';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'mmbuss' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/about/' ) ) . '">' . esc_html__( 'About', 'mmbuss' ) . '</a></li>';
	echo '<li class="menu-item-has-children"><a href="' . esc_url( home_url( '/services/' ) ) . '" aria-haspopup="true" aria-expanded="false">' . esc_html__( 'Services', 'mmbuss' ) . '</a>';
	echo '<ul class="sub-menu">';
	foreach ( $services as $url => $label ) {
		echo '<li><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
	}
	echo '</ul></li>';
	echo '<li><a href="' . esc_url( home_url( '/industries/' ) ) . '">' . esc_html__( 'Industries', 'mmbuss' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">' . esc_html__( 'Contact', 'mmbuss' ) . '</a></li>';
	echo '</ul>';
}

/**
 * Fallback footer menu (keeps bottom bar populated before a menu exists).
 */
function mmbuss_footer_fallback() {
	$items = array(
		home_url( '/' )          => __( 'Home', 'mmbuss' ),
		home_url( '/services/' ) => __( 'Services', 'mmbuss' ),
		home_url( '/contact/' )  => __( 'Contact', 'mmbuss' ),
	);
	echo '<ul class="menu">';
	foreach ( $items as $url => $label ) {
		echo '<li><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
	}
	echo '</ul>';
}

/**
 * Seed v1 pages on theme activation so local == live on first activate.
 * Never overwrites existing pages.
 */
function mmbuss_seed_on_activate() {
	$pages = array(
		'home'     => 'Home',
		'about'    => 'About Us',
		'services' => 'Our Services',
		'industries' => 'Industries We Serve',
		'contact'  => 'Contact Us',
	);

	$ids = array();
	foreach ( $pages as $slug => $title ) {
		$existing = get_page_by_path( $slug );
		if ( $existing ) {
			$ids[ $slug ] = $existing->ID;
			continue;
		}
		$new_id = wp_insert_post(
			array(
				'post_title'   => $title,
				'post_name'    => $slug,
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_content' => '',
			)
		);
		if ( $new_id && ! is_wp_error( $new_id ) ) {
			$ids[ $slug ] = $new_id;
		}
	}

	// Service children under Services parent.
	$children = array(
		'business-management'           => 'Business Management',
		'consulting'                    => 'Consulting',
		'operational-solutions'         => 'Operational Solutions',
		'supply-of-goods-and-services'  => 'Supply of Goods and Services',
	);
	if ( isset( $ids['services'] ) ) {
		foreach ( $children as $slug => $title ) {
			if ( get_page_by_path( 'services/' . $slug ) ) {
				continue;
			}
			wp_insert_post(
				array(
					'post_title'   => $title,
					'post_name'    => $slug,
					'post_status'  => 'publish',
					'post_type'    => 'page',
					'post_parent'  => $ids['services'],
					'post_content' => '',
				)
			);
		}
	}

	if ( isset( $ids['home'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $ids['home'] );
	}
}
add_action( 'after_switch_theme', 'mmbuss_seed_on_activate' );
