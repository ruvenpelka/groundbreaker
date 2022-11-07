<?php
/**
 * Customizer CSS Output
 */



/**
 * Renders the customizer CSS code.
 */

add_action( 'wp_head', 'rvn_render_customizer_css', 7, 0 );
add_action( 'admin_head', 'rvn_render_customizer_css', 1, 0 );

function rvn_render_customizer_css() {
	$tablet_min_width = '640px';
	$desktop_min_width = '1024px';
	?>
	<!-- BEGIN Customizer CSS -->
	<style>
		/* Layout / Site */
		:root {
			--wp--custom--site--bg-color: <?php echo rvn_get_theme_mod( 'site_bg_color' ); ?>;
			--wp--custom--site-container--max-width: <?php echo rvn_get_theme_mod( 'site_container_max_width' ); ?>;
			--wp--custom--site-container--bg-color: <?php echo rvn_get_theme_mod( 'site_container_bg_color' ); ?>;
		}

		/* Layout / Container */
		:root {
			--wp--custom--container--max-width: <?php echo rvn_get_theme_mod( 'container_max_width' ); ?>;
			--wp--custom--container--padding: var(--wp--custom--blocks--horizontal-space--lg);
		}

		/* Layout / Section */
		:root {
			--wp--custom--section--padding: var(--wp--custom--blocks--vertical-space--lg);
		}

		/* Layout / Blocks */
		:root {
			--wp--custom--blocks--block-width: <?php echo rvn_get_theme_mod( 'block_max_width' ); ?>;
			--wp--custom--blocks--block-width--wide: var(--wp--custom--container--max-width);
			--wp--custom--blocks--block-width--full: 100%;
			--wp--custom--blocks--margin-left: auto;
			--wp--custom--blocks--margin-right: auto;
			--wp--custom--blocks--vertical-space: <?php echo rvn_get_theme_mod_handle_value( 'block_vertical_space_mobile', 0 ); ?>;
			--wp--custom--blocks--vertical-space--lg: <?php echo rvn_get_theme_mod_handle_value( 'block_vertical_space_large_mobile', 0 ); ?>;
			--wp--custom--blocks--horizontal-space: <?php echo rvn_get_theme_mod_handle_value( 'block_horizontal_space_mobile', 0 ); ?>;
			--wp--custom--blocks--horizontal-space--lg: <?php echo rvn_get_theme_mod_handle_value( 'block_horizontal_space_large_mobile', 0 ); ?>;
		}
		@media (min-width: <?php echo $tablet_min_width; ?>) { :root {
			--wp--custom--blocks--vertical-space: <?php echo rvn_get_theme_mod_handle_value( 'block_vertical_space_tablet', 0 ); ?>;
			--wp--custom--blocks--vertical-space--lg: <?php echo rvn_get_theme_mod_handle_value( 'block_vertical_space_large_tablet', 0 ); ?>;
			--wp--custom--blocks--horizontal-space: <?php echo rvn_get_theme_mod_handle_value( 'block_horizontal_space_tablet', 0 ); ?>;
			--wp--custom--blocks--horizontal-space--lg: <?php echo rvn_get_theme_mod_handle_value( 'block_horizontal_space_large_tablet', 0 ); ?>;
		} }
		@media (min-width: <?php echo $desktop_min_width; ?>) { :root {
			--wp--custom--blocks--vertical-space: <?php echo rvn_get_theme_mod_handle_value( 'block_vertical_space_desktop', 0 ); ?>;
			--wp--custom--blocks--vertical-space--lg: <?php echo rvn_get_theme_mod_handle_value( 'block_vertical_space_large_desktop', 0 ); ?>;
			--wp--custom--blocks--horizontal-space: <?php echo rvn_get_theme_mod_handle_value( 'block_horizontal_space_desktop', 0 ); ?>;
			--wp--custom--blocks--horizontal-space--lg: <?php echo rvn_get_theme_mod_handle_value( 'block_horizontal_space_large_desktop', 0 ); ?>;
		} }

		/* Fonts / Fonts */
		:root {
			--wp--custom--site--font-family: <?php echo rvn_get_theme_mod( 'font_family' ); ?>;
			--wp--custom--site--font-family--secondary: <?php echo rvn_get_theme_mod( 'secondary_font_family' ); ?>;
			--wp--custom--site--font-family--mono: <?php echo rvn_get_theme_mod( 'mono_font_family' ); ?>;
			--wp--custom--site--font-family--sans: var(--wp--custom--site--font-family);
			--wp--custom--site--font-family--serif: ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;
		}

		/* Elements / Body Text */
		:root {
			--wp--custom--site--text-color: <?php echo rvn_get_theme_mod_handle_value( 'text_color' ); ?>;
			--wp--custom--site--font-weight: <?php echo rvn_get_theme_mod( 'font_weight' ); ?>;
			--wp--custom--site--line-height: <?php echo rvn_get_theme_mod_handle_value( 'line_height_mobile' ); ?>;
			--wp--custom--site--font-size: <?php echo rvn_get_theme_mod_handle_value( 'font_size_mobile' ); ?>;
		}
		@media (min-width: <?php echo $tablet_min_width; ?>) { :root {
			--wp--custom--site--line-height: <?php echo rvn_get_theme_mod_handle_value( 'line_height_tablet' ); ?>;
			--wp--custom--site--font-size: <?php echo rvn_get_theme_mod_handle_value( 'font_size_tablet' ); ?>;
		} }
		@media (min-width: <?php echo $desktop_min_width; ?>) { :root {
			--wp--custom--site--line-height: <?php echo rvn_get_theme_mod_handle_value( 'line_height_desktop' ); ?>;
			--wp--custom--site--font-size: <?php echo rvn_get_theme_mod_handle_value( 'font_size_desktop' ); ?>;
		} }

		/* Elements / Headings */
		:root {
			--wp-custom--h1--text-color: <?php echo rvn_get_theme_mod_handle_value( 'h1_color' ); ?>;
			--wp-custom--h1--font-family: <?php echo rvn_get_theme_mod_handle_value( 'h1_font_family' ); ?>;
			--wp-custom--h1--font-weight: <?php echo rvn_get_theme_mod( 'h1_font_weight' ); ?>;
			--wp-custom--h1--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h1_font_size_mobile' ); ?>;
			--wp-custom--h1--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h1_line_height_mobile' ); ?>;
			--wp-custom--h2--text-color: <?php echo rvn_get_theme_mod_handle_value( 'h2_color' ); ?>;
			--wp-custom--h2--font-family: <?php echo rvn_get_theme_mod_handle_value( 'h2_font_family' ); ?>;
			--wp-custom--h2--font-weight: <?php echo rvn_get_theme_mod( 'h2_font_weight' ); ?>;
			--wp-custom--h2--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h2_font_size_mobile' ); ?>;
			--wp-custom--h2--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h2_line_height_mobile' ); ?>;
			--wp-custom--h3--text-color: <?php echo rvn_get_theme_mod_handle_value( 'h3_color' ); ?>;
			--wp-custom--h3--font-family: <?php echo rvn_get_theme_mod_handle_value( 'h3_font_family' ); ?>;
			--wp-custom--h3--font-weight: <?php echo rvn_get_theme_mod( 'h3_font_weight' ); ?>;
			--wp-custom--h3--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h3_font_size_mobile' ); ?>;
			--wp-custom--h3--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h3_line_height_mobile' ); ?>;
			--wp-custom--h4--text-color: <?php echo rvn_get_theme_mod_handle_value( 'h4_color' ); ?>;
			--wp-custom--h4--font-family: <?php echo rvn_get_theme_mod_handle_value( 'h4_font_family' ); ?>;
			--wp-custom--h4--font-weight: <?php echo rvn_get_theme_mod( 'h4_font_weight' ); ?>;
			--wp-custom--h4--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h4_font_size_mobile' ); ?>;
			--wp-custom--h4--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h4_line_height_mobile' ); ?>;
			--wp-custom--h5--text-color: <?php echo rvn_get_theme_mod_handle_value( 'h5_color' ); ?>;
			--wp-custom--h5--font-family: <?php echo rvn_get_theme_mod_handle_value( 'h5_font_family' ); ?>;
			--wp-custom--h5--font-weight: <?php echo rvn_get_theme_mod( 'h5_font_weight' ); ?>;
			--wp-custom--h5--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h5_font_size_mobile' ); ?>;
			--wp-custom--h5--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h5_line_height_mobile' ); ?>;
			--wp-custom--h6--text-color: <?php echo rvn_get_theme_mod_handle_value( 'h6_color' ); ?>;
			--wp-custom--h6--font-family: <?php echo rvn_get_theme_mod_handle_value( 'h6_font_family' ); ?>;
			--wp-custom--h6--font-weight: <?php echo rvn_get_theme_mod( 'h6_font_weight' ); ?>;
			--wp-custom--h6--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h6_font_size_mobile' ); ?>;
			--wp-custom--h6--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h6_line_height_mobile' ); ?>;
		}
		@media (min-width: <?php echo $tablet_min_width; ?>) { :root {
			--wp-custom--h1--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h1_font_size_tablet' ); ?>;
			--wp-custom--h1--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h1_line_height_tablet' ); ?>;
			--wp-custom--h2--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h2_font_size_tablet' ); ?>;
			--wp-custom--h2--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h2_line_height_tablet' ); ?>;
			--wp-custom--h3--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h3_font_size_tablet' ); ?>;
			--wp-custom--h3--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h3_line_height_tablet' ); ?>;
			--wp-custom--h4--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h4_font_size_tablet' ); ?>;
			--wp-custom--h4--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h4_line_height_tablet' ); ?>;
			--wp-custom--h5--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h5_font_size_tablet' ); ?>;
			--wp-custom--h5--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h5_line_height_tablet' ); ?>;
			--wp-custom--h6--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h6_font_size_tablet' ); ?>;
			--wp-custom--h6--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h6_line_height_tablet' ); ?>;
		} }
		@media (min-width: <?php echo $desktop_min_width; ?>) { :root {
			--wp-custom--h1--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h1_font_size_desktop' ); ?>;
			--wp-custom--h1--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h1_line_height_desktop' ); ?>;
			--wp-custom--h2--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h2_font_size_desktop' ); ?>;
			--wp-custom--h2--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h2_line_height_desktop' ); ?>;
			--wp-custom--h3--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h3_font_size_desktop' ); ?>;
			--wp-custom--h3--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h3_line_height_desktop' ); ?>;
			--wp-custom--h4--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h4_font_size_desktop' ); ?>;
			--wp-custom--h4--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h4_line_height_desktop' ); ?>;
			--wp-custom--h5--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h5_font_size_desktop' ); ?>;
			--wp-custom--h5--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h5_line_height_desktop' ); ?>;
			--wp-custom--h6--font-size: <?php echo rvn_get_theme_mod_handle_value( 'h6_font_size_desktop' ); ?>;
			--wp-custom--h6--line-height: <?php echo rvn_get_theme_mod_handle_value( 'h6_line_height_desktop' ); ?>;
		} }

		/* Elements / Links */
		:root {
			--wp--custom--link--color: <?php echo rvn_get_theme_mod_handle_value( 'link_color' ); ?>;
			--wp--custom--link--color--hover: <?php echo rvn_get_theme_mod_handle_value( 'link_color_hover' ); ?>;
			--wp--custom--link--font-weight: <?php echo rvn_get_theme_mod( 'link_font_weight' ); ?>;
			--wp--custom--link--text-decoration: <?php echo rvn_get_theme_mod( 'link_text_decoration' ); ?>;
			--wp--custom--link--text-decoration--hover: <?php echo rvn_get_theme_mod( 'link_text_decoration_hover' ); ?>;
		}

		/* Blocks / Column Block */
		:root {
			--wp-custom--columns--vertical-space: <?php echo rvn_get_theme_mod_handle_value( 'column_block_vertical_space' ); ?>;
			--wp-custom--columns--horizontal-space: <?php echo rvn_get_theme_mod_handle_value( 'column_block_horizontal_space' ); ?>;
		}

		/* Blocks / Separator Block */
		:root {
			--wp--custom--separator--color: <?php echo rvn_get_theme_mod_handle_value( 'separator_block_color' ); ?>;
			--wp--custom--separator--width: <?php echo rvn_get_theme_mod( 'separator_block_max_width' ); ?>;
			--wp--custom--separator--width--wide: <?php echo rvn_get_theme_mod( 'separator_block_max_width_wide' ); ?>;
			--wp--custom--separator--height: <?php echo rvn_get_theme_mod( 'separator_block_height' ); ?>;
		}

		/* Blocks / Buttons Block */
		:root {
			--wp--custom--buttons--color: <?php echo rvn_get_theme_mod_handle_value( 'buttons_block_text_color' ); ?>;
			--wp--custom--buttons--color--hover: <?php echo rvn_get_theme_mod_handle_value( 'buttons_block_text_color_hover' ); ?>;
			--wp--custom--buttons--bg-color: <?php echo rvn_get_theme_mod_handle_value( 'buttons_block_bg_color' ); ?>;
			--wp--custom--buttons--bg-color--hover: <?php echo rvn_get_theme_mod_handle_value( 'buttons_block_bg_color_hover' ); ?>;
			--wp--custom--buttons--border-width: <?php echo rvn_get_theme_mod( 'buttons_block_border_width' ); ?>;
			--wp--custom--buttons--border-radius: <?php echo rvn_get_theme_mod( 'buttons_block_border_radius' ); ?>;
			--wp--custom--buttons--px: <?php echo rvn_get_theme_mod_handle_value( 'buttons_block_horizontal_padding' ); ?>;
			--wp--custom--buttons--py: <?php echo rvn_get_theme_mod_handle_value( 'buttons_block_vertical_padding' ); ?>;
		}

		/* Components / Logo */
		:root {
			--logo--max-width: <?php echo rvn_get_theme_mod( 'logo_max_width_mobile' ); ?>;
		}
		@media (min-width: <?php echo $tablet_min_width; ?>) { :root {
			--logo--max-width: <?php echo rvn_get_theme_mod( 'logo_max_width_tablet' ); ?>;
		} }
		@media (min-width: <?php echo $desktop_min_width; ?>) { :root {
			--logo--max-width: <?php echo rvn_get_theme_mod( 'logo_max_width_desktop' ); ?>;
		} }

		/* Components / Topbar/Header/Navbar */
		<?php
		$header_sections = [
			'topbar' => __( 'Topbar', 'rvn' ),
			'header' => __( 'Header', 'rvn' ),
			'navbar' => __( 'Navbar', 'rvn' ),
		];
		?>
		<?php foreach ( $header_sections as $section_handle => $section_title ) : ?>
			:root {
				--<?php echo $section_handle; ?>--bg-color: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_bg_color" ); ?>;
				--<?php echo $section_handle; ?>--py: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_vertical_padding_mobile" ); ?>;
				--<?php echo $section_handle; ?>--area-gap: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_area_gap" ); ?>;
				--<?php echo $section_handle; ?>--item-gap: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_item_gap" ); ?>;
				--<?php echo $section_handle; ?>--text-color: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_text_color" ); ?>;
				--<?php echo $section_handle; ?>--font-family: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_font_family" ); ?>;
				--<?php echo $section_handle; ?>--font-weight: <?php echo rvn_get_theme_mod( "{$section_handle}_font_weight" ); ?>;
				--<?php echo $section_handle; ?>--font-size: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_font_size_mobile" ); ?>;
				--<?php echo $section_handle; ?>--line-height: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_line_height_mobile" ); ?>;
				--<?php echo $section_handle; ?>--link--color: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_link_color" ); ?>;
				--<?php echo $section_handle; ?>--link--color--hover: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_link_color_hover" ); ?>;
				--<?php echo $section_handle; ?>--link--font-weight: <?php echo rvn_get_theme_mod( "{$section_handle}_link_font_weight" ); ?>;
				--<?php echo $section_handle; ?>--link--text-decoration: <?php echo rvn_get_theme_mod( "{$section_handle}_link_text_decoration" ); ?>;
				--<?php echo $section_handle; ?>--link--text-decoration--hover: <?php echo rvn_get_theme_mod( "{$section_handle}_link_text_decoration_hover" ); ?>;
			}
			@media (min-width: <?php echo $tablet_min_width; ?>) { :root {
				--<?php echo $section_handle; ?>--py: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_vertical_padding_tablet" ); ?>;
				--<?php echo $section_handle; ?>--font-size: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_font_size_tablet" ); ?>;
				--<?php echo $section_handle; ?>--line-height: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_line_height_tablet" ); ?>;
			} }
			@media (min-width: <?php echo $desktop_min_width; ?>) { :root {
				--<?php echo $section_handle; ?>--py: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_vertical_padding_desktop" ); ?>;
				--<?php echo $section_handle; ?>--font-size: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_font_size_desktop" ); ?>;
				--<?php echo $section_handle; ?>--line-height: <?php echo rvn_get_theme_mod_handle_value( "{$section_handle}_line_height_desktop" ); ?>;
			} }
		<?php endforeach; ?>

		/* Components / Sidebar */
		:root {
			--sidebar--text-color: <?php echo rvn_get_theme_mod_handle_value( 'sidebar_text_color' ); ?>;
			--sidebar--bg-color: <?php echo rvn_get_theme_mod_handle_value( 'sidebar_bg_color' ); ?>;
			--sidebar--border-color: <?php echo rvn_get_theme_mod_handle_value( 'sidebar_border_color' ); ?>;
			--sidebar--border-width: <?php echo rvn_get_theme_mod( 'sidebar_border_width' ); ?>;
			--sidebar--font-size: <?php echo rvn_get_theme_mod_handle_value( 'sidebar_font_size' ); ?>;
			--sidebar--line-height: <?php echo rvn_get_theme_mod_handle_value( 'sidebar_line_height' ); ?>;
			--sidebar--py: <?php echo rvn_get_theme_mod_handle_value( 'sidebar_vertical_padding_mobile' ); ?>;
			--sidebar--px: <?php echo rvn_get_theme_mod_handle_value( 'sidebar_horizontal_padding' ); ?>;
			--sidebar--widget--py: <?php echo rvn_get_theme_mod_handle_value( 'sidebar_widget_padding' ); ?>;
			--sidebar--heading--color: <?php echo rvn_get_theme_mod_handle_value( 'sidebar_heading_color' ); ?>;
			--sidebar--heading--text-transform: <?php echo rvn_get_theme_mod( 'sidebar_heading_text_transform' ); ?>;
			--sidebar--heading--mb: <?php echo rvn_get_theme_mod_handle_value( 'sidebar_heading_bottom_margin' ); ?>;
			--sidebar--link--color: <?php echo rvn_get_theme_mod_handle_value( 'sidebar_link_color' ); ?>;
			--sidebar--link--color--hover: <?php echo rvn_get_theme_mod_handle_value( 'sidebar_link_color_hover' ); ?>;
			--sidebar--link--font-weight: <?php echo rvn_get_theme_mod( 'sidebar_link_font_weight' ); ?>;
			--sidebar--link--text-decoration: <?php echo rvn_get_theme_mod( 'sidebar_link_text_decoration' ); ?>;
			--sidebar--link--text-decoration--hover: <?php echo rvn_get_theme_mod( 'sidebar_link_text_decoration_hover' ); ?>;
		}
		@media (min-width: <?php echo $tablet_min_width; ?>) { :root {
			--sidebar--py: <?php echo rvn_get_theme_mod_handle_value( 'sidebar_vertical_padding_tablet' ); ?>;
		} }
		@media (min-width: <?php echo $desktop_min_width; ?>) { :root {
			--sidebar--py: <?php echo rvn_get_theme_mod_handle_value( 'sidebar_vertical_padding_desktop' ); ?>;
		} }

		/* Components / Navigation */
		:root {
			--nav--item--py: <?php echo rvn_get_theme_mod_handle_value( 'nav_item_vertical_padding' ); ?>;
			--nav--item--px: <?php echo rvn_get_theme_mod_handle_value( 'nav_item_horizontal_padding' ); ?>;
			--nav--item--font-size: <?php echo rvn_get_theme_mod_handle_value( 'nav_item_font_size' ); ?>;
			--nav--item--line-height: <?php echo rvn_get_theme_mod_handle_value( 'nav_item_line_height' ); ?>;
			--nav--item--font-weight: <?php echo rvn_get_theme_mod( 'nav_item_font_weight' ); ?>;
			--nav--item--font-family: <?php echo rvn_get_theme_mod_handle_value( 'nav_item_font_family' ); ?>;
			--nav--item--text-transform: <?php echo rvn_get_theme_mod( 'nav_item_text_transform' ); ?>;
			--nav--item--color: <?php echo rvn_get_theme_mod_handle_value( 'nav_item_color' ); ?>;
			--nav--item--color--hover: <?php echo rvn_get_theme_mod_handle_value( 'nav_item_color_hover' ); ?>;
			--nav--submenu--width: <?php echo rvn_get_theme_mod( 'nav_submenu_width' ); ?>;
			--nav--submenu--bg-color: <?php echo rvn_get_theme_mod_handle_value( 'nav_submenu_bg_color' ); ?>;
			--nav--submenu--py: <?php echo rvn_get_theme_mod_handle_value( 'nav_submenu_vertical_padding' ); ?>;
			--nav--submenu--item--font-size: <?php echo rvn_get_theme_mod_handle_value( 'nav_submenu_item_font_size' ); ?>;
			--nav--submenu--item--line-height: <?php echo rvn_get_theme_mod_handle_value( 'nav_submenu_item_line_height' ); ?>;
			--nav--submenu--item--font-weight: <?php echo rvn_get_theme_mod( 'nav_submenu_item_font_weight' ); ?>;
			--nav--submenu--item--font-family: <?php echo rvn_get_theme_mod_handle_value( 'nav_submenu_item_font_family' ); ?>;
			--nav--submenu--item--text-transform: <?php echo rvn_get_theme_mod( 'nav_submenu_item_text_transform' ); ?>;
			--nav--submenu--item--color: <?php echo rvn_get_theme_mod_handle_value( 'nav_submenu_item_color' ); ?>;
			--nav--submenu--item--color--hover: <?php echo rvn_get_theme_mod_handle_value( 'nav_submenu_item_color_hover' ); ?>;
			--nav--submenu--item--py: <?php echo rvn_get_theme_mod_handle_value( 'nav_submenu_item_vertical_padding' ); ?>;
			--nav--submenu--item--px: <?php echo rvn_get_theme_mod_handle_value( 'nav_submenu_item_horizontal_padding' ); ?>;
		}

		/* Components / Stacknav */
		:root {
			--stacknav--item--px: <?php echo rvn_get_theme_mod_handle_value( 'stacknav_item_horizontal_padding' ); ?>;
			--stacknav--item--py: <?php echo rvn_get_theme_mod_handle_value( 'stacknav_item_vertical_padding' ); ?>;
			--stacknav--item--font-weight: <?php echo rvn_get_theme_mod( 'stacknav_item_font_weight' ); ?>;
			--stacknav--item--color: <?php echo rvn_get_theme_mod_handle_value( 'stacknav_item_color' ); ?>;
			--stacknav--item--bg-color: <?php echo rvn_get_theme_mod_handle_value( 'stacknav_item_bg_color' ); ?>;
			--stacknav--item--color--active: <?php echo rvn_get_theme_mod_handle_value( 'stacknav_item_color_active' ); ?>;
			--stacknav--item--bg-color--active: <?php echo rvn_get_theme_mod_handle_value( 'stacknav_item_bg_color_active' ); ?>;
			--stacknav--item--border-color: <?php echo rvn_get_theme_mod_handle_value( 'stacknav_item_border_color' ); ?>;
			--stacknav--item--border-width: <?php echo rvn_get_theme_mod( 'stacknav_item_border_width' ); ?>;
			--stacknav--sub-item--px: <?php echo rvn_get_theme_mod_handle_value( 'stacknav_sub_item_horizontal_padding' ); ?>;
			--stacknav--sub-item--py: <?php echo rvn_get_theme_mod_handle_value( 'stacknav_sub_item_vertical_padding' ); ?>;
			--stacknav--sub-item--border-color: <?php echo rvn_get_theme_mod_handle_value( 'stacknav_item_border_color' ); ?>;
			--stacknav--sub-item--border-width: 0px;
			--stacknav--subsub-item--border-color: var(--stacknav--sub-item--border-color);
			--stacknav--subsub-item--px: <?php echo rvn_get_theme_mod_handle_value( 'stacknav_sub_sub_item_horizontal_padding' ); ?>;
		}

		/* Components / Footer Widget Area */
		:root {
			--footer-widget-area--bg-color: <?php echo rvn_get_theme_mod_handle_value( 'footer_widget_area_bg_color' ); ?>;
			--footer-widget-area--py: <?php echo rvn_get_theme_mod_handle_value( 'footer_widget_area_vertical_padding_mobile' ); ?>;
			--footer-widget-area--text-color: <?php echo rvn_get_theme_mod_handle_value( 'footer_widget_area_text_color' ); ?>;
			--footer-widget-area--font-size: <?php echo rvn_get_theme_mod_handle_value( 'footer_widget_area_font_size' ); ?>;
			--footer-widget-area--line-height: <?php echo rvn_get_theme_mod_handle_value( 'footer_widget_area_line_height' ); ?>;
			--footer-widget-area--font-weight: <?php echo rvn_get_theme_mod( 'footer_widget_area_font_weight' ); ?>;
			--footer-widget-area--heading--color: <?php echo rvn_get_theme_mod_handle_value( 'footer_widget_area_heading_color' ); ?>;
			--footer-widget-area--heading--mb: <?php echo rvn_get_theme_mod_handle_value( 'footer_widget_area_heading_bottom_margin' ); ?>;
			--footer-widget-area--link--color: <?php echo rvn_get_theme_mod_handle_value( 'footer_widget_area_link_color' ); ?>;
			--footer-widget-area--link--color--hover: <?php echo rvn_get_theme_mod_handle_value( 'footer_widget_area_link_color_hover' ); ?>;
			--footer-widget-area--link--font-weight: <?php echo rvn_get_theme_mod( 'footer_widget_area_link_font_weight' ); ?>;
			--footer-widget-area--link--text-decoration: <?php echo rvn_get_theme_mod( 'footer_widget_area_link_text_decoration' ); ?>;
			--footer-widget-area--link--text-decoration--hover: <?php echo rvn_get_theme_mod( 'footer_widget_area_link_text_decoration_hover' ); ?>;
			--footer-widget-area--nav-item--py: <?php echo rvn_get_theme_mod_handle_value( 'footer_widget_area_nav_item_vertical_padding' ); ?>;
			--footer-widget-area--nav-item--color: <?php echo rvn_get_theme_mod_handle_value( 'footer_widget_area_nav_item_color' ); ?>;
			--footer-widget-area--nav-item--color--hover: <?php echo rvn_get_theme_mod_handle_value( 'footer_widget_area_nav_item_color_hover' ); ?>;
			--footer-widget-area--nav-item--font-weight: <?php echo rvn_get_theme_mod( 'footer_widget_area_nav_item_font_weight' ); ?>;
			--footer-widget-area--nav-item--text-decoration: <?php echo rvn_get_theme_mod( 'footer_widget_area_nav_item_text_decoration' ); ?>;
			--footer-widget-area--nav-item--text-decoration--hover: <?php echo rvn_get_theme_mod( 'footer_widget_area_nav_item_text_decoration_hover' ); ?>;
		}
		@media (min-width: <?php echo $tablet_min_width; ?>) { :root {
			--footer-widget-area--py: <?php echo rvn_get_theme_mod_handle_value( 'footer_widget_area_vertical_padding_tablet' ); ?>;
		} }
		@media (min-width: <?php echo $desktop_min_width; ?>) { :root {
			--footer-widget-area--py: <?php echo rvn_get_theme_mod_handle_value( 'footer_widget_area_vertical_padding_desktop' ); ?>;
		} }

		/* Components / Footer Bar */
		:root {
			--footer-bar--bg-color: <?php echo rvn_get_theme_mod_handle_value( 'footer_bar_bg_color' ); ?>;
			--footer-bar--text-align: <?php echo rvn_get_theme_mod( 'footer_bar_text_align' ); ?>;
			--footer-bar--py: <?php echo rvn_get_theme_mod_handle_value( 'footer_bar_vertical_padding_mobile' ); ?>;
			--footer-bar--text-color: <?php echo rvn_get_theme_mod_handle_value( 'footer_bar_text_color' ); ?>;
			--footer-bar--font-size: <?php echo rvn_get_theme_mod_handle_value( 'footer_bar_font_size' ); ?>;
			--footer-bar--line-height: <?php echo rvn_get_theme_mod_handle_value( 'footer_bar_line_height' ); ?>;
			--footer-bar--font-weight: <?php echo rvn_get_theme_mod( 'footer_bar_font_weight' ); ?>;
			--footer-bar--font-family: <?php echo rvn_get_theme_mod_handle_value( 'footer_bar_font_family' ); ?>;
			--footer-bar--link--color: <?php echo rvn_get_theme_mod_handle_value( 'footer_bar_link_color' ); ?>;
			--footer-bar--link--color--hover: <?php echo rvn_get_theme_mod_handle_value( 'footer_bar_link_color_hover' ); ?>;
			--footer-bar--link--font-weight: <?php echo rvn_get_theme_mod( 'footer_bar_link_font_weight' ); ?>;
			--footer-bar--link--text-decoration: <?php echo rvn_get_theme_mod( 'footer_bar_link_text_decoration' ); ?>;
			--footer-bar--link--text-decoration--hover: <?php echo rvn_get_theme_mod( 'footer_bar_link_text_decoration_hover' ); ?>;
		}
		@media (min-width: <?php echo $tablet_min_width; ?>) { :root {
			--footer-bar--py: <?php echo rvn_get_theme_mod_handle_value( 'footer_bar_vertical_padding_tablet' ); ?>;
		} }
		@media (min-width: <?php echo $desktop_min_width; ?>) { :root {
			--footer-bar--py: <?php echo rvn_get_theme_mod_handle_value( 'footer_bar_vertical_padding_desktop' ); ?>;
		} }

		/* UI Settings / Color Settings */
		:root {
			--wp--custom--color--overlay: rgba(0, 0, 0, .7);
			--wp--custom--color--black: <?php echo rvn_get_theme_mod( 'color_black' ); ?>;
			--wp--custom--color--white: <?php echo rvn_get_theme_mod( 'color_white' ); ?>;
			--wp--custom--color--gray-50: <?php echo rvn_get_theme_mod( 'color_gray_50' ); ?>;
			--wp--custom--color--gray-100: <?php echo rvn_get_theme_mod( 'color_gray_100' ); ?>;
			--wp--custom--color--gray-200: <?php echo rvn_get_theme_mod( 'color_gray_200' ); ?>;
			--wp--custom--color--gray-300: <?php echo rvn_get_theme_mod( 'color_gray_300' ); ?>;
			--wp--custom--color--gray-400: <?php echo rvn_get_theme_mod( 'color_gray_400' ); ?>;
			--wp--custom--color--gray-500: <?php echo rvn_get_theme_mod( 'color_gray_500' ); ?>;
			--wp--custom--color--gray-600: <?php echo rvn_get_theme_mod( 'color_gray_600' ); ?>;
			--wp--custom--color--gray-700: <?php echo rvn_get_theme_mod( 'color_gray_700' ); ?>;
			--wp--custom--color--gray-800: <?php echo rvn_get_theme_mod( 'color_gray_800' ); ?>;
			--wp--custom--color--gray-900: <?php echo rvn_get_theme_mod( 'color_gray_900' ); ?>;
			--wp--custom--color--primary-50: <?php echo rvn_get_theme_mod( 'color_primary_50' ); ?>;
			--wp--custom--color--primary-100: <?php echo rvn_get_theme_mod( 'color_primary_100' ); ?>;
			--wp--custom--color--primary-200: <?php echo rvn_get_theme_mod( 'color_primary_200' ); ?>;
			--wp--custom--color--primary-300: <?php echo rvn_get_theme_mod( 'color_primary_300' ); ?>;
			--wp--custom--color--primary-400: <?php echo rvn_get_theme_mod( 'color_primary_400' ); ?>;
			--wp--custom--color--primary-500: <?php echo rvn_get_theme_mod( 'color_primary_500' ); ?>;
			--wp--custom--color--primary-600: <?php echo rvn_get_theme_mod( 'color_primary_600' ); ?>;
			--wp--custom--color--primary-700: <?php echo rvn_get_theme_mod( 'color_primary_700' ); ?>;
			--wp--custom--color--primary-800: <?php echo rvn_get_theme_mod( 'color_primary_800' ); ?>;
			--wp--custom--color--primary-900: <?php echo rvn_get_theme_mod( 'color_primary_900' ); ?>;
			--wp--custom--color--secondary-50: <?php echo rvn_get_theme_mod( 'color_secondary_50' ); ?>;
			--wp--custom--color--secondary-100: <?php echo rvn_get_theme_mod( 'color_secondary_100' ); ?>;
			--wp--custom--color--secondary-200: <?php echo rvn_get_theme_mod( 'color_secondary_200' ); ?>;
			--wp--custom--color--secondary-300: <?php echo rvn_get_theme_mod( 'color_secondary_300' ); ?>;
			--wp--custom--color--secondary-400: <?php echo rvn_get_theme_mod( 'color_secondary_400' ); ?>;
			--wp--custom--color--secondary-500: <?php echo rvn_get_theme_mod( 'color_secondary_500' ); ?>;
			--wp--custom--color--secondary-600: <?php echo rvn_get_theme_mod( 'color_secondary_600' ); ?>;
			--wp--custom--color--secondary-700: <?php echo rvn_get_theme_mod( 'color_secondary_700' ); ?>;
			--wp--custom--color--secondary-800: <?php echo rvn_get_theme_mod( 'color_secondary_800' ); ?>;
			--wp--custom--color--secondary-900: <?php echo rvn_get_theme_mod( 'color_secondary_900' ); ?>;
		}

		/* UI Settings / Space Settings */
		:root {
			--wp--custom--space--px: <?php echo rvn_get_theme_mod( 'space_px' ); ?>;
			--wp--custom--space--0-5: <?php echo rvn_get_theme_mod( 'space_0-5' ); ?>;
			--wp--custom--space--1: <?php echo rvn_get_theme_mod( 'space_1' ); ?>;
			--wp--custom--space--1-5: <?php echo rvn_get_theme_mod( 'space_1-5' ); ?>;
			--wp--custom--space--2: <?php echo rvn_get_theme_mod( 'space_2' ); ?>;
			--wp--custom--space--2-5: <?php echo rvn_get_theme_mod( 'space_2-5' ); ?>;
			--wp--custom--space--3: <?php echo rvn_get_theme_mod( 'space_3' ); ?>;
			--wp--custom--space--3-5: <?php echo rvn_get_theme_mod( 'space_3-5' ); ?>;
			--wp--custom--space--4: <?php echo rvn_get_theme_mod( 'space_4' ); ?>;
			--wp--custom--space--5: <?php echo rvn_get_theme_mod( 'space_5' ); ?>;
			--wp--custom--space--6: <?php echo rvn_get_theme_mod( 'space_6' ); ?>;
			--wp--custom--space--7: <?php echo rvn_get_theme_mod( 'space_7' ); ?>;
			--wp--custom--space--8: <?php echo rvn_get_theme_mod( 'space_8' ); ?>;
			--wp--custom--space--9: <?php echo rvn_get_theme_mod( 'space_9' ); ?>;
			--wp--custom--space--10: <?php echo rvn_get_theme_mod( 'space_10' ); ?>;
			--wp--custom--space--11: <?php echo rvn_get_theme_mod( 'space_11' ); ?>;
			--wp--custom--space--12: <?php echo rvn_get_theme_mod( 'space_12' ); ?>;
			--wp--custom--space--14: <?php echo rvn_get_theme_mod( 'space_14' ); ?>;
			--wp--custom--space--16: <?php echo rvn_get_theme_mod( 'space_16' ); ?>;
			--wp--custom--space--20: <?php echo rvn_get_theme_mod( 'space_20' ); ?>;
			--wp--custom--space--24: <?php echo rvn_get_theme_mod( 'space_24' ); ?>;
			--wp--custom--space--28: <?php echo rvn_get_theme_mod( 'space_28' ); ?>;
			--wp--custom--space--32: <?php echo rvn_get_theme_mod( 'space_32' ); ?>;
			--wp--custom--space--36: <?php echo rvn_get_theme_mod( 'space_36' ); ?>;
			--wp--custom--space--40: <?php echo rvn_get_theme_mod( 'space_40' ); ?>;
			--wp--custom--space--44: <?php echo rvn_get_theme_mod( 'space_44' ); ?>;
			--wp--custom--space--48: <?php echo rvn_get_theme_mod( 'space_48' ); ?>;
			--wp--custom--space--52: <?php echo rvn_get_theme_mod( 'space_52' ); ?>;
			--wp--custom--space--56: <?php echo rvn_get_theme_mod( 'space_56' ); ?>;
			--wp--custom--space--60: <?php echo rvn_get_theme_mod( 'space_60' ); ?>;
			--wp--custom--space--64: <?php echo rvn_get_theme_mod( 'space_64' ); ?>;
			--wp--custom--space--72: <?php echo rvn_get_theme_mod( 'space_72' ); ?>;
			--wp--custom--space--80: <?php echo rvn_get_theme_mod( 'space_80' ); ?>;
			--wp--custom--space--96: <?php echo rvn_get_theme_mod( 'space_96' ); ?>;
		}

		/* UI Settings / Font Size Settings */
		:root {
			--wp--custom--font-size--xs: <?php echo rvn_get_theme_mod( 'font_size_xs' ); ?>;
			--wp--custom--font-size--sm: <?php echo rvn_get_theme_mod( 'font_size_sm' ); ?>;
			--wp--custom--font-size--base: <?php echo rvn_get_theme_mod( 'font_size_base' ); ?>;
			--wp--custom--font-size--lg: <?php echo rvn_get_theme_mod( 'font_size_lg' ); ?>;
			--wp--custom--font-size--xl: <?php echo rvn_get_theme_mod( 'font_size_xl' ); ?>;
			--wp--custom--font-size--2xl: <?php echo rvn_get_theme_mod( 'font_size_2xl' ); ?>;
			--wp--custom--font-size--3xl: <?php echo rvn_get_theme_mod( 'font_size_3xl' ); ?>;
			--wp--custom--font-size--4xl: <?php echo rvn_get_theme_mod( 'font_size_4xl' ); ?>;
			--wp--custom--font-size--5xl: <?php echo rvn_get_theme_mod( 'font_size_5xl' ); ?>;
			--wp--custom--font-size--6xl: <?php echo rvn_get_theme_mod( 'font_size_6xl' ); ?>;
			--wp--custom--font-size--7xl: <?php echo rvn_get_theme_mod( 'font_size_7xl' ); ?>;
			--wp--custom--font-size--8xl: <?php echo rvn_get_theme_mod( 'font_size_8xl' ); ?>;
			--wp--custom--font-size--9xl: <?php echo rvn_get_theme_mod( 'font_size_9xl' ); ?>;
		}

		/* UI Settings / Line Height */
		:root {
			--wp--custom--line-height--3: .75rem;
			--wp--custom--line-height--4: 1rem;
			--wp--custom--line-height--5: 1.25rem;
			--wp--custom--line-height--6: 1.5rem;
			--wp--custom--line-height--7: 1.75rem;
			--wp--custom--line-height--8: 2rem;
			--wp--custom--line-height--9: 2.25rem;
			--wp--custom--line-height--10: 2.5rem;
			--wp--custom--line-height--none: <?php echo rvn_get_theme_mod( 'line_height_none' ); ?>;
			--wp--custom--line-height--tight: <?php echo rvn_get_theme_mod( 'line_height_tight' ); ?>;
			--wp--custom--line-height--snug: <?php echo rvn_get_theme_mod( 'line_height_snug' ); ?>;
			--wp--custom--line-height--normal: <?php echo rvn_get_theme_mod( 'line_height_normal' ); ?>;
			--wp--custom--line-height--relaxed: <?php echo rvn_get_theme_mod( 'line_height_relaxed' ); ?>;
			--wp--custom--line-height--loose: <?php echo rvn_get_theme_mod( 'line_height_loose' ); ?>;
		}
	</style>
	<!-- END Customizer CSS -->
	<?php
}