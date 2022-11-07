<?php
/**
 * Customizer Functions
 */



/**
 * Add font embed code from Customizer to frontend and block editor.
 */

add_action( 'wp_head', 'rvn_add_font_embed_code' );
add_action( 'admin_head', 'rvn_add_font_embed_code' );

function rvn_add_font_embed_code() {
	// Stop if we're in admin but not in the block editor
	if ( is_admin() ) {
//	if ( is_admin() && ! get_current_screen()->is_block_editor() ) {
		return;
	}

	$font_embed_code = rvn_get_theme_mod( 'font_embed_code' );
	?>
	<?php if ( $font_embed_code ) : ?>
		<!-- Google Fonts -->
		<?php echo $font_embed_code; ?>
		<!-- END Google Fonts -->
	<?php endif; ?>
	<?php
}



/**
 * Enqueues scripts for the Customizer itself.
 * E.g. to enhance controls.
 */

add_action( 'customize_controls_print_footer_scripts', 'rvn_enqueue_customizer_scripts' );

function rvn_enqueue_customizer_scripts() {
	// Enqueue customizer script
	wp_enqueue_script(
		'rvn_customizer',
		get_theme_file_uri( 'inc/admin/customizer/customizer.js' ),
		array( 'jquery' ),
		filemtime( get_theme_file_path( 'inc/admin/customizer/customizer.js' ) ),
		false
	);
}



/**
 * Enqueues styles for the customizer itself.
 */

add_action( 'customize_controls_enqueue_scripts', 'rvn_enqueue_customizer_styles' );

function rvn_enqueue_customizer_styles() {
	wp_enqueue_style(
		'rvn_customizer',
		get_theme_file_uri( 'inc/admin/customizer/customizer.css' ),
		false,
		filemtime( get_theme_file_path( 'inc/admin/customizer/customizer.css' ) ),
		false
	);
}



/**
 * Use this function if you know that a theme_mod will return the name of
 * another theme_mod, which value you need.
 *
 * E.g. When the user picks a predefined color from a select field in the
 * customizer, its value equals the name of the theme_mod that holds the color
 * code. For example, if "Gray 500" is picked, the value is "color_gray_500",
 * which is the name of theme_mod that holds the color code for "Gray 500".
 */

function rvn_get_theme_mod_handle_value( $name, $default = false ) {
	$theme_mod_handle = rvn_get_theme_mod( $name );

	// If the $theme_mod_handle is associated with a CSS variable, return the
	// CSS variable.
	$css_vars = rvn_get_theme_mod_css_vars();
	if ( is_array( $css_vars ) && isset( $css_vars[$theme_mod_handle] ) ) {
		return "var({$css_vars[$theme_mod_handle]})";
	}

	// Otherwise, return theme_mod value with the $theme_mod_handle name.
	$theme_mod = rvn_get_theme_mod( $theme_mod_handle, $default );
	if ( $theme_mod !== false ) {
		return $theme_mod;
	}

	// If the theme_mod value with the $theme_mod_handle name if empty or false,
	// return $default.
	return $default;
}



/**
 * Add theme default values to the customizer settings.
 *
 * This filter automatically sets the 'default' argument of the method's
 * WP_Customize_Manager::add_setting() $args parameter if it is not already set
 * when the method is invoked.
 */

add_filter( 'customize_dynamic_setting_args', 'rvn_set_customizer_settings_default_arg', 10, 2 );

function rvn_set_customizer_settings_default_arg( $args, $id ) {
	if ( ! isset( $args['default'] ) ) {
		$default = rvn_get_theme_mod_default( $id );
		if ( false !== $default ) {
			$args['default'] = apply_filters( "rvn_customizer_{$id}_setting_default_arg", $default );
		}
	}

	return $args;
}



/**
 * Returns an array with the theme_mod name as key and an associated CSS
 * variable as value.
 */

