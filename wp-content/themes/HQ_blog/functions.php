<?php
// Theme setup

add_action('after_setup_theme', 'hqbw_setup');
    if ( ! function_exists('hqbw_setup')):
        function hqbw_setup(){
            register_nav_menu('primary', __('Primary navigation', 'hqbw'));
        } endif;

        

function my_scripts_method(){
    wp_enqueue_script('jquery');

    wp_register_script(
        'jquery.waypoints.min',
         get_stylesheet_directory_uri() . '/js/jquery.waypoints.min.js'
        );
    wp_enqueue_script(
        'jquery.waypoints.min',
        get_stylesheet_directory_uri() . '/js/jquery.waypoints.min.js'
    );

    wp_register_script(
        'lightbox',
         get_stylesheet_directory_uri() . '/js/lightbox.js'
        );
    wp_enqueue_script(
        'lightbox',
        get_stylesheet_directory_uri() . '/js/lightbox.js'
    );

    wp_register_script(
        'scripts',
         get_stylesheet_directory_uri() . '/js/scripts.js'
        );
    wp_enqueue_script(
        'scripts',
        get_stylesheet_directory_uri() . '/js/scripts.js'
    );

    
}

function my_custom_styles(){
    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'my_scripts_method', 'my_custom_styles');

// Register custom navigation walker
require_once('wp-bootstrap-navwalker.php');



