<section class="info-difference">
    <div class="container">
        <div class="row">
            <div class="col-6">
                

               <?php
                    $education = get_field('education');

                    if ($education && array_filter($education)) :
                ?>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg-4.png" alt="">
                </div>
                <h3>Education</h3>


                <ul class="partner-education">

                <?php

                for ($i = 1; $i <= 10; $i++) :

                    if (!empty($education["education_$i"])) :

                ?>

                    <li><?php echo esc_html($education["education_$i"]); ?></li>

                <?php

                    endif;

                endfor;

                ?>

                </ul>

                <?php endif; ?>

            </div>
            <div class="col-6">
               

                <?php
                    $memberships = get_field('membership');

                    if ($memberships && array_filter($memberships)) :
                ?>
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg-5.png" alt="">
                </div>
                <h3>Professional Memberships</h3>

                <ul class="partner-memberships">

                <?php

                for ($i = 1; $i <= 5; $i++) :

                    if (!empty($memberships["membership_$i"])) :

                ?>

                    <li><?php echo esc_html($memberships["membership_$i"]); ?></li>

                <?php

                    endif;

                endfor;

                ?>

                </ul>

                <?php endif; ?>

            </div>

            <div class="col-6">
                

                <?php
                    $languages = get_field('languages');

                    if ($languages && array_filter($languages)) :
                ?>

                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg-6.png" alt="">
                </div>
                <h3>Languages</h3>

                <ul class="partner-languages">

                <?php

                for ($i = 1; $i <= 5; $i++) :

                    if (!empty($languages["language_$i"])) :

                ?>

                    <li><?php echo esc_html($languages["language_$i"]); ?></li>

                <?php

                    endif;

                endfor;

                ?>

                </ul>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>