function rvn_get_theme_mod_css_vars() {
	return apply_filters( 'rvn_theme_mod_css_vars', [
		'font_family' => '--wp--custom--site--font-family',
		'secondary_font_family' => '--wp--custom--site--font-family--secondary',
		'font_size_xs' => '--wp--custom--font-size--xs',
		'font_size_sm' => '--wp--custom--font-size--sm',
		'font_size_base' => '--wp--custom--font-size--base',
		'font_size_lg' => '--wp--custom--font-size--lg',
		'font_size_xl' => '--wp--custom--font-size--xl',
		'font_size_2xl' => '--wp--custom--font-size--2xl',
		'font_size_3xl' => '--wp--custom--font-size--3xl',
		'font_size_4xl' => '--wp--custom--font-size--4xl',
		'font_size_5xl' => '--wp--custom--font-size--5xl',
		'font_size_6xl' => '--wp--custom--font-size--6xl',
		'font_size_7xl' => '--wp--custom--font-size--7xl',
		'font_size_8xl' => '--wp--custom--font-size--8xl',
		'font_size_9xl' => '--wp--custom--font-size--9xl',
		'line_height_none' => '--wp--custom--line-height--none',
		'line_height_tight' => '--wp--custom--line-height--tight',
		'line_height_snug' => '--wp--custom--line-height--snug',
		'line_height_normal' => '--wp--custom--line-height--normal',
		'line_height_relaxed' => '--wp--custom--line-height--relaxed',
		'line_height_loose' => '--wp--custom--line-height--loose',
//		'color_overlay' => __( 'Overlay', 'rvn' ),
		'color_black' => '--wp--custom--color--black',
		'color_white' => '--wp--custom--color--white',
		'color_gray_50' => '--wp--custom--color--gray-50',
		'color_gray_100' => '--wp--custom--color--gray-100',
		'color_gray_200' => '--wp--custom--color--gray-200',
		'color_gray_300' => '--wp--custom--color--gray-300',
		'color_gray_400' => '--wp--custom--color--gray-400',
		'color_gray_500' => '--wp--custom--color--gray-500',
		'color_gray_600' => '--wp--custom--color--gray-600',
		'color_gray_700' => '--wp--custom--color--gray-700',
		'color_gray_800' => '--wp--custom--color--gray-800',
		'color_gray_900' => '--wp--custom--color--gray-900',
		'color_primary_50' => '--wp--custom--color--primary-50',
		'color_primary_100' => '--wp--custom--color--primary-100',
		'color_primary_200' => '--wp--custom--color--primary-200',
		'color_primary_300' => '--wp--custom--color--primary-300',
		'color_primary_400' => '--wp--custom--color--primary-400',
		'color_primary_500' => '--wp--custom--color--primary-500',
		'color_primary_600' => '--wp--custom--color--primary-600',
		'color_primary_700' => '--wp--custom--color--primary-700',
		'color_primary_800' => '--wp--custom--color--primary-800',
		'color_primary_900' => '--wp--custom--color--primary-900',
		'color_secondary_50' => '--wp--custom--color--secondary-50',
		'color_secondary_100' => '--wp--custom--color--secondary-100',
		'color_secondary_200' => '--wp--custom--color--secondary-200',
		'color_secondary_300' => '--wp--custom--color--secondary-300',
		'color_secondary_400' => '--wp--custom--color--secondary-400',
		'color_secondary_500' => '--wp--custom--color--secondary-500',
		'color_secondary_600' => '--wp--custom--color--secondary-600',
		'color_secondary_700' => '--wp--custom--color--secondary-700',
		'color_secondary_800' => '--wp--custom--color--secondary-800',
		'color_secondary_900' => '--wp--custom--color--secondary-900',
		'space_px' => '--wp--custom--space--px',
		'space_0-5' => '--wp--custom--space--0-5',
		'space_1' => '--wp--custom--space--1',
		'space_1-5' => '--wp--custom--space--1-5',
		'space_2' => '--wp--custom--space--2',
		'space_2-5' => '--wp--custom--space--2-5',
		'space_3' => '--wp--custom--space--3',
		'space_3-5' => '--wp--custom--space--3-5',
		'space_4' => '--wp--custom--space--4',
		'space_5' => '--wp--custom--space--5',
		'space_6' => '--wp--custom--space--6',
		'space_7' => '--wp--custom--space--7',
		'space_8' => '--wp--custom--space--8',
		'space_9' => '--wp--custom--space--9',
		'space_10' => '--wp--custom--space--10',
		'space_11' => '--wp--custom--space--11',
		'space_12' => '--wp--custom--space--12',
		'space_14' => '--wp--custom--space--14',
		'space_16' => '--wp--custom--space--16',
		'space_20' => '--wp--custom--space--20',
		'space_24' => '--wp--custom--space--24',
		'space_28' => '--wp--custom--space--28',
		'space_32' => '--wp--custom--space--32',
		'space_36' => '--wp--custom--space--36',
		'space_40' => '--wp--custom--space--40',
		'space_44' => '--wp--custom--space--44',
		'space_48' => '--wp--custom--space--48',
		'space_52' => '--wp--custom--space--52',
		'space_56' => '--wp--custom--space--56',
		'space_60' => '--wp--custom--space--60',
		'space_64' => '--wp--custom--space--64',
		'space_72' => '--wp--custom--space--72',
		'space_80' => '--wp--custom--space--80',
		'space_96' => '--wp--custom--space--96',
	] );
}



