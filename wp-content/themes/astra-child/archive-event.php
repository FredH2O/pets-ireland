<?php
/*
Template Name: Archive Events
*/
get_header();
?>

<div class="events-container">

    <?php
    $today = date('Y-m-d H:i:s');

    $args = [
        'post_type' => 'event',
        'posts_per_page' => 10,
        'meta_key' => 'event_date',
        'orderby' => 'meta_value',
        'order' => 'ASC',
        'meta_query' => [
            [
                'key' => 'event_date',
                'value' => $today,
                'compare' => '>=',
                'type' => 'DATETIME',
            ],
        ],
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
    ];

    $events = new WP_Query($args);

    if ($events->have_posts()) :
        while ($events->have_posts()):
            $events->the_post();
            $event_date = get_field('event_date'); ?>


            <div class="events-cards">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large') ?>
                <?php endif; ?>

                <h2><?php the_title() ?></h2>
                <p>Date: <?php echo date('d/m/Y g:i a', strtotime($event_date)); ?></p>
                <p>Location: <?php the_field('location'); ?></p>
                <div>
                    <?php the_excerpt(); ?>
                </div>
            </div>
    <?php
        endwhile;
        // pagination
        echo '<div class="event-pagination">';
        echo paginate_links([
            'total' => $events->max_num_pages,
            'current' => get_query_var('paged') ? get_query_var('paged') : 1,
        ]);
        echo '</div>';
        wp_reset_postdata();
    else :
        echo '<p>No posts found!</p>';
    endif;
    ?>

</div>



<?php get_footer(); ?>