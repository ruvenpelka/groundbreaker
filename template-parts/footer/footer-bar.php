<?php
$footer_bar_text = rvn_get_theme_mod( 'footer_bar_text' );
$footer_bar_text = do_shortcode( $footer_bar_text );
?>

<?php if ( $footer_bar_text ) : ?>
	<div class="c-footer-bar">
		<div class="c-footer-bar__inner-container o-container">
			<?php echo $footer_bar_text; ?>
		</div>
	</div>
<?php endif; ?>