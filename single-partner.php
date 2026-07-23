<?php
get_header();

while (have_posts()) :
    the_post();

    get_template_part('template-parts/partner/hero');


    get_template_part('template-parts/partner/detail');

    get_template_part('template-parts/partner/difference');


endwhile;

get_footer();