<?php

if (have_posts()) :

?>

<div class="row">

    <?php

    while (have_posts()) :

        the_post();

        get_template_part(
            'template-parts/partner/card'
        );

    endwhile;

    ?>

</div>

<?php

    the_posts_pagination();

else :

    echo '<p>No partners found.</p>';

endif;