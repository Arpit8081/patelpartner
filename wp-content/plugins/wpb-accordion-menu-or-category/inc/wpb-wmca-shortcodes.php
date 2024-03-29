<?php

/*
	WPB Menu & Category Accordion
	By WPBean
	
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 



/* ==========================================================================
   WPB Category Accordion Shortcode
   ========================================================================== */


if ( !function_exists('wpb_wmca_category_shortcode_function') ):

	function wpb_wmca_category_shortcode_function($atts){
		extract(shortcode_atts(array(
			'taxonomy' 		=> 'category',
			'orderby' 		=> 'name',
			'order' 		=> 'ASC',
			'show_count' 	=> 'no', // yes
			'hide_empty' 	=> 'yes', // no
			'icon' 			=> '+',
			'icon' 			=> '+',
			'accordion' 	=> 'no', // Close previously opened accordion
		), $atts));

		ob_start();
		wpb_wmca_adding_scripts();
		?>

		<div class="wpb_category_n_menu_accordion" data-accordion="<?php echo esc_attr( $accordion == 'yes' ? 'true' : 'false' ) ; ?>" data-indicator_icon="<?php echo esc_attr( $icon ) ; ?>">
			<ul class="wpb_category_n_menu_accordion_list">
				<?php 
				    $args = array(
						'show_option_all'    => '',
						'orderby'            => $orderby,
						'order'              => $order,
						'style'              => 'list',
						'show_count'         => ( $show_count == 'yes' ? 1 : 0 ),
						'hide_empty'         => ( $hide_empty == 'yes' ? 1 : 0 ),
						'exclude'            => '',
						'exclude_tree'       => '',
						'include'            => '',
						'hierarchical'       => 1,
						'title_li'           => '',
						'show_option_none'   => '',
						'number'             => null,
						'echo'               => 1,
						'depth'              => 0,
						'current_category'   => 0,
						'pad_counts'         => 0,
						'taxonomy'           => $taxonomy,
						'walker'             => new WPB_WCMA_Category_Walker,
				    );
				    wp_list_categories( $args ); 
				?>
			</ul>
		</div>

		<?php
		return ob_get_clean();
	}

	add_shortcode( 'wpb_category_accordion', 'wpb_wmca_category_shortcode_function' );

endif;	




/* ==========================================================================
   WPB Menu Accordion Shortcode
   ========================================================================== */


if ( !function_exists('wpb_wmca_menu_shortcode_function') ):

	function wpb_wmca_menu_shortcode_function($atts){
		extract(shortcode_atts(array(
			'theme_location' 	=> '', // menu theme location
			'menu' 				=> '', // (optional) The menu that is desired; accepts (matching in order) id, slug, name
			'icon' 				=> '+',
			'accordion' 		=> 'no', // Close previously opened accordion
		), $atts));

		ob_start();
		wpb_wmca_adding_scripts();
		?>

		<div class="wpb_category_n_menu_accordion" data-accordion="<?php echo esc_attr( $accordion == 'yes' ? 'true' : 'false' ) ; ?>" data-indicator_icon="<?php echo esc_attr( $icon ) ; ?>">
			<?php

				$options = array(
					'theme_location'  => $theme_location,
					'menu'            => $menu,
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'wpb_accordion_menu',
					'menu_id'         => '',
					'echo'            => true,
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="wpb_category_n_menu_accordion_list %2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);

				wp_nav_menu( $options );

			?>
		</div>

		<?php
		return ob_get_clean();
	}

	add_shortcode( 'wpb_menu_accordion', 'wpb_wmca_menu_shortcode_function' );

endif;	
