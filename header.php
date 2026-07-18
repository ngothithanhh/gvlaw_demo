<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">

    <div class="site-container">

        <div class="logo">

            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                bloginfo('name');
            }
            ?>

        </div>

        <nav class="main-menu">

            <?php

            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'menu'
            ]);

            ?>

        </nav>

        <div class="header-right">

            <!-- Language -->
            <?php if (function_exists('pll_the_languages')) : ?>
                <?php $languages = pll_the_languages(['raw' => 1]); ?>
                <div class="language-switcher">
                    <?php foreach ($languages as $index => $lang) : ?>

                        <a href="<?php echo esc_url($lang['url']); ?>"
                        class="<?php echo $lang['current_lang'] ? 'active' : ''; ?>">

                            <img src="<?php echo esc_url($lang['flag']); ?>" alt="<?php echo esc_attr($lang['name']); ?>">

                        </a>

                        <?php if ($index < count($languages) - 1) : ?>
                            <span>|</span>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Search -->
            <div class="search">
                <a class="search-btn">
                    <i class="bi bi-search"></i>
                </a>

            </div>
            

        </div>

        <button class="menu-toggle" aria-label="Open menu">
            <i class="bi bi-list"></i>
        </button>

    </div>

</header>

<div class="mobile-menu">

    <button class="close-menu" aria-label="Close menu">
        <i class="bi bi-x-lg"></i>
    </button>

    <?php
    wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'mobile-nav'
    ]);
    ?>

</div>

<div class="overlay"></div>

<?php wp_footer(); ?>
