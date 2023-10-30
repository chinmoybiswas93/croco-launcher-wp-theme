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

    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800&display=swap');

    wp_enqueue_script('custom-script', get_template_directory_uri() . '/resources/js/carousel.js', array('jquery'), '1.0', true);

    // Enqueue Owl Carousel CSS and JS
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '', true);

    wp_enqueue_style('custom-style', get_stylesheet_uri());
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


function register_footer_sidebar()
{
    register_sidebar(array(
        'name'          => 'Footer Copyright',
        'id'            => 'footer-copyright',
        'description'   => 'This widget area is for the footer copyright text.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'register_footer_sidebar');
