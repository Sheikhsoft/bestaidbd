<?php
/*
* Theme Functions File
*/

add_filter('walker_nav_menu_start_el', 'add_arrow', 10, 4);
function add_arrow($output, $item, $depth, $args)
{

    //Only add class to 'top level' items on the 'primary' menu.
    if ('primary' == $args->theme_location && $depth === 0) {
        if (in_array("menu-item-has-children", $item->classes)) {
            $output .= '<i class="icofont-rounded-down"></i>';
        }
    }
    return $output;
}

function replace_submenu_class($menu)
{
    $menu = preg_replace('/ class="sub-menu"/', '/ class="dropdown" /', $menu);
    return $menu;
}
add_filter('wp_nav_menu', 'replace_submenu_class');
function bestaid_theme_setup()
{

    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size('home-featured', 680, 400, array('center', 'center'));
    add_image_size('single-post', 580, 272, array('center', 'center'));
    add_image_size('portfolio-thumb', 374, 260, array('center', 'center'));

    add_theme_support('automatic-feed-links');

    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'bestaid')
    ));
};
add_action('after_setup_theme', 'bestaid_theme_setup');

function bestaid_scripts()
{

    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jquery');
    // wp_enqueue_script('bestaid-jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.0.js');
    // wp_enqueue_script('bestaid-jquery-ui', get_template_directory_uri() . 'js/jquery-ui.min.js');
    wp_enqueue_script('bestaid-easing', get_template_directory_uri() . '/js/easing.js');
    wp_enqueue_script('bestaid-popper', get_template_directory_uri() . '/js/popper.min.js');
    wp_enqueue_script('bestaid-bootstrap-datepicker', get_template_directory_uri() . '/js/bootstrap-datepicker.js');
    wp_enqueue_script('bestaid-jquery.nav', get_template_directory_uri() . '/js/jquery.nav.js');
    wp_enqueue_script('bestaid-slicknav', get_template_directory_uri() . '/js/slicknav.min.js');
    wp_enqueue_script('bestaid-jquery.scrollUp', get_template_directory_uri() . '/js/jquery.scrollUp.min.js');
    wp_enqueue_script('bestaid-niceselect', get_template_directory_uri() . '/js/niceselect.js');
    wp_enqueue_script('bestaid-tilt.jquery', get_template_directory_uri() . '/js/tilt.jquery.min.js');
    wp_enqueue_script('bestaid-owl-carousel', get_template_directory_uri() . '/js/owl-carousel.js');
    wp_enqueue_script('bestaid-jquery-counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js');
    wp_enqueue_script('bestaid-steller', get_template_directory_uri() . '/js/steller.js');
    wp_enqueue_script('bestaid-wow', get_template_directory_uri() . '/js/wow.min.js');
    wp_enqueue_script('bestaid-jquery.magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js');
    wp_enqueue_script('bestaid-waypoints', get_template_directory_uri() . '/js/waypoints.min.js');
    wp_enqueue_script('bestaid-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('bestaid-main', get_template_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts', 'bestaid_scripts');

function bestaid_widgets_init()
{

    register_sidebar(array(
        'name'          => __('Primary Sidebar', 'bestaid'),
        'id'            => 'main-sidebar',
        'description'   => 'Main Sidebar on Right Side',
        'before_widget' => '<section id="%1$s" class="box %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ));

    register_sidebar(array(
        'name'          => __('Home Slider', 'bestaid'),
        'id'            => 'home-banner',
        'description'   => 'Banner Area on Homepage',
        'before_widget' => '<section id="%1$s" class="widget slider %2$s"><div class="hero-slider">',
        'after_widget'  => '</div></section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Home Services', 'bestaid'),
        'id'            => 'home-services',
        'description'   => 'Services Area on Homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'bestaid'),
        'id'            => 'footer-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'bestaid'),
        'id'            => 'footer-2',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 3', 'bestaid'),
        'id'            => 'footer-3',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ));
}
add_action('widgets_init', 'bestaid_widgets_init');

//Custom Post Types
require get_template_directory() . '/inc/portfolio.php';
