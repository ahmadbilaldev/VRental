<?php
/**
 * V Rental Main File
 *
 * This is the main file of VR which controls everything in this plugin.
 *
 * @package VR
 * @since 	1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Initializes rental-init.php
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/rental/rental-init.php' ) ) {
	require_once( VR_DIR . '/assets/rental/rental-init.php' );
}
