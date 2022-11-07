<?php

add_action( 'widgets_init', function() {
	register_widget( 'RVN_Hamburger_Menu_Widget' );
} );

/**
 * Adds RVN_Hamburger_Menu_Widget widget.
 */
class RVN_Hamburger_Menu_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'hamburger_menu_widget', // Base ID
			__( 'ET: Hamburger Menu', 'rvn' ), // Name
			array( 'description' => __( 'Displays a Hamburger icon that triggers the Slideover section when clicked.', 'rvn' ), ) // Args
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
		get_template_part( 'template-parts/header/hamburger' );
		echo $args['after_widget'];
	}

}