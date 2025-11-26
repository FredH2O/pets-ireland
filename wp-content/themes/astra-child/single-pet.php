<?php
/*
Template Name: Single Pets Archive Page
*/

get_header(); ?>

<div class="single-pet-post">
    <div class="single-pet-image"><?php the_post_thumbnail('full'); ?></div>
    <h1><?php the_title(); ?></h1>
    <div class="pet-details">
        <p>
            <i class="fa fa-question" aria-hidden="true"></i>
            <?php
            $value = get_field('status');
            echo $value ? ucfirst($value) : ''; // first letter uppercase
            ?>
        </p>
        <p>
            <i class="fa fa-money" aria-hidden="true"></i>
            €<?php echo esc_html(get_field('adoption_fee')); ?>
        </p>
    </div>
    <div class="pet-content">
        <?php the_content(); ?>
    </div>
    <button>Adopt Me 🐶</button>
</div>

<?php get_footer(); ?>