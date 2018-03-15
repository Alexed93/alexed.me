<?php

/**
 ***************************************************************************
 * Partial: Index
 ***************************************************************************
 *
 * This partial is used to show all remaining work
 *
 */

$excludes = '';
$featured_project = '';

if( is_front_page() ) {

    // Get the IDs of the 3 projects marked as "featured"
    $excludes = get_field('featured_projects');

    if($excludes):

        $featured_project = array();

        foreach ($excludes as $excluded):
            $featured_project[] = $excluded->ID;
        endforeach;

        // Run the custom query with excludes
        $projects = wpst_get_projects(
            $excludes = $featured_project,
            $count = 4
        );

    else:

        // Run the custom query
        $projects = wpst_get_projects(
            $excludes = '',
            $count = 4
        );

    endif;

} else {

    // Run the custom query
    $projects = wpst_get_projects(
        $excludes = '',
        $count = 6
    );

}

?>

<div class="test--flexbox u-push-top@2"> <!-- Projects results start -->

    <div class="grid grid--flex grid--spaced"> <!-- Projects grid start -->

        <?php if ( $projects->have_posts() ) : ?>

            <?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
                <?php get_template_part('views/work/index'); ?>
            <?php endwhile; ?>

    </div> <!-- Projects grid end -->

            <!-- Pagination -->
            <?php if( !is_front_page() ) : ?>
                <?php $wp_query = $projects; get_template_part( 'views/globals/pagination' ); wp_reset_query(); ?>
            <?php endif; ?>

        <?php wp_reset_postdata(); else: ?>
            <?php get_template_part( 'views/errors/404-posts' ); ?>
        <?php endif; wp_reset_query(); ?>

</div> <!-- Projects results end -->


