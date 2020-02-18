<?php
/**
 * The Theme Functions
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */

/**
* Disable all functions that aren't required.
*/
require get_parent_theme_file_path( '/inc/ham-disable.php' );

/**
* Implement the Custom Theme Generic Functions.
*/
require get_parent_theme_file_path( '/inc/ham-generic.php' );

/**
* Implement the Custom Theme Options.
*/
require get_parent_theme_file_path( '/inc/ham-options.php' );

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

/**
* Implement the Custom Post Types.
*/
require get_parent_theme_file_path( '/inc/ham-meta.php' );

?>
