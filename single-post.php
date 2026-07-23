<?php get_header(); ?>

<section class="single-post-page">
    <div class="container">

        <div class="row">

            <div class="col-lg-9">

                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part(
                        'template-parts/news/content'
                    );

                endwhile;
                ?>

            </div>

            <div class="col-lg-3">

                <?php get_sidebar(); ?>

            </div>

            <div class="col-lg-9">
                <?php get_template_part('template-parts/news/related-posts'); ?>
            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>