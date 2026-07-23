<?php

require_once get_template_directory() . '/inc/ajax/live-search.php';

function gvlaw_setup()
{
    // die('functions.php loaded');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Primary Menu', 'gvlaw'),
    ]);
}
add_action('after_setup_theme', 'gvlaw_setup');

function gvlaw_assets()
{
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        [],
        '5.3.8'
    );

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.8',
        true
    );

    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css',
        [],
        '1.13.1'
    );

    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/style.css',
        [],
        filemtime(get_template_directory() . '/style.css')
    );

    wp_enqueue_style(
        'header-css',
        get_template_directory_uri() . '/assets/css/header.css',
        [],
        filemtime(get_template_directory() . '/assets/css/header.css')
    );

    wp_enqueue_style(
        'footer-css',
        get_template_directory_uri() . '/assets/css/footer.css',
        [],
        filemtime(get_template_directory() . '/assets/css/footer.css')
    );

    wp_enqueue_style(
        'responsive-css',
        get_template_directory_uri() . '/assets/css/responsive.css',
        [],
        filemtime(get_template_directory() . '/assets/css/responsive.css')
    );

    wp_enqueue_script(
        'menu-js',
        get_template_directory_uri() . '/assets/js/menu.js',
        [],
        filemtime(get_template_directory() . '/assets/js/menu.js'),
        true
    );

    wp_enqueue_script(
        'gvlaw-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );

    wp_localize_script(
        'gvlaw-main',
        'gvlaw_ajax',
        [
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('gvlaw_live_search'),
        ]
    );

    wp_enqueue_style(
        'home',
        get_template_directory_uri() . '/assets/css/home.css',
        [],
        filemtime(get_template_directory() . '/assets/css/home.css')
    );

    wp_enqueue_style(
        'sidebar',
        get_template_directory_uri() . '/assets/css/sidebar.css',
        [],
        filemtime(get_template_directory() . '/assets/css/sidebar.css')
    );

    wp_enqueue_style(
        'live-search-css',
        get_template_directory_uri() . '/assets/css/live-search.css',
        [],
        filemtime(get_template_directory() . '/assets/css/live-search.css')
    );

    wp_enqueue_style(
        'partner-detail-css',
        get_template_directory_uri() . '/assets/css/partner-detail.css',
        ['partners-home'],
        filemtime(get_template_directory() . '/assets/css/partner-detail.css')
    );

    wp_enqueue_style(
        'post-detail-css',
        get_template_directory_uri() . '/assets/css/post-detail.css',
        [],
        filemtime(get_template_directory() . '/assets/css/post-detail.css')
    );

    if(is_front_page()){
        wp_enqueue_style(
            'hero',
            get_template_directory_uri() . '/assets/css/hero.css',
            ['home'],
            filemtime(get_template_directory() . '/assets/css/hero.css')
        );


        wp_enqueue_style(
            'about-home',
            get_template_directory_uri() . '/assets/css/about-home.css',
            ['home'],
            filemtime(get_template_directory() . '/assets/css/about-home.css')

        );

        wp_enqueue_script(
        'scroll-animation-js',
        get_template_directory_uri() . '/assets/js/scroll-animation.js',
        [],
        filemtime(get_template_directory() . '/assets/js/scroll-animation.js'),
        true
        );

        wp_enqueue_style(
            'practices-home',
            get_template_directory_uri() . '/assets/css/practices-home.css',
            ['home'],
            filemtime(get_template_directory() . '/assets/css/practices-home.css')

        );

        wp_enqueue_style(
            'partners-home',
            get_template_directory_uri() . '/assets/css/partners-home.css',
            ['home'],
            filemtime(get_template_directory() . '/assets/css/partners-home.css')

        );

        // Swiper CSS
        wp_enqueue_style(
            'swiper-css',
            'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
            [],
            '11.2.10'
        );

        // Swiper JS
        wp_enqueue_script(
            'swiper-js',
            'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
            [],
            '11.2.10',
            true
        );

        wp_enqueue_script(
            'partners-slider-js',
            get_template_directory_uri() . '/assets/js/partners-slider.js',
            ['swiper-js'],
            filemtime(get_template_directory() . '/assets/js/partners-slider.js'),
            true
        );

        wp_enqueue_script(
            'awards-slider-js',
            get_template_directory_uri() . '/assets/js/awards-slider.js',
            ['swiper-js'],
            filemtime(get_template_directory() . '/assets/js/awards-slider.js'),
            true
        );

        wp_enqueue_script(
            'counter-animation-js',
            get_template_directory_uri() . '/assets/js/counter-animation.js',
            ['swiper-js'],
            filemtime(get_template_directory() . '/assets/js/counter-animation.js'),
            true
        );

        wp_enqueue_style(
            'card-css',
            get_template_directory_uri() . '/assets/css/card.css',
            ['partners-home'],
            filemtime(get_template_directory() . '/assets/css/card.css')
        );

        wp_enqueue_style(
            'banner-intro-home-css',
            get_template_directory_uri() . '/assets/css/banner-intro-home.css',
            ['partners-home'],
            filemtime(get_template_directory() . '/assets/css/banner-intro-home.css')
        );

        wp_enqueue_style(
            'awards-home-css',
            get_template_directory_uri() . '/assets/css/awards-home.css',
            [],
            filemtime(get_template_directory() . '/assets/css/awards-home.css')
        );

    }

    if (is_singular('partner')) {
        wp_enqueue_style(
            'partner-detail',
            get_template_directory_uri() . '/assets/css/partner-detail.css',
            [],
            filemtime(get_template_directory() . '/assets/css/partner-detail.css')
        );
    }
}
add_action('wp_enqueue_scripts', 'gvlaw_assets');
require_once get_template_directory() . '/inc/post-types.php';
require_once get_template_directory() . '/inc/taxonomies.php';
