<?php
/**
 * Functions.php
 */



/**
 * Includes
 */

require_once 'inc/shortcodes.php';

require_once 'inc/widgets/hamburger-menu-widget.php';
require_once 'inc/widgets/logo-widget.php';
require_once 'inc/widgets/stacknav-widget.php';
require_once 'inc/widgets/primary-nav-widget.php';

require_once 'inc/slideover-menu-walker.php';

require_once 'inc/admin/customizer/controls/customizer-layout-controls.php';
require_once 'inc/admin/customizer/controls/customizer-font-controls.php';
require_once 'inc/admin/customizer/controls/customizer-element-controls.php';
require_once 'inc/admin/customizer/controls/customizer-component-controls.php';
require_once 'inc/admin/customizer/controls/customizer-block-controls.php';
require_once 'inc/admin/customizer/controls/customizer-ui-settings-controls.php';
require_once 'inc/admin/customizer/controls/customizer-theme-settings-controls.php';
require_once 'inc/admin/customizer/customizer-css-variables.php';
require_once 'inc/admin/customizer/customizer-functions.php';
require_once 'inc/admin/customizer/custom-controls/divider-control.php';



/**
 * Theme support functions.
 */

add_action( 'after_setup_theme', 'rvn_add_theme_support' );

function rvn_add_theme_support() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	// By adding theme support, we declare that this theme does not use a
	// hard-coded <title> tag in the document head, and expect WordPress to
	// provide it for us.
	add_theme_support( 'title-tag' );

	// Add support for a variety of post formats.
	// add_theme_support( 'post-formats', array(
	// 	'aside',
	// 	'gallery',
	// 	'image',
	// 	'video',
	// 	'audio',
	// 	'link',
	// 	'quote',
	// 	'status',
	// ) );

	// Add support for featured images.
	add_theme_support( 'post-thumbnails' );

	// Add support for custom logo.
	add_theme_support( 'custom-logo', [
		// 'height'      => 150,
		// 'width'       => 400,
		'flex-width'  => true,
		'flex-height' => true,
	] );

	// Switch default core markup for search form, comment form, and comments
	// to output valid HTML5.
	add_theme_support( 'html5', [
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption',
	] );

	// Add custom background controls to customizer.
	// add_theme_support( 'custom-background', apply_filters( 'rvn_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );

	// Support custom editor styles for the Gutenberg editor.
	add_theme_support( 'editor-styles' );

	// Support dark background for the Gutenberg editor.
	// add_theme_support( 'dark-editor-style' );

	// Support predefined Gutenberg block styles.
	add_theme_support( 'wp-block-styles' );

	// Support custom block spacing.
	add_theme_support( 'custom-spacing' );

	// Support custom units.
//	add_theme_support( 'custom-units', 'rem', 'em', 'px' );

	// Register Gutenberg font sizes.
	add_theme_support( 'editor-font-sizes', [
		[ "name" => __( 'Extra Small', 'rvn' ), 'slug' => 'xs', 'size' => 'var(--wp--custom--font-size--xs)' ],
		[ "name" => __( 'Small', 'rvn' ), 'slug' => 'sm', 'size' => 'var(--wp--custom--font-size--sm)' ],
//		[ "name" => __( 'Base', 'rvn' ), 'slug' => 'base', 'size' => 'var(--wp--custom--font-size--base)' ],
		[ "name" => __( 'Large', 'rvn' ), 'slug' => 'lg', 'size' => 'var(--wp--custom--font-size--lg)' ],
		[ "name" => __( 'XL', 'rvn' ), 'slug' => 'xl', 'size' => 'var(--wp--custom--font-size--xl)' ],
		[ "name" => __( '2XL', 'rvn' ), 'slug' => '2xl', 'size' => 'var(--wp--custom--font-size--2xl)' ],
		[ "name" => __( '3XL', 'rvn' ), 'slug' => '3xl', 'size' => 'var(--wp--custom--font-size--3xl)' ],
		[ "name" => __( '4XL', 'rvn' ), 'slug' => '4xl', 'size' => 'var(--wp--custom--font-size--4xl)' ],
		[ "name" => __( '5XL', 'rvn' ), 'slug' => '5xl', 'size' => 'var(--wp--custom--font-size--5xl)' ],
		[ "name" => __( '6XL', 'rvn' ), 'slug' => '6xl', 'size' => 'var(--wp--custom--font-size--6xl)' ],
		[ "name" => __( '7XL', 'rvn' ), 'slug' => '7xl', 'size' => 'var(--wp--custom--font-size--7xl)' ],
		[ "name" => __( '8XL', 'rvn' ), 'slug' => '8xl', 'size' => 'var(--wp--custom--font-size--8xl)' ],
		[ "name" => __( '9XL', 'rvn' ), 'slug' => '9xl', 'size' => 'var(--wp--custom--font-size--9xl)' ],
	] );

	// Register Gutenberg color palette.
	add_theme_support( 'editor-color-palette', [
		[ 'name' => __( 'Black', 'rvn' ), 'slug' => 'black', 'color' => 'var( --wp--custom--color--black )' ],
		[ 'name' => __( 'White', 'rvn' ), 'slug' => 'white', 'color' => 'var( --wp--custom--color--white )' ],
		[ 'name' => __( 'Gray 50', 'rvn' ), 'slug' => 'gray-50', 'color' => 'var( --wp--custom--color--gray-50 )' ],
		[ 'name' => __( 'Gray 100', 'rvn' ), 'slug' => 'gray-100', 'color' => 'var( --wp--custom--color--gray-100 )' ],
		[ 'name' => __( 'Gray 200', 'rvn' ), 'slug' => 'gray-200', 'color' => 'var( --wp--custom--color--gray-200 )' ],
		[ 'name' => __( 'Gray 300', 'rvn' ), 'slug' => 'gray-300', 'color' => 'var( --wp--custom--color--gray-300 )' ],
		[ 'name' => __( 'Gray 400', 'rvn' ), 'slug' => 'gray-400', 'color' => 'var( --wp--custom--color--gray-400 )' ],
		[ 'name' => __( 'Gray 500', 'rvn' ), 'slug' => 'gray-500', 'color' => 'var( --wp--custom--color--gray-500 )' ],
		[ 'name' => __( 'Gray 600', 'rvn' ), 'slug' => 'gray-600', 'color' => 'var( --wp--custom--color--gray-600 )' ],
		[ 'name' => __( 'Gray 700', 'rvn' ), 'slug' => 'gray-700', 'color' => 'var( --wp--custom--color--gray-700 )' ],
		[ 'name' => __( 'Gray 800', 'rvn' ), 'slug' => 'gray-800', 'color' => 'var( --wp--custom--color--gray-800 )' ],
		[ 'name' => __( 'Gray 900', 'rvn' ), 'slug' => 'gray-900', 'color' => 'var( --wp--custom--color--gray-900 )' ],
		[ 'name' => __( 'Primary 50', 'rvn' ), 'slug' => 'primary-50', 'color' => 'var( --wp--custom--color--primary-50 )' ],
		[ 'name' => __( 'Primary 100', 'rvn' ), 'slug' => 'primary-100', 'color' => 'var( --wp--custom--color--primary-100 )' ],
		[ 'name' => __( 'Primary 200', 'rvn' ), 'slug' => 'primary-200', 'color' => 'var( --wp--custom--color--primary-200 )' ],
		[ 'name' => __( 'Primary 300', 'rvn' ), 'slug' => 'primary-300', 'color' => 'var( --wp--custom--color--primary-300 )' ],
		[ 'name' => __( 'Primary 400', 'rvn' ), 'slug' => 'primary-400', 'color' => 'var( --wp--custom--color--primary-400 )' ],
		[ 'name' => __( 'Primary 500', 'rvn' ), 'slug' => 'primary-500', 'color' => 'var( --wp--custom--color--primary-500 )' ],
		[ 'name' => __( 'Primary 600', 'rvn' ), 'slug' => 'primary-600', 'color' => 'var( --wp--custom--color--primary-600 )' ],
		[ 'name' => __( 'Primary 700', 'rvn' ), 'slug' => 'primary-700', 'color' => 'var( --wp--custom--color--primary-700 )' ],
		[ 'name' => __( 'Primary 800', 'rvn' ), 'slug' => 'primary-800', 'color' => 'var( --wp--custom--color--primary-800 )' ],
		[ 'name' => __( 'Primary 900', 'rvn' ), 'slug' => 'primary-900', 'color' => 'var( --wp--custom--color--primary-900 )' ],
		[ 'name' => __( 'Secondary 50', 'rvn' ), 'slug' => 'secondary-50', 'color' => 'var( --wp--custom--color--secondary-50 )' ],
		[ 'name' => __( 'Secondary 100', 'rvn' ), 'slug' => 'secondary-100', 'color' => 'var( --wp--custom--color--secondary-100 )' ],
		[ 'name' => __( 'Secondary 200', 'rvn' ), 'slug' => 'secondary-200', 'color' => 'var( --wp--custom--color--secondary-200 )' ],
		[ 'name' => __( 'Secondary 300', 'rvn' ), 'slug' => 'secondary-300', 'color' => 'var( --wp--custom--color--secondary-300 )' ],
		[ 'name' => __( 'Secondary 400', 'rvn' ), 'slug' => 'secondary-400', 'color' => 'var( --wp--custom--color--secondary-400 )' ],
		[ 'name' => __( 'Secondary 500', 'rvn' ), 'slug' => 'secondary-500', 'color' => 'var( --wp--custom--color--secondary-500 )' ],
		[ 'name' => __( 'Secondary 600', 'rvn' ), 'slug' => 'secondary-600', 'color' => 'var( --wp--custom--color--secondary-600 )' ],
		[ 'name' => __( 'Secondary 700', 'rvn' ), 'slug' => 'secondary-700', 'color' => 'var( --wp--custom--color--secondary-700 )' ],
		[ 'name' => __( 'Secondary 800', 'rvn' ), 'slug' => 'secondary-800', 'color' => 'var( --wp--custom--color--secondary-800 )' ],
		[ 'name' => __( 'Secondary 900', 'rvn' ), 'slug' => 'secondary-900', 'color' => 'var( --wp--custom--color--secondary-900 )' ],
	] );

	// Add theme support for selective refresh for widgets in the
	// customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for full and wide aligned Gutenberg blocks.
	add_theme_support( 'align-wide' );

	// Make Gutenberg embed blocks (e.g. YouTube videos) responsive.
	add_theme_support( 'responsive-embeds' );

	// Add support for link color block settings.
	add_theme_support( 'experimental-link-color' );

	// Disable core block patterns
	remove_theme_support( 'core-block-patterns' );

	// Disable custom colors in the Gutenberg editor.
	// add_theme_support( 'disable-custom-colors' );

	// Disable custom font sizes in the Gutenberg editor.
	// add_theme_support('disable-custom-font-sizes');

	// Disable custom gradients in the Gutenberg editor.
	// add_theme_support( 'disable-custom-gradients' );
}



