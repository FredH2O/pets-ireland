<?php
/*
Template Name: Archive Events
*/
get_header();
?>

<?php
if (have_posts()) :
    while (have_posts()):
        the_post(); ?>

        <h2><?php the_title() ?></h2>
        <p>Date: <?php the_field('event_date'); ?></p>
        <p>Location: <?php the_field('event_location'); ?></p>
        <div>
            <?php the_content(); ?>
        </div>
<?php
    endwhile;
else :
    echo '<p>No posts found!</p>';
endif;
?>

<?php get_footer(); ?>