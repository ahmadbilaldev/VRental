<?php
/**
 * Rental Destination
 *
 * Custom taxonomy `rental-destination`.
 *
 * @since 	1.0.0
 * @package VR
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * VR_Rental_Destination
 *
 * Custom taxonomy `rental-destination`.
 *
 * @since 1.0.0
 */
	
	add_action( 'init' , 'ct_r_destination');

	function ct_r_destination() {
		// Labels.
	    $labels = array(
	        'name'                       => _x( 'Rental Destination', 'Taxonomy General Name', 'VR' ),
	        'singular_name'              => _x( 'Rental Destination', 'Taxonomy Singular Name', 'VR' ),
	        'menu_name'                  => __( 'Destination', 'VR' ),
	        'all_items'                  => __( 'All Rental Destinations', 'VR' ),
	        'parent_item'                => __( 'Parent Rental Destination', 'VR' ),
	        'parent_item_colon'          => __( 'Parent Rental Destination:', 'VR' ),
	        'new_item_name'              => __( 'New Rental Destination Name', 'VR' ),
	        'add_new_item'               => __( 'Add New Rental Destination', 'VR' ),
	        'edit_item'                  => __( 'Edit Rental Destination', 'VR' ),
	        'update_item'                => __( 'Update Rental Destination', 'VR' ),
	        'view_item'                  => __( 'View Rental Destination', 'VR' ),
	        'separate_items_with_commas' => __( 'Separate Rental Destinations with commas', 'VR' ),
	        'add_or_remove_items'        => __( 'Add or remove Rental Destinations', 'VR' ),
	        'choose_from_most_used'      => __( 'Choose from the most used', 'VR' ),
	        'popular_items'              => __( 'Popular Rental Destinations', 'VR' ),
	    );

	    $rewrite = array(
			// 'slug'         => apply_filters( 'inspiry_property_city_slug', __( 'property-city', 'VRC' ) ),
			'slug'         => 'rental-destination',
			'with_front'   => true,
			'hierarchical' => true
	    );

	    $args = array(
			'labels'            => $labels,
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_in_menu'      => 'vr_rental',
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'rewrite'           => $rewrite
	    );

	    register_taxonomy( 'vr_rental-destination', array( 'vr_rental' ), $args );
	}