/**
 * Enable shortcodes in widgets.
 */

add_filter( 'widget_title', 'do_shortcode' );
add_filter( 'widget_text', 'do_shortcode' );



/**
 * Enqueue scripts and styles for frontend.
 */

add_action( 'wp_enqueue_scripts', 'rvn_enqueue_scripts_and_styles' );

function rvn_enqueue_scripts_and_styles() {
	// Enqueue script for comment reply
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Enqueue jQuery files
//	wp_enqueue_script( 'jquery' );

	// Enqueue theme's global CSS file
	wp_enqueue_style(
		"rvn_global",
		get_theme_file_uri( 'assets/css/dist/global.css' ),
		[],
		filemtime( get_theme_file_path( 'assets/css/dist/global.css' ) )
	);

	// Enqueue child theme's child-global.css
	if ( is_child_theme() && file_exists( get_theme_file_path( 'assets/css/dist/child-global.css' ) ) ) {
		wp_enqueue_style(
			'rvn_child_global',
			get_theme_file_uri( 'assets/css/dist/child-global.css' ),
			[],
			filemtime( get_theme_file_path( 'assets/css/dist/child-global.css' ) )
		);
	}

	// Enqueue theme's style.css
	wp_enqueue_style(
		'rvn_style',
		get_stylesheet_uri(),
		[],
		filemtime( get_stylesheet_directory() )
	);

	// Enqueue child theme's style.css
	if ( is_child_theme() && file_exists( get_theme_file_path( 'style.css' ) ) ) {
		wp_enqueue_style(
			'rvn_child_style',
			get_theme_file_uri( 'style.css' ),
			[],
			filemtime( get_theme_file_path( 'style.css' ) )
		);
	}
}



/**
 * Add editor styles.
 */

add_action( 'admin_init', 'rvn_add_editor_styles' );

function rvn_add_editor_styles() {
	$css_files = [
		"assets/css/dist/global.css",
		"assets/css/dist/child-global.css",
		"assets/css/dist/block-editor.css",
		"assets/css/dist/child-block-editor.css",
	];

	add_editor_style( $css_files );
}



/**
 * Enqueue block editor assets.
 *
 * These assets are enqueued not only for the content area of the block editor,
 * but also for the editor (with all its controls) itself.
 */

//add_action( 'enqueue_block_editor_assets', 'rvn_enqueue_block_editor_assets' );
//
//function rvn_enqueue_block_editor_assets() {
//	// Enqueue CSS files by iterating over this array of file names
//	$css_file_handles = [
////		'tailwind-base',
////		'global-variables',
////		'block-editor',
////		'tailwind-components',
////		'tailwind-utilities',
//	];
//	$env_asset_folder_name = rvn_get_env_asset_folder_name();
//	foreach ( $css_file_handles as $css_file_handle ) {
//		wp_enqueue_style(
//			"rvn_editor_{$css_file_handle}",
//			get_theme_file_uri( "assets/css/{$env_asset_folder_name}/{$css_file_handle}.css" ),
//			[],
//			filemtime( get_theme_file_path( "assets/css/{$env_asset_folder_name}/{$css_file_handle}.css" ) )
//		);
//	}
//}



/**
 * Load theme textdomain.
 *
 * Translations can be added to the /languages directory.
 */

add_action( 'after_setup_theme', 'rvn_load_theme_textdomain' );

function rvn_load_theme_textdomain() {
	load_theme_textdomain( 'rvn', get_theme_file_path( '/languages' ) );
}



/**
 * Register MIME-Types.
 */

add_filter( 'upload_mimes', 'rvn_register_mime_types' );

function rvn_register_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg';

	return $mimes;
}



/**
 * Register sidebars.
 */

add_action( 'widgets_init', 'rvn_register_sidebars' );

