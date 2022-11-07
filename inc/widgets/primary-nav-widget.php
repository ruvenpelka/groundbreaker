<?php

add_action( 'widgets_init', function() {
	register_widget( 'RVN_Primary_Nav_Widget' );
} );

/**
 * Adds RVN_Primary_Nav_Widget widget.
 */
class RVN_Primary_Nav_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'primary_nav_widget', // Base ID
			__( 'ET: Primary Navigation', 'rvn' ), // Name
			array( 'description' => __( 'Displays the primary navigation, which can be setup in the Menus scrren, and second and third level sub-menus.', 'rvn' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		get_template_part( 'template-parts/header/primary-nav' );
		echo $args['after_widget'];
	}

}