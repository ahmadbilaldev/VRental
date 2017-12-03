<?php
/**
 * Meta box Geolocation
 */
add_filter( 'rwmb_meta_boxes', function( $meta_boxes )
{
    $meta_boxes[] = array(
        'id' 		=> 'geolocation',
        'title' 	=> 'GeoLocation',
        'context'	=> 'normal',
        'priority'	=> 'high',
        // Tell WP this Meta Box is GeoLocation
        'geo' => true,

        'fields' => array(
             array(
                'type' => 'text',
                'name' => 'Address',
                'id'    => 'address',
            ),
            // Auto populate `postal_code` to this field
            array(
                'type' => 'number',
                'name' => 'Postcode',
                'id'    => 'postal_code'
            ),
            // Auto populate Select field.
            array(
                'type' => 'select',
                'name' => 'State',
                'placeholder' => 'Select a State',
                'options' => array(
                    'ACT' => 'ACT',
                    'QLD' => 'QLD',
                    'NSW' => 'NSW',
                    'NT'  => 'NT',
                    'SA'  => 'SA',
                    'TAS' => 'TAS',
                    'VIC' => 'VIC',
                    'WA'  => 'WA'
                ),
                'id'    => 'administrative_area_level_1_short'
            ),

            // Co-ordinates
            array(
                'type' => 'text',
                'name' => 'Geometry',
                'id'    => 'geometry'
            ),

            array(
                'type' => 'text',
                'name' => 'Geometry with custom template',
                'id'    => 'geometry2',
                'binding' => 'lat + "," + lng' // lat,lng
            ),

            array(
                'type' => 'text',
                'name' => 'State + Country',
                'id'    => 'state_country',
                'binding' => 'short:administrative_area_level_1 + " " + country'
            ),
        )
    );

    return $meta_boxes;
} );