/**
 * Returns an array of font size options for a customizer select control.
 */

function rvn_get_customizer_font_size_options() {
	return apply_filters( 'rvn_customizer_font_size_options', [
		'font_size_xs' => __( 'Extra Small', 'rvn' ),
		'font_size_sm' => __( 'Small', 'rvn' ),
		'font_size_base' => __( 'Base', 'rvn' ),
		'font_size_lg' => __( 'Large', 'rvn' ),
		'font_size_xl' => __( 'XL', 'rvn' ),
		'font_size_2xl' => __( '2XL', 'rvn' ),
		'font_size_3xl' => __( '3XL', 'rvn' ),
		'font_size_4xl' => __( '4XL', 'rvn' ),
		'font_size_5xl' => __( '5XL', 'rvn' ),
		'font_size_6xl' => __( '6XL', 'rvn' ),
		'font_size_7xl' => __( '7XL', 'rvn' ),
		'font_size_8xl' => __( '8XL', 'rvn' ),
		'font_size_9xl' => __( '9XL', 'rvn' ),
	] );
}



/**
 * Returns an array of font weight options for a customizer select control.
 */

function rvn_get_customizer_font_weight_options() {
	return apply_filters( 'rvn_customizer_font_weight_options', [
		'100' => __( 'Thin', 'rvn' ),
		'200' => __( 'Extra Light', 'rvn' ),
		'300' => __( 'Light', 'rvn' ),
		'400' => __( 'Normal', 'rvn' ),
		'500' => __( 'Medium', 'rvn' ),
		'600' => __( 'Semibold', 'rvn' ),
		'700' => __( 'Bold', 'rvn' ),
		'800' => __( 'Extra Bold', 'rvn' ),
		'900' => __( 'Black', 'rvn' ),
	] );
}



/**
 * Returns an array of font family options for a customizer select control.
 */

function rvn_get_customizer_font_family_options() {
	return apply_filters( 'rvn_customizer_font_family_options', [
		'font_family' => __( 'Inherit', 'rvn' ),
		'secondary_font_family' => __( 'Secondary Font', 'rvn' ),
	] );
}



/**
 * Returns an array of font style options for a customizer select control.
 */

function rvn_get_customizer_font_style_options() {
	return apply_filters( 'rvn_customizer_font_style_options', [
		'normal' => __( 'Normal', 'rvn' ),
		'italic' => __( 'Secondary Font', 'rvn' ),
	] );
}



/**
 * Returns an array of text transform options for a customizer select control.
 */

function rvn_get_customizer_text_transform_options() {
	return apply_filters( 'rvn_customizer_text_transform_options', [
		'none' => __( 'None', 'rvn' ),
		'uppercase' => __( 'Uppercase', 'rvn' ),
		'capitalize' => __( 'Capitalize', 'rvn' ),
	] );
}



/**
 * Returns an array of font family options for a customizer select control.
 */

function rvn_get_customizer_line_height_options() {
	return apply_filters( 'rvn_customizer_line_height_options', [
		'line_height_none' => __( 'None', 'rvn' ),
		'line_height_tight' => __( 'Tight', 'rvn' ),
		'line_height_snug' => __( 'Snug', 'rvn' ),
		'line_height_normal' => __( 'Normal', 'rvn' ),
		'line_height_relaxed' => __( 'Relaxed', 'rvn' ),
		'line_height_loose' => __( 'Loose', 'rvn' ),
	] );
}



/**
 * Returns an array of color options for a customizer select control.
 */

