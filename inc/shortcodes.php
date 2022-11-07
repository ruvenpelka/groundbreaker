<?php
/**
 * Register shortcodes.
 */



/**
 * Outputs site title.
 */

add_shortcode( 'et_site_title', 'rvn_register_site_title_shortcode' );

function rvn_register_site_title_shortcode() {
	return get_bloginfo();
}



/**
 * Outputs current year.
 */

add_shortcode( 'et_year', 'rvn_register_year_shortcode' );

function rvn_register_year_shortcode() {
	return date( 'Y' );
}