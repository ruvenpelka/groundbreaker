<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'rvn' ); ?>">
		<?php
		wp_nav_menu( [
			'theme_location'  => 'primary',
			'depth'           => 3,
			'container_class' => '',
			'menu_class'      => 'c-nav',
			'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
		] );
		?>
	</nav>
<?php else : ?>
	<div>
		<a href="<?php echo admin_url( 'nav-menus.php' ); ?>">
			<?php _e( 'Assign a Menu', 'rvn' ); ?>
		</a>
	</div>
<?php endif; ?>