function rvn_get_customizer_color_options() {
	return apply_filters( 'rvn_customizer_color_options', [
//		'color_overlay' => __( 'Overlay', 'rvn' ),
		'color_transparent' => __( 'Transparent', 'rvn' ),
		'color_black' => __( 'Black', 'rvn' ),
		'color_white' => __( 'White', 'rvn' ),
		'color_gray_50' => __( 'Gray 50', 'rvn' ),
		'color_gray_100' => __( 'Gray 100', 'rvn' ),
		'color_gray_200' => __( 'Gray 200', 'rvn' ),
		'color_gray_300' => __( 'Gray 300', 'rvn' ),
		'color_gray_400' => __( 'Gray 400', 'rvn' ),
		'color_gray_500' => __( 'Gray 500', 'rvn' ),
		'color_gray_600' => __( 'Gray 600', 'rvn' ),
		'color_gray_700' => __( 'Gray 700', 'rvn' ),
		'color_gray_800' => __( 'Gray 800', 'rvn' ),
		'color_gray_900' => __( 'Gray 900', 'rvn' ),
		'color_primary_50' => __( 'Primary 50', 'rvn' ),
		'color_primary_100' => __( 'Primary 100', 'rvn' ),
		'color_primary_200' => __( 'Primary 200', 'rvn' ),
		'color_primary_300' => __( 'Primary 300', 'rvn' ),
		'color_primary_400' => __( 'Primary 400', 'rvn' ),
		'color_primary_500' => __( 'Primary 500', 'rvn' ),
		'color_primary_600' => __( 'Primary 600', 'rvn' ),
		'color_primary_700' => __( 'Primary 700', 'rvn' ),
		'color_primary_800' => __( 'Primary 800', 'rvn' ),
		'color_primary_900' => __( 'Primary 900', 'rvn' ),
		'color_secondary_50' => __( 'Secondary 50', 'rvn' ),
		'color_secondary_100' => __( 'Secondary 100', 'rvn' ),
		'color_secondary_200' => __( 'Secondary 200', 'rvn' ),
		'color_secondary_300' => __( 'Secondary 300', 'rvn' ),
		'color_secondary_400' => __( 'Secondary 400', 'rvn' ),
		'color_secondary_500' => __( 'Secondary 500', 'rvn' ),
		'color_secondary_600' => __( 'Secondary 600', 'rvn' ),
		'color_secondary_700' => __( 'Secondary 700', 'rvn' ),
		'color_secondary_800' => __( 'Secondary 800', 'rvn' ),
		'color_secondary_900' => __( 'Secondary 900', 'rvn' ),
	] );
}



/**
 * Returns an array of space options for a customizer select control.
 */

function rvn_get_customizer_space_options() {
	return apply_filters( 'rvn_customizer_space_options', [
		'space_0' => __( '0', 'rvn' ),
		'space_px' => __( 'px', 'rvn' ),
		'space_0-5' => __( '0.5', 'rvn' ),
		'space_1' => __( '1', 'rvn' ),
		'space_1-5' => __( '1.5', 'rvn' ),
		'space_2' => __( '2', 'rvn' ),
		'space_2-5' => __( '2.5', 'rvn' ),
		'space_3' => __( '3', 'rvn' ),
		'space_3-5' => __( '3.5', 'rvn' ),
		'space_4' => __( '4', 'rvn' ),
		'space_5' => __( '5', 'rvn' ),
		'space_6' => __( '6', 'rvn' ),
		'space_7' => __( '7', 'rvn' ),
		'space_8' => __( '8', 'rvn' ),
		'space_9' => __( '9', 'rvn' ),
		'space_10' => __( '10', 'rvn' ),
		'space_11' => __( '11', 'rvn' ),
		'space_12' => __( '12', 'rvn' ),
		'space_14' => __( '14', 'rvn' ),
		'space_16' => __( '16', 'rvn' ),
		'space_20' => __( '20', 'rvn' ),
		'space_24' => __( '24', 'rvn' ),
		'space_28' => __( '28', 'rvn' ),
		'space_32' => __( '32', 'rvn' ),
		'space_36' => __( '36', 'rvn' ),
		'space_40' => __( '40', 'rvn' ),
		'space_44' => __( '44', 'rvn' ),
		'space_48' => __( '48', 'rvn' ),
		'space_52' => __( '52', 'rvn' ),
		'space_56' => __( '56', 'rvn' ),
		'space_60' => __( '60', 'rvn' ),
		'space_64' => __( '64', 'rvn' ),
		'space_72' => __( '72', 'rvn' ),
		'space_80' => __( '80', 'rvn' ),
		'space_96' => __( '96', 'rvn' ),
	] );
}