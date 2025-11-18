<?php get_header(); ?>

<div class="single-pet">
    <h1><?php the_title(); ?></h1>
    <?php the_post_thumbnail('large'); ?>
    <div class="pet-details">
        <p>Breed: <?php echo esc_html(get_field('breed')); ?></p>
        <p>Age: <?php echo esc_html(get_field('age')); ?></p>
        <p>Status: <?php echo esc_html(get_field('status')); ?></p>
    </div>
    <div class="pet-content">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>