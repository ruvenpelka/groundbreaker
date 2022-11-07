<?php
/**
 * Header Template
 */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class( 's-site' ); ?>>

		<?php wp_body_open(); ?>

		<?php get_template_part( 'template-parts/slideover' ); ?>

		<div class="c-site-container">

			<?php get_template_part( 'template-parts/masthead' ); ?>

