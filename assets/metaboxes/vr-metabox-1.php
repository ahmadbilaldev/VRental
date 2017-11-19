<?php

/**
 * Generates the metabox.
 *
 * @since 1.0.0
 */

function vr_add_metabox() {
	add_meta_box(
		'vr_metabox', // metabox ID, it also will be the HTML id attribute
		'My custom metabox', // title
		'vr_metabox_cb', // this is a callback function, which will print HTML of our metabox
		'post', // post type or post types in array
		'side', // position on the screen where metabox should be displayed (normal, side, advanced)
		'high' // priority over another metaboxes on this page (default, low, high, core)
	);
}

/*
 * The callback function for the metabox.
 */
function vr_metabox_cb( $post ) {
	/*
	 * needed for security reasons
	 */
	wp_nonce_field( basename( __FILE__ ), 'vr_metabox_nonce' );
	/*
	 * text field
	 */
	$html = '<p><label>Title <input type="text" name="vr_title" value="' . esc_attr( get_post_meta($post->ID, 'vr_title',true) )  . '" /></label></p>';
	/*
	 * checkbox
	 */
	$html .= '<p><label><input type="checkbox" name="vr_noindex" ';
	$html .= checked( get_post_meta($post->ID, 'vr_noindex',true), 'on', false );
	$html .= ' /> checkbox. </label></p>';
	/*
	 * print all of this
	 */
	echo $html;
}

add_action( 'add_meta_boxes', 'vr_add_metabox' );

/*
 * Save metabox data.
 */

function vr_save_post_meta( $post_id, $post ) {
	/* 
	 * Security checks
	 */
	if ( !isset( $_POST['vr_metabox_nonce'] ) 
	|| !wp_verify_nonce( $_POST['vr_metabox_nonce'], basename( __FILE__ ) ) )
		return $post_id;
	/* 
	 * Check current user permissions
	 */
	$post_type = get_post_type_object( $post->post_type );
	if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
		return $post_id;
	/*
	 * Do not save the data if autosave
	 */
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
		return $post_id;
 
	if ($post->post_type == 'post') { // define your own post type here
		update_post_meta($post_id, 'vr_title', sanitize_text_field( trim( $_POST['vr_title'] ) ) );
		update_post_meta($post_id, 'vr_noindex', $_POST['vr_noindex']);
	}
	return $post_id;
}
 
add_action( 'save_post', 'vr_save_post_meta', 10, 2 );