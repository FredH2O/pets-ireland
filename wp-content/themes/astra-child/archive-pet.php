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
                    <a href="<?php the_permalink(); ?>">
                        <div class="pet-card-thumbnail">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <p><?php the_excerpt(); ?></p>
                    <ul>
                        <li>Breed: <?php echo esc_html(get_field('breed')); ?></li>
                        <li>Age: <?php echo esc_html(get_field('age')); ?></li>
                    </ul>
                </div>

            <?php endwhile;

        else: ?>

            <p>No pets available right now. Check back soon!</p>

        <?php endif; ?>
    </div>

</div>
<?php get_footer(); ?>