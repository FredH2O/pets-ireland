<?php
/*
Template Name: Pets Archive Page
*/
get_header(); ?>

<div class="archive-pets-page">

    <h1>Pets for Adoption</h1>

    <div class="archive-pets-grid">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="pet-card">
                    <div class="pet-card-thumbnail">
                        <?php the_post_thumbnail('full'); ?>
                    </div>

                    <div class="pet-details">
                        <h2><?php the_title(); ?></h2>
                        <p class="pet-card-excerpt"><?php echo get_the_excerpt(); ?></p>
                        <ul>
                            <li>Breed: <?php echo esc_html(get_field('breed')); ?></li>
                            <li>Age: <?php echo esc_html(get_field('age')); ?></li>
                            <li>Sex: <?php echo esc_html(get_field('sex')); ?></li>
                            <li>Status: <?php echo esc_html(get_field('status')); ?></li>
                            <li>Location: <?php echo esc_html(get_field('location')); ?></li>
                            <li>Fee: €<?php echo esc_html(get_field('adoption_fee')); ?></li>
                        </ul>
                    </div>

                    <button class="pet-card-button">
                        <a href="<?php the_permalink(); ?>">Adopt Me</a>
                    </button>
                </div>

            <?php endwhile;

        else: ?>

            <p>No pets available right now. Check back soon!</p>

        <?php endif; ?>
    </div>

</div>
<?php get_footer(); ?>