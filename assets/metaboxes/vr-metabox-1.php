<?php
/**
 * VR Meta box 1.
 *
 */
add_filter( 'rwmb_meta_boxes', 'vr_register_meta_boxes' );
/**
 * Register meta boxes
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function vr_register_meta_boxes( $meta_boxes ) {
	
	// Better has an underscore as last sign
	$prefix = 'vr_';
	// meta box 1
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'standard',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => esc_html__( 'Standard Fields', 'textdomain' ),
		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'post', 'page' ),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',
		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',
		// Auto save: true, false (default). Optional.
		'autosave'   => true,
		// List of meta fields
		'fields'     => array(
			// TEXT
			array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Booking name', 'textdomain' ),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( 'Name of the booking', 'textdomain' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}text",
				// Field description (optional)
				'desc'  => esc_html__( '', 'textdomain' ),
				'type'  => 'text',
				// Default value (optional)
				'std'   => esc_html__( 'Default text value', 'textdomain' ),
				// CLONES: Add to make the field cloneable (i.e. have multiple value)
				'clone' => true,
			),
			// CHECKBOX
			array(
				'name' => esc_html__( 'Checkbox', 'textdomain' ),
				'id'   => "{$prefix}checkbox",
				'type' => 'checkbox',
				// Value can be 0 or 1
				'std'  => 0,
			),
			// RADIO BUTTONS
			array(
				'name'    => esc_html__( 'Select one', 'textdomain' ),
				'id'      => "{$prefix}radio",
				'type'    => 'radio',
				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'value1' => esc_html__( '1', 'textdomain' ),
					'value2' => esc_html__( '2', 'textdomain' ),
				),
			),
			// PRICE SLIDER
			array(
				'name'       => esc_html__( 'Price', 'textdomain' ),
				'id'         => "{$prefix}slider",
				'type'       => 'slider',
				// Text labels displayed before and after value
				'prefix'     => esc_html__( '$', 'textdomain' ),
				'suffix'     => esc_html__( ' USD', 'textdomain' ),
				// jQuery UI slider options. See here http://api.jqueryui.com/slider/
				'js_options' => array(
					'min'  => 10,
					'max'  => 255,
					'step' => 5,
				),
				// Default value
				'std'        => 160,
			),
			// SELECT BOX
			array(
				'name'        => esc_html__( 'Select', 'textdomain' ),
				'id'          => "{$prefix}select",
				'type'        => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'java'       => esc_html__( 'Java', 'textdomain' ),
					'javascript' => esc_html__( 'JavaScript', 'textdomain' ),
					'php'        => esc_html__( 'PHP', 'textdomain' ),
					'csharp'     => esc_html__( 'C#', 'textdomain' ),
					'objectivec' => esc_html__( 'Objective-C', 'textdomain' ),
					'kotlin'     => esc_html__( 'Kotlin', 'textdomain' ),
					'swift'      => esc_html__( 'Swift', 'textdomain' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => true,
				'std'         => 'value2',
				'placeholder' => esc_html__( 'Select an Item', 'textdomain' ),
				'select_all_none' => true,
			),
			// HIDDEN
			array(
				'id'   => "{$prefix}hidden",
				'type' => 'hidden',
				// Hidden field must have predefined value
				'std'  => esc_html__( 'Hidden value', 'textdomain' ),
			),
			// PASSWORD
			array(
				'name' => esc_html__( 'Password', 'textdomain' ),
				'id'   => "{$prefix}password",
				'type' => 'password',
			),
			// TEXTAREA
			array(
				'name' => esc_html__( 'Description', 'textdomain' ),
				'desc' => esc_html__( 'Textarea description', 'textdomain' ),
				'id'   => "{$prefix}textarea",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
		),
		'validation' => array(
			'rules'    => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				),
			),
			// optional override of default jquery.validate messages
			'messages' => array(
				"{$prefix}password" => array(
					'required'  => esc_html__( 'Password is required', 'textdomain' ),
					'minlength' => esc_html__( 'Password must be at least 7 characters', 'textdomain' ),
				),
			),
		),
	);
	return $meta_boxes;
}