<?php
/**
 * Template Name: Left Sidebar
 */
?>

<?php get_header(); ?>

<div class="o-container px-0 lg:grid lg:grid-cols-12">

	<main class="lg:col-span-9 order-2">
		<?php get_template_part( 'template-parts/content/content-page' ); ?>
	</main>

	<div class="lg:col-span-3 order-1">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>