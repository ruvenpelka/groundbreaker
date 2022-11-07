<?php
/**
 * Side Nav Menu Walker.
 */



/**
 * Side Nav Menu Walker.
 */

if ( ! class_exists( 'RVN_Slideover_Menu_Walker' ) ) {

	class RVN_Slideover_Menu_Walker extends Walker_Nav_Menu {

//		public $number = 1;

		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

			$class_names = $value = '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;

			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

			$output .= $indent . '<li' . $id . $value . $class_names .'>';

			// add span with number here
//			if ( $depth == 0 ) { // remove if statement if depth check is not required
//				$output .= sprintf( '<span>%02s.</span>', $this->number++ );
//			}

			$atts = array();
			$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
			$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
			$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
			$atts['href']   = ! empty( $item->url )        ? $item->url        : '';
			$atts['class']  = 'c-stacknav__link';

			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( ! empty( $value ) ) {
					$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}

			$item_has_children = in_array( 'menu-item-has-children', $item->classes );

			$arrow_icon = '<svg xmlns="http://www.w3.org/2000/svg" class="c-stacknav__sub-menu-toggler-icon h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">';
			$arrow_icon.= '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />';
			$arrow_icon.= '</svg>';

			$item_output  = $args->before;
			$item_output .= $item_has_children ? '<div class="c-stacknav__item  c-stacknav__item--with-children  js-stacknav__item">' : '<div class="c-stacknav__item">';
			$item_output .= "<div class='c-stacknav__link-wrapper'>";
			$item_output .= "<a {$attributes}>";
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= '</div>';
			$item_output .= $item_has_children ? '<a href="#" class="c-stacknav__sub-menu-toggler  js-stacknav__sub-menu-toggler">'.$arrow_icon.'</a>' : '';
			$item_output .= '</div>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}

	}

}