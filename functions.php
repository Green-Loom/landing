<?php
/**
 * Green Loom Landing theme functions.
 *
 * @package Green_Loom_Landing
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'GREEN_LOOM_LANDING_VERSION', '1.3.8' );

/**
 * Theme setup.
 */
function green_loom_landing_setup(): void {
	load_theme_textdomain( 'green-loom-landing', get_template_directory() . '/languages' );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/atmosphere.css' );

	register_block_pattern_category(
		'green-loom-landing',
		array(
			'label' => __( 'Green Loom Landing', 'green-loom-landing' ),
		)
	);
}
add_action( 'after_setup_theme', 'green_loom_landing_setup' );

/**
 * Enqueue atmosphere stylesheet (craft beyond theme.json).
 */
function green_loom_landing_enqueue_styles(): void {
	wp_enqueue_style(
		'green-loom-landing-atmosphere',
		get_theme_file_uri( 'assets/css/atmosphere.css' ),
		array(),
		GREEN_LOOM_LANDING_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'green_loom_landing_enqueue_styles' );

/**
 * Register Follow Form script module (Interactivity API).
 */
function green_loom_landing_register_script_modules(): void {
	wp_register_script_module(
		'green-loom-landing-follow-form-view',
		get_theme_file_uri( 'blocks/follow-form/view.js' ),
		array( '@wordpress/interactivity' ),
		GREEN_LOOM_LANDING_VERSION
	);
}
add_action( 'init', 'green_loom_landing_register_script_modules' );

/**
 * Register the Follow Form interactive block.
 */
function green_loom_landing_register_blocks(): void {
	register_block_type( get_template_directory() . '/blocks/follow-form' );
}
add_action( 'init', 'green_loom_landing_register_blocks' );

/**
 * Ensure a Privacy page exists and uses the Privacy template.
 */
function green_loom_landing_ensure_privacy_page(): void {
	$existing = get_page_by_path( 'privacy' );
	if ( $existing instanceof WP_Post ) {
		update_post_meta( $existing->ID, '_wp_page_template', 'page-privacy' );
		return;
	}

	$page_id = wp_insert_post(
		array(
			'post_title'   => __( 'Privacy', 'green-loom-landing' ),
			'post_name'    => 'privacy',
			'post_status'  => 'publish',
			'post_type'    => 'page',
			'post_content' => '',
		),
		true
	);

	if ( ! is_wp_error( $page_id ) && $page_id ) {
		update_post_meta( (int) $page_id, '_wp_page_template', 'page-privacy' );
	}
}
add_action( 'after_switch_theme', 'green_loom_landing_ensure_privacy_page' );
