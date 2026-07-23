<aside class="news-sidebar">

    <!-- Search -->
    <div class="sidebar-box">
        <h3 class="sidebar-title">Search</h3>

        <?php get_search_form(); ?>
    </div>

    <!-- Categories -->

    <div class="sidebar-box">

        <h3 class="sidebar-title">archives</h3>

        <?php

        $slugs = [
            'articles',
            'honor-ranks-awards',
            'internship-program',
            'job-opportunies',
            'legal-updates',
            'news-events'
        ];

        ?>

        <ul class="page-list">

        <?php

        foreach ($slugs as $slug) :

            $page = get_page_by_path($slug);

            if ($page) :

        ?>

            <li>

                <a href="<?php echo get_permalink($page->ID); ?>">

                    <?php echo esc_html($page->post_title); ?>

                </a>

            </li>

        <?php

            endif;

        endforeach;

        ?>

        </ul>

    </div>

</aside>