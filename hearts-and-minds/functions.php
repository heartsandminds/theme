<?php
/**
 * The theme functions file
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */

function ham_register_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
}
add_action( 'init', 'ham_register_menus' );

function add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'm-footer-navigation__list-item';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 10);

function my_css_attributes_filter($var) {
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
?>
