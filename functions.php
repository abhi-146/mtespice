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


// Register post types
function register_custom_post_type() {
    $labels = array(
        'name'                  => _x('Spices', 'Post type general name', 'mtespice'),
        'singular_name'         => _x('Spice', 'Post type singular name', 'mtespice'),
        'menu_name'             => _x('Spices', 'Admin Menu text', 'mtespice'),
        'name_admin_bar'        => _x('Spice', 'Add New on Toolbar', 'mtespice'),
        'add_new'               => __('Add New', 'mtespice'),
        'add_new_item'          => __('Add New Spice', 'mtespice'),
        'new_item'              => __('New Spice', 'mtespice'),
        'edit_item'             => __('Edit Spice', 'mtespice'),
        'view_item'             => __('View Spice', 'mtespice'),
        'all_items'             => __('All Spices', 'mtespice'),
        'search_items'          => __('Search Spices', 'mtespice'),
        'not_found'             => __('No spices found.', 'mtespice'),
        'not_found_in_trash'    => __('No spices found in Trash.', 'mtespice'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'spices'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'author', 'thumbnail', 'excerpt', 'comments'),
        'show_in_rest'       => true,
    );

    register_post_type('spices', $args);

    $labels = array(
        'name'                  => _x('Pulses', 'Post type general name', 'mtespice'),
        'singular_name'         => _x('Pulse', 'Post type singular name', 'mtespice'),
        'menu_name'             => _x('Pulses', 'Admin Menu text', 'mtespice'),
        'name_admin_bar'        => _x('Pulse', 'Add New on Toolbar', 'mtespice'),
        'add_new'               => __('Add New', 'mtespice'),
        'add_new_item'          => __('Add New Pulse', 'mtespice'),
        'new_item'              => __('New Pulse', 'mtespice'),
        'edit_item'             => __('Edit Pulse', 'mtespice'),
        'view_item'             => __('View Pulse', 'mtespice'),
        'all_items'             => __('All Pulses', 'mtespice'),
        'search_items'          => __('Search Pulses', 'mtespice'),
        'not_found'             => __('No pulses found.', 'mtespice'),
        'not_found_in_trash'    => __('No pulses found in Trash.', 'mtespice'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'pulses'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'author', 'thumbnail', 'excerpt', 'comments'),
        'show_in_rest'       => true,
    );

    register_post_type('pulses', $args);

    $labels = array(
        'name'                  => _x('Nuts', 'Post type general name', 'mtespice'),
        'singular_name'         => _x('Nut', 'Post type singular name', 'mtespice'),
        'menu_name'             => _x('Nuts', 'Admin Menu text', 'mtespice'),
        'name_admin_bar'        => _x('Oilseed', 'Add New on Toolbar', 'mtespice'),
        'add_new'               => __('Add New', 'mtespice'),
        'add_new_item'          => __('Add New Oilseed', 'mtespice'),
        'new_item'              => __('New Oilseed', 'mtespice'),
        'edit_item'             => __('Edit Oilseed', 'mtespice'),
        'view_item'             => __('View Oilseed', 'mtespice'),
        'all_items'             => __('All Nuts', 'mtespice'),
        'search_items'          => __('Search Nuts', 'mtespice'),
        'not_found'             => __('No Nuts found.', 'mtespice'),
        'not_found_in_trash'    => __('No Nuts found in Trash.', 'mtespice'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'nuts'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'author', 'thumbnail', 'excerpt', 'comments'),
        'show_in_rest'       => true,
    );

    register_post_type('nuts', $args);


    $labels = array(
        'name'                  => _x('Blogs', 'Post type general name', 'mtespice'),
        'singular_name'         => _x('Blog', 'Post type singular name', 'mtespice'),
        'menu_name'             => _x('Blogs', 'Admin Menu text', 'mtespice'),
        'name_admin_bar'        => _x('Blog', 'Add New on Toolbar', 'mtespice'),
        'add_new'               => __('Add New', 'mtespice'),
        'add_new_item'          => __('Add New Blog', 'mtespice'),
        'new_item'              => __('New Blog', 'mtespice'),
        'edit_item'             => __('Edit Blog', 'mtespice'),
        'view_item'             => __('View Blog', 'mtespice'),
        'all_items'             => __('All Blogs', 'mtespice'),
        'search_items'          => __('Search Blogs', 'mtespice'),
        'not_found'             => __('No blogs found.', 'mtespice'),
        'not_found_in_trash'    => __('No blogs found in Trash.', 'mtespice'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'blogs'),
        'capability_type'    => 'post',
        // 'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor','author', 'thumbnail', 'excerpt', 'comments'),
        'show_in_rest'       => true,
    );

    register_post_type('blogs', $args);
}

add_action('init', 'register_custom_post_type');

?>
