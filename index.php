<?php
/**
 * @package ET_DEBUG
 * @version 1.0.0
 */
/*
Plugin Name: ET Debug
Plugin URI: https://github.com/eduard-ungureanu/et-debug
Description: Adds the <strong>ET_DEBUG</strong> constant if the <strong>WP Debugging</strong> plugin is active.
Author: Eduard Ungureanu
Version: 1.0.0
Author URI: https://github.com/eduard-ungureanu
*/
add_action('plugins_loaded', function () {
	require_once(ABSPATH . '/wp-admin/includes/plugin.php');

	if (!is_plugin_active('wp-debugging/wp-debugging.php')) {
		deactivate_plugins('et-debug/index.php');
		add_action('admin_notices', 'dt_admin_notice');
  } else {
		add_filter('wp_debugging_add_constants', function( $added_constants ) {
			$etdebug = [
				'et_debug'      => [
					'value' => 'true',
					'raw'   => true,
				],
			];
		return array_merge( $added_constants, $etdebug );
		}, 10, 1);
	}
});

/**
 * dt_admin_notice
 *
 * @return void
 */
function dt_admin_notice() {
	echo '<div class="error"><p>Plugin deactivated. Please activate <strong>WP Debugging Plugin first</strong>!</p></div>';
}