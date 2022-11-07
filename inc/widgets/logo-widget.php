<?php

add_action( 'widgets_init', function() {
	register_widget( 'RVN_Logo_Widget' );
} );

/**
 * Adds RVN_Logo_Widget widget.
 */
class RVN_Logo_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'logo_widget', // Base ID
			__( 'ET: Logo', 'rvn' ), // Name
			array( 'description' => __( 'Displays the logo, which can be set through the Customizer.', 'rvn' ), ) // Args
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
		get_template_part( 'template-parts/header/logo' );
		echo $args['after_widget'];
	}

}