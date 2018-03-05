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
function wpst_get_projects ( $parent = 0, $excludes = array(), $count = -1, $orderby = 'menu_order', $order = 'ASC' ) {

    // Define arguments for query.
    $args = array(
        'post_type'      => 'work',
        'post_parent'    => $parent,
        'posts_per_work' => $count,
        'post__not_in'   => $excludes,
        'orderby'        => $orderby,
        'order'          => $order
    );

    // Create new instance of WP_Query class.
    $output = new WP_Query( $args );

    // Return the results
    return $output;
}



/**
 * $. Setters
 ******************************************************************************/

// Add new work to post type through function here.
