<?php
/**
 * Rentals data initializer
 *
 * Initializes everything related to `rental` post type.
 *
 * @since   1.0.0
 * @package VR
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Admin/Renatals.
 *
 * Rentals related files.
 *
 * @since 1.0.0
 */

// Custom Post Type: `vr_rental`.
if ( file_exists( VR_DIR . '/assets/rental/cpt-rental.php' ) ) {
	require_once( VR_DIR . '/assets/rental/cpt-rental.php' );
}

// Custom Taxonomy: `rental-destination`.
if ( file_exists( VR_DIR . '/assets/rental/ct-rental-destination.php' ) ) {
	require_once( VR_DIR . '/assets/rental/ct-rental-destination.php' );
}

// Custom Taxonomy: `rental-feature`.
if ( file_exists( VR_DIR . '/assets/rental/ct-rental-feature.php' ) ) {
	require_once( VR_DIR . '/assets/rental/ct-rental-feature.php' );
}