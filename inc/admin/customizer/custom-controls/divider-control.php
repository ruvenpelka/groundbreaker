<?php

if ( class_exists( 'WP_Customize_Control' ) ) {

	class RVN_Customizer_Divider_Control extends WP_Customize_Control {
		public $type = 'divider';

		public function render_content() {
			echo '<hr class="rvn-divider">';
		}
	}

}