<?php
/**
 * @package ET_DEBUG
 * @version 1.0.0
 */
/*
Plugin Name: Et Debug
Plugin URI: https://github.com/eduard-ungureanu/et-debug
Description: This is an add-on for the original WP Debuggin Plugin, which adds the option to enable/disable the `ET_DEBUG` constant which will enable the debugging for submittions process of Email Opt-in module and Bloom 
Author: Eduard Ungureanu
Version: 1.0.0
Author URI: https://github.com/eduard-ungureanu
*/

add_filter(
	'wp_debugging_add_constants',
	function( $added_constants ) {
		$my_constants = [
			'my_test_constant'      => [
				'ET_DEBUG' => 'true',
				'raw'   => false,
			],
		];
		return array_merge( $added_constants, $my_constants );
	},
	10,
	1
);