<?php

add_theme_support( 'post-thumbnails' ); 

function add_theme_styles() {
    wp_enqueue_style( 'social-share-kit', get_template_directory_uri() . '/bower_components/social-share-kit/dist/css/social-share-kit.css');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_theme_styles' );

function add_theme_scripts() {
    /* jQuery */
    //wp_enqueue_script( 'jquery' );

    /* Bower Components */
    //wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/bower_components/mixitup/dist/mixitup.min.js');
    wp_enqueue_script( 'social-share-kit', get_template_directory_uri() . '/bower_components/social-share-kit/dist/js/social-share-kit.min.js');

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

/* THIS SHOULD BE IN A PLUGIN!!! */
// [person name="" image="" title="" mail="" tel=""]
function cphpix_init_person_shortcode( $atts ) {
    $attributes = shortcode_atts( array(
        'name' => 'Navn her',
        'image' => 'Billede URL',
        'title' => 'Titel her',
        'mail' => 'Mail her',
        'tel' => 'Telefonnummer her'
    ), $atts );

    ob_start(); ?>

    <div class="person-card">
        <div class="person-card-image">
            <img src="<?php echo $attributes['image']; ?>" alt="<?php echo $attributes['name']; ?>">
        </div>
        <div class="person-card-content">
            <p class="person-card-name"><?php echo $attributes['name']; ?></p>
            <p class="person-card-title"><?php echo $attributes['title']; ?></p>
            <p class="person-card-mail"><a href="mailto:<?php echo $attributes['mail']; ?>" title="Send mail til <?php echo $attributes['name']; ?>"><?php echo $attributes['mail']; ?></a></p>
            <p class="person-card-tel"><a href="tel:<?php echo $attributes['tel']; ?>" title="Ring til <?php echo $attributes['name']; ?>"><?php echo $attributes['tel']; ?></a></p>
        </div>
    </div>

    <?php
    return ob_get_clean();

}
add_shortcode( 'person', 'cphpix_init_person_shortcode' );