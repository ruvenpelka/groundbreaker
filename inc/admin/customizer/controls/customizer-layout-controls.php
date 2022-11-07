<?php
/**
 * Registers Layout Customizer controls.
 */



/**
 * Registers Customizer Layout panel.
 */

add_action( 'customize_register', 'rvn_register_customizer_layout_panel' );

function rvn_register_customizer_layout_panel( $wp_customize ) {
	$wp_customize->add_panel( 'layout', [
		'title' => __( 'Layout', 'rvn' ),
	] );
}



/**
 * Registers Customizer Layout / Site section.
 */

add_action( 'customize_register', 'rvn_register_customizer_layout_site_section' );

function rvn_register_customizer_layout_site_section( $wp_customize ) {
	$wp_customize->add_section( 'site', [
		'title' => __( 'Site', 'rvn' ),
		'panel' => 'layout',
	] );

	$wp_customize->add_setting( 'site_bg_color', [
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color'
	] );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_bg_color', [
		'label'   => __( 'Site Background Color', 'rvn' ),
		'type'    => 'color',
		'section' => 'site',
		'description' => __( 'This background color is applied to the :root element', 'rvn' ),
	] ) );

	$wp_customize->add_setting( 'site_container_max_width' );
	$wp_customize->add_control( 'site_container_max_width', [
		'label'   => __( 'Site Container Max. Width', 'rvn' ),
		'type'    => 'text',
		'section' => 'site',
		'description' => __( 'The max. width of your site container', 'rvn' ),
	] );

	$wp_customize->add_setting( 'site_container_bg_color', [
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color'
	] );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_container_bg_color', [
		'label'   => __( 'Site Container Background Color', 'rvn' ),
		'type'    => 'color',
		'section' => 'site',
		'description' => __( 'This background color is applied to the body element', 'rvn' ),
	] ) );
}



/**
 * Registers Customizer Layout / Container section.
 */

add_action( 'customize_register', 'rvn_register_customizer_layout_container_section' );

function rvn_register_customizer_layout_container_section( $wp_customize ) {
	$wp_customize->add_section( 'container', [
		'title' => __( 'Container' ),
		'panel' => 'layout',
	] );

	$wp_customize->add_setting( 'container_max_width' );
	$wp_customize->add_control( 'container_max_width', [
		'label'   => __( 'Container Max. Width', 'rvn' ),
		'type'    => 'text',
		'section' => 'container',
		'description' => __( 'The maximum width of container elements', 'rvn' ),
	] );

//	$wp_customize->add_setting( 'container_horizontal_padding_desktop' );
//	$wp_customize->add_control( 'container_horizontal_padding_desktop', [
//		'label'   => __( 'Desktop: Horizontal Container Padding', 'rvn' ),
//		'type'    => 'select',
//		'section' => 'container',
//		'choices' => rvn_get_customizer_space_options(),
//	] );
//
//	$wp_customize->add_setting( 'container_horizontal_padding_tablet' );
//	$wp_customize->add_control( 'container_horizontal_padding_tablet', [
//		'label'   => __( 'Tablet: Horizontal Container Padding', 'rvn' ),
//		'type'    => 'select',
//		'section' => 'container',
//		'choices' => rvn_get_customizer_space_options(),
//	] );
//
//	$wp_customize->add_setting( 'container_horizontal_padding_mobile' );
//	$wp_customize->add_control( 'container_horizontal_padding_mobile', [
//		'label'   => __( 'Mobile: Horizontal Container Padding', 'rvn' ),
//		'type'    => 'select',
//		'section' => 'container',
//		'choices' => rvn_get_customizer_space_options(),
//	] );
}



/**
 * Registers Customizer Layout / Section section.
 */

add_action( 'customize_register', 'rvn_register_customizer_layout_section_section' );

