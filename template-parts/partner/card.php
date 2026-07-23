<a href="<?php the_permalink(); ?>" class="partner-card">

    <div class="partner-image">
        <?php the_post_thumbnail('large'); ?>
    </div>

    <div class="partner-info">

        <h3><?php the_title(); ?></h3>

        <?php
        $positions = get_the_terms(get_the_ID(), 'position');

        if ($positions && !is_wp_error($positions)) :
        ?>
            <span class="partner-position">
                <?php echo esc_html($positions[0]->name); ?>
            </span>
        <?php endif; ?>

    </div>

</a>