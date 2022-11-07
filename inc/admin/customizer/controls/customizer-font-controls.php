<?php
/**
 * Registers Fonts Customizer controls.
 */



/**
 * Registers Customizer Fonts panel.
 */

add_action( 'customize_register', 'rvn_register_customizer_typography_panel' );

function rvn_register_customizer_typography_panel( $wp_customize ) {
	$wp_customize->add_panel( 'typography', [
		'title' => __( 'Fonts', 'rvn' ),
	] );
}



/**
 * Registers Customizer Fonts / Font Embeds section.
 */

add_action( 'customize_register', 'rvn_register_customizer_font_embeds_section' );

function rvn_register_customizer_font_embeds_section( $wp_customize ) {
	$wp_customize->add_section( 'font_embeds', [
		'title' => __( 'Font Embeds', 'rvn' ),
		'panel' => 'typography',
	] );

	$wp_customize->add_setting( 'font_embed_code' );
	$wp_customize->add_control( 'font_embed_code', [
		'label'   => __( 'Font Embed Code', 'rvn' ),
		'type'    => 'textarea',
		'section' => 'font_embeds',
		'description' => sprintf( __( 'Paste in the font embed code you get from font embedding services like <a target="_blank" href="%1$s">Google Fonts</a>, <a target="_blank" href="%2$s">Adobe Fonts</a>, or others', 'rvn' ), 'https://fonts.google.com/', 'https://fonts.adobe.com/' ),
	] );

}



/**
 * Registers Customizer Fonts / Fonts section.
 */

add_action( 'customize_register', 'rvn_register_customizer_fonts_section' );

function rvn_register_customizer_fonts_section( $wp_customize ) {
	$wp_customize->add_section( 'fonts', [
		'title' => __( 'Fonts', 'rvn' ),
		'panel' => 'typography',
	] );

	$wp_customize->add_setting( 'font_family' );
	$wp_customize->add_control( 'font_family', [
		'label'   => __( 'Font Family', 'rvn' ),
		'type'    => 'textarea',
		'section' => 'fonts',
		'description' => __( 'The main font-family for the body text', 'rvn' ),
	] );

	$wp_customize->add_setting( 'secondary_font_family' );
	$wp_customize->add_control( 'secondary_font_family', [
		'label'   => __( 'Secondary Font Family', 'rvn' ),
		'type'    => 'textarea',
		'section' => 'fonts',
		'description' => __( 'The font-family for headings', 'rvn' ),
	] );

	$wp_customize->add_setting( 'mono_font_family' );
	$wp_customize->add_control( 'mono_font_family', [
		'label'   => __( 'Mono Font Family', 'rvn' ),
		'type'    => 'textarea',
		'section' => 'fonts',
		'description' => __( 'The font-family for code blocks and preformatted text', 'rvn' ),
	] );
}