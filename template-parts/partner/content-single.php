<div class="partner-detail container">

    <div class="row">

        <!-- Left -->
        <div class="col-lg-4">

            <div class="partner-image">
                <?php the_post_thumbnail('large'); ?>
            </div>

        </div>

        <!-- Right -->
        <div class="col-lg-8">

            <div class="partner-info">

                <!-- Name -->
                <h1><?php the_title(); ?></h1>

                <!-- Position -->
                <?php
                $positions = get_the_terms(get_the_ID(), 'position');

                if ($positions && !is_wp_error($positions)) :
                ?>
                    <div class="partner-position">
                        <?php
                        echo implode(', ', wp_list_pluck($positions, 'name'));
                        ?>
                    </div>
                <?php endif; ?>


                <!-- Contact -->
                <?php
                $contact = get_field('contact_information');

                if ($contact) :
                ?>

                    <ul class="partner-contact">

                        <?php if (!empty($contact['email'])) : ?>
                            <li>Email:
                                <?php echo esc_html($contact['email']); ?>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($contact['phone'])) : ?>
                            <li>Phone:
                                <?php echo esc_html($contact['phone']); ?>
                            </li>
                        <?php endif; ?>


                    </ul>

                <?php endif; ?>


                <!-- Practice Areas -->

                <?php
                $practice_areas = get_the_terms(get_the_ID(), 'practice_area');

                if ($practice_areas && !is_wp_error($practice_areas)) :
                ?>

                    <h3>Practice Areas</h3>

                    <ul class="partner-practice">

                        <?php foreach ($practice_areas as $practice) : ?>

                            <li><?php echo esc_html($practice->name); ?></li>

                        <?php endforeach; ?>

                    </ul>

                <?php endif; ?>


                <!-- Biography -->

                <h3>Biography</h3>

                <?php the_content(); ?>


                <!-- Education -->

                <h3>Education</h3>
                <?php
                $education = get_field('education');

                if ($education) :
                ?>

                    <ul class="partner-education">

                        <?php if (!empty($education['education_1'])) : ?>
                            <li><?php echo esc_html($education['education_1']); ?></li>
                        <?php endif; ?>

                        <?php if (!empty($education['education_2'])) : ?>
                            <li><?php echo esc_html($education['education_2']); ?></li>
                        <?php endif; ?>

                        <?php if (!empty($education['education_3'])) : ?>
                            <li><?php echo esc_html($education['education_3']); ?></li>
                        <?php endif; ?>

                        <?php if (!empty($education['education_4'])) : ?>
                            <li><?php echo esc_html($education['education_4']); ?></li>
                        <?php endif; ?>

                        <?php if (!empty($education['education_5'])) : ?>
                            <li><?php echo esc_html($education['education_5']); ?></li>
                        <?php endif; ?>

                    </ul>

                <?php endif; ?>



                <!-- Languages -->

                <h3>Languages</h3>

                <?php
                $languages = get_field('languages');

                if ($languages) :
                ?>

                    <ul class="partner-languages">

                        <?php if (!empty($languages['language_1'])) : ?>
                            <li><?php echo esc_html($languages['language_1']); ?></li>
                        <?php endif; ?>

                        <?php if (!empty($languages['language_2'])) : ?>
                            <li><?php echo esc_html($languages['language_2']); ?></li>
                        <?php endif; ?>

                        <?php if (!empty($languages['language_3'])) : ?>
                            <li><?php echo esc_html($languages['language_3']); ?></li>
                        <?php endif; ?>

                    </ul>

                <?php endif; ?>


                <!-- Membership -->

                <h3>Memberships</h3>

                <?php
                $memberships = get_field('membership');

                if ($memberships) :
                ?>

                    <ul class="partner-memberships">

                        <?php if (!empty($memberships['membership_1'])) : ?>
                            <li><?php echo esc_html($memberships['membership_1']); ?></li>
                        <?php endif; ?>

                        <?php if (!empty($memberships['membership_2'])) : ?>
                            <li><?php echo esc_html($memberships['membership_2']); ?></li>
                        <?php endif; ?>

                        <?php if (!empty($memberships['membership_3'])) : ?>
                            <li><?php echo esc_html($memberships['membership_3']); ?></li>
                        <?php endif; ?>

                    </ul>

                <?php endif; ?>


            </div>

        </div>

    </div>

</div>