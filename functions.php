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


// Display author information after the page content
function display_author_info()
{
    global $post;
    $author_id = $post->post_author;
    $author_data = get_userdata($author_id);

    echo '<div class="container">';
    echo '<hr>';
    echo '<div class="author-info">';

    echo '<div class="author-info-left">';
    // Display author image
    echo get_avatar($author_id, 120);
    // Display social icons (replace with your own social links)
    echo '<ul class="social-icons">';
    echo '<li><a href="#"><img src="' . esc_url(get_template_directory_uri() . '/resources/icons/author-social.png') . '" alt="Social Icon"></a></li>';
    echo '</ul>';
    echo '</div>';

    echo '<div class="author-info-right">';
    echo '<p class="author-name">' . $author_data->display_name . '</p>';
    echo '<p>' . get_the_author_meta('description', $author_id) . '</p>';
    echo '</div>';

    echo '</div>';
    echo '</div>';
}
add_action('custom_page_content', 'display_author_info');



// Add a custom hook after the page content
function custom_page_content_hook()
{
    do_action('custom_page_content');
}
add_action('custom_page_content_hook', 'custom_page_content_hook');
