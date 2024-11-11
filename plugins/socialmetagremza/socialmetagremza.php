<?php
/**
 * Plugin Name: Social Meta Tags Gremza
 * Plugin URI: https://gremza.com
 * Description: Adds Open Graph meta tags for the featured image on single posts and pages to improve social media sharing.
 * Version: 1.1
 * Author: Gremza
 * Author URI: https://gremza.com
 * License: GPL2
 * Text Domain: social-meta-tags-gremza
 * 
 * Slug: social-meta-tags-gremza
 */

function wpse70215_fb_img() {
    // Not on a single page or post? Stop here.
    if ( ! is_singular() ) {
        return;
    }

    $post_ID = get_queried_object_id();

    // We got no thumbnail? Stop here.
    if ( ! has_post_thumbnail( $post_ID ) ) {
        return;
    }

    // Get the Attachment ID
    $att_ID = get_post_thumbnail_id( $post_ID );

    // Get the Attachment
    $att = wp_get_attachment_image_src( $att_ID );

    printf(
        '<meta property="og:image" content="%s">',
        array_shift( $att )
    );
}
add_action( 'wp_head', 'wpse70215_fb_img' );
