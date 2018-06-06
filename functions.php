<?php
/*
 * Here the stylesheets are being called for the theme
 */
function wislow_style_theme()
{
    wp_enqueue_style('font_awesome_css', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css', array(), '5.0.13', 'all' );
    wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), '4.1.1', 'all');
    wp_enqueue_style('custom_style', get_template_directory_uri() . '/css/wislow.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'wislow_style_theme');
/*
 * Here the scripts are being called for the theme
 */
function wislow_script_theme() {
    wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array(), '4.1.1', TRUE);
    wp_enqueue_script('custom_script', get_template_directory_uri() . '/js/wislow.js', array(), '1.0.0', TRUE);
}

add_action('wp_enqueue_scripts', 'wislow_script_theme');
/*
 * Calling the menu support function on initialize, so you can create menus in the backend
 */
function wislow_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}
add_action('init', 'wislow_theme_setup');