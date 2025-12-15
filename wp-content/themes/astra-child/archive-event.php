<?php
/*
Template Name: Archive Events
*/
get_header();
?>

<div class="events-container">

    <?php
    if (have_posts()) :
        while (have_posts()):
            the_post(); ?>

            <div class="events-cards">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large') ?>
                <?php endif; ?>

                <h2><?php the_title() ?></h2>
                <p>Date: <?php the_field('event_date'); ?></p>
                <p>Location: <?php the_field('location'); ?></p>
                <div>
                    <?php the_excerpt(); ?>
                </div>
            </div>


    <?php
        endwhile;
    else :
        echo '<p>No posts found!</p>';
    endif;
    ?>

</div>



<?php get_footer(); ?>