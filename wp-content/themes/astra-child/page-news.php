<?php
/*
Template Name: News Page
*/
get_header();
?>
<div class="news-container">

    <?php
    $args = array(
        'category_name' => 'news',
        'posts_per_page' => 10,
    );
    $news_query = new WP_Query($args);

    if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <div class="news-card">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                } ?>
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <!-- tags here -->
                <div class="news-tags">
                    <?php
                    $tags = get_the_tags();
                    if ($tags) {
                        foreach ($tags as $tag) {
                            echo '<span class="tag">' . esc_html($tag->name) . '</span>';
                        }
                    }
                    ?>
                </div>
                <a href="<?php the_permalink(); ?>">See Post</a>
            </div>
    <?php endwhile;
        wp_reset_postdata();
    else :
        echo '<p> No news yet </p>';
    endif;
    ?>

</div>
<?php get_footer() ?>