<?php
/**
 * Index Template
 *
 * This is the most generic template file in a WordPress. It is used to display
 * a page when nothing more specific matches a query. For example, it puts
 * together the home page when no home.php file exists.
 */
?>

<?php get_header(); ?>

	<div class="">

		<main class="wp-site-blocks my-block-lg">

			<h1>
				<?php single_post_title(); ?>
			</h1>

			<hr>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content/content-post-preview' ); ?>
					<hr>

				<?php endwhile; ?>

				<?php global $wp_query; ?>
				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
					<nav class="c-paginator">
						<div class="c-paginator__prev">
							<?php next_posts_link( __( "<span class='meta-nav'>&laquo;</span> Older posts", 'rvn' ) ); ?>
						</div>
						<div class="c-paginator__next">
							<?php previous_posts_link( __( "Newer posts <span class='meta-nav'>&raquo;</span>", 'rvn' ) ); ?>
						</div>
					</nav>
				<?php endif; ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content/content-none' ); ?>

			<?php endif; ?>

		</main>

	</div>

<?php get_footer(); ?>