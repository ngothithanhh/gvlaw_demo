<section class="home-partners">

    <div class="container">

        <div class="row">

            <!-- Left -->
            <div class="col-lg-2">

                <div class="partner-heading">

                    <h3>BOARD OF<br>
                    <strong>PARTNERS</strong></h3>
                    <p>
                        Global Vietnam Lawyers, a gathering of committed and 
                        seasoned lawyers poised to become a global-standard 
                        Vietnamese 
                    </p>

                    <a href="<?php echo esc_url(get_post_type_archive_link('partner')); ?>"
                        class="btn-partner">

                        meet our team

                    </a>

                </div>

            </div>

            <!-- Right -->
            <div class="col-lg-10">

                <div class="swiper partnerSwiper">

                    <div class="swiper-wrapper">

                        <?php

                        $partners = new WP_Query([
                            'post_type'      => 'partner',
                            'posts_per_page' => -1,
                            'orderby'        => 'menu_order',
                            'order'          => 'ASC',
                            'post_status'    => 'publish',
                            'tax_query'      => [
                                [
                                    'taxonomy' => 'position',
                                    'field'    => 'slug',
                                    'terms'    => [
                                        'partner',
                                        'managing-partner'
                                    ],
                                ]
                            ]
                        ]);

                        if ($partners->have_posts()) :

                            while ($partners->have_posts()) :

                                $partners->the_post();
                        ?>

                                <div class="swiper-slide">

                                    <?php get_template_part('template-parts/partner/card'); ?>

                                </div>

                        <?php

                            endwhile;

                            wp_reset_postdata();

                        endif;

                        ?>

                    </div>

                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>

                    <div class="swiper-button-next"></div>

                </div>

            </div>

        </div>

    </div>

</section>