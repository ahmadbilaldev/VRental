<?php
/**
 * Rental Features
 *
 * Custom taxonomy: `rental-features`.
 *
 * @since 	1.0.0
 * @package VR
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * VR_Rental_Feature.
 *
 * Custom taxonomy: `rental-features`.
 *
 * @since 1.0.0
 */
	
	add_action( 'init' , 'ct_r_features');

	function ct_r_features() {

			$labels = array(
				'name'                       => _x( 'Rental Features', 'Taxonomy General Name', 'VR' ),
				'singular_name'              => _x( 'Rental Feature', 'Taxonomy Singular Name', 'VR' ),
				'menu_name'                  => __( 'Rental Features', 'VR' ),
				'all_items'                  => __( 'All Rental Features', 'VR' ),
				'parent_item'                => __( 'Parent Rental Feature', 'VR' ),
				'parent_item_colon'          => __( 'Parent Rental Feature:', 'VR' ),
				'new_item_name'              => __( 'New Rental Feature Name', 'VR' ),
				'add_new_item'               => __( 'Add New Rental Feature', 'VR' ),
				'edit_item'                  => __( 'Edit Rental Feature', 'VR' ),
				'update_item'                => __( 'Update Rental Feature', 'VR' ),
				'view_item'                  => __( 'View Rental Feature', 'VR' ),
				'separate_items_with_commas' => __( 'Separate Rental Features with commas', 'VR' ),
				'add_or_remove_items'        => __( 'Add or remove Rental Features', 'VR' ),
				'choose_from_most_used'      => __( 'Choose from the most used', 'VR' ),
				'popular_items'              => __( 'Popular Rental Features', 'VR' ),
				'search_items'               => __( 'Search Rental Features', 'VR' ),
				'not_found'                  => __( 'Not Found', 'VR' ),
			);

			$rewrite = array(
				// 'slug'         => apply_filters( 'inspiry_rental_feature_slug', __( 'rental-feature', 'VR' ) ),
				'slug'         => 'rental-feature',
				'with_front'   => true,
				'hierarchical' => true,
			);

			$args = array(
				'labels'                     => $labels,
				'hierarchical'               => true,
				'public'                     => true,
				'show_ui'                    => true,
				'show_admin_column'          => false,
				'show_in_nav_menus'          => true,
				'show_tagcloud'              => true,
				'rewrite'                    => $rewrite,
			);
			// Register the tax.
			register_taxonomy( 'vr_rental-feature', array( 'vr_rental' ), $args );
		}
