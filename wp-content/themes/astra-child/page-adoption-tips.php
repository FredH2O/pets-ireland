<?php
/*
Template Name: Adoption Tips Page
*/
get_header(); ?>

<div class="adoption-tips-container">

    <?php
    $args = array(
        'category_name' => 'adoption-tips',
        'posts_per_page' => 3,
    );

    $adoption_tips_query = new WP_Query($args);

    if ($adoption_tips_query->have_posts()) :
        while ($adoption_tips_query->have_posts()) : $adoption_tips_query->the_post(); ?>

            <div class="adoption-tips-card">
                <?php has_post_thumbnail() ? the_post_thumbnail() : null ?>
                <h2><?php the_title(); ?></h2>
                <div class="">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>
            <?php if ($adoption_tips_query->current_post + 1 < $adoption_tips_query->post_count) {
                echo "<hr/>";
            } ?>

    <?php endwhile;
        wp_reset_postdata();
    else :
        echo "<p>No adoption tips</p>";
    endif;
    ?>
</div>

<?php get_footer(); ?>