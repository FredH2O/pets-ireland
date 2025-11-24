<?php

function astra_child_enqueue_styles()
{
    wp_enqueue_style('astra-parent', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('astra-child', get_stylesheet_uri(), array('astra-parent'));
}

add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');

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
        'show_in_rest' => true, // gutenburg , acf block
    );
    register_post_type('pet', $args);
}

function fred_custom_excerpt_more($more)
{
    if (get_post_type() === 'pet') {
        return '... <a class="read-more" href="' . get_permalink() . '">Read More </a>';
    }
    return $more;
}

add_filter('excerpt_more', 'fred_custom_excerpt_more');
