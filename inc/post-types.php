<?php

function gvlaw_register_partner_cpt()
{
    $labels = [
        'name'                  => __('Partners', 'gvlaw'),
        'singular_name'         => __('Partner', 'gvlaw'),
        'menu_name'             => __('Partners', 'gvlaw'),
        'add_new'               => __('Add New', 'gvlaw'),
        'add_new_item'          => __('Add New Partner', 'gvlaw'),
        'edit_item'             => __('Edit Partner', 'gvlaw'),
        'new_item'              => __('New Partner', 'gvlaw'),
        'view_item'             => __('View Partner', 'gvlaw'),
        'search_items'          => __('Search Partners', 'gvlaw'),
        'not_found'             => __('No Partners found', 'gvlaw'),
        'not_found_in_trash'    => __('No Partners found in Trash', 'gvlaw'),
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,

        'has_archive'        => true,
        'rewrite'            => [
            'slug' => 'our-lawyers'
        ],

        'menu_icon'          => 'dashicons-businessperson',

        'supports'           => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'page-attributes'
        ],

        'show_in_rest'       => true,

        'menu_position'      => 5,
    ];

    register_post_type('partner', $args);
}

add_action('init', 'gvlaw_register_partner_cpt');