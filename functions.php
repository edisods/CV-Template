
<?php 

// Load styles

function load_stylesheets() {

wp_register_style('font', get_template_directory_uri() . '/css/googleapi.css', array(), 1, 'all' );
wp_enqueue_style('font');

wp_register_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), 1, 'all' );
wp_enqueue_style('bootstrap');

wp_register_style('simple', get_template_directory_uri() . '/vendor/simple-line-icons/css/simple-line-icons.css', array(), 1, 'all' );
wp_enqueue_style('simple');

wp_register_style('layout', get_template_directory_uri() . '/css/layout.min.css', array(), 1, 'all' );
wp_enqueue_style('layout');

wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), 1, 'all' );
wp_enqueue_style('animate');

wp_register_style('sv', get_template_directory_uri() . '/vendor/swiper/css/swiper.min.css', array(), 1, 'all' );
wp_enqueue_style('sv');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');

// Load scripts

function addjs() {

    wp_deregister_script('jquery');

    wp_register_script('vendor_jquery', get_template_directory_uri() . '/vendor/jquery.min.js', array(), 1,1,1 );
    wp_enqueue_script('vendor_jquery');

    wp_register_script('vendor_jquery_migrate', get_template_directory_uri() . '/vendor/jquery-migrate.min.js', array(), 1,1,1 );
    wp_enqueue_script('vendor_jquery_migrate');

    wp_register_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), 1,1,1 );
    wp_enqueue_script('bootstrap');

    wp_register_script('swiper', get_template_directory_uri() . '/vendor/swiper/js/swiper.jquery.min.js', array(), 1,1,1 );
    wp_enqueue_script('swiper');

        wp_register_script('swiping', get_template_directory_uri() . '/js/components/swiper.min.js', array(), 1,1,1 );
    wp_enqueue_script('swiping');

    wp_register_script('layout', get_template_directory_uri() . '/js/layout.min.js', array(), 1,1,1 );
    wp_enqueue_script('layout');

    wp_register_script('component', get_template_directory_uri() . '/js/components/progress-bar.min.js', array(), 1,1,1 );
    wp_enqueue_script('component');

    wp_register_script('components-wow', get_template_directory_uri() . '/js/components/wow.min.js', array(), 1,1,1 );
    wp_enqueue_script('components');






        wp_register_script('ven1', get_template_directory_uri() . '/vendor/jquery.easing.js', array(), 1,1,1 );
    wp_enqueue_script('ven1');

        wp_register_script('ven2', get_template_directory_uri() . '/vendor/jquery.back-to-top.js', array(), 1,1,1 );
    wp_enqueue_script('ven2');

        wp_register_script('ven3', get_template_directory_uri() . '/vendor/jquery.smooth-scroll.js', array(), 1,1,1 );
    wp_enqueue_script('ven3');

        wp_register_script('ven4', get_template_directory_uri() . '/vendor/jquery.wow.min.js', array(), 1,1,1 );
    wp_enqueue_script('ven4');

        wp_register_script('ven5', get_template_directory_uri() . '/vendor/jquery.parallax.min.js', array(), 1,1,1 );
    wp_enqueue_script('ven5');

            wp_register_script('ven6', get_template_directory_uri() . '/vendor/jquery.appear.js', array(), 1,1,1 );
    wp_enqueue_script('ven6');
}

add_action('wp_enqueue_scripts', 'addjs');


add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(

    array(
        'top-menu' => __('Top Menu', 'Theme'),
    )

);


function theme_register_nav_menu() {
    register_nav_menu('top', 'Primary Menu');
    register_nav_menu('footer', 'Footer Menu');
    add_theme_support('post-thumbnails', array('post') );
    add_image_size('post_thumb');
    add_filter('excerpt_more', 'new_excerpt_more');
}