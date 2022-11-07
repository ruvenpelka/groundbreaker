<?php
/**
 * Template part for displaying page content on page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'wp-site-blocks' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="alignfull my-0">
			<?php echo rvn_get_featured_image( 'full', [ 'class' => 'w-full' ] ); ?>
		</div>
	<?php endif; ?>

	<?php the_content(); ?>

	<?php
	wp_link_pages( [
		'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'rvn' ) . '">',
		'after'    => '</nav>',
		/* translators: %: page number. */
		'pagelink' => esc_html__( 'Page %', 'rvn' ),
	] );
	?>

</article><!-- #post-<?php the_ID(); ?> -->