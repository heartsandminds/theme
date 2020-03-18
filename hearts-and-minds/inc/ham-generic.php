<?php
/**
 * Theme Setup and Utility Functions
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */

/**
 * Add theme support for thumbnail images
 */
add_theme_support('post-thumbnails');

/**
 * Checks if current post has any child posts
 */
function has_children() {
    global $post;

    if($post->post_parent == 0 ) {
        return false;
    } else {
        return true;
    }
}

/**
 * Filter the except length to 20 words.
 */
function ham_custom_excerpt_length( $length ) {
    return 20;
}
add_filter('excerpt_length', 'ham_custom_excerpt_length', 999);

?>
