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
 * Metabox main plugin
 */

// Metabox.io
if ( file_exists( VR_DIR . '/assets/metaboxes/meta-box.php' ) ) {
	require_once( VR_DIR . '/assets/metaboxes/meta-box.php' );
}

/**
 * Meta Box Plugin Extensions.
 *
 * @since 1.0.0
 */

// Geolocation extension.
if ( ! function_exists( 'meta_box_geolocation_load' ) ) {
	if ( file_exists( VR_DIR . '/assets/metaboxes/metabox-extensions/meta-box-geolocation/meta-box-geolocation.php' ) ) {
	    require_once( VR_DIR . '/assets/metaboxes/metabox-extensions/meta-box-geolocation/meta-box-geolocation.php' );
	}
}

// Show Hide extension.
if ( ! class_exists( 'MB_Show_Hide' ) ) {
	if ( file_exists( VR_DIR . '/assets/metaboxes/metabox-extensions/meta-box-show-hide/meta-box-show-hide.php' ) ) {
	    require_once( VR_DIR . '/assets/metaboxes/metabox-extensions/meta-box-show-hide/meta-box-show-hide.php' );
	}
}

// Tabs extension.
if ( ! class_exists( 'MB_Tabs' ) ) {
	if ( file_exists( VR_DIR . '/assets/metaboxes/metabox-extensions/meta-box-tabs/meta-box-tabs.php' ) ) {
	    require_once( VR_DIR . '/assets/metaboxes/metabox-extensions/meta-box-tabs/meta-box-tabs.php' );
	}
}

// Groups extension.
if ( ! class_exists( 'RWMB_Group' ) ) {
	if ( file_exists( VR_DIR . '/assets/metaboxes/metabox-extensions/meta-box-group/meta-box-group.php' ) ) {
	    require_once( VR_DIR . '/assets/metaboxes/metabox-extensions/meta-box-group/meta-box-group.php' );
	}
}

// Term Meta extension.
if ( ! class_exists( 'MB_Term_Meta_Box' ) ) {
	if ( file_exists( VR_DIR . '/assets/metaboxes/metabox-extensions/mb-term-meta/mb-term-meta.php' ) ) {
	    require_once( VR_DIR . '/assets/metaboxes/metabox-extensions/mb-term-meta/mb-term-meta.php' );
	}
}


/**
* Metaboxes
*/

// Metabox 1
if ( file_exists( VR_DIR . '/assets/metaboxes/vr-metabox-1.php' ) ) {
	require_once( VR_DIR . '/assets/metaboxes/vr-metabox-1.php' );
}
// Metabox 2
if ( file_exists( VR_DIR . '/assets/metaboxes/vr-metabox-2.php' ) ) {
	require_once( VR_DIR . '/assets/metaboxes/vr-metabox-2.php' );
}