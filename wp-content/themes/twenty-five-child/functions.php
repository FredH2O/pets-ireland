<?php

function twentyfive_child_enqueue_styles()
{
    wp_enqueue_style('twentytwentyfive-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('twentyfive-child-style', get_stylesheet_uri(), array('twentytwentyfive-style'));
}

add_action('wp_enqueue_scripts', 'twentyfive_child_enqueue_styles');
