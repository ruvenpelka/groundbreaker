<?php
/**
 * Registers UI Settings Customizer controls.
 */



/**
 * Registers Customizer UI Settings panel.
 */

add_action( 'customize_register', 'rvn_register_customizer_ui_settings_panel' );

function rvn_register_customizer_ui_settings_panel( $wp_customize ) {
	$wp_customize->add_panel( 'ui_settings', [
		'title' => __( 'UI Settings', 'rvn' ),
	] );
}



/**
 * Registers Customizer UI Settings / Font Size Settings section.
 */

add_action( 'customize_register', 'rvn_register_customizer_ui_settings_font_size_section' );

function rvn_register_customizer_ui_settings_font_size_section( $wp_customize ) {
	$wp_customize->add_section( 'font_size_settings', [
		'title' => __( 'Font Size Settings', 'rvn' ),
		'panel' => 'ui_settings',
		'description' => __( 'Here you can change the Font Size options that can be chosen by all other Font Size controls in the Customizer and Block Editor.', 'rvn' ),
	] );

	$font_size_controls = rvn_get_customizer_font_size_options();
	foreach ( $font_size_controls as $font_size_handle => $font_size_name ) :
		$wp_customize->add_setting( $font_size_handle );
		$wp_customize->add_control( $font_size_handle, [
			'label'   => $font_size_name,
			'type'    => 'text',
			'section' => 'font_size_settings',
		] );
	endforeach;
}



/**
 * Registers Customizer UI Settings / Line Height Settings section.
 */

add_action( 'customize_register', 'rvn_register_customizer_ui_settings_line_height_section' );

function rvn_register_customizer_ui_settings_line_height_section( $wp_customize ) {
	$wp_customize->add_section( 'line_height_settings', [
		'title' => __( 'Line Height Settings', 'rvn' ),
		'panel' => 'ui_settings',
		'description' => __( 'Here you can change the Line Height options that can be chosen by all other Line Height controls.', 'rvn' ),
	] );

	$line_height_controls = rvn_get_customizer_line_height_options();
	foreach ( $line_height_controls as $line_height_handle => $line_height_name ) :
		$wp_customize->add_setting( $line_height_handle );
		$wp_customize->add_control( $line_height_handle, [
			'label'   => $line_height_name,
			'type'    => 'text',
			'section' => 'line_height_settings',
		] );
	endforeach;
}



/**
 * Registers Customizer UI Settings / Color Settings section.
 */

add_action( 'customize_register', 'rvn_register_customizer_ui_settings_color_section' );

function rvn_register_customizer_ui_settings_color_section( $wp_customize ) {
	$wp_customize->add_section( 'color_settings', [
		'title' => __( 'Color Settings', 'rvn' ),
		'panel' => 'ui_settings',
		'description' => __( 'Here you can change the Color options that can be chosen by all other Color controls in the Customizer and Block Editor.', 'rvn' ),
	] );

	$color_controls = rvn_get_customizer_color_options();
	unset( $color_controls['color_transparent'] ); // We don't want the user to be able to define 'transparent' color.

	foreach ( $color_controls as $color_handle => $color_name ) :
		$wp_customize->add_setting( $color_handle, [
			'transport' => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color'
		] );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color_handle, [
			'label'   => $color_name,
			'type'    => 'color',
			'section' => 'color_settings',
		] ) );
	endforeach;
}