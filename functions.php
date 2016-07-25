<?php

// adds (enqueues) stylesheets to the theme
function htmltowp_theme_styles(){
    wp_enqueue_style('foundation_css', get_template_directory_uri() . '/css/foundation.css');
    wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('gfontasap_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');
    wp_enqueue_style('main_css', '/style.css');
}

add_action('wp_enqueue_scripts', 'htmltowp_theme_styles');

?>
