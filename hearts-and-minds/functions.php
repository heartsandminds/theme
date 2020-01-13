<?php
/**
 * The Theme Functions
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */

/**
* Implement the Custom Theme Generic Functions.
*/
require get_parent_theme_file_path( '/inc/ham-generic.php' );

/**
* Implement the Custom Theme Menus.
*/
require get_parent_theme_file_path( '/inc/ham-menus.php' );

/**
* Implement the Custom Taxonomies.
*/
require get_parent_theme_file_path( '/inc/ham-taxonomies.php' );

/**
* Implement the Custom Post Types.
*/
require get_parent_theme_file_path( '/inc/ham-post-types.php' );

?>
