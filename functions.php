<?php
function mtespice_setup() {
    // Theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );

    // Register menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mtespice' ),
    ) );
}
add_action( 'after_setup_theme', 'mtespice_setup' );

function mtespice_scripts() {
    wp_enqueue_style( 'mtespice-style', get_stylesheet_uri() );
    wp_enqueue_style( 'mtespice-main', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_style( 'mtespice-index', get_template_directory_uri() . '/assets/css/index.css' );
    wp_enqueue_style( 'mtespice-header', get_template_directory_uri() . '/assets/css/header.css' );
    wp_enqueue_style( 'mtespice-footer', get_template_directory_uri() . '/assets/css/footer.css' );
 // Enqueue scripts
 wp_enqueue_script( 'mtespice-index', get_template_directory_uri() . '/assets/js/index.js', array(), '1.0.0', false );
 wp_enqueue_script( 'mtespice-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'mtespice_scripts' );
?>
