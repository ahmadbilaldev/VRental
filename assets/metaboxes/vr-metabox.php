<?php

/**
 * The metabox file.
 *
 * @since 1.0.0
 */
/*function vr_metabox_cb()
{
    ?>
    	<label for="my_meta_box_text">Text Label</label>
    	<input type="text" name="my_meta_box_text" id="my_meta_box_text" />
    <?php
}*/

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
 
add_action( 'add_meta_boxes', 'vr_add_metabox' );
