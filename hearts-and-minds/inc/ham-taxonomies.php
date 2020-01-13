<?php
/**
 * Custom Taxonomies
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */

/**
 * Role taxonomy
 */
function create_role_taxonomy() {
	$labels = array(
		'name'              => _x( 'Roles', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Role', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Roles', 'textdomain' ),
		'all_items'         => __( 'All Roles', 'textdomain' ),
		'parent_item'       => __( 'Parent Role', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Role:', 'textdomain' ),
		'edit_item'         => __( 'Edit Role', 'textdomain' ),
		'update_item'       => __( 'Update Role', 'textdomain' ),
		'add_new_item'      => __( 'Add New Role', 'textdomain' ),
		'new_item_name'     => __( 'New Role Name', 'textdomain' ),
		'menu_name'         => __( 'Roles', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'role' ),
	);

	register_taxonomy( 'role', array( 'people' ), $args );
}
add_action( 'init', 'create_role_taxonomy', 0 );

?>
