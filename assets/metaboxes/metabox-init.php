<?php

/**
 * Metabox Initializer
 *
 * Initializes all metaboxes.
 *
 * @since   1.0.0
 * @package VR
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Metabox related files.
 */

// Metabox.io
if ( file_exists( VR_DIR . '/assets/metaboxes/meta-box.php' ) ) {
	require_once( VR_DIR . '/assets/metaboxes/meta-box.php' );
}

// Metabox 1
if ( file_exists( VR_DIR . '/assets/metaboxes/vr-metabox-1.php' ) ) {
	require_once( VR_DIR . '/assets/metaboxes/vr-metabox-1.php' );
}