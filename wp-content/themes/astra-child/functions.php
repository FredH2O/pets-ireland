<?php

function astra_child_enqueue_styles()
{
    wp_enqueue_style('astra-parent', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('astra-child', get_stylesheet_uri(), array('astra-parent'));
}

add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');

function register_pet_post_type()
{

    $labels = [
        'name' => 'Pets',
        'singular_name' => 'Pet',
        'menu_name' => 'Pets for Adoption',
    ];

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'pets'],
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest' => true, // gutenburg , acf block
        'menu_icon' => 'dashicons-pets'
    );
    register_post_type('pet', $args);
}

add_action('init', 'register_pet_post_type');

function register_event_cpt()
{
    $labels = [
        'name' => 'Events',
        'singular_name' => 'Event',
        'menu_name' => 'Events',
        'add_new' => 'Add Event',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'new_item' => 'New Event',
        'view_item' => 'View Event',
        'all_items' => 'All Events',
        'search_items' => 'Search Events',
        'not_found' => 'No events found',
        'not_found_in_trash' => 'No events found in Trash',
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'events'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'capability_type' => 'post',
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-calendar',
        'orderby' => 'date',
        'order' => 'DESC',
    ];
    register_post_type('event', $args);
}
add_action('init', 'register_event_cpt');


function fred_custom_excerpt_more($more)
{
    if (get_post_type() === 'pet') {
        return '... <a class="read-more" href="' . get_permalink() . '">Read More </a>';
    }
    return $more;
}

add_filter('excerpt_more', 'fred_custom_excerpt_more');

function pets_news_excerpt_length($length)
{
    global $post;
    if (has_category('news', $post)) {
        return 100;
    }
    return $length;
}

add_filter('excerpt_length', 'pets_news_excerpt_length', 999);
