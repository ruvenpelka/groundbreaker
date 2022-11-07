<?php if ( is_active_sidebar( 'footer' ) ) : ?>

	<?php
	$footer_columns = rvn_get_theme_mod( 'footer_widget_area_columns' );

	switch ( $footer_columns ) {
		case '2' : $footer_columns_class = 'grid sm:grid-cols-2'; break;
		case '3' : $footer_columns_class = 'grid lg:grid-cols-3'; break;
		case '4' : $footer_columns_class = 'grid sm:grid-cols-2 lg:grid-cols-4'; break;
		default :  $footer_columns_class = 'grid';
	}
	?>

	<footer class="c-footer-widget-area">
		<div class="o-container c-footer-widget-area__inner-container <?php echo $footer_columns_class; ?>">
			<?php dynamic_sidebar( apply_filters( 'rvn_footer_sidebar', 'footer' ) ); ?>
		</div>
	</footer>

<?php endif; ?>