function rvn_register_customizer_layout_section_section( $wp_customize ) {
//	$wp_customize->add_section( 'section', [
//		'title' => __( 'Section', 'rvn' ),
//		'panel' => 'layout',
//	] );
//
//	$wp_customize->add_setting( 'section_vertical_padding_desktop' );
//	$wp_customize->add_control( 'section_vertical_padding_desktop', [
//		'label'   => __( 'Desktop: Vertical Section Padding', 'rvn' ),
//		'type'    => 'select',
//		'section' => 'section',
//		'choices' => rvn_get_customizer_space_options(),
//	] );
//
//	$wp_customize->add_setting( 'section_vertical_padding_tablet' );
//	$wp_customize->add_control( 'section_vertical_padding_tablet', [
//		'label'   => __( 'Tablet: Vertical Section Padding', 'rvn' ),
//		'type'    => 'select',
//		'section' => 'section',
//		'choices' => rvn_get_customizer_space_options(),
//	] );
//
//	$wp_customize->add_setting( 'section_vertical_padding_mobile' );
//	$wp_customize->add_control( 'section_vertical_padding_mobile', [
//		'label'   => __( 'Mobile: Vertical Section Padding', 'rvn' ),
//		'type'    => 'select',
//		'section' => 'section',
//		'choices' => rvn_get_customizer_space_options(),
//	] );
}



/**
 * Registers Customizer Layout / Blocks section.
 */

add_action( 'customize_register', 'rvn_register_customizer_layout_blocks_section' );

