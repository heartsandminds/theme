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
		'name'              => _x( 'Roles', 'taxonomy general name', 'heartsandminds' ),
		'singular_name'     => _x( 'Role', 'taxonomy singular name', 'heartsandminds' ),
		'search_items'      => __( 'Search Roles', 'heartsandminds' ),
		'all_items'         => __( 'All Roles', 'heartsandminds' ),
		'parent_item'       => __( 'Parent Role', 'heartsandminds' ),
		'parent_item_colon' => __( 'Parent Role:', 'heartsandminds' ),
		'edit_item'         => __( 'Edit Role', 'heartsandminds' ),
		'update_item'       => __( 'Update Role', 'heartsandminds' ),
		'add_new_item'      => __( 'Add New Role', 'heartsandminds' ),
		'new_item_name'     => __( 'New Role Name', 'heartsandminds' ),
		'menu_name'         => __( 'Roles', 'heartsandminds' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'role' ),
		'capabilities'      => array(
			'assign_terms' => 'manage_options',
			'edit_terms'   => 'vendor',
			'manage_terms' => 'vendor',
		),
		'show_in_nav_menus' => false
	);

	register_taxonomy( 'role', array( 'people' ), $args );
}
add_action( 'init', 'create_role_taxonomy', 0 );

/**
 * Content Type taxonomy
 */
function create_type_taxonomy() {
	$labels = array(
		'name'              => _x( 'Type', 'taxonomy general name', 'heartsandminds' ),
		'singular_name'     => _x( 'Type', 'taxonomy singular name', 'heartsandminds' ),
		'search_items'      => __( 'Search Types', 'heartsandminds' ),
		'all_items'         => __( 'All Types', 'heartsandminds' ),
		'parent_item'       => __( 'Parent Type', 'heartsandminds' ),
		'parent_item_colon' => __( 'Parent Type:', 'heartsandminds' ),
		'edit_item'         => __( 'Edit Type', 'heartsandminds' ),
		'update_item'       => __( 'Update Type', 'heartsandminds' ),
		'add_new_item'      => __( 'Add New Type', 'heartsandminds' ),
		'new_item_name'     => __( 'New Type Name', 'heartsandminds' ),
		'menu_name'         => __( 'Types', 'heartsandminds' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'type' ),
		'capabilities'      => array(
			'assign_terms' => 'manage_options',
			'edit_terms'   => 'vendor',
			'manage_terms' => 'vendor',
		),
		'show_in_nav_menus' => false
	);

	register_taxonomy( 'type', array( 'content' ), $args );
}
add_action( 'init', 'create_type_taxonomy', 0 );

?>
