<?php
$topbar_container = rvn_get_theme_mod( 'topbar_container' );
$topbar_container_class = ( $topbar_container == 'full' ) ? 'max-w-full' : '';
$topbar_columns = rvn_get_theme_mod( 'topbar_columns' );
$topbar_column_class = "o-widget-header-area--{$topbar_columns}-column-layout";

$header_container = rvn_get_theme_mod( 'header_container' );
$header_container_class = ( $header_container == 'full' ) ? 'max-w-full' : '';
$header_columns = rvn_get_theme_mod( 'header_columns' );
$header_column_class = "o-widget-header-area--{$header_columns}-column-layout";

$navbar_container = rvn_get_theme_mod( 'navbar_container' );
$navbar_container_class = ( $navbar_container == 'full' ) ? 'max-w-full' : '';
$navbar_columns = rvn_get_theme_mod( 'navbar_columns' );
$navbar_column_class = "o-widget-header-area--{$navbar_columns}-column-layout";
?>

<?php if ( is_user_logged_in() && ! is_active_sidebar( 'header' ) ) : ?>
	<div class="c-theme-info-box">
		<div class="c-theme-info-box__inner">
			<?php printf( __( 'Please set up the header for desktop and mobile by <a href="%s"><b>adding widgets</b></a> to the Header and Navbar widget areas.', 'rvn' ), admin_url( 'widgets.php' ) ); ?>
		</div>
	</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'topbar' ) ) : ?>
	<!-- DESKTOP TOPBAR -->
	<div class="relative z-30 hidden lg:block">
		<div class="<?php echo $topbar_column_class; ?> o-widget-header-area s-widget-topbar c-widget-topbar">
			<div class="<?php echo $topbar_container_class; ?> o-widget-header-area__inner-container c-widget-topbar__inner-container">
				<?php dynamic_sidebar( apply_filters( 'rvn_topbar_sidebar', 'topbar' ) ); ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'mobile-topbar' ) ) : ?>
	<!-- MOBILE TOPBAR -->
	<div class="relative z-30 lg:hidden">
		<div class="<?php echo $topbar_column_class; ?> o-widget-header-area s-widget-topbar c-widget-topbar">
			<div class="<?php echo $topbar_container_class; ?> o-widget-header-area__inner-container c-widget-topbar__inner-container">
				<?php dynamic_sidebar( apply_filters( 'rvn_mobile_topbar_sidebar', 'mobile-topbar' ) ); ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<!-- DESKTOP HEADER -->
<div class="relative z-20 hidden lg:block">
	<div class="<?php echo $header_column_class; ?> o-widget-header-area s-widget-header c-widget-header">
		<div class="<?php echo $header_container_class; ?> o-widget-header-area__inner-container c-widget-header__inner-container">
			<?php if ( ! dynamic_sidebar( apply_filters( 'rvn_header_sidebar', 'header' ) ) ) : ?>
				<?php the_widget( 'RVN_Logo_Widget' ); ?>
				<?php the_widget( 'RVN_Primary_Nav_Widget' ); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<!-- MOBILE HEADER -->
<div class="relative z-20 lg:hidden">
	<div class="<?php echo $header_column_class; ?> o-widget-header-area s-widget-header c-widget-header">
		<div class="<?php echo $header_container_class; ?> o-widget-header-area__inner-container c-widget-header__inner-container">
			<?php if ( ! dynamic_sidebar( apply_filters( 'rvn_mobile_header_sidebar', 'mobile-header' ) ) ) : ?>
				<?php the_widget( 'RVN_Logo_Widget' ); ?>
				<?php the_widget( 'RVN_Hamburger_Menu_Widget' ); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php if ( is_active_sidebar( 'navbar' ) ) : ?>
	<!-- DESKTOP NAVBAR -->
	<div class="relative z-10 hidden lg:block">
		<div class="<?php echo $navbar_column_class; ?> o-widget-header-area s-widget-navbar c-widget-navbar">
			<div class="<?php echo $navbar_container_class; ?> o-widget-header-area__inner-container c-widget-navbar__inner-container">
				<?php dynamic_sidebar( apply_filters( 'rvn_navbar_sidebar', 'navbar' ) ); ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'mobile-navbar' ) ) : ?>
	<!-- MOBILE NAVBAR -->
	<div class="relative sticky top-0 z-10 lg:hidden">
		<div class="<?php echo $navbar_column_class; ?> o-widget-header-area s-widget-navbar c-widget-navbar">
			<div class="<?php echo $navbar_container_class; ?> o-widget-header-area__inner-container c-widget-navbar__inner-container">
				<?php dynamic_sidebar( apply_filters( 'rvn_mobile_navbar_sidebar', 'mobile-navbar' ) ); ?>
			</div>
		</div>
	</div>
<?php endif; ?>