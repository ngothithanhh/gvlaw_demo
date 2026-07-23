<?php
/**
 * Template Part: Single Post Content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post-content'); ?>>
    <!-- Featured Image -->
    <?php if (has_post_thumbnail()) : ?>

        <div class="post-thumbnail">

            <?php the_post_thumbnail('full'); ?>

        </div>

    <?php endif; ?>

    <!-- Title -->
    <h1 class="post-title">
        <?php the_title(); ?>
    </h1>

    <!-- Meta -->
    <div class="post-meta">

        <span class="post-author">
            <?php the_author(); ?>
        </span>

        <span class="separator">|</span>

        <span class="post-date">
            <?php echo get_the_date('d/m/Y'); ?>
        </span>

        

    </div>


    <!-- Content -->
    <div class="entry-content">

        <?php the_content(); ?>

        <?php
        wp_link_pages([
            'before' => '<div class="page-links">Pages:',
            'after'  => '</div>',
        ]);
        ?>

    </div>

    <!-- Tags -->
    <?php
    $tags = get_the_tags();

    if ($tags) :
    ?>

        <div class="post-tags">

            <strong>Tags:</strong>

            <?php foreach ($tags as $tag) : ?>

                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>">
                    <?php echo esc_html($tag->name); ?>
                </a>

            <?php endforeach; ?>

        </div>

    <?php endif; ?>

</article>