<?php
/**
Plugin Name: Affiliate Notice
Author: Nate Conley
Description: Display an affiliate link disclaimer
Version: 1.0
Author URI: http://nateconley.com
License: GPL2
**/

function affn_disclaimer( $content ) {
	if ( ! is_single() ) {
		return $content;
	}
	wp_enqueue_style(
		'attn-disclaimer',
		plugin_dir_url( __FILE__ ) . 'assets/css/style.css',
		array(),
		'1.0'
	);
	ob_start();
	require_once plugin_dir_path( __FILE__ ) . 'partials/disclaimer.php';
	$return = ob_get_clean();
	return $content . $return;
}
add_filter( 'the_content', 'affn_disclaimer' );
