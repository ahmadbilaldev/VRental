<?php

    /**
	 * Post Type: rental.
	 *
	 * @since 1.0.0
	 */

	add_action( 'init' , 'cpt_rental' );

	function cpt_rental() {

	    $labels = array(
			'name'               => _x( 'Rentals', 'Post Type General Name', 'VR' ),
			'singular_name'      => _x( 'Rental', 'Post Type Singular Name', 'VR' ),
			'menu_name'          => __( '1 Rentals', 'VR' ),
			'name_admin_bar'     => __( 'Rental', 'VR' ),
			'parent_item_colon'  => __( 'Parent Rental:', 'VR' ),
			'all_items'          => __( 'Rentals', 'VR' ),
			'add_new_item'       => __( 'Add New Rental', 'VR' ),
			'add_new'            => __( 'Add New', 'VR' ),
			'new_item'           => __( 'New Rental', 'VR' ),
			'edit_item'          => __( 'Edit Rental', 'VR' ),
			'update_item'        => __( 'Update Rental', 'VR' ),
			'view_item'          => __( 'View Rental', 'VR' ),
			'search_items'       => __( 'Search Rental', 'VR' ),
			'not_found'          => __( 'Not found', 'VR' ),
			'not_found_in_trash' => __( 'Not found in Trash', 'VR' )
		);

		$rewrite = array(
			// 'slug'               => apply_filters( 'vr_rental_slug', __( 'rental', 'VR' ) ),
			'slug'               => 'rental',
			'with_front'         => true,
			'pages'              => true,
			'feeds'              => true
	    );

	    $args = array(
			'label'               => __( 'rental', 'VR' ),
			'description'         => __( 'Rentals', 'VR' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes', 'comments' ),
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => 'vacation_rentals', // menu slug where it should appear.
			'show_in_menu'        => true,
			//'menu_position'       => 5,
			'menu_icon'           => 'dashicons-building',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'post',
			'taxonomies'          => array( 'vr_rental-destination', 'vr_rental-feature', 'vr_rental-type' )
		);

	    register_post_type( 'vr_rental', $args );
	}