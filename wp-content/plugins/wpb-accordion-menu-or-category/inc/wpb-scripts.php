<?php

/*
	WPB Menu And Category Accordion
	By WPBean
	
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 



/**
 * Enqueue Scripts
 */


function wpb_wmca_adding_scripts() {
	wp_enqueue_script('wpb_wmca_jquery_cookie', plugins_url('../assets/js/jquery.cookie.js', __FILE__) , array('jquery'), '1.0', false);
	wp_enqueue_script('wpb_wmca_accordion_script', plugins_url('../assets/js/jquery.navgoco.min.js', __FILE__) , array('jquery'), '1.0', false);
	wp_enqueue_script('wpb_wmca_plugin_init_script', plugins_url('../assets/js/main.js', __FILE__) , array('jquery'), '1.0', false);
	wp_enqueue_style( 'wpb_wmca_accordion_style', plugins_url('../assets/css/wpb_wmca_style.css', __FILE__), '', '1.0' );
}
