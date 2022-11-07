<?php if ( is_front_page() ) : ?>
	<h1 class="sr-only">
		<?php bloginfo( 'name' ); ?>
	</h1>
<?php endif; ?>

<?php if ( has_custom_logo() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-logo__link">
		<span class="sr-only">
			<?php bloginfo( 'name' ); ?>
		</span>
		<img class="c-logo__image" src="<?php echo rvn_get_custom_logo_url(); ?>" alt="<?php _e( 'Company Logo', 'rvn' ); ?>">
	</a>
<?php else : ?>
	<a class="c-site-title"
	   href="<?php echo esc_url( home_url( '/' ) ); ?>"
	   title="<?php bloginfo( 'description' ); ?>">
		<?php bloginfo( 'name' ); ?>
	</a>
<?php endif; ?>