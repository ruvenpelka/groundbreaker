<?php
/**
 * Template Name: Right Sidebar
 */
?>

<?php get_header(); ?>

<div class="o-container px-0 lg:grid lg:grid-cols-12">

	<main class="lg:col-span-9">
		<?php get_template_part( 'template-parts/content/content-page' ); ?>
	</main>

	<div class="lg:col-span-3">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>