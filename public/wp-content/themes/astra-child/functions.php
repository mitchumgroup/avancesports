<?php
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );
function astra_child_enqueue_styles() {
    wp_enqueue_style( 'astra-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'astra-theme-css' ), '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_adobe_fonts' );
function enqueue_adobe_fonts() {
    wp_enqueue_style( 'adobe-fonts', 'https://use.typekit.net/xff1vjr.css', false );
}

