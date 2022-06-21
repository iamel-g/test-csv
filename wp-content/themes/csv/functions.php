<?php
// Enqueue script and style
add_action( 'wp_enqueue_scripts', 'load_styles');
function load_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css' );
    wp_enqueue_script( 'script', get_template_directory_uri().'/assets/js/functions.js' );
}

function register_my_menu()
{
  register_nav_menu('main-menu', 'Menu principal');
}
add_action('after_setup_theme', 'register_my_menu');
