<?php
/*
Template Name: News Page
*/
get_header();
?>

<?php
$args = array(
    'category_name' => 'news',
    'posts_per_page' => 10,
);
$news_query = new WP_Query($args);

if ($news_query->have_posts()) :
    while ($news_query->have_posts()) : $news_query->the_post(); ?>
        <div>
            <h2><?php the_title(); ?></h2>
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('medium');
            } ?>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>">Read more</a>
        </div>
<?php endwhile;
    wp_reset_postdata();
else :
    echo '<p> No news yet </p>';
endif;
?>
<?php get_footer() ?>