<?php

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

    wp_enqueue_style(
        'home',
        get_template_directory_uri() . '/assets/css/home.css',
        [],
        filemtime(get_template_directory() . '/assets/css/home.css')
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
    }
}
add_action('wp_enqueue_scripts', 'gvlaw_assets');
