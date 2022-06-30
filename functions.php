<?php

//Theme Support
add_theme_support('custom-logo');
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_post_type_support( 'page', 'excerpt' );
show_admin_bar(false);

//Register style
function register_styles() {
    wp_enqueue_style('style', get_stylesheet_directory_uri() . "/css/style.css", array(), 'all');
}

add_action('wp_enqueue_scripts', 'register_styles');

// //Register js
// function register_scripts() {
//     wp_enqueue_script('my-script', get_stylesheet_directory_uri(). "/script.js", array(), true);
// }

// add_action('wp_enqueue_scripts', 'register_scripts');

// Register  Menu & Thumbnail
if (!function_exists('menu_register')) {

    function menu_register()
    {
        register_nav_menus([
            'primary_menu' => __('Primary Menu', 'text_domain'),
            'language_menu' => __('Language Menu', 'text_domain'),
        ]);

        add_image_size( 'thumb-large', 588, 472, true ); // (cropped)
        add_image_size( 'thumb-medium', 450, 272, true ); // (cropped)
        add_image_size( 'thumb-small', 282, 172, true ); // (cropped)
    }

    add_action('after_setup_theme', 'menu_register', 0);
}

// My Project post type
function create_posttype() {

    register_post_type('project',
        array(
            'labels' => array(
                'name' => __('Projects'),
                'singular_name' => __('Project')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'project'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt')

        )

    );
}
add_action('init', 'create_posttype');
