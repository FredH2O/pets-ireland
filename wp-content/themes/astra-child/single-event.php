<?php


get_header();
?>

<div class="single-event-container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();

            // Basic Event Information Here
            $event_date = get_field('event_date');
            $location = get_field('location');
            $video_field = get_field('video_url');
            $video_url = '';

            echo '<h1>' . esc_html(get_the_title()) . '</h1>';

            if ($event_date) {
                echo '<p><strong>Date: </strong>' . date('F j, Y', strtotime($event_date)) . '</p>';
            }

            if ($location) {
                echo '<p><strong>Location: </strong> ' . esc_html($location) .  '</p>';
            }

            // Event Gallery
            $gallery_images = [
                get_field('image_1'),
                get_field('image_2'),
                get_field('image_3'),
            ];

            if (array_filter($gallery_images)) {
                echo '<div class="event-gallery" >';
                foreach ($gallery_images as $img) {
                    if ($img) {
                        echo '<img src="' . esc_url($img['url']) . '" alt= "' . esc_attr($img['alt']) . '" />';
                    }
                }
                echo '</div>';
            }

            if (is_string($video_field) && !empty($video_field)) {
                $video_url = $video_field;
            }

            // Video (YouTube / oEmbed)
            if ($video_url) {
                echo '<div class="event-video">';
                echo wp_oembed_get($video_url);
                echo '</div>';
            }

            // Sponsors
            echo '<div class="event-sponsors">';

            for ($i = 1; $i <= 3; $i++) {
                $sponsor_name = get_field('sponsor_name_' . $i);
                $sponsor_img  = get_field('sponsor_image_' . $i);

                if (!$sponsor_name && !$sponsor_img) {
                    continue;
                }

                echo '<div class="sponsor">';

                if (is_array($sponsor_img) && !empty($sponsor_img['url'])) {
                    echo '<img src="' . esc_url($sponsor_img['url']) . '" alt="' . esc_attr($sponsor_img['alt'] ?? '') . '">';
                }

                if ($sponsor_name) {
                    echo '<p>' . esc_html($sponsor_name) . '</p>';
                }

                echo '</div>';
            }

            echo '</div>';


            // Event Content / Excerpt
            the_content();
        endwhile;
    endif;
    ?>
</div>

<?php get_footer() ?>