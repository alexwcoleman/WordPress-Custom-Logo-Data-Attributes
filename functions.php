<?php 

/**
 * Add data attributes to the custom logo.
 */
add_filter( 'wp_get_attachment_image_attributes', function ( $attr ) {
 
    if ( isset( $attr['class'] ) && 'custom-logo' === $attr['class'] ) {
        $attr['data-small-logo'] = '/path/to/small/image.jpg';
        // or this way
        // $attr['data-small-logo'] = get_template_directory_uri() . '/path/to/small/image.jpg';

        $attr['data-medium-logo'] = '/path/to/medium/image.jpg';
        // or this way
        // $attr['data-medium-logo'] = get_template_directory_uri() . '/path/to/medium/image.jpg';
    }
 
    return $attr;
} );