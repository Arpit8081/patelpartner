<?php

/**
 * Plugin Name:       WPB Accordion Menu or Category
 * Plugin URI:        https://wpbean.com/product/wpb-accordion-menu-or-category
 * Description:       WPB Accordion Menu or Category Plugin allow you to show WordPress menu or any category accordion with submenu / subcategory support. Specially optimized for WooCommerce or any other ecommerce categories. It's responsive and modern flat design.
 * Version:           1.2.4
 * Author:            wpbean
 * Author URI:        http://wpbean.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpb-accordion-menu-or-category
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Internationalization
 */

function wpb_wmca_textdomain() {
	load_plugin_textdomain( 'wpb-accordion-menu-or-category', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'init', 'wpb_wmca_textdomain' );



/**
 * Add plugin action links
 */

function wpb_wmca_plugin_actions( $links ) {
	if( is_admin() ){
		$links[] = '<a href="https://wpbean.com/support/" target="_blank">'. esc_html__('Support', 'wpb-accordion-menu-or-category') .'</a>';
		$links[] = '<a href="https://wpbean.com/downloads/wpb-accordion-menu-category-pro/" target="_blank">'. esc_html__('Premium Version Features', 'wpb-accordion-menu-or-category') .'</a>';
	}
	return $links;
}
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'wpb_wmca_plugin_actions' );



/**
 * Required files
 */

require_once dirname( __FILE__ ) . '/inc/wpb-scripts.php';
require_once dirname( __FILE__ ) . '/inc/wpb-wmca-functions.php';
require_once dirname( __FILE__ ) . '/inc/wpb-wmca-shortcodes.php';
