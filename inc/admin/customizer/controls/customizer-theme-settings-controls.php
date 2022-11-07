<?php
/**
 * Registers Theme Settings Customizer controls.
 */



/**
 * Registers Customizer Theme Settings panel.
 */

add_action( 'customize_register', 'rvn_register_customizer_theme_settings_panel' );

function rvn_register_customizer_theme_settings_panel( $wp_customize ) {
	$wp_customize->add_panel( 'theme_settings', [
		'title' => __( 'Theme Settings', 'rvn' ),
	] );
}



/**
 * Registers Customizer Theme Settings / Generic section.
 */

add_action( 'customize_register', 'rvn_register_customizer_theme_settings_generic_section' );

function rvn_register_customizer_theme_settings_generic_section( $wp_customize ) {
	$wp_customize->add_section( 'generic', [
		'title' => __( 'Generic', 'rvn' ),
		'panel' => 'theme_settings',
	] );

	$wp_customize->add_setting( 'enable_wp_emojis' );
	$wp_customize->add_control( 'enable_wp_emojis', [
		'label'   => __( 'Enable text to emoji auto-replacement', 'rvn' ),
		'type'    => 'checkbox',
		'section' => 'generic',
	] );
}