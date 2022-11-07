<?php
/**
 * Template part for displaying a post preview on index.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>

	<header>
		<?php if ( has_post_thumbnail() ) : ?>
			<div href="<?php the_permalink(); ?>" class="block mb-4">
				<?php echo rvn_get_featured_image( 'full', [ 'class' => 'w-full' ] ); ?>
			</div>
		<?php endif; ?>
		<a href="<?php the_permalink(); ?>">
			<h2 class="mb-4">
				<?php the_title(); ?>
			</h2>
		</a>
	</header>

	<?php the_excerpt(); ?>

</article><!-- #post-<?php the_ID(); ?> -->