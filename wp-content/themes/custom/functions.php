<?php
add_action( 'after_setup_theme', 'add_post_formats', 11 );
function add_post_formats(){
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video',
        'audio', 'chat' ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo' );
    register_nav_menu( 'primary', 'Primary Menu' );
}

add_action( 'wp_enqueue_scripts', 'theme_js_scripts' );

function theme_js_scripts() {
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'style-name-second', get_template_directory_uri() .'/css/style.css', array(), '1.0.0', true );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

//add_action( 'wp_enqueue_scripts', 'theme_css_scripts' );

//function theme_css_scripts() {
//
//    wp_enqueue_style( 'style-name', get_template_directory_uri() . array(), '1.0.0', true );
//    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', true );
//}

//function wpdocs_theme_name_scripts() {
//    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
//    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', true );
//}
//add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );