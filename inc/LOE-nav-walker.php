<?php 



if ( ! class_exists( 'LOE_Nav_Walker' ) ) {



  class LOE_Nav_Walker extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat( "\t", $depth );
			$output .= "\n$indent<ul class=\" dropdown-menu\" >\n";
    }
    

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
			
			if ( strcasecmp( $item->attr_title, 'divider' )  === 0  && $depth === 1 ) {
				$output .= $indent . '<li role="presentation" class="divider">';
			} elseif ( strcasecmp( $item->title, 'divider' ) === 0 && $depth === 1 ) {
				$output .= $indent . '<li role="presentation" class="divider">';
			} elseif ( strcasecmp( $item->attr_title, 'dropdown-header' ) === 0 && $depth === 1 ) {
				$output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
			} elseif ( strcasecmp( $item->attr_title, 'disabled' ) === 0 ) {
				$output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
			} else {
				$value = '';
				$class_names = $value;
				$classes = empty( $item->classes ) ? array() : (array) $item->classes;
				$classes[] = 'menu-item-' . $item->ID;
				$classes[] .= 'nav-item';
				$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

        // If first menu item and has children ? give it dropdown class.
				if ( $depth == 0 && $args->has_children ) {
					$class_names .= ' dropdown';
				}

        // If sub menu item and has children ? give it sub-dropdown class.
				if ($depth >= 1 && $args->has_children){
					$class_names .= ' sub-dropdown';
        }
        
        // If has current item has current item class ? give it active class.
				if ( in_array( 'current-menu-item', $classes, true ) ) {
					$class_names .= ' active';
        }
        
        // Join all classes if valid
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        // Apply ID
				$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
        
        // Output Menu Item.
        $output .= $indent . '<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"' . $id . $value . $class_names . '>';
        


				$atts = array();
				if ( empty( $item->attr_title ) ) {
					$atts['title']  = ! empty( $item->title )   ? strip_tags( $item->title ) : '';
				} else {
					$atts['title'] = $item->attr_title;
				}
				$atts['target'] = ! empty( $item->target )	? $item->target	: '';
				$atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';


				// If item has_children add atts to a.
				//=====================================

				if ( $args->has_children) {
					$atts['href']   		= '';
					$atts['class']			= 'nav-link';
				} else {
					$atts['href']       = ! empty( $item->url ) ? $item->url : '';
					$atts['class']	    ='nav-link';
				}
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
				$attributes = '';
				foreach ( $atts as $attr => $value ) {
					if ( ! empty( $value ) ) {
						$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );

						$attributes .= ' ' . $attr . '="' . $value . '"';
					}
				}
        $item_output = $args->before;
        

				/*
				 * Glyphicons/Font-Awesome
				 * ===========
				 * Since the the menu item is NOT a Divider or Header we check the see
				 * if there is a value in the attr_title property. If the attr_title
				 * property is NOT null we apply it as the class name for the glyphicon.
				 */
				if ( ! empty( $item->attr_title ) ) {
					$pos = strpos( esc_attr( $item->attr_title ), 'glyphicon' );
					if ( false !== $pos ) {
						$item_output .= '<a' . $attributes . '><span class="glyphicon ' . esc_attr( $item->attr_title ) . '" aria-hidden="true"></span>&nbsp;';
					} else {
						$item_output .= '<a' . $attributes . '><i class="fa ' . esc_attr( $item->attr_title ) . '" aria-hidden="true"></i>&nbsp;';
					}
				} else {
					$item_output .= '<a' . $attributes . '>';
				}
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= ( $args->has_children) ? ' <span class="caret fa fa-angle-right"></span></a>' : '</a>';
        $item_output .= $args->after;
        


				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			} // End if().
    }


    public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
			if ( ! $element ) {
				return; }
			$id_field = $this->db_fields['id'];
			// Display this element.
			if ( is_object( $args[0] ) ) {
				$args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] ); }
			parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
    

    public static function fallback( $args ) {
			if ( current_user_can( 'edit_theme_options' ) ) {
				/* Get Arguments. */
				$container = $args['container'];
				$container_id = $args['container_id'];
				$container_class = $args['container_class'];
				$menu_class = $args['menu_class'];
				$menu_id = $args['menu_id'];
				if ( $container ) {
					echo '<' . esc_attr( $container );
					if ( $container_id ) {
						echo ' id="' . esc_attr( $container_id ) . '"';
					}
					if ( $container_class ) {
						echo ' class="' . sanitize_html_class( $container_class ) . '"'; }
					echo '>';
				}
				echo '<ul';
				if ( $menu_id ) {
					echo ' id="' . esc_attr( $menu_id ) . '"'; }
				if ( $menu_class ) {
					echo ' class="' . esc_attr( $menu_class ) . '"'; }
				echo '>';
				echo '<li><a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '" title="">' . esc_attr( 'Add a menu', '' ) . '</a></li>';
				echo '</ul>';
				if ( $container ) {
					echo '</' . esc_attr( $container ) . '>'; }
			}
		}


  }








}