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
