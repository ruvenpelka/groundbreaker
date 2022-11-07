<?php
/**
 * Registers Components Customizer controls.
 */



/**
 * Registers Customizer Components panel.
 */

add_action( 'customize_register', 'rvn_register_customizer_components_panel' );

function rvn_register_customizer_components_panel( $wp_customize ) {
	$wp_customize->add_panel( 'components', [
		'title' => __( 'Components', 'rvn' ),
	] );
}



/**
 * Registers Customizer Components / Logo section.
 */

add_action( 'customize_register', 'rvn_register_customizer_components_logo_section' );

function rvn_register_customizer_components_logo_section( $wp_customize ) {
	$wp_customize->add_section( 'logo', [
		'title' => __( 'Logo', 'rvn' ),
		'panel' => 'components',
		'description' => __( 'Controls for the Logo component (available via Widget).', 'rvn' ),
	] );

	$wp_customize->add_setting( 'logo_max_width_desktop' );
	$wp_customize->add_control( 'logo_max_width_desktop', [
		'label'   => __( 'Desktop: Logo Max. Width', 'rvn' ),
		'type'    => 'text',
		'section' => 'logo',
	] );

	$wp_customize->add_setting( 'logo_max_width_tablet' );
	$wp_customize->add_control( 'logo_max_width_tablet', [
		'label'   => __( 'Tablet: Logo Max. Width', 'rvn' ),
		'type'    => 'text',
		'section' => 'logo',
	] );

	$wp_customize->add_setting( 'logo_max_width_mobile' );
	$wp_customize->add_control( 'logo_max_width_mobile', [
		'label'   => __( 'Mobile: Logo Max. Width', 'rvn' ),
		'type'    => 'text',
		'section' => 'logo',
	] );
}



/**
 * Registers Customizer Components / Header/Topbar/Navbar section.
 */

