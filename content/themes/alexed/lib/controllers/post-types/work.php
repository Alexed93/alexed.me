<?php

/**
 *******************************************************************************
 * Post type queries: work
 *******************************************************************************
 *
 * A set of functions to access the work post type results.
 *
 * $. Getters
 * $. Setters
 *
 */



/**
 * $. Getters
 ******************************************************************************/

/**
 * Get projects through a new WP_Query() object.
 *
 * @param  int     $parent    Define the parent work of the projects you're getting.
 * @param  array   $excludes  An array of post ID's to exclude from the query.
 * @param  int     $count     Number of posts you'd like to bring through.
 * @param  string  $orderby   Type of ordering.
 * $param  string  $ordering  The order preference. 'ASC' or 'DESC'.
 *
 * @return object  WP_Query instance
 */
function wpst_get_projects( $excludes = [], $count = -1 ) {
    // Define arguments for query.
    $args = array(
        'post_type' => 'work',
        'post_status' => 'publish',
        'post__not_in'   => $excludes,
        'posts_per_page' => $count,
        'offset' => 0
    );

    $offset = isset( $_GET["offset"] ) ? sanitize_text_field( $_GET["offset"] ) : 0;
    if ( $offset ) {
        $args['offset'] = $offset;
    }
    return new WP_Query( $args );
}



/**
 * $. Setters
 ******************************************************************************/

// Add new work to post type through function here.
