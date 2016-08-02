<?php

// adds menu option from admin area
add_theme_support( 'menus' );

// adds option for featured image from editing post in admin area
add_theme_support( 'post-thumbnails' );

// sets the excerpts lenght to a number
function htmltowp_excerpt_length( $length ){
    return 16;
}

add_filter( 'excerpt_length', 'htmltowp_excerpt_length', 999 );

// register some menus, later we can add a newly created menu to one of these
function htmltowp_register_theme_menus(){
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu')
    ));
}

add_action( 'init', 'htmltowp_register_theme_menus' );

// adds (enqueues) stylesheets to the theme
function htmltowp_theme_styles(){
    wp_enqueue_style('foundation_css', get_template_directory_uri() . '/css/foundation.css');
    wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('gfontasap_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'htmltowp_theme_styles');

// adds (enqueues) js scripts to the theme
function htmltowp_theme_js(){
    wp_enqueue_script('modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false);
    wp_enqueue_script('foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true);
}

add_action('wp_enqueue_scripts', 'htmltowp_theme_js');

?>
