<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
	wp_enqueue_style('parent-style', get_template_directory_uri() .
'/style.css');
	wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/*Ajouter la zone recherche à l'intérieur du menu du header*/
function add_search_box($items, $args) {

        ob_start();
        get_search_form();
        $searchform = ob_get_contents();
        ob_end_clean();

        $items .= '<li class="search-top-menu">' . $searchform . '</li>'; 
        return $items;
}
add_filter('wp_nav_menu_items','add_search_box', 10, 2);