<?php
function add_bootstrap () {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js');
};
add_action('wp_enqueue_scripts', 'add_bootstrap');
add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');

function gkp_insert_css_in_head() {

    wp_register_style('style', get_bloginfo( 'stylesheet_url' ),'',false,'screen');
    wp_enqueue_style( 'style' );
}
register_nav_menus(
    array(
        'headermenu' => __( 'Header Menu', 'supernes'),
        'frontpagemenu' => __('Front Page Menu','supernes' )
    )

);
function add_custom_class_to_header_menu_item ($classes, $item) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter("nav_menu_css_class", 'add_custom_class_to_header_menu_item', 10, 2);
function add_menu_link_attr ($atts, $items) {
    $atts['class'] = "nav-link";
    $atts['target'] = "_self";
    return $atts;
}
add_filter("nav_menu_link_attributes", 'add_menu_link_attr', 10, 2);
function add_social_links ($items, $args) {
    $items .= '<div class="rs-nav">'
        . '<li class="nav-item rs-link">'
        .     '<a href="https://www.facebook.com/normandyecospace/" target="_blank" class="nav-link"><img src="'.get_template_directory_uri().'/assets/img/facebook.png"></a>'
        .   '</li>'
        .   '<li class="nav-item rs-link">'
        .     '<a href="https://twitter.com/NEcospace" target="_blank" class="nav-link"><img src="'.get_template_directory_uri().'/assets/img/twitter.png"></a>'
        .   '</li>'
        .   '<li class="nav-item rs-link">'
        .     '<a href="https://www.instagram.com/normandyecospace/" target="_blank" class="nav-link"><img src="'.get_template_directory_uri().'/assets/img/instagram.png"></a>'
        .   '</li>'
        .   '<li class="nav-item rs-link">'
        .     '<a href="https://www.linkedin.com/company/normandy-ecospace/" target="_blank" class="nav-link"><img src="'.get_template_directory_uri().'/assets/img/linkedin.png"></a>'
        .  '</li>'
        . '</div>';
    return $items;
};
add_filter('wp_nav_menu_items', 'add_social_links', 10, 2);
function change_custom_logo_attrs() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $html = sprintf( '<a href="%1$s" class="navbar-brand" rel="home" target="_self" itemprop="url">%2$s</a>',
        esc_url( home_url( '/' ) ),
        wp_get_attachment_image($custom_logo_id, 'full', false)
    );
    return $html;
}
add_filter( 'get_custom_logo', 'change_custom_logo_attrs' );
add_theme_support( 'custom-logo' );


add_theme_support('post-thumbnails');
