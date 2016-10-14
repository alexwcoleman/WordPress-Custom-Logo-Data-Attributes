# WordPress Custom Logo Data Attributes

nothing much to see here... just like the title says.

The `path` for the image can be anything. The only reason I did it outside of WP is to keep the images away from the uploader so the client & employees would have a harder time deleting it.

	
~~~~
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
	
~~~~
