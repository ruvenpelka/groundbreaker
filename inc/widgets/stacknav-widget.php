<?php

add_action( 'widgets_init', function() {
	register_widget( 'RVN_Stacknav_Widget' );
} );

/**
 * Adds RVN_Stacknav_Widget widget.
 */
class RVN_Stacknav_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'stacknav_widget', // Base ID
			esc_html__( 'ET: Stacked Navigation', 'rvn' ), // Name
			[ 'description' => esc_html__( 'Displays a stacked navigation with second and third level sub-menus (if set). that can be used in the Slideover widget area.', 'rvn' ) ] // Args
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
//		if ( ! has_nav_menu( 'primary' ) ) {
//			return;
//		}

		echo $args['before_widget'];

		echo $args['before_title'];
		if ( empty( $instance['title'] ) ) {
			_e( 'Menu', 'rvn' );
		} else {
			echo apply_filters( 'widget_title', $instance['title'] );
		}
		echo $args['after_title'];

		?>

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<script>
				document.addEventListener('DOMContentLoaded', function () {
					const stacknav_sub_menu_toggler = document.querySelectorAll('.js-stacknav__sub-menu-toggler');
					const stacknav_active_sub_menus = document.querySelectorAll('.js-stacknav li.current-menu-ancestor > .sub-menu');

					// Toggle sub-menu when toggler is clicked
					stacknav_sub_menu_toggler.forEach(toggler => {
						toggler.addEventListener('click', e => {
							const menu_list_item = e.currentTarget.parentNode.parentNode;
							const sub_menu = menu_list_item.children[1];
							toggle_sub_menu(e.currentTarget, sub_menu);
							e.preventDefault();
						});
					});

					// Toogle sub-menus when slideover is toggled
					stacknav_active_sub_menus.forEach(sub_menu => {
						const toggler = sub_menu.parentNode.children[0].children[1];
						document.addEventListener('slideover-open', () => {
							toggle_sub_menu(toggler, sub_menu);
						});
						document.addEventListener('slideover-close', () => {
							toggle_sub_menu(toggler, sub_menu);
						});
					});

					// Sub-menu toggler function
					function toggle_sub_menu(toggler, sub_menu) {
						toggler.classList.toggle('is-active');
						if (!sub_menu.classList.contains('is-active')) {
							sub_menu.classList.add('is-active');
							sub_menu.style.display = 'block';
							sub_menu.style.height = 'auto';
							let sub_menu_height = sub_menu.offsetHeight+ "px";
							sub_menu.style.height = '0px';
							setTimeout( () => {
								sub_menu.style.height = sub_menu_height;
							}, 0);
						} else {
							sub_menu.style.height = '0px';
							sub_menu.classList.remove('is-active');
						}
					}
				}, false);
			</script>
			<nav class="c-stacknav  js-stacknav" role="navigation" aria-label="<?php _e( 'Mobile Menu', 'rvn' ); ?>">
				<?php
				wp_nav_menu( [
					'theme_location'  => 'primary',
					'depth'           => 3,
					'container_class' => '',
					'menu_class'      => 'c-stacknav__list',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'walker'          => new RVN_Slideover_Menu_Walker(),
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

		<?php

		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = isset( $instance['title'] ) ? $instance['title'] : '';
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'rvn' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

}