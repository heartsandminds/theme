<?php
/**
 * Custom Post Types
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */

 /**
 * Content Post Type
 */
function create_content_post_type() {
    $labels = array(
        'name'                => _x( 'Content', 'Post Type General Name', 'heartsandminds' ),
        'singular_name'       => _x( 'Content', 'Post Type Singular Name', 'heartsandminds' ),
        'menu_name'           => __( 'Content', 'heartsandminds' ),
        'all_items'           => __( 'All Content', 'heartsandminds' ),
        'view_item'           => __( 'View Content', 'heartsandminds' ),
        'add_new_item'        => __( 'Add New Content', 'heartsandminds' ),
        'add_new'             => __( 'Add New', 'heartsandminds' ),
        'edit_item'           => __( 'Edit Content', 'heartsandminds' ),
        'update_item'         => __( 'Update Content', 'heartsandminds' ),
        'search_items'        => __( 'Search Content', 'heartsandminds' ),
        'not_found'           => __( 'Not Found', 'heartsandminds' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'heartsandminds' ),
    );
 
    $args = array(
        'label'               => __( 'content', 'heartsandminds' ),
        'description'         => __( 'Content of Hearts and Minds', 'heartsandminds' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-aside',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type('content', $args);
}
add_action('init', 'create_content_post_type');

/**
 * People Post Type
 */
function create_people_post_type() {
    $labels = array(
        'name'                => _x( 'People', 'Post Type General Name', 'heartsandminds' ),
        'singular_name'       => _x( 'Person', 'Post Type Singular Name', 'heartsandminds' ),
        'menu_name'           => __( 'People', 'heartsandminds' ),
        'all_items'           => __( 'All People', 'heartsandminds' ),
        'view_item'           => __( 'View Person', 'heartsandminds' ),
        'add_new_item'        => __( 'Add New Person', 'heartsandminds' ),
        'add_new'             => __( 'Add New', 'heartsandminds' ),
        'edit_item'           => __( 'Edit Person', 'heartsandminds' ),
        'update_item'         => __( 'Update Person', 'heartsandminds' ),
        'search_items'        => __( 'Search Person', 'heartsandminds' ),
        'not_found'           => __( 'Not Found', 'heartsandminds' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'heartsandminds' ),
    );
 
    $args = array(
        'label'               => __( 'people', 'heartsandminds' ),
        'description'         => __( 'People of Hearts and Minds', 'heartsandminds' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail', 'revisions', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-groups',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type('people', $args);
}
add_action('init', 'create_people_post_type');

?>
