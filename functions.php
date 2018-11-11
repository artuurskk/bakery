<?php
function bakery_styles() {
  wp_enqueue_style( 'bakery-common', get_template_directory_uri() . '/dist/style.css', array(), date("H:i:s"));
}

add_action( 'wp_enqueue_scripts', 'bakery_styles' );

function bakery_scripts() {
    wp_register_script( 'bakery-home', get_template_directory_uri() . '/dist/main.js', array(), date("H:i:s"), true );
}
add_action( 'wp_enqueue_scripts', 'bakery_scripts' );
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'bottom-left-menu' => __( 'Bottom Left Menu' ),
            'bottom-right-menu' => __( 'Bottom Right Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );
?>

