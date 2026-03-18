<?php
/**
 * Plugin Name: Divi Restore Theme Builder Templates
 * Plugin URI:  https://github.com/eduard-ungureanu/restore-missing-tb-templates
 * Description: Restore deleted or missing Divi Theme Builder templates and template parts. Compatible with Divi 4 and Divi 5.
 * Version:     2.0
 * Author:      Eduard Ungureanu
 * Author URI:  https://github.com/eduard-ungureanu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'RMTBT_VERSION', '2.0' );
define( 'RMTBT_DIR', plugin_dir_path( __FILE__ ) );

require_once RMTBT_DIR . 'includes/class-rmtbt-admin.php';

add_action( 'plugins_loaded', function () {
	if ( is_admin() ) {
		( new RMTBT_Admin() )->init();
	}
} );
