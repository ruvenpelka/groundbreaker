<?php
/**
 * Template part for displaying post content on single.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="alignfull my-0">
			<?php echo rvn_get_featured_image( 'full', [ 'class' => 'w-full' ] ); ?>
		</div>
	<?php endif; ?>

	<div class="wp-site-blocks my-block-lg">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<?php
		wp_link_pages( [
			'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'rvn' ) . '">',
			'after'    => '</nav>',
			/* translators: %: page number. */
			'pagelink' => esc_html__( 'Page %', 'rvn' ),
		] );
		?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->