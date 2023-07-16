<?php 

if ( ! defined('ABSPATH')) exit;  // if direct access 

/**
 *  Assestload class
 */
class gstassetsload  
{
	
	function __construct()
	{
		add_action( 'wp_enqueue_scripts', [$this, 'gst_register_assets']);
	}	


 function gst_register_assets() {

wp_enqueue_script( 'gst-js', plugins_url( 'assets/js/gst_javascript.js', __FILE__ ), array( 'jquery' ), 0.1, false );
	
wp_enqueue_style( 'gst-css', plugins_url( 'assets/css/gst_style.css', __FILE__ ), false, time(), 'all' );	

wp_enqueue_style( 'awesome-font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false, time(), 'all');
		
	}

}		