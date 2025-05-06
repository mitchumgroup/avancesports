<?php
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );
function astra_child_enqueue_styles() {
    wp_enqueue_style( 'astra-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'astra-theme-css' ), '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_custom_fonts', 20 );
function enqueue_custom_fonts() {
    // Adobe Fonts (already loaded)
    wp_enqueue_style( 'adobe-fonts', 'https://use.typekit.net/xff1vjr.css', false );

    // Custom Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap', false );
}


