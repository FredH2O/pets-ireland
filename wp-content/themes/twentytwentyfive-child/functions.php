<?php

function twentyfive_child_enqueue_styles()
{
    wp_enqueue_style('twentytwentyfive-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('twentyfive-child-style', get_stylesheet_uri(), array('twentytwentyfive-style'));
}

add_action('wp_enqueue_scripts', 'twentyfive_child_enqueue_styles');

add_action('init', 'register_pet_post_type');
function register_pet_post_type()
{

    $labels = array(
        'name' => 'Pets',
        'singular_name' => 'Pet',
        'menu_name' => 'Pets for Adoption',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'pets'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest' => true,
    );
    register_post_type('pet', $args);
}
