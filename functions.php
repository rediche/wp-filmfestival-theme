<?php

add_theme_support( 'post-thumbnails' ); 

function add_theme_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_theme_styles' );

function add_theme_scripts() {
    /* Bower Components */
    wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/bower_components/mixitup/dist/mixitup.min.js');

    /* Themes own JS */
    wp_enqueue_script( 'program', get_template_directory_uri() . '/scripts/program.js' );
    wp_enqueue_script( 'navigation', get_template_directory_uri() . '/scripts/navigation.js' );
    wp_enqueue_script( 'newsletter', get_template_directory_uri() . '/scripts/newsletter.js' );
    wp_enqueue_script( 'mypix', get_template_directory_uri() . '/scripts/mypix.js' );
    wp_enqueue_script( 'trailer', get_template_directory_uri() . '/scripts/trailer.js' );
    wp_enqueue_script( 'movie', get_template_directory_uri() . '/scripts/movie.js' );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function register_main_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'cphpix' ) );
}
add_action( 'after_setup_theme', 'register_main_menu' );