add_action( 'customize_register', function ( $wp_customize ) {
	$header_sections = [
		'topbar' => __( 'Topbar', 'rvn' ),
		'header' => __( 'Header', 'rvn' ),
		'navbar' => __( 'Navbar', 'rvn' ),
	];

	foreach ( $header_sections as $section_handle => $section_title ) :
		$wp_customize->add_section( $section_handle, [
			'title' => $section_title,
			'panel' => 'components',
			'description' => sprintf( __( 'Controls for the %s widget area.', 'rvn' ), $section_title ),
		] );

		$wp_customize->add_setting( "{$section_handle}_container" );
		$wp_customize->add_control( "{$section_handle}_container", [
			'label'   => __( 'Container', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => [
				'default' => 'Default',
				'full' => 'Full Width',
			],
			'description' => __( 'The max. width of the area', 'rvn' ),
		] );

		$wp_customize->add_setting( "{$section_handle}_columns" );
		$wp_customize->add_control( "{$section_handle}_columns", [
			'label'   => __( 'Columns', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => [
				'1' => '1 Column',
				'2' => '2 Columns',
				'3' => '3 Columns',
			],
			'description' => __( 'The column layout of the area', 'rvn' ),
		] );

		$wp_customize->add_setting( "{$section_handle}_bg_color" );
		$wp_customize->add_control( "{$section_handle}_bg_color", [
			'label'   => __( 'Background Color', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_color_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_container_size" );
		$wp_customize->add_control( "{$section_handle}_container_size", [
			'label'   => __( 'Container Size', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => [
				'container' => 'Container',
				'full-width' => 'Full Width',
			],
		] );

		$wp_customize->add_setting( "{$section_handle}_vertical_padding_desktop" );
		$wp_customize->add_control( "{$section_handle}_vertical_padding_desktop", [
			'label'   => __( 'Desktop: Vertical Padding', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_space_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_vertical_padding_tablet" );
		$wp_customize->add_control( "{$section_handle}_vertical_padding_tablet", [
			'label'   => __( 'Tablet: Vertical Padding', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_space_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_vertical_padding_mobile" );
		$wp_customize->add_control( "{$section_handle}_vertical_padding_mobile", [
			'label'   => __( 'Mobile: Vertical Padding', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_space_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_area_gap" );
		$wp_customize->add_control( "{$section_handle}_area_gap", [
			'label'   => __( 'Area Gap', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_space_options(),
			'description' => __( 'The gap between the area groups', 'rvn' ),
		] );

		$wp_customize->add_setting( "{$section_handle}_item_gap" );
		$wp_customize->add_control( "{$section_handle}_item_gap", [
			'label'   => __( 'Item Gap', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_space_options(),
			'description' => __( 'The gap between the items within an area group', 'rvn' ),
		] );

		$wp_customize->add_setting( "{$section_handle}_divider_1" );
		$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, "{$section_handle}_divider_1", [
			'section' => $section_handle,
		] ) );

		$wp_customize->add_setting( "{$section_handle}_text_color" );
		$wp_customize->add_control( "{$section_handle}_text_color", [
			'label'   => __( 'Text Color', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_color_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_font_family" );
		$wp_customize->add_control( "{$section_handle}_font_family", [
			'label'   => __( 'Font Family', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_font_family_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_font_weight" );
		$wp_customize->add_control( "{$section_handle}_font_weight", [
			'label'   => __( 'Font Weight', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_font_weight_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_font_size_desktop" );
		$wp_customize->add_control( "{$section_handle}_font_size_desktop", [
			'label'   => __( 'Desktop: Font Size', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_font_size_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_font_size_tablet" );
		$wp_customize->add_control( "{$section_handle}_font_size_tablet", [
			'label'   => __( 'Tablet: Font Size', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_font_size_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_font_size_mobile" );
		$wp_customize->add_control( "{$section_handle}_font_size_mobile", [
			'label'   => __( 'Mobile: Font Size', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_font_size_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_line_height_desktop" );
		$wp_customize->add_control( "{$section_handle}_line_height_desktop", [
			'label'   => __( 'Desktop: Line Height', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_line_height_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_line_height_tablet" );
		$wp_customize->add_control( "{$section_handle}_line_height_tablet", [
			'label'   => __( 'Tablet: Line Height', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_line_height_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_line_height_mobile" );
		$wp_customize->add_control( "{$section_handle}_line_height_mobile", [
			'label'   => __( 'Mobile: Line Height', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_line_height_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_divider_2" );
		$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, "{$section_handle}_divider_2", [
			'section' => $section_handle,
		] ) );

		$wp_customize->add_setting( "{$section_handle}_link_color" );
		$wp_customize->add_control( "{$section_handle}_link_color", [
			'label'   => __( 'Link Color', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_color_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_link_color_hover" );
		$wp_customize->add_control( "{$section_handle}_link_color_hover", [
			'label'   => __( 'Hover: Link Color', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_color_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_link_font_weight" );
		$wp_customize->add_control( "{$section_handle}_link_font_weight", [
			'label'   => __( 'Link Font Weight', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => rvn_get_customizer_font_weight_options(),
		] );

		$wp_customize->add_setting( "{$section_handle}_link_text_decoration" );
		$wp_customize->add_control( "{$section_handle}_link_text_decoration", [
			'label'   => __( 'Link Text Decoration', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => [
				'none' => 'None',
				'underline' => 'Underline',
			],
		] );

		$wp_customize->add_setting( "{$section_handle}_link_text_decoration_hover" );
		$wp_customize->add_control( "{$section_handle}_link_text_decoration_hover", [
			'label'   => __( 'Hover: Link Text Decoration', 'rvn' ),
			'type'    => 'select',
			'section' => $section_handle,
			'choices' => [
				'none' => 'None',
				'underline' => 'Underline',
			],
		] );
	endforeach;
} );



/**
 * Registers Customizer Components / Sidebar section.
 */

add_action( 'customize_register', 'rvn_register_customizer_components_sidebar_section' );

function rvn_register_customizer_components_sidebar_section( $wp_customize ) {
	$wp_customize->add_section( 'sidebar', [
		'title' => __( 'Sidebar', 'rvn' ),
		'panel' => 'components',
		'description' => __( 'Layout for the sidebar on pages with \'sidebar\' template.', 'rvn' ),
	] );

	$wp_customize->add_setting( 'sidebar_text_color' );
	$wp_customize->add_control( 'sidebar_text_color', [
		'label'   => __( 'Text Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'sidebar_bg_color' );
	$wp_customize->add_control( 'sidebar_bg_color', [
		'label'   => __( 'Background Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'sidebar_divider_1' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'sidebar_divider_1', [
		'section' => 'sidebar',
	] ) );

	$wp_customize->add_setting( 'sidebar_border_color' );
	$wp_customize->add_control( 'sidebar_border_color', [
		'label'   => __( 'Border Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'sidebar_border_width' );
	$wp_customize->add_control( 'sidebar_border_width', [
		'label'   => __( 'Border Width', 'rvn' ),
		'type'    => 'text',
		'section' => 'sidebar',
	] );

	$wp_customize->add_setting( 'sidebar_divider_2' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'sidebar_divider_2', [
		'section' => 'sidebar',
	] ) );

	$wp_customize->add_setting( 'sidebar_font_size' );
	$wp_customize->add_control( 'sidebar_font_size', [
		'label'   => __( 'Font Size', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_font_size_options(),
	] );

	$wp_customize->add_setting( 'sidebar_line_height' );
	$wp_customize->add_control( 'sidebar_line_height', [
		'label'   => __( 'Line Height', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_line_height_options(),
	] );

	$wp_customize->add_setting( 'sidebar_divider_3' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'sidebar_divider_3', [
		'section' => 'sidebar',
	] ) );

	$wp_customize->add_setting( 'sidebar_vertical_padding_desktop' );
	$wp_customize->add_control( 'sidebar_vertical_padding_desktop', [
		'label'   => __( 'Desktop: Vertical Sidebar Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'sidebar_vertical_padding_tablet' );
	$wp_customize->add_control( 'sidebar_vertical_padding_tablet', [
		'label'   => __( 'Tablet: Vertical Sidebar Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'sidebar_vertical_padding_mobile' );
	$wp_customize->add_control( 'sidebar_vertical_padding_mobile', [
		'label'   => __( 'Mobile: Vertical Sidebar Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'sidebar_horizontal_padding' );
	$wp_customize->add_control( 'sidebar_horizontal_padding', [
		'label'   => __( 'Horizontal Sidebar Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'sidebar_divider_4' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'sidebar_divider_4', [
		'section' => 'sidebar',
	] ) );

	$wp_customize->add_setting( 'sidebar_widget_padding' );
	$wp_customize->add_control( 'sidebar_widget_padding', [
		'label'   => __( 'Vertical Widget Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_space_options(),
		'description' => __( 'The gap between widgets', 'rvn' ),
	] );

	$wp_customize->add_setting( 'sidebar_divider_5' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'sidebar_divider_5', [
		'section' => 'sidebar',
	] ) );

	$wp_customize->add_setting( 'sidebar_heading_color' );
	$wp_customize->add_control( 'sidebar_heading_color', [
		'label'   => __( 'Heading Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'sidebar_heading_text_transform' );
	$wp_customize->add_control( 'sidebar_heading_text_transform', [
		'label'   => __( 'Heading Text Transform', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_text_transform_options(),
	] );

	$wp_customize->add_setting( 'sidebar_heading_bottom_margin' );
	$wp_customize->add_control( 'sidebar_heading_bottom_margin', [
		'label'   => __( 'Heading Bottom Margin', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'sidebar_divider_6' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'sidebar_divider_6', [
		'section' => 'sidebar',
	] ) );

	$wp_customize->add_setting( 'sidebar_link_color' );
	$wp_customize->add_control( 'sidebar_link_color', [
		'label'   => __( 'Link Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'sidebar_link_color_hover' );
	$wp_customize->add_control( 'sidebar_link_color_hover', [
		'label'   => __( 'Hover: Link Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'sidebar_link_font_weight' );
	$wp_customize->add_control( 'sidebar_link_font_weight', [
		'label'   => __( 'Link Font Weight', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => rvn_get_customizer_font_weight_options(),
	] );

	$wp_customize->add_setting( 'sidebar_link_text_decoration' );
	$wp_customize->add_control( 'sidebar_link_text_decoration', [
		'label'   => __( 'Link Text Decoration', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => [
			'none' => 'None',
			'underline' => 'Underline',
		],
	] );

	$wp_customize->add_setting( 'sidebar_link_text_decoration_hover' );
	$wp_customize->add_control( 'sidebar_link_text_decoration_hover', [
		'label'   => __( 'Hover: Link Text Decoration', 'rvn' ),
		'type'    => 'select',
		'section' => 'sidebar',
		'choices' => [
			'none' => 'None',
			'underline' => 'Underline',
		],
	] );
}



/**
 * Registers Customizer Components / Navigation section.
 */

add_action( 'customize_register', 'rvn_register_customizer_components_nav_section' );

function rvn_register_customizer_components_nav_section( $wp_customize ) {
	$wp_customize->add_section( 'nav', [
		'title' => __( 'Navigation', 'rvn' ),
		'panel' => 'components',
		'description' => __( 'Controls for the Navigation component (available via Widget).', 'rvn' ),
	] );

	$wp_customize->add_setting( 'nav_item_vertical_padding' );
	$wp_customize->add_control( 'nav_item_vertical_padding', [
		'label'   => __( 'Item Vertical Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'nav_item_horizontal_padding' );
	$wp_customize->add_control( 'nav_item_horizontal_padding', [
		'label'   => __( 'Item Horizontal Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'nav_item_font_size' );
	$wp_customize->add_control( 'nav_item_font_size', [
		'label'   => __( 'Item Font Size', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_font_size_options(),
	] );

	$wp_customize->add_setting( 'nav_item_line_height' );
	$wp_customize->add_control( 'nav_item_line_height', [
		'label'   => __( 'Item Line Height', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_line_height_options(),
	] );

	$wp_customize->add_setting( 'nav_item_font_weight' );
	$wp_customize->add_control( 'nav_item_font_weight', [
		'label'   => __( 'Item Font Weight', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_font_weight_options(),
	] );

	$wp_customize->add_setting( 'nav_item_font_family' );
	$wp_customize->add_control( 'nav_item_font_family', [
		'label'   => __( 'Item Font Family', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_font_family_options(),
	] );

	$wp_customize->add_setting( 'nav_item_text_transform' );
	$wp_customize->add_control( 'nav_item_text_transform', [
		'label'   => __( 'Item Text Transform', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => [
			'none' => 'None',
			'uppercase' => 'Uppercase',
		],
	] );

	$wp_customize->add_setting( 'nav_item_color' );
	$wp_customize->add_control( 'nav_item_color', [
		'label'   => __( 'Item Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'nav_item_color_hover' );
	$wp_customize->add_control( 'nav_item_color_hover', [
		'label'   => __( 'Hover: Item Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'nav_divider_1' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'nav_divider_1', [
		'section' => 'nav',
	] ) );

	$wp_customize->add_setting( 'nav_submenu_width' );
	$wp_customize->add_control( 'nav_submenu_width', [
		'label'   => __( 'Submenu Width', 'rvn' ),
		'type'    => 'text',
		'section' => 'nav',
	] );

	$wp_customize->add_setting( 'nav_submenu_bg_color' );
	$wp_customize->add_control( 'nav_submenu_bg_color', [
		'label'   => __( 'Submenu Background Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'nav_submenu_vertical_padding' );
	$wp_customize->add_control( 'nav_submenu_vertical_padding', [
		'label'   => __( 'Submenu Vertical Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'nav_divider_2' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'nav_divider_2', [
		'section' => 'nav',
	] ) );

	$wp_customize->add_setting( 'nav_submenu_item_font_size' );
	$wp_customize->add_control( 'nav_submenu_item_font_size', [
		'label'   => __( 'Submenu Item Font Size', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_font_size_options(),
	] );

	$wp_customize->add_setting( 'nav_submenu_item_line_height' );
	$wp_customize->add_control( 'nav_submenu_item_line_height', [
		'label'   => __( 'Submenu Item Line Height', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_line_height_options(),
	] );

	$wp_customize->add_setting( 'nav_submenu_item_font_weight' );
	$wp_customize->add_control( 'nav_submenu_item_font_weight', [
		'label'   => __( 'Submenu Item Font Weight', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_font_weight_options(),
	] );

	$wp_customize->add_setting( 'nav_submenu_item_font_family' );
	$wp_customize->add_control( 'nav_submenu_item_font_family', [
		'label'   => __( 'Submenu Item Font Family', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_font_family_options(),
	] );

	$wp_customize->add_setting( 'nav_submenu_item_text_transform' );
	$wp_customize->add_control( 'nav_submenu_item_text_transform', [
		'label'   => __( 'Submenu Item Text Transform', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => [
			'none' => 'None',
			'uppercase' => 'Uppercase',
		],
	] );

	$wp_customize->add_setting( 'nav_submenu_item_color' );
	$wp_customize->add_control( 'nav_submenu_item_color', [
		'label'   => __( 'Submenu Item Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'nav_submenu_item_color_hover' );
	$wp_customize->add_control( 'nav_submenu_item_color_hover', [
		'label'   => __( 'Hover: Submenu Item Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'nav_submenu_item_vertical_padding' );
	$wp_customize->add_control( 'nav_submenu_item_vertical_padding', [
		'label'   => __( 'Submenu Item Vertical Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'nav_submenu_item_horizontal_padding' );
	$wp_customize->add_control( 'nav_submenu_item_horizontal_padding', [
		'label'   => __( 'Submenu Item Horizontal Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'nav',
		'choices' => rvn_get_customizer_space_options(),
	] );
}



/**
 * Registers Customizer Components / Stacked Navigation section.
 */

add_action( 'customize_register', 'rvn_register_customizer_components_stacknav_section' );

function rvn_register_customizer_components_stacknav_section( $wp_customize ) {
	$wp_customize->add_section( 'stacknav', [
		'title' => __( 'Stacked Navigation', 'rvn' ),
		'panel' => 'components',
		'description' => __( 'Controls for the Stacked Navigation component (available via Widget).', 'rvn' ),
	] );

	$wp_customize->add_setting( 'stacknav_item_color' );
	$wp_customize->add_control( 'stacknav_item_color', [
		'label'   => __( 'Item Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'stacknav',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'stacknav_item_color_active' );
	$wp_customize->add_control( 'stacknav_item_color_active', [
		'label'   => __( 'Active: Item Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'stacknav',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'stacknav_item_bg_color' );
	$wp_customize->add_control( 'stacknav_item_bg_color', [
		'label'   => __( 'Item Background Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'stacknav',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'stacknav_item_bg_color_active' );
	$wp_customize->add_control( 'stacknav_item_bg_color_active', [
		'label'   => __( 'Active: Item Background Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'stacknav',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'stacknav_divider_1' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'stacknav_divider_1', [
		'section' => 'stacknav',
	] ) );

	$wp_customize->add_setting( 'stacknav_item_font_weight' );
	$wp_customize->add_control( 'stacknav_item_font_weight', [
		'label'   => __( 'Item Font Weight', 'rvn' ),
		'type'    => 'select',
		'section' => 'stacknav',
		'choices' => rvn_get_customizer_font_weight_options(),
	] );

	$wp_customize->add_setting( 'stacknav_divider_2' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'stacknav_divider_2', [
		'section' => 'stacknav',
	] ) );

	$wp_customize->add_setting( 'stacknav_item_vertical_padding' );
	$wp_customize->add_control( 'stacknav_item_vertical_padding', [
		'label'   => __( 'Item Vertical Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'stacknav',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'stacknav_item_horizontal_padding' );
	$wp_customize->add_control( 'stacknav_item_horizontal_padding', [
		'label'   => __( 'Item Horizontal Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'stacknav',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'stacknav_divider_3' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'stacknav_divider_3', [
		'section' => 'stacknav',
	] ) );

	$wp_customize->add_setting( 'stacknav_item_border_color' );
	$wp_customize->add_control( 'stacknav_item_border_color', [
		'label'   => __( 'Item Border Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'stacknav',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'stacknav_item_border_width' );
	$wp_customize->add_control( 'stacknav_item_border_width', [
		'label'   => __( 'Item Border Width', 'rvn' ),
		'type'    => 'text',
		'section' => 'stacknav',
	] );

	$wp_customize->add_setting( 'stacknav_divider_4' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'stacknav_divider_4', [
		'section' => 'stacknav',
	] ) );

	$wp_customize->add_setting( 'stacknav_sub_item_vertical_padding' );
	$wp_customize->add_control( 'stacknav_sub_item_vertical_padding', [
		'label'   => __( 'Sub Item Vertical Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'stacknav',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'stacknav_sub_item_horizontal_padding' );
	$wp_customize->add_control( 'stacknav_sub_item_horizontal_padding', [
		'label'   => __( 'Sub Item Horizontal Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'stacknav',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'stacknav_divider_5' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'stacknav_divider_5', [
		'section' => 'stacknav',
	] ) );

	$wp_customize->add_setting( 'stacknav_sub_sub_item_horizontal_padding' );
	$wp_customize->add_control( 'stacknav_sub_sub_item_horizontal_padding', [
		'label'   => __( 'Sub-Sub Item Horizontal Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'stacknav',
		'choices' => rvn_get_customizer_space_options(),
	] );
}



/**
 * Registers Customizer Components / Footer Widget Area section.
 */

add_action( 'customize_register', 'rvn_register_customizer_footer_widget_area_section' );

function rvn_register_customizer_footer_widget_area_section( $wp_customize ) {
	$wp_customize->add_section( 'footer_widget_area', [
		'title' => __( 'Footer Widget Area', 'rvn' ),
		'panel' => 'components',
		'description' => __( 'Controls for the Footer widget area.', 'rvn' ),
	] );

	$wp_customize->add_setting( 'footer_widget_area_columns' );
	$wp_customize->add_control( 'footer_widget_area_columns', [
		'label'   => __( 'Columns', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => [
			'1' => '1 Column',
			'2' => '2 Columns',
			'3' => '3 Columns',
			'4' => '4 Columns',
		],
	] );

	$wp_customize->add_setting( 'footer_widget_area_bg_color' );
	$wp_customize->add_control( 'footer_widget_area_bg_color', [
		'label'   => __( 'Background Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_vertical_padding_desktop' );
	$wp_customize->add_control( 'footer_widget_area_vertical_padding_desktop', [
		'label'   => __( 'Desktop: Vertical Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_vertical_padding_tablet' );
	$wp_customize->add_control( 'footer_widget_area_vertical_padding_tablet', [
		'label'   => __( 'Tablet: Vertical Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_vertical_padding_mobile' );
	$wp_customize->add_control( 'footer_widget_area_vertical_padding_mobile', [
		'label'   => __( 'Mobile: Vertical Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_divider_1' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'footer_widget_area_divider_1', [
		'section' => 'footer_widget_area',
	] ) );

	$wp_customize->add_setting( 'footer_widget_area_text_color' );
	$wp_customize->add_control( 'footer_widget_area_text_color', [
		'label'   => __( 'Text Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_font_size' );
	$wp_customize->add_control( 'footer_widget_area_font_size', [
		'label'   => __( 'Font Size', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_font_size_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_line_height' );
	$wp_customize->add_control( 'footer_widget_area_line_height', [
		'label'   => __( 'Line Height', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => rvn_get_customizer_line_height_options(),
	] );


	$wp_customize->add_setting( 'footer_widget_area_font_weight' );
	$wp_customize->add_control( 'footer_widget_area_font_weight', [
		'label'   => __( 'Font Weight', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_font_weight_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_divider_2' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'footer_widget_area_divider_2', [
		'section' => 'footer_widget_area',
	] ) );

	$wp_customize->add_setting( 'footer_widget_area_heading_color' );
	$wp_customize->add_control( 'footer_widget_area_heading_color', [
		'label'   => __( 'Widget Heading Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_heading_bottom_margin' );
	$wp_customize->add_control( 'footer_widget_area_heading_bottom_margin', [
		'label'   => __( 'Widget Heading Bottom Margin', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_divider_3' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'footer_widget_area_divider_3', [
		'section' => 'footer_widget_area',
	] ) );

	$wp_customize->add_setting( 'footer_widget_area_link_color' );
	$wp_customize->add_control( 'footer_widget_area_link_color', [
		'label'   => __( 'Link Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_link_color_hover' );
	$wp_customize->add_control( 'footer_widget_area_link_color_hover', [
		'label'   => __( 'Hover: Link Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_link_font_weight' );
	$wp_customize->add_control( 'footer_widget_area_link_font_weight', [
		'label'   => __( 'Link Font Weight', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_font_weight_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_link_text_decoration' );
	$wp_customize->add_control( 'footer_widget_area_link_text_decoration', [
		'label'   => __( 'Link Text Decoration', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => [
			'none' => 'None',
			'underline' => 'Underline',
		],
	] );

	$wp_customize->add_setting( 'footer_widget_area_link_text_decoration_hover' );
	$wp_customize->add_control( 'footer_widget_area_link_text_decoration_hover', [
		'label'   => __( 'Hover: Link Text Decoration', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => [
			'none' => 'None',
			'underline' => 'Underline',
		],
	] );

	$wp_customize->add_setting( 'footer_widget_area_divider_4' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'footer_widget_area_divider_4', [
		'section' => 'footer_widget_area',
	] ) );

	$wp_customize->add_setting( 'footer_widget_area_nav_item_vertical_padding' );
	$wp_customize->add_control( 'footer_widget_area_nav_item_vertical_padding', [
		'label'   => __( 'Nav Item Vertical Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_nav_item_color' );
	$wp_customize->add_control( 'footer_widget_area_nav_item_color', [
		'label'   => __( 'Nav Item Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_nav_item_color_hover' );
	$wp_customize->add_control( 'footer_widget_area_nav_item_color_hover', [
		'label'   => __( 'Hover: Nav Item Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_nav_item_font_weight' );
	$wp_customize->add_control( 'footer_widget_area_nav_item_font_weight', [
		'label'   => __( 'Nav Item Font Weight', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => rvn_get_customizer_font_weight_options(),
	] );

	$wp_customize->add_setting( 'footer_widget_area_nav_item_text_decoration' );
	$wp_customize->add_control( 'footer_widget_area_nav_item_text_decoration', [
		'label'   => __( 'Nav Item Text Decoration', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => [
			'none' => 'None',
			'underline' => 'Underline',
		],
	] );

	$wp_customize->add_setting( 'footer_widget_area_nav_item_text_decoration_hover' );
	$wp_customize->add_control( 'footer_widget_area_nav_item_text_decoration_hover', [
		'label'   => __( 'Hover: Nav Item Text Decoration', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_widget_area',
		'choices' => [
			'none' => 'None',
			'underline' => 'Underline',
		],
	] );
}



/**
 * Registers Customizer Components / Footer Bar section.
 */

add_action( 'customize_register', 'rvn_register_customizer_footer_bar_section' );

function rvn_register_customizer_footer_bar_section( $wp_customize ) {
	$wp_customize->add_section( 'footer_bar', [
		'title' => __( 'Footer Bar', 'rvn' ),
		'panel' => 'components',
		'description' => __( 'Controls for the Footer Bar component.', 'rvn' ),
	] );

	$wp_customize->add_setting( 'footer_bar_text' );
	$wp_customize->add_control( 'footer_bar_text', [
		'label'   => __( 'Footer Text', 'rvn' ),
		'type'    => 'textarea',
		'section' => 'footer_bar',
	] );

	$wp_customize->add_setting( 'footer_bar_bg_color' );
	$wp_customize->add_control( 'footer_bar_bg_color', [
		'label'   => __( 'Background Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'footer_bar_vertical_padding_desktop' );
	$wp_customize->add_control( 'footer_bar_vertical_padding_desktop', [
		'label'   => __( 'Desktop: Vertical Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'footer_bar_vertical_padding_tablet' );
	$wp_customize->add_control( 'footer_bar_vertical_padding_tablet', [
		'label'   => __( 'Tablet: Vertical Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'footer_bar_vertical_padding_mobile' );
	$wp_customize->add_control( 'footer_bar_vertical_padding_mobile', [
		'label'   => __( 'Mobile: Vertical Padding', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => rvn_get_customizer_space_options(),
	] );

	$wp_customize->add_setting( 'footer_bar_divider_1' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'footer_bar_divider_1', [
		'section' => 'footer_bar',
	] ) );

	$wp_customize->add_setting( 'footer_bar_text_align' );
	$wp_customize->add_control( 'footer_bar_text_align', [
		'label'   => __( 'Text Align', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => [
			'left' => 'Left',
			'center' => 'Center',
			'right' => 'Right',
		],
	] );

	$wp_customize->add_setting( 'footer_bar_text_color' );
	$wp_customize->add_control( 'footer_bar_text_color', [
		'label'   => __( 'Text Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'footer_bar_font_size' );
	$wp_customize->add_control( 'footer_bar_font_size', [
		'label'   => __( 'Font Size', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => rvn_get_customizer_font_size_options(),
	] );

	$wp_customize->add_setting( 'footer_bar_line_height' );
	$wp_customize->add_control( 'footer_bar_line_height', [
		'label'   => __( 'Line Height', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => rvn_get_customizer_line_height_options(),
	] );

	$wp_customize->add_setting( 'footer_bar_font_weight' );
	$wp_customize->add_control( 'footer_bar_font_weight', [
		'label'   => __( 'Font Weight', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => rvn_get_customizer_font_weight_options(),
	] );

	$wp_customize->add_setting( 'footer_bar_font_family' );
	$wp_customize->add_control( 'footer_bar_font_family', [
		'label'   => __( 'Font Family', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => rvn_get_customizer_font_family_options(),
	] );

	$wp_customize->add_setting( 'footer_bar_divider_2' );
	$wp_customize->add_control( new RVN_Customizer_Divider_Control( $wp_customize, 'footer_bar_divider_2', [
		'section' => 'footer_bar',
	] ) );

	$wp_customize->add_setting( 'footer_bar_link_color' );
	$wp_customize->add_control( 'footer_bar_link_color', [
		'label'   => __( 'Link Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'footer_bar_link_color_hover' );
	$wp_customize->add_control( 'footer_bar_link_color_hover', [
		'label'   => __( 'Hover: Link Color', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => rvn_get_customizer_color_options(),
	] );

	$wp_customize->add_setting( 'footer_bar_link_font_weight' );
	$wp_customize->add_control( 'footer_bar_link_font_weight', [
		'label'   => __( 'Link Font Weight', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => rvn_get_customizer_font_weight_options(),
	] );

	$wp_customize->add_setting( 'footer_bar_link_text_decoration' );
	$wp_customize->add_control( 'footer_bar_link_text_decoration', [
		'label'   => __( 'Link Text Decoration', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => [
			'none' => 'None',
			'underline' => 'Underline',
		],
	] );

	$wp_customize->add_setting( 'footer_bar_link_text_decoration_hover' );
	$wp_customize->add_control( 'footer_bar_link_text_decoration_hover', [
		'label'   => __( 'Hover: Link Text Decoration', 'rvn' ),
		'type'    => 'select',
		'section' => 'footer_bar',
		'choices' => [
			'none' => 'None',
			'underline' => 'Underline',
		],
	] );
}