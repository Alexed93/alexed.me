<?php

/**
 *******************************************************************************
 * Public work
 *******************************************************************************
 *
 * This is an work post type which you can use as a baseline for your
 * project's needs. The idea of a `public` post type is one which a user
 * would navigate to through permalinks, rather than something you'd just
 * integrate onto your website via queries.
 *
 */



function wpst_post_type_work () {
    register_post_type(
        'work',
        array(
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'page',
            'hierarchical' => false,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-book',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'projects', 'with_front' => false ),
            'supports' => array( 'title', 'page-attributes', 'editor', 'excerpt', 'revisions' ),
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'work' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New work' ),
                'edit' => __( 'Edit' ),
                'edit_item' => __( 'Edit work' ),
                'new_item' => __( 'New work' ),
                'view' => __( 'View' ),
                'view_item' => __( 'View work' ),
                'search_items' => __( 'Search projects' ),
                'not_found' => __( 'No projects found' ),
                'not_found_in_trash' => __( 'No projects found in Trash' )
            )
        )
    );
}

add_action('init', 'wpst_post_type_work');
