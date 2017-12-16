<?php
/*
 * Plugin Name: UIX Demo Testing
 * Plugin URI: https://github.com/DavidCramer/uix
 * Description: Demonstrates UIX features.
 * Version: 1.0.0
 * Author: David Cramer
 * Author URI: https://cramer.co.za
 * Text Domain: uix-demo
 * License: GPL2+
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Constants.
define( 'UIXDEMO_PATH', plugin_dir_path( __FILE__ ) );
define( 'UIXDEMO_CORE', __FILE__ );
define( 'UIXDEMO_URL', plugin_dir_url( __FILE__ ) );
define( 'UIXDEMO_VER', '1.0.0' );

if ( ! version_compare( PHP_VERSION, '5.6.0', '>=' ) ) {
	if ( is_admin() ) {
		add_action( 'admin_notices', 'uix_dev_php_ver' );
	}
} else {
	// Includes and run.
	add_action( 'uix_register', 'register_ui_folders' );
}

/**
 * Register paths to UIX UI definition autoloader.
 *
 * @since   1.0.0
 * @action  'uix_register
 *
 * @param \uix\ui $uix Instance of the UI object.
 */
function register_ui_folders( $uix ) {
	$uix->register( plugin_dir_path( __FILE__ ) . 'ui' );
}

/**
 * Simple admin notice output for incompatible PHP version.
 **/
function uix_dev_php_ver() {
	$message = __( 'This Demo requires PHP version 5.6 or later.', 'uix-demo' );
	echo wp_kses_post( '<div id="gymalie_game_error" class="error notice notice-error"><p>' . esc_html( $message ) . '</p></div>', wp_kses_allowed_html( 'post' ) );
}