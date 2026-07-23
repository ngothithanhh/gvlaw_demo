<?php

add_action('wp_ajax_gvlaw_live_search', 'gvlaw_live_search');
add_action('wp_ajax_nopriv_gvlaw_live_search', 'gvlaw_live_search');

function gvlaw_live_search()
{
    
    $keyword = sanitize_text_field($_POST['keyword'] ?? '');

    if (empty($keyword)) {
        wp_die();
    }

    global $wpdb;

    $posts = $wpdb->get_results(
        $wpdb->prepare(
            "
            SELECT ID, post_title
            FROM {$wpdb->posts}
            WHERE post_status = 'publish'
            AND post_type = 'post'
            AND post_title LIKE %s
            ORDER BY post_date DESC
            LIMIT 10
            ",
            '%' . $wpdb->esc_like($keyword) . '%'
        )
    );

    if ($posts) {

        foreach ($posts as $post) {

            $thumbnail = get_the_post_thumbnail($post->ID, 'thumbnail');

            ?>

            <a href="<?php echo get_permalink($post->ID); ?>" class="search-item">

                <div class="search-thumb">

                    <?php echo $thumbnail; ?>

                </div>

                <div class="search-info">

                    <h4><?php echo esc_html($post->post_title); ?></h4>

                    <span><?php echo get_the_date('d/m/Y', $post->ID); ?></span>

                </div>

            </a>

            <?php

        }

    } else {

        echo '<div class="search-empty">No results found.</div>';

    }

    wp_die();
}