function rvn_register_customizer_layout_blocks_section( $wp_customize ) {
	$wp_customize->add_section( 'blocks', [
		'title' => __( 'Blocks', 'rvn' ),
		'panel' => 'layout',
	] );

	$wp_customize->add_setting( 'block_max_width' );
	$wp_customize->add_control( 'block_max_width', [
		'label'   => __( 'Block Max. Width', 'rvn' ),
		'type'    => 'text',
		'section' => 'blocks',
		'description' => __( 'The default max. width of a block', 'rvn' ),
	] );

//	$wp_customize->add_setting( 'block_alignment' );
//	$wp_customize->add_control( 'block_alignment', [
//		'label'   => __( 'Block Alignment', 'rvn' ),
//		'type'    => 'select',
//		'section' => 'blocks',
//		'choices' => [
//			'center' => 'Center',
//			'left' => 'Left',
//			'right' => 'Right',
//		],
//	] );

//	$wp_customize->add_setting( 'block_wide_aligned_max_width' );
//	$wp_customize->add_control( 'block_wide_aligned_max_width', [
//		'label'   => __( 'Wide Aligned Block Max. Width', 'rvn' ),
//		'type'    => 'text',
//		'section' => 'blocks',
//	] );

	$wp_customize->add_setting( 'block_divider_1' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'block_divider_1', [
		'section' => 'blocks',
	] ) );

	$description = __( 'The default vertical gap between blocks', 'rvn' );

	$wp_customize->add_setting( 'block_vertical_space_desktop' );
	$wp_customize->add_control( 'block_vertical_space_desktop', [
		'label'   => __( 'Desktop: Vertical Block Space', 'rvn' ),
		'type'    => 'select',
		'section' => 'blocks',
		'choices' => rvn_get_customizer_space_options(),
		'description' => $description,
	] );

	$wp_customize->add_setting( 'block_vertical_space_tablet' );
	$wp_customize->add_control( 'block_vertical_space_tablet', [
		'label'   => __( 'Tablet: Vertical Block Space', 'rvn' ),
		'type'    => 'select',
		'section' => 'blocks',
		'choices' => rvn_get_customizer_space_options(),
		'description' => $description,
	] );

	$wp_customize->add_setting( 'block_vertical_space_mobile' );
	$wp_customize->add_control( 'block_vertical_space_mobile', [
		'label'   => __( 'Mobile: Vertical Block Space', 'rvn' ),
		'type'    => 'select',
		'section' => 'blocks',
		'choices' => rvn_get_customizer_space_options(),
		'description' => $description,
	] );

	$description = __( 'The default horizontal gap between blocks (used for column gaps, etc.)', 'rvn' );

	$wp_customize->add_setting( 'block_horizontal_space_desktop' );
	$wp_customize->add_control( 'block_horizontal_space_desktop', [
		'label'   => __( 'Desktop: Horizontal Block Space', 'rvn' ),
		'type'    => 'select',
		'section' => 'blocks',
		'choices' => rvn_get_customizer_space_options(),
		'description' => $description,
	] );

	$wp_customize->add_setting( 'block_horizontal_space_tablet' );
	$wp_customize->add_control( 'block_horizontal_space_tablet', [
		'label'   => __( 'Tablet: Horizontal Block Space', 'rvn' ),
		'type'    => 'select',
		'section' => 'blocks',
		'choices' => rvn_get_customizer_space_options(),
		'description' => $description,
	] );

	$wp_customize->add_setting( 'block_horizontal_space_mobile' );
	$wp_customize->add_control( 'block_horizontal_space_mobile', [
		'label'   => __( 'Mobile: Horizontal Block Space', 'rvn' ),
		'type'    => 'select',
		'section' => 'blocks',
		'choices' => rvn_get_customizer_space_options(),
		'description' => $description,
	] );

	$wp_customize->add_setting( 'block_divider_2' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'block_divider_2', [
		'section' => 'blocks',
	] ) );

	$description = __( 'The larger vertical gap between blocks, which is applied as padding to Group blocks with background color, and H1-H3 headings', 'rvn' );

	$wp_customize->add_setting( 'block_vertical_space_large_desktop' );
	$wp_customize->add_control( 'block_vertical_space_large_desktop', [
		'label'   => __( 'Desktop: Large Vertical Block Space', 'rvn' ),
		'type'    => 'select',
		'section' => 'blocks',
		'choices' => rvn_get_customizer_space_options(),
		'description' => $description,
	] );

	$wp_customize->add_setting( 'block_vertical_space_large_tablet' );
	$wp_customize->add_control( 'block_vertical_space_large_tablet', [
		'label'   => __( 'Tablet: Large Vertical Block Space', 'rvn' ),
		'type'    => 'select',
		'section' => 'blocks',
		'choices' => rvn_get_customizer_space_options(),
		'description' => $description,
	] );

	$wp_customize->add_setting( 'block_vertical_space_large_mobile' );
	$wp_customize->add_control( 'block_vertical_space_large_mobile', [
		'label'   => __( 'Mobile: Large Vertical Block Space', 'rvn' ),
		'type'    => 'select',
		'section' => 'blocks',
		'choices' => rvn_get_customizer_space_options(),
		'description' => $description,
	] );

	$description = __( 'The larger horizontal gap between blocks, which is applied to Group blocks with background color, container elements, and H1-H3 headings', 'rvn' );

	$wp_customize->add_setting( 'block_horizontal_space_large_desktop' );
	$wp_customize->add_control( 'block_horizontal_space_large_desktop', [
		'label'   => __( 'Desktop: Large Horizontal Block Space', 'rvn' ),
		'type'    => 'select',
		'section' => 'blocks',
		'choices' => rvn_get_customizer_space_options(),
		'description' => $description,
	] );

	$wp_customize->add_setting( 'block_horizontal_space_large_tablet' );
	$wp_customize->add_control( 'block_horizontal_space_large_tablet', [
		'label'   => __( 'Tablet: Large Horizontal Block Space', 'rvn' ),
		'type'    => 'select',
		'section' => 'blocks',
		'choices' => rvn_get_customizer_space_options(),
		'description' => $description,
	] );

	$wp_customize->add_setting( 'block_horizontal_space_large_mobile' );
	$wp_customize->add_control( 'block_horizontal_space_large_mobile', [
		'label'   => __( 'Mobile: Large Horizontal Block Space', 'rvn' ),
		'type'    => 'select',
		'section' => 'blocks',
		'choices' => rvn_get_customizer_space_options(),
		'description' => $description,
	] );
}