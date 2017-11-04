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
if ( ! defined( 'WPINC' ) ) exit;

/**
 * Meta boxes initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/meta-boxes/meta-box-init.php' ) ) {
	require_once( VR_DIR . '/assets/meta-boxes/meta-box-init.php' );
}

/**
 * Rental initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/rental/rental-init.php' ) ) {
	require_once( VR_DIR . '/assets/rental/rental-init.php' );
}

/**
 * Booking initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/booking/booking-init.php' ) ) {
	require_once( VR_DIR . '/assets/booking/booking-init.php' );
}

/**
 * Agent initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/agent/agent-init.php' ) ) {
	require_once( VR_DIR . '/assets/agent/agent-init.php' );
}

/**
 * Parnter initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/partner/partner-init.php' ) ) {
	// require_once( VR_DIR . '/assets/partner/partner-init.php' );
}

/**
 * Member initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/member/member-init.php' ) ) {
	require_once( VR_DIR . '/assets/member/member-init.php' );
}

/**
 * Favorite initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/favorite/favorite-init.php' ) ) {
	require_once( VR_DIR . '/assets/favorite/favorite-init.php' );
}

/**
 * Template initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/template/template-init.php' ) ) {
	require_once( VR_DIR . '/assets/template/template-init.php' );
}

/**
 * Admin Menu Order.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/admin/admin-menu-order.php' ) ) {
	// require_once( VR_DIR . '/assets/admin/admin-menu-order.php' );
}

/**
 * CLASS: VR_Scripts.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/class-scripts.php' ) ) {
	require_once( VR_DIR . '/assets/class-scripts.php' );
}

/**
 * CLASS: VR_Styles.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/class-styles.php' ) ) {
	require_once( VR_DIR . '/assets/class-styles.php' );
}

/**
 * CLASS: VR_Functions.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/class-functions.php' ) ) {
	require_once( VR_DIR . '/assets/class-functions.php' );
}

/**
 * Plugin: Cateogry Images.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/plugin/category-images/category-images.php' ) ) {
	require_once( VR_DIR . '/assets/plugin/category-images/category-images.php' );
}

/**
 * Class `VR_Admin_Menu.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/class-vr-admin-menu.php' ) ) {
	require_once( VR_DIR . '/assets/class-vr-admin-menu.php' );
}

/**
 * Setting initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/settings/settings-init.php' ) ) {
	require_once( VR_DIR . '/assets/settings/settings-init.php' );
}

/**
 * Shortcode initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/shortcode/shortcode-init.php' ) ) {
	require_once( VR_DIR . '/assets/shortcode/shortcode-init.php' );
}

/**
 * Customizer initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( VR_DIR . '/assets/customizer/customizer-init.php' ) ) {
	require_once( VR_DIR . '/assets/customizer/customizer-init.php' );
}
