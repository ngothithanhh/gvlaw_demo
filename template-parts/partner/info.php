<section class="info">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="partner-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            </div>
            <div class="col-6">
                <div class="basic-info">
                    <h1><?php the_title(); ?></h1>

                    <?php
                    $positions = get_the_terms(get_the_ID(), 'position');

                    if ($positions && ! is_wp_error($positions)) :
                    ?>

                        <div class="partner-position">
                            <?php echo implode(', ', wp_list_pluck($positions, 'name')); ?>
                        </div>

                    <?php endif; ?>

                </div>

                <div class="contact">
                    <?php
                        $email = get_field('email');
                        $phone = get_field('phone');
                    ?>

                    <ul class="partner-contact">

                        <?php if ($email) : ?>
                            <li>
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:<?= esc_attr($email); ?>">
                                    <?= esc_html($email); ?>
                                </a>

                            </li>
                            
                        <?php endif; ?>

                        <?php if ($phone) : ?>
                            <li>
                                <i class="bi bi-telephone"></i>
                                <a href="tel:<?= preg_replace('/\s+/', '', $phone); ?>">
                                    <?= esc_html($phone); ?>
                                </a>

                            </li>
                           
                        <?php endif; ?>

                    </ul>

                </div>

                <div class="expert">
                    <h5>Expert</h5>
                    <?php
                        $practice_areas = get_the_terms(get_the_ID(), 'practice_area');

                        if ($practice_areas && !is_wp_error($practice_areas)) :
                    ?>

                    <ul class="partner-practice">

                        <?php foreach ($practice_areas as $practice) : ?>

                            <li><?php echo esc_html($practice->name); ?></li>

                        <?php endforeach; ?>

                    </ul>

                    <?php endif; ?>
                </div>
                

                


            </div>
        </div>
    </div>
</section>