<?php
/**
 * Registers Blocks Customizer controls.
 */



/**
 * Registers Customizer Blocks panel.
 */

add_action( 'customize_register', 'rvn_register_customizer_blocks_panel' );

function rvn_register_customizer_blocks_panel( $wp_customize ) {
	$wp_customize->add_panel( 'blocks', [
		'title' => __( 'Blocks', 'rvn' ),
	] );
}



/**
 * Registers Customizer Blocks/Column Block section.
 */

add_action( 'customize_register', 'rvn_register_customizer_column_block_section' );

function rvn_register_customizer_column_block_section( $wp_customize ) {
	$wp_customize->add_section( 'column_block', [
		'title' => __( 'Column Block', 'rvn' ),
		'panel' => 'blocks',
	] );

	$wp_customize->add_setting( 'column_block_vertical_space' );
	$wp_customize->add_control( 'column_block_vertical_space', [
		'label'   => __( 'Vertical Space', 'rvn' ),
		'type'    => 'select',
		'section' => 'column_block',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'column_block_horizontal_space' );
	$wp_customize->add_control( 'column_block_horizontal_space', [
		'label'   => __( 'Horizontal Space', 'rvn' ),
		'type'    => 'select',
		'section' => 'column_block',
		'choices' => rvn_get_customizer_space_options(),
	] );
}



/**
 * Registers Customizer Blocks/Separator Block section.
 */

add_action( 'customize_register', 'rvn_register_customizer_separator_block_section' );

function rvn_register_customizer_separator_block_section( $wp_customize ) {
	$wp_customize->add_section( 'separator_block', [
		'title' => __( 'Separator Block', 'rvn' ),
		'panel' => 'blocks',
	] );

	$wp_customize->add_setting( 'separator_block_color' );
	$wp_customize->add_control( 'separator_block_color', [
		'label'   => __( 'Separator Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'separator_block',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'separator_block_max_width' );
	$wp_customize->add_control( 'separator_block_max_width', [
		'label'   => __( 'Separator Max. Width', 'rvn' ),
		'type'    => 'text',
		'section' => 'separator_block',
	] );

	$wp_customize->add_setting( 'separator_block_max_width_wide' );
	$wp_customize->add_control( 'separator_block_max_width_wide', [
		'label'   => __( 'Wide: Separator Max. Width', 'rvn' ),
		'type'    => 'text',
		'section' => 'separator_block',
	] );

	$wp_customize->add_setting( 'separator_block_height' );
	$wp_customize->add_control( 'separator_block_height', [
		'label'   => __( 'Separator Height', 'rvn' ),
		'type'    => 'text',
		'section' => 'separator_block',
	] );
}



/**
 * Registers Customizer Blocks/Buttons Block section.
 */

add_action( 'customize_register', 'rvn_register_customizer_buttons_block_section' );

function rvn_register_customizer_buttons_block_section( $wp_customize ) {
	$wp_customize->add_section( 'buttons_block', [
		'title' => __( 'Buttons Block', 'rvn' ),
		'panel' => 'blocks',
	] );

	$wp_customize->add_setting( 'buttons_block_text_color' );
	$wp_customize->add_control( 'buttons_block_text_color', [
		'label'   => __( 'Button Text Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'buttons_block',
		'choices' => rvn_get_customizer_color_options(),

	] );

	$wp_customize->add_setting( 'buttons_block_text_color_hover' );
	$wp_customize->add_control( 'buttons_block_text_color_hover', [
		'label'   => __( 'Hover: Button Text Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'buttons_block',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'buttons_block_bg_color' );
	$wp_customize->add_control( 'buttons_block_bg_color', [
		'label'   => __( 'Button Background Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'buttons_block',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'buttons_block_bg_color_hover' );
	$wp_customize->add_control( 'buttons_block_bg_color_hover', [
		'label'   => __( 'Hover: Background Button Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'buttons_block',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'buttons_block_border_width' );
	$wp_customize->add_control( 'buttons_block_border_width', [
		'label'   => __( 'Button Border Width', 'rvn' ),
		'type'    => 'text',
		'section' => 'buttons_block',
	] );

	$wp_customize->add_setting( 'buttons_block_border_radius' );
	$wp_customize->add_control( 'buttons_block_border_radius', [
		'label'   => __( 'Button Border Radius', 'rvn' ),
		'type'    => 'text',
		'section' => 'buttons_block',
	] );

	$wp_customize->add_setting( 'buttons_block_vertical_padding' );
	$wp_customize->add_control( 'buttons_block_vertical_padding', [
		'label'   => __( 'Vertical Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'buttons_block',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'buttons_block_horizontal_padding' );
	$wp_customize->add_control( 'buttons_block_horizontal_padding', [
		'label'   => __( 'Horizontal Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'buttons_block',
		'choices' => rvn_get_customizer_space_options(),
	] );
}