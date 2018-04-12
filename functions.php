<?php


function additional_custom_styles() {


    wp_enqueue_style( 'style', get_stylesheet_uri() );
    /*Enqueue The Styles*/
    wp_enqueue_style( 'round-about', get_template_directory_uri() . '/css/round-about.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome-4.7.0/css/font-awesome.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.css' );

}

add_action( 'wp_enqueue_scripts', 'additional_custom_styles');

function theme_js() {

    global $wp_scripts;

    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
    wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');

}

add_action( 'wp_enqueue_scripts', 'theme_js');


