<?php
/**
 * Plugin Name: V-Rental
 * Plugin URI: http://github.com/mrahmadbilal/VRental
 * Description: A plugin rental bookings.
 * Author: mrahmadbilal
 * Author URI: http://github.com/mrahmadbilal
 * Text Domain: VR
 * Version: 1.0.0
 * License: GPL v2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package VR
 *
 * GitHub Plugin URI: https://github.com/mrahmadbilal/VRental
 * GitHub Branch: master
 */

// If this file is called directly, abort.
If ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define global constants
 *
 * @package VR
 * @since 1.0.0
 */

// VR version.
if ( ! defined( 'VR_VERSION' ) ) {
	define( 'VR_VERSION', 1.0 );
}

// Define VR name.
If ( ! defined( 'VR_NAME' ) ) {
	define( 'VR_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

// VR Dir.
if ( ! defined( 'VR_DIR' ) ) {
	define( 'VR_DIR' , WP_PLUGIN_DIR . '/' . VR_NAME );
}

// VR URL.
if ( ! defined( 'VR_URL' ) ) {
	define( 'VR_URL' , WP_PLUGIN_URL . '/' . VR_NAME );
}

/**
 * Main File.
 */
require_once( VR_DIR . '/assets/vr-init.php' );