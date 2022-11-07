<?php
/**
 * Registers Element Customizer controls.
 */



/**
 * Registers Customizer Element panel.
 */

add_action( 'customize_register', 'rvn_register_customizer_elements_panel' );

function rvn_register_customizer_elements_panel( $wp_customize ) {
	$wp_customize->add_panel( 'elements', [
		'title' => __( 'Elements', 'rvn' ),
	] );
}



/**
 * Registers Customizer Elements / Body Text section.
 */

add_action( 'customize_register', 'rvn_register_customizer_body_text_section' );

function rvn_register_customizer_body_text_section( $wp_customize ) {
	$wp_customize->add_section( 'body_text', [
		'title' => __( 'Body Text' ),
		'panel' => 'elements',
	] );

	$wp_customize->add_setting( 'text_color' );
	$wp_customize->add_control( 'text_color', [
		'label'   => __( 'Text Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'body_text',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'font_weight' );
	$wp_customize->add_control( 'font_weight', [
		'label'   => __( 'Font Weight', 'rvn' ),
		'type'    => 'select',
		'section' => 'body_text',
		'choices' => rvn_get_customizer_font_weight_options(),
	] );

	$wp_customize->add_setting( 'font_size_desktop' );
	$wp_customize->add_control( 'font_size_desktop', [
		'label'   => __( 'Desktop: Font Size', 'rvn' ),
		'type'    => 'select',
		'section' => 'body_text',
		'choices' => rvn_get_customizer_font_size_options(),
	] );

	$wp_customize->add_setting( 'font_size_tablet' );
	$wp_customize->add_control( 'font_size_tablet', [
		'label'   => __( 'Tablet: Font Size', 'rvn' ),
		'type'    => 'select',
		'section' => 'body_text',
		'choices' => rvn_get_customizer_font_size_options(),
	] );

	$wp_customize->add_setting( 'font_size_mobile' );
	$wp_customize->add_control( 'font_size_mobile', [
		'label'   => __( 'Mobile: Font Size', 'rvn' ),
		'type'    => 'select',
		'section' => 'body_text',
		'choices' => rvn_get_customizer_font_size_options(),
	] );

	$wp_customize->add_setting( 'line_height_desktop' );
	$wp_customize->add_control( 'line_height_desktop', [
		'label'   => __( 'Desktop: Line Height', 'rvn' ),
		'type'    => 'select',
		'section' => 'body_text',
		'choices' => rvn_get_customizer_line_height_options(),
	] );

	$wp_customize->add_setting( 'line_height_tablet' );
	$wp_customize->add_control( 'line_height_tablet', [
		'label'   => __( 'Tablet: Line Height', 'rvn' ),
		'type'    => 'select',
		'section' => 'body_text',
		'choices' => rvn_get_customizer_line_height_options(),
	] );

	$wp_customize->add_setting( 'line_height_mobile' );
	$wp_customize->add_control( 'line_height_mobile', [
		'label'   => __( 'Mobile: Line Height', 'rvn' ),
		'type'    => 'select',
		'section' => 'body_text',
		'choices' => rvn_get_customizer_line_height_options(),
	] );
}



/**
 * Registers Customizer Elements / Headings section.
 */

add_action( 'customize_register', 'rvn_register_customizer_headings_section' );

function rvn_register_customizer_headings_section( $wp_customize ) {
	$wp_customize->add_section( 'headings', [
		'title' => __( 'Headings' ),
		'panel' => 'elements',
	] );

	$headings = [
		'h1' => 'H1',
		'h2' => 'H2',
		'h3' => 'H3',
		'h4' => 'H4',
		'h5' => 'H5',
		'h6' => 'H6',
	];
	foreach ( $headings as $heading_handle => $heading_name ) :
		$wp_customize->add_setting( "{$heading_handle}_color" );
		$wp_customize->add_control( "{$heading_handle}_color", [
			'label'   => sprintf( __( '%s Color', 'rvn' ), $heading_name ),
			'type'    => 'select',
			'section' => 'headings',
			'choices' => rvn_get_customizer_color_options(),
		] );

		$wp_customize->add_setting( "{$heading_handle}_font_family" );
		$wp_customize->add_control( "{$heading_handle}_font_family", [
			'label'   => sprintf( __( '%s Font Family', 'rvn' ), $heading_name ),
			'type'    => 'select',
			'section' => 'headings',
			'choices' => rvn_get_customizer_font_family_options(),
		] );

		$wp_customize->add_setting( "{$heading_handle}_font_weight" );
		$wp_customize->add_control( "{$heading_handle}_font_weight", [
			'label'   => sprintf( __( '%s Font Weight', 'rvn' ), $heading_name ),
			'type'    => 'select',
			'section' => 'headings',
			'choices' => rvn_get_customizer_font_weight_options(),
		] );

		$wp_customize->add_setting( "{$heading_handle}_font_size_desktop" );
		$wp_customize->add_control( "{$heading_handle}_font_size_desktop", [
			'label'   => sprintf( __( 'Desktop: %s Font Size', 'rvn' ), $heading_name ),
			'type'    => 'select',
			'section' => 'headings',
			'choices' => rvn_get_customizer_font_size_options(),
		] );

		$wp_customize->add_setting( "{$heading_handle}_font_size_tablet" );
		$wp_customize->add_control( "{$heading_handle}_font_size_tablet", [
			'label'   => sprintf( __( 'Tablet: %s Font Size', 'rvn' ), $heading_name ),
			'type'    => 'select',
			'section' => 'headings',
			'choices' => rvn_get_customizer_font_size_options(),
		] );

		$wp_customize->add_setting( "{$heading_handle}_font_size_mobile" );
		$wp_customize->add_control( "{$heading_handle}_font_size_mobile", [
			'label'   => sprintf( __( 'Mobile: %s Font Size', 'rvn' ), $heading_name ),
			'type'    => 'select',
			'section' => 'headings',
			'choices' => rvn_get_customizer_font_size_options(),
		] );

		$wp_customize->add_setting( "{$heading_handle}_line_height_desktop" );
		$wp_customize->add_control( "{$heading_handle}_line_height_desktop", [
			'label'   => sprintf( __( 'Desktop: %s Line Height', 'rvn' ), $heading_name ),
			'type'    => 'select',
			'section' => 'headings',
			'choices' => rvn_get_customizer_line_height_options(),
		] );

		$wp_customize->add_setting( "{$heading_handle}_line_height_tablet" );
		$wp_customize->add_control( "{$heading_handle}_line_height_tablet", [
			'label'   => sprintf( __( 'Tablet: %s Line Height', 'rvn' ), $heading_name ),
			'type'    => 'select',
			'section' => 'headings',
			'choices' => rvn_get_customizer_line_height_options(),
		] );

		$wp_customize->add_setting( "{$heading_handle}_line_height_mobile" );
		$wp_customize->add_control( "{$heading_handle}_line_height_mobile", [
			'label'   => sprintf( __( 'Mobile: %s Line Height', 'rvn' ), $heading_name ),
			'type'    => 'select',
			'section' => 'headings',
			'choices' => rvn_get_customizer_line_height_options(),
		] );

		$wp_customize->add_setting( "{$heading_handle}_divider" );
		$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, "{$heading_handle}_divider", [
				'section' => 'headings',
		] ) );
	endforeach;
}



/**
 * Registers Customizer Elements / Links section.
 */

add_action( 'customize_register', 'rvn_register_customizer_links_section' );

function rvn_register_customizer_links_section( $wp_customize ) {
	$wp_customize->add_section( 'links', [
		'title' => __( 'Links' ),
		'panel' => 'elements',
	] );

	$wp_customize->add_setting( 'link_color' );
	$wp_customize->add_control( 'link_color', [
		'label'   => __( 'Link Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'links',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'link_color_hover' );
	$wp_customize->add_control( 'link_color_hover', [
		'label'   => __( 'Hover: Link Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'links',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'link_font_weight' );
	$wp_customize->add_control( 'link_font_weight', [
		'label'   => __( 'Font Weight', 'rvn' ),
		'type'    => 'select',
		'section' => 'links',
		'choices' => rvn_get_customizer_font_weight_options(),
	] );

	$wp_customize->add_setting( 'link_text_decoration' );
	$wp_customize->add_control( 'link_text_decoration', [
		'label'   => __( 'Text Decoration', 'rvn' ),
		'type'    => 'select',
		'section' => 'links',
		'choices' => [
			'none' => 'None',
			'underline' => 'Underline',
		],
	] );

	$wp_customize->add_setting( 'link_text_decoration_hover' );
	$wp_customize->add_control( 'link_text_decoration_hover', [
		'label'   => __( 'Hover: Text Decoration', 'rvn' ),
		'type'    => 'select',
		'section' => 'links',
		'choices' => [
			'none' => 'None',
			'underline' => 'Underline',
		],
	] );
}