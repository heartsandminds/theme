<?php
/**
 * Custom Menus
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */

 /**
  * Register the menus
  */
function ham_register_menus() {
    register_nav_menus(
      array(
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu')
      )
    );
}
add_action( 'init', 'ham_register_menus' );

/**
 * Add custom theme classes to menu items
 */
function ham_menu_link_attr($atts, $item, $args)
{
    if ($args->theme_location == 'header-menu') {
        $atts['class'] = 'a-menu-link';
    }
    if ($args->theme_location == 'footer-menu') {
      $atts['class'] = 'c-footer-navigation__list-item';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'ham_menu_link_attr', 1, 10);

/**
 * Add custom theme menu link class to menu items
 */
function ham_menu_link_class() {
    return array('c-global-navigation__list-item');
}
add_filter('nav_menu_css_class', 'ham_menu_link_class', 10, 4);

/**
 * Add custom theme menu link class to sub menu items
 */
function ham_sub_menu_link_class() {
    return array('c-global-navigation__sub-menu');
}
add_action('nav_menu_submenu_css_class', 'ham_sub_menu_link_class');

/**
 * Remove unused menu classes from menu items
 */
function ham_css_attributes_filter($var) {
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter('nav_menu_item_id', 'ham_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'ham_css_attributes_filter', 100, 1);

?>
