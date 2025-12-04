<?php
/*
Template Name: Single Pets Archive Page
*/

get_header(); ?>

<div class="single-pet-post">
    <div class="single-pet-thumbnail">
        <?php the_post_thumbnail('full'); ?>
    </div>
    <h1><?php the_title(); ?></h1>
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
                PLEASE BE AWARE WE ASK FOR A €<?php echo esc_html(get_field('adoption_fee')); ?> ADOPTION DONATION. The sum covers some of our veterinary costs for dogs to be neutered/spayed, vaccinated, microchipped and treated for external and internal parasites. In addition, adopters will be given a Maxi Zoo discount offering €10 off every €50 spend in their shops nationwide.
            </span>
        </p>
    </div>
    <div class="pet-content">
        <?php the_content(); ?>
    </div>
    <button>Adopt Me 🐶</button>
</div>

<?php get_footer(); ?>