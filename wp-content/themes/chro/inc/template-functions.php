<?php
/**
 * Additional features to allow styling of the templates.
 *
 * @package WordPress
 * @subpackage chro
 * @since chro 1.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function chro_body_classes( $classes ) {
	// Add class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Add class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add class if we're viewing the Customizer for easier styling of theme options.
	if ( is_customize_preview() ) {
		$classes[] = 'chro-customizer';
	}

	// Add class on front page.
	if ( is_front_page() && 'posts' !== get_option( 'show_on_front' ) ) {
		$classes[] = 'chro-front-page';
	}

	// Add a class if there is a custom header.
	if ( has_header_image() ) {
		$classes[] = 'has-header-image';
	}

	// Add class if sidebar is used.
	if ( is_active_sidebar( 'sidebar-1' ) && ! is_page() ) {
		$classes[] = 'has-sidebar';
	}

	// Add class for one or two column page layouts.
	if ( is_page() || is_archive() ) {
		if ( 'one-column' === get_theme_mod( 'page_layout' ) ) {
			$classes[] = 'page-one-column';
		} else {
			$classes[] = 'page-two-column';
		}
	}

	// Add class if the site title and tagline is hidden.
	if ( 'blank' === get_header_textcolor() ) {
		$classes[] = 'title-tagline-hidden';
	}

	// Get the colorscheme or the default if there isn't one.
	$colors    = chro_sanitize_colorscheme( get_theme_mod( 'colorscheme', 'light' ) );
	$classes[] = 'colors-' . $colors;

	return $classes;
}
add_filter( 'body_class', 'chro_body_classes' );

/**
 * Counts the number of our active panels.
 *
 * Primarily used to see if we have any panels active.
 *
 * @return int The number of active panels.
 */
function chro_panel_count() {

	$panel_count = 0;

	/**
	 * Filters the number of front page sections in chro.
	 *
	 * @since chro 1.0
	 *
	 * @param int $num_sections Number of front page sections.
	 */
	$num_sections = apply_filters( 'chro_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		if ( get_theme_mod( 'panel_' . $i ) ) {
			++$panel_count;
		}
	}

	return $panel_count;
}

/**
 * Checks to see if we are on the front page or not.
 *
 * @return bool Whether we are on the front page or not.
 */
function chro_is_frontpage() {
	return ( is_front_page() && ! is_home() );
}
