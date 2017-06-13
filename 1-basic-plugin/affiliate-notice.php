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
	$return = '<i style="font-size: 0.8rem">*This post may contain <b>affiliate links</b> which means that we make a commission if you purchase an item</i>';
	return $content . $return;
}
add_filter( 'the_content', 'affn_disclaimer' );
