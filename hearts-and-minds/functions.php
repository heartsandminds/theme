<?php
/**
 * The theme functions file
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */

add_theme_support('post-thumbnails');

function ham_register_menus() {
    register_nav_menus(
      array(
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu')
      )
    );
}
add_action( 'init', 'ham_register_menus' );

function add_menu_link_attr($atts, $item, $args)
{
    if( $args->theme_location == 'header-menu' ) {
        $atts['class'] = 'a-menu-link';
    }
    if( $args->theme_location == 'footer-menu' ) {
      $atts['class'] = 'c-footer-navigation__list-item';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_attr', 1, 10);

function add_menu_link_class() {
    return array('c-global-navigation__list-item');
}
add_filter('nav_menu_css_class', 'add_menu_link_class', 10, 4);

function add_sub_menu_link_class() {
    return array('c-global-navigation__sub-menu');
}
add_action('nav_menu_submenu_css_class', 'add_sub_menu_link_class');

function my_css_attributes_filter($var) {
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);

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

function create_author_post_type() {
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
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type('people', $args);
}
add_action('init', 'create_author_post_type');

?>
