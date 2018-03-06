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
        $excludes = ''
    );

}

?>

<h2 class="u-zero-bottom u-zero-top">Other recent work</h2>
<p class="section__introduction delta u-push-top/2 u-zero-bottom">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

<div class="test--flexbox u-push-top@2"> <!-- Projects results start -->

    <div class="grid grid--flex grid--spaced"> <!-- Projects grid start -->

        <?php if ( $projects->have_posts() ) : ?>

            <?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
                <?php get_template_part('views/work/index'); ?>
            <?php endwhile; ?>

            <!-- Pagination -->
            <?php if( !is_front_page() ) : ?>
                <?php $wp_query = $projects; get_template_part( 'views/globals/pagination' ); wp_reset_query(); ?>
            <?php endif; ?>

        <?php else : ?>
            <?php get_template_part( 'views/errors/404-posts' ); ?>
        <?php endif; wp_reset_query(); ?>

    </div> <!-- Projects grid end -->

</div> <!-- Projects results end -->


