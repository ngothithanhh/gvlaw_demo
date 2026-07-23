<section class="banner-intro">
    <div class="row">
        <div class="col-6 outer">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gvlawyers-local-VugsgKzvehIZv7P.png" alt="">
            </div>
        </div>
        <div class="col-6 outer">
            <div class="content">
                <div class="text-content">
                    <div class="row">
                        <div class="col-6">
                            <p>
                                <?php
                                    $start_year = 2006;
                                    $current_year = date('Y');
                                    $years = $current_year - $start_year;
                                ?>

                                <span class="counter" data-target="<?= $years ?>">0</span>
                            </p>
                            <p><span>YEARS OF EXPERIENCE</span></p>
                        </div>
                        <div class="col-6">
                            <p>
                                <?php
                                  $partner_count = wp_count_posts('partner')->publish;
                                ?>

                                <span class="counter" data-target="<?= $partner_count ?>">0</span>
                            </p>
                            <p><span>PARTNERS AND STAFFS</span></p>
                        </div>
                        <div class="col-6">
                            <p>
                                <span class="counter" data-target="2000">0</span>

                            </p>
                            <p><span>CLIENTS</span></p>
                        </div>
                        <div class="col-6">
                            <p>
                                <?php
                                $count = wp_count_terms([
                                    'taxonomy' => 'practice_area',
                                    'hide_empty' => false
                                ]);
                                ?>

                                <span class="counter" data-target="<?= $count ?>">0</span>
                            </p>
                            <p><span>PRACTICES</span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>