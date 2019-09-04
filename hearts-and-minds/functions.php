<?php
/**
 * The theme functions file
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */

add_theme_support( 'post-thumbnails' );

function ham_register_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
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
      $atts['class'] = 'm-footer-navigation__list-item';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_attr', 1, 10);

function add_menu_link_class() {
    return array('m-global-navigation__list-item');
}
add_filter( 'nav_menu_css_class', 'add_menu_link_class', 10, 4 );

function add_sub_menu_link_class() {
    return array('m-global-navigation__sub-menu');
}
add_action('nav_menu_submenu_css_class', 'add_sub_menu_link_class');

function my_css_attributes_filter($var) {
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
?>
