<?php
/*
Template Name: Single Pets Archive Page
*/

get_header(); ?>

<div class="single-pet-post">
    <!-- Thumbnail -->
    <div class="single-pet-thumbnail">
        <?php the_post_thumbnail('full'); ?>
    </div>

    <!-- Pet Title -->
    <h1><?php the_title(); ?></h1>

    <!-- Pet Details -->
    <div class="single-pet-details">
        <p>
            <i class="fa fa-question" aria-hidden="true"></i>
            <?php
            $value = get_field('status');
            echo $value ? ucfirst($value) : ''; // first letter uppercase
            ?>
        </p>
        <p class="adoption-fee">
            <i class="fa fa-money" aria-hidden="true"></i>
            €<?php echo esc_html(get_field('adoption_fee')); ?>
            <span class="tooltip">
                PLEASE BE AWARE WE ASK FOR A €<?php echo esc_html(get_field('adoption_fee')); ?> ADOPTION DONATION. The sum covers veterinary costs for neutering/spaying, vaccinations, microchipping, and parasite treatments. Adopters also get a €10 discount per €50 spend at Maxi Zoo nationwide.
            </span>
        </p>
    </div>

    <!-- Pet Content -->
    <div class="single-pet-content">
        <?php the_content(); ?>
    </div>

    <!-- Adopt Button -->
    <a class="single-pet-button" href="">Adopt Me 🐶</a>
</div>

<?php get_footer(); ?>