function rvn_register_sidebars() {

	register_sidebar( [
		'name'          => __( 'ET: Header', 'rvn' ),
		'id'            => 'header',
		'description'   => __( 'The main header. Here you can add for example the ET: Logo Widget, a phone button, menus, etc.', 'rvn' ),
		'class'         => '',
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	] );

	register_sidebar( [
		'name'          => __( 'ET: Mobile Header', 'rvn' ),
		'id'            => 'mobile-header',
		'description'   => __( 'The main header. Here you can add for example the ET: Logo Widget, a phone button, menus, etc.', 'rvn' ),
		'class'         => '',
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	] );

	register_sidebar( [
		'name'          => __( 'ET: Topbar', 'rvn' ),
		'id'            => 'topbar',
		'description'   => __( 'The Topbar is located above the header. Here you can add for example contact info, location info, sub-menus etc.', 'rvn' ),
		'class'         => '',
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	] );

	register_sidebar( [
		'name'          => __( 'ET: Mobile Topbar', 'rvn' ),
		'id'            => 'mobile-topbar',
		'description'   => __( 'The Topbar is located above the header. Here you can add for example contact info, location info, sub-menus, etc.', 'rvn' ),
		'class'         => '',
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	] );

	register_sidebar( [
		'name'          => __( 'ET: Navbar', 'rvn' ),
		'id'            => 'navbar',
		'description'   => __( 'The Navbar section can be used to display the ET: Primary Navigation Widget, social icons, etc.', 'rvn' ),
		'class'         => '',
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	] );

	register_sidebar( [
		'name'          => __( 'ET: Mobile Navbar', 'rvn' ),
		'id'            => 'mobile-navbar',
		'description'   => __( 'The Navbar section can be used to display the ET: Primary Navigation Widget, social icons, etc.', 'rvn' ),
		'class'         => '',
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	] );

	register_sidebar( [
		'name'          => __( 'ET: Slideover', 'rvn' ),
		'id'            => 'sidebar-slideover',
		'description'   => __( 'The Slideover section is triggered by the Hamburger Menu. Here you can add for example the ET: Primary Navigation Widget, social icons, a phone number, etc..', 'rvn' ),
		'class'         => '',
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="c-widget__title mb-5">',
		'after_title'   => '</h4>',
	] );

	register_sidebar( [
		'name'          => __( 'ET: Primary Sidebar', 'rvn' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'The default sidebar.', 'rvn' ),
		'class'         => '',
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="c-widget__title">',
		'after_title'   => '</h4>',
	] );

	register_sidebar( [
		'name'          => __( 'ET: Footer', 'rvn' ),
		'id'            => 'footer',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<section id="%1$s" class="c-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	] );
}



/**
 * Register nav menus.
 */

add_action( 'after_setup_theme', 'rvn_register_nav_menus' );

function rvn_register_nav_menus() {
	register_nav_menus( [
		'primary' => __( 'Primary Menu', 'rvn' ),
	] );
}



/**
 * DEPRECATED
 *
 * Returns env asset folder name.
 *
 * Use the return value to determine from which asset folder you want to get
 * files from.
 *
 * We determine the name of an asset folder based on the site's current
 * environment type. When the WP_ENVIRONMENT_TYPE global system variable is set
 * to 'local' or 'development', we return 'build'. Otherwise, we return 'dist'.
 */

function rvn_get_env_asset_folder_name() {
	switch ( wp_get_environment_type() ) {
		case 'local':
		case 'development':
			$env_asset_folder_name = 'build';
			break;
		case 'staging':
		case 'production':
		default:
			$env_asset_folder_name = 'dist';
	}

	return apply_filters( 'rvn_env_asset_folder_name', $env_asset_folder_name );
}



/**
 * Works like get_theme_mod(), but automatically adds default value from the
 * function rvn_get_theme_mod_default().
 */

function rvn_get_theme_mod( $name, $default = false ) {
	if ( false === $default ) {
		$default = rvn_get_theme_mod_default( $name );
	}

	return apply_filters( "rvn_theme_mod_{$name}", get_theme_mod( $name, $default ) );
}



/**
 * Returns a theme_mod default value based on the theme_mod name given.
 */

function rvn_get_theme_mod_default( $name ) {
	$default_values = rvn_get_theme_mod_defaults();

	if ( ! is_array( $default_values ) || ! isset( $default_values[$name] ) ) {
		return false;
	}

	return apply_filters( "rvn_theme_mod_default_{$name}", $default_values[$name] );
}



/**
 * Returns an array of theme mod default values that can be used by the
 * customizer controls and the rvn_get_theme_mod() function.
 *
 * The function rvn_get_theme_mod() automatically applies these as default
 * value, if the $default parameter for the function is not set.
 *
 * When adding a customizer setting via WP_Customize_Manager::add_setting()
 * method, a default value will also be automatically applied, if the
 * default argument is not set in the methods $args parameter. This is done
 * through the rvn_set_customizer_settings_default_arg() function.
 *
 * Color Palette Source:
 * https://tailwind.ink?p=3.FAFCFCE4E8EEC1C9D0A2ABB78892A26B73855056693C40552B2E442B2E44EEFDFECFF3FB8ED8E962BDE44D9DCE277FB51C5B921548760F3451082530FEFAEEFCE2C0EFB586E78B5FD7664BB34434912728731620550F1C3B0B14
 */

function rvn_get_theme_mod_defaults() {
	return apply_filters( 'rvn_theme_mod_defaults', [
		// Layout / Site
		'site_container_max_width' => '100%',
		'site_bg_color' => '#ffffff',
		'site_container_bg_color' => '#ffffff',
		// Layout / Container
		'container_max_width' => '1536px',
//		'container_horizontal_padding_desktop' => 'space_16',
//		'container_horizontal_padding_tablet' => 'space_8',
//		'container_horizontal_padding_mobile' => 'space_4',
		// Layout / Section
//		'section_vertical_padding_desktop' => 'space_24',
//		'section_vertical_padding_tablet' => 'space_14',
//		'section_vertical_padding_mobile' => 'space_14',
		// Layout / Blocks
		'block_max_width' => '880px',
//		'block_wide_aligned_max_width' => '1536px',
//		'block_alignment' => 'center',
		'block_vertical_space_desktop' => 'space_8',
		'block_vertical_space_tablet' => 'space_8',
		'block_vertical_space_mobile' => 'space_8',
		'block_vertical_space_large_desktop' => 'space_20',
		'block_vertical_space_large_tablet' => 'space_14',
		'block_vertical_space_large_mobile' => 'space_14',
		'block_horizontal_space_desktop' => 'space_8',
		'block_horizontal_space_tablet' => 'space_8',
		'block_horizontal_space_mobile' => 'space_8',
		'block_horizontal_space_large_desktop' => 'space_16',
		'block_horizontal_space_large_tablet' => 'space_8',
		'block_horizontal_space_large_mobile' => 'space_4',
		// Fonts / Font Embeds
		'font_embed_code' => '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">',
		// Fonts / Fonts
		'font_family' => 'Rubik, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
		'secondary_font_family' => 'Quicksand, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
		'mono_font_family' => 'ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace',
		// Elements / Body Text
		'text_color' => 'color_gray_600',
		'font_weight' => '400',
		'font_size_desktop' => 'font_size_base',
		'font_size_tablet' => 'font_size_base',
		'font_size_mobile' => 'font_size_sm',
		'line_height_desktop' => 'line_height_relaxed',
		'line_height_tablet' => 'line_height_relaxed',
		'line_height_mobile' => 'line_height_normal',
		// Elements / Headings
		'h1_color' => 'color_primary_500',
		'h1_font_family' => 'secondary_font_family',
		'h1_font_weight' => '700',
		'h1_font_size_desktop' => 'font_size_5xl',
		'h1_line_height_desktop' => 'line_height_tight',
		'h1_font_size_tablet' => 'font_size_5xl',
		'h1_line_height_tablet' => 'line_height_tight',
		'h1_font_size_mobile' => 'font_size_5xl',
		'h1_line_height_mobile' => 'line_height_tight',
		'h2_color' => 'color_primary_500',
		'h2_font_family' => 'secondary_font_family',
		'h2_font_weight' => '700',
		'h2_font_size_desktop' => 'font_size_4xl',
		'h2_line_height_desktop' => 'line_height_snug',
		'h2_font_size_tablet' => 'font_size_4xl',
		'h2_line_height_tablet' => 'line_height_snug',
		'h2_font_size_mobile' => 'font_size_4xl',
		'h2_line_height_mobile' => 'line_height_snug',
		'h3_color' => 'color_primary_500',
		'h3_font_family' => 'secondary_font_family',
		'h3_font_weight' => '700',
		'h3_font_size_desktop' => 'font_size_3xl',
		'h3_line_height_desktop' => 'line_height_snug',
		'h3_font_size_tablet' => 'font_size_3xl',
		'h3_line_height_tablet' => 'line_height_snug',
		'h3_font_size_mobile' => 'font_size_3xl',
		'h3_line_height_mobile' => 'line_height_snug',
		'h4_color' => 'color_primary_500',
		'h4_font_family' => 'secondary_font_family',
		'h4_font_weight' => '700',
		'h4_font_size_desktop' => 'font_size_2xl',
		'h4_line_height_desktop' => 'line_height_normal',
		'h4_font_size_tablet' => 'font_size_2xl',
		'h4_line_height_tablet' => 'line_height_normal',
		'h4_font_size_mobile' => 'font_size_2xl',
		'h4_line_height_mobile' => 'line_height_normal',
		'h5_color' => 'color_primary_500',
		'h5_font_family' => 'secondary_font_family',
		'h5_font_weight' => '700',
		'h5_font_size_desktop' => 'font_size_sm',
		'h5_line_height_desktop' => 'line_height_normal',
		'h5_font_size_tablet' => 'font_size_sm',
		'h5_line_height_tablet' => 'line_height_normal',
		'h5_font_size_mobile' => 'font_size_sm',
		'h5_line_height_mobile' => 'line_height_normal',
		'h6_color' => 'color_primary_500',
		'h6_font_family' => 'secondary_font_family',
		'h6_font_weight' => '700',
		'h6_font_size_desktop' => 'font_size_xs',
		'h6_line_height_desktop' => 'line_height_normal',
		'h6_font_size_tablet' => 'font_size_xs',
		'h6_line_height_tablet' => 'line_height_normal',
		'h6_font_size_mobile' => 'font_size_xs',
		'h6_line_height_mobile' => 'line_height_normal',
		// Elements / Links
		'link_color' => 'color_primary_500',
		'link_color_hover' => 'color_primary_600',
		'link_font_weight' => '400',
		'link_text_decoration' => 'underline',
		'link_text_decoration_hover' => 'none',
		// Blocks / Column Block
		'column_block_vertical_space' => 'space_8',
		'column_block_horizontal_space' => 'space_8',
		// Blocks / Separator Block
		'separator_block_color' => 'color_gray_600',
		'separator_block_max_width' => '3rem',
		'separator_block_max_width_wide' => '9rem',
		'separator_block_height' => '1px',
		// Blocks / Button Block
		'buttons_block_text_color' => 'color_white',
		'buttons_block_text_color_hover' => 'color_white',
		'buttons_block_bg_color' => 'color_secondary_500',
		'buttons_block_bg_color_hover' => 'color_secondary_600',
		'buttons_block_border_width' => '2px',
		'buttons_block_border_radius' => '0.25rem',
		'buttons_block_vertical_padding' => 'space_3',
		'buttons_block_horizontal_padding' => 'space_8',
		// Components / Logo
		'logo_max_width_desktop' => '380px',
		'logo_max_width_tablet' => '380px',
		'logo_max_width_mobile' => '280px',
		// Components / Topbar
		'topbar_columns' => '2',
		'topbar_container' => 'default',
		'topbar_bg_color' => 'color_gray_200',
		'topbar_container_size' => 'container',
		'topbar_vertical_padding_desktop' => 'space_3',
		'topbar_vertical_padding_tablet' => 'space_3',
		'topbar_vertical_padding_mobile' => 'space_3',
		'topbar_area_gap' => 'space_10',
		'topbar_item_gap' => 'space_10',
		'topbar_text_color' => 'color_gray_600',
		'topbar_font_family' => 'font_family',
		'topbar_font_weight' => '400',
		'topbar_font_size_desktop' => 'font_size_sm',
		'topbar_font_size_tablet' => 'font_size_sm',
		'topbar_font_size_mobile' => 'font_size_xs',
		'topbar_line_height_desktop' => 'line_height_relaxed',
		'topbar_line_height_tablet' => 'line_height_relaxed',
		'topbar_line_height_mobile' => 'line_height_normal',
		'topbar_link_color' => 'color_primary_500',
		'topbar_link_color_hover' => 'color_primary_600',
		'topbar_link_font_weight' => '400',
		'topbar_link_text_decoration' => 'none',
		'topbar_link_text_decoration_hover' => 'none',
		// Components / Header
		'header_columns' => '2',
		'header_container' => 'default',
		'header_bg_color' => 'color_transparent',
		'header_container_size' => 'container',
		'header_vertical_padding_desktop' => 'space_10',
		'header_vertical_padding_tablet' => 'space_10',
		'header_vertical_padding_mobile' => 'space_8',
		'header_area_gap' => 'space_10',
		'header_item_gap' => 'space_10',
		'header_text_color' => 'color_gray_600',
		'header_font_family' => 'font_family',
		'header_font_weight' => '400',
		'header_font_size_desktop' => 'font_size_base',
		'header_font_size_tablet' => 'font_size_base',
		'header_font_size_mobile' => 'font_size_sm',
		'header_line_height_desktop' => 'line_height_relaxed',
		'header_line_height_tablet' => 'line_height_relaxed',
		'header_line_height_mobile' => 'line_height_normal',
		'header_link_color' => 'color_primary_500',
		'header_link_color_hover' => 'color_primary_600',
		'header_link_font_weight' => '400',
		'header_link_text_decoration' => 'none',
		'header_link_text_decoration_hover' => 'none',
		// Components / Navbar
		'navbar_columns' => '2',
		'navbar_container' => 'default',
		'navbar_bg_color' => 'color_gray_200',
		'navbar_container_size' => 'container',
		'navbar_vertical_padding_desktop' => 'space_0',
		'navbar_vertical_padding_tablet' => 'space_0',
		'navbar_vertical_padding_mobile' => 'space_0',
		'navbar_area_gap' => 'space_10',
		'navbar_item_gap' => 'space_10',
		'navbar_text_color' => 'color_gray_600',
		'navbar_font_family' => 'font_family',
		'navbar_font_weight' => '400',
		'navbar_font_size_desktop' => 'font_size_base',
		'navbar_font_size_tablet' => 'font_size_base',
		'navbar_font_size_mobile' => 'font_size_sm',
		'navbar_line_height_desktop' => 'line_height_relaxed',
		'navbar_line_height_tablet' => 'line_height_relaxed',
		'navbar_line_height_mobile' => 'line_height_normal',
		'navbar_link_color' => 'color_primary_500',
		'navbar_link_color_hover' => 'color_primary_600',
		'navbar_link_font_weight' => '500',
		'navbar_link_text_decoration' => 'none',
		'navbar_link_text_decoration_hover' => 'none',
		// Components / Sidebar
		'sidebar_text_color' => 'color_gray_600',
		'sidebar_bg_color' => 'color_gray_100',
		'sidebar_border_color' => 'color_gray_200',
		'sidebar_border_width' => '0px',
		'sidebar_font_size' => 'font_size_base',
		'sidebar_line_height' => 'line_height_relaxed',
		'sidebar_vertical_padding_desktop' => 'space_8',
		'sidebar_vertical_padding_tablet' => 'space_8',
		'sidebar_vertical_padding_mobile' => 'space_8',
		'sidebar_horizontal_padding' => 'space_8',
		'sidebar_widget_padding' => 'space_8',
		'sidebar_heading_color' => 'color_gray_600',
		'sidebar_heading_text_transform' => 'none',
		'sidebar_heading_bottom_margin' => 'space_2',
		'sidebar_link_color' => 'color_primary_500',
		'sidebar_link_color_hover' => 'color_primary_600',
		'sidebar_link_font_weight' => '400',
		'sidebar_link_text_decoration' => 'none',
		'sidebar_link_text_decoration_hover' => 'none',
		// Components / Navigation
		'nav_item_vertical_padding' => 'space_6',
		'nav_item_horizontal_padding' => 'space_4',
		'nav_item_font_size' => 'font_size_base',
		'nav_item_line_height' => 'line_height_snug',
		'nav_item_font_weight' => '400',
		'nav_item_font_family' => 'font_family',
		'nav_item_text_transform' => 'none',
		'nav_item_color' => 'color_gray_600',
		'nav_item_color_hover' => 'color_primary_500',
		'nav_submenu_width' => '230px',
		'nav_submenu_bg_color' => 'color_white',
		'nav_submenu_vertical_padding' => 'space_2',
		'nav_submenu_item_font_size' => 'font_size_base',
		'nav_submenu_item_line_height' => 'line_height_snug',
		'nav_submenu_item_font_weight' => '400',
		'nav_submenu_item_font_family' => 'font_family',
		'nav_submenu_item_text_transform' => 'none',
		'nav_submenu_item_color' => 'color_gray_600',
		'nav_submenu_item_color_hover' => 'color_primary_500',
		'nav_submenu_item_vertical_padding' => 'space_2',
		'nav_submenu_item_horizontal_padding' => 'space_6',
		// Components / Stacknav
		'stacknav_item_color' => 'color_gray_600',
		'stacknav_item_color_active' => 'color_primary_500',
		'stacknav_item_bg_color' => 'color_transparent',
		'stacknav_item_bg_color_active' => 'color_transparent',
		'stacknav_item_font_weight' => '400',
		'stacknav_item_vertical_padding' => 'space_4',
		'stacknav_item_horizontal_padding' => 'space_6',
		'stacknav_item_border_color' => 'color_gray_200',
		'stacknav_item_border_width' => '1px',
		'stacknav_sub_item_vertical_padding' => 'space_2',
		'stacknav_sub_item_horizontal_padding' => 'space_12',
		'stacknav_sub_sub_item_horizontal_padding' => 'space_16',
		// Components / Footer Widget Area
		'footer_widget_area_columns' => '4',
		'footer_widget_area_bg_color' => 'color_gray_100',
		'footer_widget_area_vertical_padding_desktop' => 'space_16',
		'footer_widget_area_vertical_padding_tablet' => 'space_16',
		'footer_widget_area_vertical_padding_mobile' => 'space_14',
		'footer_widget_area_text_color' => 'color_gray_600',
		'footer_widget_area_font_size' => 'font_size_base',
		'footer_widget_area_line_height' => 'line_height_relaxed',
		'footer_widget_area_font_weight' => '400',
		'footer_widget_area_heading_color' => 'color_gray_600',
		'footer_widget_area_heading_bottom_margin' => 'space_3',
		'footer_widget_area_link_color' => 'color_gray_600',
		'footer_widget_area_link_color_hover' => 'color_primary_500',
		'footer_widget_area_link_font_weight' => '400',
		'footer_widget_area_link_text_decoration' => 'none',
		'footer_widget_area_link_text_decoration_hover' => 'none',
		'footer_widget_area_nav_item_vertical_padding' => 'space_px',
		'footer_widget_area_nav_item_color' => 'color_gray_600',
		'footer_widget_area_nav_item_color_hover' => 'color_primary_500',
		'footer_widget_area_nav_item_font_weight' => '400',
		'footer_widget_area_nav_item_text_decoration' => 'none',
		'footer_widget_area_nav_item_text_decoration_hover' => 'none',
		// Components / Footer Bar
		'footer_bar_text' => sprintf( __( 'Copyright © %1$s %2$s %3$s All Rights Reserved', 'rvn' ), '[et_year]', '[et_site_title]', '<span> · </span>' ),
		'footer_bar_bg_color' => 'color_gray_200',
		'footer_bar_text_align' => 'center',
		'footer_bar_vertical_padding_desktop' => 'space_6',
		'footer_bar_vertical_padding_tablet' => 'space_6',
		'footer_bar_vertical_padding_mobile' => 'space_4',
		'footer_bar_text_color' => 'color_gray_600',
		'footer_bar_font_size' => 'font_size_sm',
		'footer_bar_line_height' => 'line_height_relaxed',
		'footer_bar_font_weight' => '400',
		'footer_bar_font_family' => 'font_family',
		'footer_bar_link_color' => 'color_gray_600',
		'footer_bar_link_color_hover' => 'color_primary_500',
		'footer_bar_link_font_weight' => '400',
		'footer_bar_link_text_decoration' => 'none',
		'footer_bar_link_text_decoration_hover' => 'none',
		// UI Settings / Color Settings
//		'color_overlay' => 'rgba(0, 0, 0, .7)',
		'color_transparent' => 'transparent',
		'color_black' => '#000000',
		'color_white' => '#ffffff',
		'color_gray_50' => '#f8fafc',
		'color_gray_100' => '#f1f5f9',
		'color_gray_200' => '#e2e8f0',
		'color_gray_300' => '#cbd5e1',
		'color_gray_400' => '#94a3b8',
		'color_gray_500' => '#64748b',
		'color_gray_600' => '#475569',
		'color_gray_700' => '#334155',
		'color_gray_800' => '#1e293b',
		'color_gray_900' => '#0f172a',
		'color_primary_50' => '#f8fafc',
		'color_primary_100' => '#f1f5f9',
		'color_primary_200' => '#e2e8f0',
		'color_primary_300' => '#cbd5e1',
		'color_primary_400' => '#94a3b8',
		'color_primary_500' => '#64748b',
		'color_primary_600' => '#475569',
		'color_primary_700' => '#334155',
		'color_primary_800' => '#1e293b',
		'color_primary_900' => '#0f172a',
		'color_secondary_50' => '#f8fafc',
		'color_secondary_100' => '#f1f5f9',
		'color_secondary_200' => '#e2e8f0',
		'color_secondary_300' => '#cbd5e1',
		'color_secondary_400' => '#94a3b8',
		'color_secondary_500' => '#64748b',
		'color_secondary_600' => '#475569',
		'color_secondary_700' => '#334155',
		'color_secondary_800' => '#1e293b',
		'color_secondary_900' => '#0f172a',
		// UI Settings / Space Settings
		'space_0' => '0',
		'space_px' => '1px',
		'space_0-5' => '0.125rem',
		'space_1' => '0.25rem',
		'space_1-5' => '0.375rem',
		'space_2' => '0.5rem',
		'space_2-5' => '0.625rem',
		'space_3' => '0.75rem',
		'space_3-5' => '0.875rem',
		'space_4' => '1rem',
		'space_5' => '1.25rem',
		'space_6' => '1.5rem',
		'space_7' => '1.75rem',
		'space_8' => '2rem',
		'space_9' => '2.25rem',
		'space_10' => '2.5rem',
		'space_11' => '2.75rem',
		'space_12' => '3rem',
		'space_14' => '3.5rem',
		'space_16' => '4rem',
		'space_20' => '5rem',
		'space_24' => '6rem',
		'space_28' => '7rem',
		'space_32' => '8rem',
		'space_36' => '9rem',
		'space_40' => '10rem',
		'space_44' => '11rem',
		'space_48' => '12rem',
		'space_52' => '13rem',
		'space_56' => '14rem',
		'space_60' => '15rem',
		'space_64' => '16rem',
		'space_72' => '18rem',
		'space_80' => '20rem',
		'space_96' => '24rem',
		// UI Settings / Font Size Settings
		'font_size_xs' => '0.75rem',
		'font_size_sm' => '0.875rem',
		'font_size_base' => '1rem',
		'font_size_lg' => '1.125rem',
		'font_size_xl' => '1.25rem',
		'font_size_2xl' => '1.5rem',
		'font_size_3xl' => '1.875rem',
		'font_size_4xl' => '2.25rem',
		'font_size_5xl' => '3rem',
		'font_size_6xl' => '3.75rem',
		'font_size_7xl' => '4.5rem',
		'font_size_8xl' => '6rem',
		'font_size_9xl' => '8rem',
		// UI Settings / Line Height Settings
		'line_height_none' => '1',
		'line_height_tight' => '1.25',
		'line_height_snug' => '1.375',
		'line_height_normal' => '1.5',
		'line_height_relaxed' => '1.625',
		'line_height_loose' => '2',
		// Theme Settings / Generic
		'enable_wp_emojis' => false,
	] );
}



/**
 * Get custom logo URL.
 */

if ( ! function_exists( 'rvn_get_custom_logo_url' ) ) :

	function rvn_get_custom_logo_url( $size = 'full' ) {
		if ( ! has_custom_logo() ) {
			return '';
		}

		$logo = get_theme_mod( 'custom_logo' );
		$image = wp_get_attachment_image_src( $logo , $size );
		$image_url = $image[0];

		return $image_url;
	}

endif;



/**
 * Get entry featured image.
 */

if ( ! function_exists( 'rvn_get_featured_image' ) ) :

	function rvn_get_featured_image( $size = 'post-thumbnail', $attr = [] ) {
		$image = get_the_post_thumbnail( null, $size, $attr );

		if ( ! $image ) {
			return '';
		}

		if ( is_singular() ) {
			return $image;
		}

		return sprintf(
			'<a href="%1$s" title="%2$s">%3$s</a>',
			esc_url( get_permalink() ),
			esc_attr( sprintf( __( 'Permalink to: "%s"', 'rvn' ), the_title_attribute( 'echo=0' ) ) ),
			$image
		);
	}

endif;



/**
 * Disable WP emoji script and style if theme_mod "enable_wp_emojis" is set to
 * off.
 */

add_action( 'init', 'rvn_disable_wp_emojis' );

function rvn_disable_wp_emojis() {
	if ( rvn_get_theme_mod( 'enable_wp_emojis' ) ) {
		return;
	}

	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}



/**
 * Dequeue Contact Form 7 scripts, if form shortcode is not present in post.
 */

add_action( 'wp_print_scripts', 'rvn_dequeue_cf7_scripts' );

function rvn_dequeue_cf7_scripts() {
	global $post;
	if ( is_a( $post, 'WP_Post' ) && ! has_shortcode( $post->post_content, 'contact-form-7') ) {
		wp_dequeue_script( 'google-recaptcha' );
		wp_dequeue_script( 'wpcf7-recaptcha' );
	}
}



/**
 * Register block patterns.
 *
 * JSON Escape / Unescape tool:
 * https://www.appdevtools.com/json-escape-unescape
 */

add_action( 'init', 'rvn_register_block_patterns' );

function rvn_register_block_patterns() {
	$demo_image_url = esc_url( get_template_directory_uri() ) . '/assets/images/demo.webp';
	$demo_logo_url = esc_url( get_template_directory_uri() ) . '/assets/images/demo-logo.svg';

	register_block_pattern_category( 'theme', array(
		'label' => __( 'Theme', 'rvn' )
	) );

	register_block_pattern(
		'example-block-patterns/banner',
		[
			'title' => __( 'Banner', 'rvn' ),
			'content' => "<!-- wp:cover {\"url\":\"{$demo_image_url}\",\"id\":10,\"dimRatio\":50,\"overlayColor\":\"black\",\"isDark\":false,\"align\":\"full\"} -->\n<div class=\"wp-block-cover alignfull is-light\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-black-background-color has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-10\" alt=\"\" src=\"{$demo_image_url}\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"textColor\":\"white\"} -->\n<h1 class=\"has-text-align-center has-white-color has-text-color\" id=\"water-damage-restoration-company-hudson-valleywater-damage-repair-cleanup\">Lorem Ipsum Dolor Aliquam Tincidunt Mauris eu Risus Sit Amet Cras</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"white\",\"fontSize\":\"xl\"} -->\n<p class=\"has-text-align-center has-white-color has-text-color has-xl-font-size\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\",\"orientation\":\"horizontal\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"uppercase\",\"fontSize\":\"xl\"} -->\n<div class=\"wp-block-button has-custom-font-size uppercase has-xl-font-size\"><a class=\"wp-block-button__link\">Call Today!</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:cover -->",
			'keywords' => array( 'banner', 'hero', 'cover' ),
			'categories' => array( 'theme' ),
		]
	);
	register_block_pattern(
		'example-block-patterns/column-cards-section',
		[
			'title' => __( 'Column Cards Section', 'rvn' ),
			'content' => "<!-- wp:group {\"align\":\"full\",\"backgroundColor\":\"gray-100\"} -->\n<div class=\"wp-block-group alignfull has-gray-100-background-color has-background\"><!-- wp:heading {\"textAlign\":\"center\"} -->\n\t<h2 class=\"has-text-align-center\" id=\"equal-height-service-cards\">Equal Height Service Cards</h2>\n\t<!-- /wp:heading -->\n\t\n\t<!-- wp:paragraph {\"align\":\"center\",\"className\":\"max-w-3xl\",\"fontSize\":\"lg\"} -->\n\t<p class=\"has-text-align-center max-w-3xl has-lg-font-size\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh.</p>\n\t<!-- /wp:paragraph -->\n\t\n\t<!-- wp:columns {\"align\":\"wide\"} -->\n\t<div class=\"wp-block-columns alignwide\"><!-- wp:column {\"className\":\"bg-white flex flex-col rounded-lg overflow-hidden shadow-lg\"} -->\n\t<div class=\"wp-block-column bg-white flex flex-col rounded-lg overflow-hidden shadow-lg\"><!-- wp:image {\"align\":\"full\",\"id\":16,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"mb-0\"} -->\n\t<figure class=\"wp-block-image alignfull size-large mb-0\"><img src=\"{$demo_image_url}\" alt=\"\" class=\"wp-image-16\"/></figure>\n\t<!-- /wp:image -->\n\t\n\t<!-- wp:group {\"className\":\"m-10 s-top-bottom-group\"} -->\n\t<div class=\"wp-block-group m-10 s-top-bottom-group\"><!-- wp:group {\"className\":\"mb-0\"} -->\n\t<div class=\"wp-block-group mb-0\"><!-- wp:heading {\"level\":3} -->\n\t<h3 id=\"service-one\">Service One</h3>\n\t<!-- /wp:heading -->\n\t\n\t<!-- wp:paragraph -->\n\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra.</p>\n\t<!-- /wp:paragraph --></div>\n\t<!-- /wp:group -->\n\t\n\t<!-- wp:buttons -->\n\t<div class=\"wp-block-buttons\"><!-- wp:button {\"width\":100} -->\n\t<div class=\"wp-block-button has-custom-width wp-block-button__width-100\"><a class=\"wp-block-button__link\">Read More</a></div>\n\t<!-- /wp:button --></div>\n\t<!-- /wp:buttons --></div>\n\t<!-- /wp:group --></div>\n\t<!-- /wp:column -->\n\t\n\t<!-- wp:column {\"className\":\"bg-white flex flex-col rounded-lg overflow-hidden shadow-lg\"} -->\n\t<div class=\"wp-block-column bg-white flex flex-col rounded-lg overflow-hidden shadow-lg\"><!-- wp:image {\"align\":\"full\",\"id\":16,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"mb-0\"} -->\n\t<figure class=\"wp-block-image alignfull size-large mb-0\"><img src=\"{$demo_image_url}\" alt=\"\" class=\"wp-image-16\"/></figure>\n\t<!-- /wp:image -->\n\t\n\t<!-- wp:group {\"className\":\"m-10 s-top-bottom-group\"} -->\n\t<div class=\"wp-block-group m-10 s-top-bottom-group\"><!-- wp:group {\"className\":\"mb-0\"} -->\n\t<div class=\"wp-block-group mb-0\"><!-- wp:heading {\"level\":3} -->\n\t<h3 id=\"service-one\">Service Two</h3>\n\t<!-- /wp:heading -->\n\t\n\t<!-- wp:paragraph -->\n\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra.</p>\n\t<!-- /wp:paragraph --></div>\n\t<!-- /wp:group -->\n\t\n\t<!-- wp:buttons -->\n\t<div class=\"wp-block-buttons\"><!-- wp:button {\"width\":100} -->\n\t<div class=\"wp-block-button has-custom-width wp-block-button__width-100\"><a class=\"wp-block-button__link\">Read More</a></div>\n\t<!-- /wp:button --></div>\n\t<!-- /wp:buttons --></div>\n\t<!-- /wp:group --></div>\n\t<!-- /wp:column -->\n\t\n\t<!-- wp:column {\"className\":\"bg-white flex flex-col rounded-lg overflow-hidden shadow-lg\"} -->\n\t<div class=\"wp-block-column bg-white flex flex-col rounded-lg overflow-hidden shadow-lg\"><!-- wp:image {\"align\":\"full\",\"id\":16,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"mb-0\"} -->\n\t<figure class=\"wp-block-image alignfull size-large mb-0\"><img src=\"{$demo_image_url}\" alt=\"\" class=\"wp-image-16\"/></figure>\n\t<!-- /wp:image -->\n\t\n\t<!-- wp:group {\"className\":\"m-10 s-top-bottom-group\"} -->\n\t<div class=\"wp-block-group m-10 s-top-bottom-group\"><!-- wp:group {\"className\":\"mb-0\"} -->\n\t<div class=\"wp-block-group mb-0\"><!-- wp:heading {\"level\":3} -->\n\t<h3 id=\"service-one\">Service Three</h3>\n\t<!-- /wp:heading -->\n\t\n\t<!-- wp:paragraph -->\n\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra.</p>\n\t<!-- /wp:paragraph --></div>\n\t<!-- /wp:group -->\n\t\n\t<!-- wp:buttons -->\n\t<div class=\"wp-block-buttons\"><!-- wp:button {\"width\":100} -->\n\t<div class=\"wp-block-button has-custom-width wp-block-button__width-100\"><a class=\"wp-block-button__link\">Read More</a></div>\n\t<!-- /wp:button --></div>\n\t<!-- /wp:buttons --></div>\n\t<!-- /wp:group --></div>\n\t<!-- /wp:column --></div>\n\t<!-- /wp:columns --></div>\n\t<!-- /wp:group -->",
			'keywords' => array( 'columns', 'cards', 'equal', 'height' ),
			'categories' => array( 'theme' ),
		]
	);
	register_block_pattern(
		'example-block-patterns/cta-section-center-aligned',
		[
			'title' => __( 'CTA Section (center aligned)', 'rvn' ),
			'content' => "<!-- wp:cover {\"url\":\"{$demo_image_url}\",\"id\":949,\"hasParallax\":true,\"dimRatio\":80,\"overlayColor\":\"secondary-600\",\"align\":\"full\"} -->\n<div class=\"wp-block-cover alignfull has-parallax\" style=\"background-image:url({$demo_image_url})\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-secondary-600-background-color has-background-dim-80 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:heading {\"textAlign\":\"center\"} -->\n<h2 class=\"has-text-align-center\" id=\"centered-cta\">Centered CTA</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"max-w-2xl\",\"fontSize\":\"lg\"} -->\n<p class=\"has-text-align-center max-w-2xl has-lg-font-size\">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis erat ut turpis.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\",\"orientation\":\"horizontal\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"white\",\"textColor\":\"secondary-600\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-secondary-600-color has-white-background-color has-text-color has-background\">[rvn_company_phone]</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:cover -->",
			'keywords' => array( 'cta', 'banner' ),
			'categories' => array( 'theme' ),
		]
	);
	register_block_pattern(
		'example-block-patterns/cta-section-left-aligned',
		[
			'title' => __( 'CTA Section (left aligned)', 'rvn' ),
			'content' => "<!-- wp:cover {\"url\":\"{$demo_image_url}\",\"id\":949,\"hasParallax\":true,\"dimRatio\":80,\"overlayColor\":\"black\",\"align\":\"full\"} -->\n<div class=\"wp-block-cover alignfull has-parallax\" style=\"background-image:url({$demo_image_url})\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-black-background-color has-background-dim-80 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:group {\"align\":\"wide\"} -->\n\t<div class=\"wp-block-group alignwide\"><!-- wp:group {\"className\":\"max-w-2xl ml-0\"} -->\n\t<div class=\"wp-block-group max-w-2xl ml-0\"><!-- wp:heading -->\n\t<h2 id=\"left-aligned-cta\">Left Aligned CTA</h2>\n\t<!-- /wp:heading -->\n\t\n\t<!-- wp:paragraph {\"fontSize\":\"lg\"} -->\n\t<p class=\"has-lg-font-size\">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis erat ut turpis.</p>\n\t<!-- /wp:paragraph -->\n\t\n\t<!-- wp:buttons -->\n\t<div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"white\",\"textColor\":\"secondary-600\"} -->\n\t<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-secondary-600-color has-white-background-color has-text-color has-background\">[rvn_company_phone]</a></div>\n\t<!-- /wp:button --></div>\n\t<!-- /wp:buttons --></div>\n\t<!-- /wp:group --></div>\n\t<!-- /wp:group --></div></div>\n\t<!-- /wp:cover -->",
			'keywords' => array( 'cta', 'banner' ),
			'categories' => array( 'theme' ),
		]
	);
	register_block_pattern(
		'example-block-patterns/cta-section-small',
		[
			'title' => __( 'CTA Section (small)', 'rvn' ),
			'content' => "<!-- wp:group {\"align\":\"full\",\"backgroundColor\":\"primary-500\",\"className\":\"py-7\"} -->\n<div class=\"wp-block-group alignfull py-7 has-primary-500-background-color has-background\"><!-- wp:columns {\"verticalAlignment\":\"center\",\"align\":\"wide\"} -->\n<div class=\"wp-block-columns alignwide are-vertically-aligned-center\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"66.66%\",\"className\":\"mb-block sm:mb-0\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center mb-block sm:mb-0\" style=\"flex-basis:66.66%\"><!-- wp:paragraph {\"textColor\":\"white\",\"fontSize\":\"4xl\"} -->\n<p class=\"has-white-color has-text-color has-4-xl-font-size\"><strong>Call Now!</strong>&nbsp; 24 Hour Emergency Response.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"33.33%\",\"className\":\"text-center\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center text-center\" style=\"flex-basis:33.33%\"><!-- wp:buttons {\"className\":\"justify-start sm:justify-end\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"right\",\"orientation\":\"horizontal\"}} -->\n<div class=\"wp-block-buttons justify-start sm:justify-end\"><!-- wp:button {\"backgroundColor\":\"white\",\"textColor\":\"secondary-500\",\"className\":\"mb-0\",\"fontSize\":\"2xl\"} -->\n<div class=\"wp-block-button has-custom-font-size mb-0 has-2-xl-font-size\"><a class=\"wp-block-button__link has-secondary-500-color has-white-background-color has-text-color has-background\">[rvn_company_phone]</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
			'keywords' => array( 'cta' ),
			'categories' => array( 'theme' ),
		]
	);
	register_block_pattern(
		'example-block-patterns/media-columns-right',
		[
			'title' => __( 'Media Columns (text right)', 'rvn' ),
			'content' => "<!-- wp:columns {\"align\":\"full\",\"className\":\"s-media-columns mt-0\"} -->\n<div class=\"wp-block-columns alignfull s-media-columns mt-0\"><!-- wp:column {\"width\":\"50%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:50%\"><!-- wp:cover {\"url\":\"{$demo_image_url}\",\"id\":838,\"dimRatio\":0,\"isDark\":false} -->\n<div class=\"wp-block-cover is-light\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-0 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-838\" alt=\"\" src=\"{$demo_image_url}\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title…\",\"fontSize\":\"large\"} -->\n<p class=\"has-text-align-center has-large-font-size\"></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:cover --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"50%\",\"className\":\"py-block-lg lg:py-28 px-block-lg\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center py-block-lg lg:py-28 px-block-lg\" style=\"flex-basis:50%\"><!-- wp:group -->\n<div class=\"wp-block-group\"><!-- wp:heading -->\n<h2>Heading</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:group --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
			'keywords' => array( 'media', 'columns', 'text' ),
			'categories' => array( 'theme' ),
		]
	);
	register_block_pattern(
		'example-block-patterns/media-columns-left',
		[
			'title' => __( 'Media Columns (text left)', 'rvn' ),
			'content' => "<!-- wp:columns {\"align\":\"full\",\"className\":\"s-media-columns mt-0\"} -->\n<div class=\"wp-block-columns alignfull s-media-columns mt-0\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"50%\",\"className\":\"py-block-lg lg:py-28 px-block-lg\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center py-block-lg lg:py-28 px-block-lg\" style=\"flex-basis:50%\"><!-- wp:group {\"className\":\"ml-auto\"} -->\n<div class=\"wp-block-group ml-auto\"><!-- wp:heading -->\n<h2>Heading</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:group --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"50%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:50%\"><!-- wp:cover {\"url\":\"{$demo_image_url}\",\"id\":838,\"dimRatio\":0,\"isDark\":false} -->\n<div class=\"wp-block-cover is-light\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-0 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-838\" alt=\"\" src=\"{$demo_image_url}\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"Write title…\",\"fontSize\":\"large\"} -->\n<p class=\"has-text-align-center has-large-font-size\"></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:cover --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
			'keywords' => array( 'media', 'columns', 'text' ),
			'categories' => array( 'theme' ),
		]
	);
	register_block_pattern(
		'example-block-patterns/media-columns',
		[
			'title' => __( 'Media Columns', 'rvn' ),
			'description' => __( 'Media Columns (text and images on both sides)', 'rvn' ),
			'content' => "<!-- wp:columns {\"align\":\"full\",\"className\":\"s-media-columns mt-0\"} -->\n<div class=\"wp-block-columns alignfull s-media-columns mt-0\"><!-- wp:column {\"width\":\"50%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:50%\"><!-- wp:cover {\"url\":\"{$demo_image_url}\",\"id\":838,\"dimRatio\":0} -->\n<div class=\"wp-block-cover\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-0 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-838\" alt=\"\" src=\"{$demo_image_url}\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:heading -->\n<h2>Heading</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra.</p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:cover --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"50%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:50%\"><!-- wp:cover {\"url\":\"{$demo_image_url}\",\"id\":838,\"dimRatio\":0} -->\n<div class=\"wp-block-cover\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-0 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-838\" alt=\"\" src=\"{$demo_image_url}\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:heading -->\n<h2>Heading</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra.</p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:cover --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
			'keywords' => array( 'media', 'columns', 'text' ),
			'categories' => array( 'theme' ),
		]
	);
	register_block_pattern(
		'example-block-patterns/partner-logos-section',
		[
			'title' => __( 'Partner Logos Section', 'rvn' ),
			'content' => "<!-- wp:group {\"align\":\"full\",\"backgroundColor\":\"gray-100\"} -->\n<div class=\"wp-block-group alignfull has-gray-100-background-color has-background\"><!-- wp:heading {\"textAlign\":\"center\"} -->\n<h2 class=\"has-text-align-center\">Our Partners</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {\"align\":\"wide\"} -->\n<div class=\"wp-block-columns alignwide\"><!-- wp:column {\"verticalAlignment\":\"center\",\"backgroundColor\":\"white\",\"className\":\"p-8 shadow-xl rounded-xl\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center p-8 shadow-xl rounded-xl has-white-background-color has-background\"><!-- wp:image {\"align\":\"center\",\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-large\"><img src=\"{$demo_logo_url}\" alt=\"\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"backgroundColor\":\"white\",\"className\":\"p-8 shadow-xl rounded-xl\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center p-8 shadow-xl rounded-xl has-white-background-color has-background\"><!-- wp:image {\"align\":\"center\",\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-large\"><img src=\"{$demo_logo_url}\" alt=\"\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"backgroundColor\":\"white\",\"className\":\"p-8 shadow-xl rounded-xl\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center p-8 shadow-xl rounded-xl has-white-background-color has-background\"><!-- wp:image {\"align\":\"center\",\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-large\"><img src=\"{$demo_logo_url}\" alt=\"\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"backgroundColor\":\"white\",\"className\":\"p-8 shadow-xl rounded-xl\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center p-8 shadow-xl rounded-xl has-white-background-color has-background\"><!-- wp:image {\"align\":\"center\",\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-large\"><img src=\"{$demo_logo_url}\" alt=\"\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"backgroundColor\":\"white\",\"className\":\"p-8 shadow-xl rounded-xl\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center p-8 shadow-xl rounded-xl has-white-background-color has-background\"><!-- wp:image {\"align\":\"center\",\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-large\"><img src=\"{$demo_logo_url}\" alt=\"\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
			'keywords' => array( 'logos', 'grid', 'cards' ),
			'categories' => array( 'theme' ),
		]
	);
}