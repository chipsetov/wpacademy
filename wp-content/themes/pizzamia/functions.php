<?php
/**
 * Created by PhpStorm.
 * User: AntoA
 * Date: 22.11.2017
 * Time: 11:46
 */


add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
    /* including scc files */
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-min-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . "/css/animate.css" );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css" );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . "/css/font-awesome.css" );
   // wp_enqueue_style( 'font-awesome-min', get_template_directory_uri() . "/css/font-awesome.min.css" );
    wp_enqueue_style( 'font-awesome-min', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
    wp_enqueue_style( 'ionicons', get_template_directory_uri() . "/css/ionicons.min.css" );
    wp_enqueue_style( 'main', get_template_directory_uri() . "/css/main.css" );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . "/css/responsive.css" );
    wp_enqueue_style( 'style-c', get_template_directory_uri() . "/css/style.css" );
    wp_enqueue_style( 'rc', get_template_directory_uri() . "/rs-plugin/css/settings.css" );

    /* including js files */
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.3.min.js', NULL, NULL, true );
    //wp_enqueue_script( 'maps', 'https://maps.googleapis.com/maps/api/js?v=3.exp&amp', NULL, NULL, false );
   // wp_enqueue_script( 'maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBgKBUD5BMob4kTDTC_2paooH1uH8jaKuU', NULL, NULL, false );
    wp_enqueue_script( 'bootstrap-min-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', NULL, NULL, true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', NULL, NULL, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', NULL, NULL, true );
    wp_enqueue_script( 'map', get_template_directory_uri() . '/js/map.js', NULL, NULL, true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', NULL, NULL, true );
    wp_enqueue_script( 'owl.carousel-min', get_template_directory_uri() . '/js/owl.carousel.min.js', NULL, NULL, true );
    wp_enqueue_script( 'own-menu', get_template_directory_uri() . '/js/own-menu.js', NULL, NULL, true );
    wp_enqueue_script( 'jquery-themepunch-enablelog', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.enablelog.js', NULL, NULL, true );
    wp_enqueue_script( 'jquery-themepunch-revolution', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.revolution.js', NULL, NULL, true );
    wp_enqueue_script( 'jquery-tp-min', get_template_directory_uri() . '/rs-plugin/js/jquery.tp.min.js', NULL, NULL, true );
    wp_enqueue_script( 'jquery-tp-t-min', get_template_directory_uri() . '/rs-plugin/js/jquery.tp.t.min.js', NULL, NULL, true );
}

function theme_add_custom_fonts() {
    return array( 'My Custom Font' ); // You can add more then 1 font to the array!
}

function custom_add_google_fonts() {
    wp_enqueue_style( 'custom-google-fonts-alex-brush', 'https://fonts.googleapis.com/css?family=Alex+Brush', false );
    wp_enqueue_style( 'custom-google-fonts-josefin-sans', 'https://fonts.googleapis.com/css?family=Josefin+Sans:400,300,600,600italic,700italic,100', false );
    wp_enqueue_style( 'custom-google-fonts-open-sans', 'https://fonts.googleapis.com/css?family=Josefin+Sans:400,300,600,600italic,700italic,100', false );
}
add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );

function custom_theme_logo() {
    add_theme_support('custom-logo');
}

add_action( 'after_setup_theme', 'custom_theme_logo' );

add_theme_support('post-thumbnails'); // поддержка миниатюр