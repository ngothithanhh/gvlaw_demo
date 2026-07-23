<?php

function gvlaw_register_practice_area_taxonomy()
{
    $labels = [
        'name'              => __('Practice Areas', 'gvlaw'),
        'singular_name'     => __('Practice Area', 'gvlaw'),
        'search_items'      => __('Search Practice Areas', 'gvlaw'),
        'all_items'         => __('All Practice Areas', 'gvlaw'),
        'parent_item'       => __('Parent Practice Area', 'gvlaw'),
        'parent_item_colon' => __('Parent Practice Area:', 'gvlaw'),
        'edit_item'         => __('Edit Practice Area', 'gvlaw'),
        'update_item'       => __('Update Practice Area', 'gvlaw'),
        'add_new_item'      => __('Add New Practice Area', 'gvlaw'),
        'new_item_name'     => __('New Practice Area', 'gvlaw'),
        'menu_name'         => __('Practice Areas', 'gvlaw'),
    ];

    $args = [
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => [
            'slug' => 'practice-area',
        ],
    ];

    register_taxonomy(
        'practice_area',
        ['partner'],
        $args
    );
}

add_action('init', 'gvlaw_register_practice_area_taxonomy');


function gvlaw_register_position_taxonomy()
{
    $labels = [
        'name'              => __('Positions', 'gvlaw'),
        'singular_name'     => __('Position', 'gvlaw'),
        'search_items'      => __('Search Positions', 'gvlaw'),
        'all_items'         => __('All Positions', 'gvlaw'),
        'edit_item'         => __('Edit Position', 'gvlaw'),
        'update_item'       => __('Update Position', 'gvlaw'),
        'add_new_item'      => __('Add New Position', 'gvlaw'),
        'new_item_name'     => __('New Position', 'gvlaw'),
        'menu_name'         => __('Positions', 'gvlaw'),
    ];

    register_taxonomy(
        'position',
        ['partner'], // hoặc ['people'] nếu CPT là people
        [
            'labels'            => $labels,
            'hierarchical'      => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'rewrite' => [
                'slug' => 'position',
            ],
        ]
    );
}

add_action('init', 'gvlaw_register_position_taxonomy');