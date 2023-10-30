<?php
// theme setup
function custom_theme_setup()
{
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'custom_theme_setup');


//  initializing styles 
function custom_theme_enqueue_styles()
{
    wp_enqueue_style('custom-style', get_stylesheet_uri());
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500&display=swap');
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');


// register menu for the header
function custom_theme_register_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'custom-theme'),
    ));
}
add_action('init', 'custom_theme_register_menus');
