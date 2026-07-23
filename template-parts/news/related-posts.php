<?php

$current_post = get_the_ID();

$related = new WP_Query([
    'post_type'           => 'post',
    'posts_per_page'      => 6,
    'post__not_in'        => [$current_post],
    'orderby'             => 'date',
    'order'               => 'DESC',
    'ignore_sticky_posts' => true,
]);

if ($related->have_posts()) :
?>

<section class="related-posts">

    <h2 class="section-title">Related Posts</h2>

    <div class="row">

        <?php while ($related->have_posts()) : $related->the_post(); ?>

            <div class="col-lg-4">

                <article class="post-card">

                    <a href="<?php the_permalink(); ?>" class="post-image">

                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium_large'); ?>
                        <?php endif; ?>

                        <div class="post-content">

                            <h3 class="post-title">
                                <?php the_title(); ?>
                            </h3>

                        </div>

                    </a>

                </article>

            </div>

        <?php endwhile; ?>

    </div>

</section>

<?php
endif;

wp_reset_postdata();
?>