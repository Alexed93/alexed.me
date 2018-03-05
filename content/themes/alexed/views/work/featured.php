<?php

/**
 ***************************************************************************
 * Partial: Featured work
 ***************************************************************************
 *
 * This partial is used for the larger/featured projects on the home page
 *
 */

// Get featured project
$featured_projects = get_field('featured_projects');
$i = 1;

?>

<?php if( $featured_projects ): ?>
    <?php foreach ( $featured_projects as $featured_project ): ?>
        <?php
            if( ($i % 2) == 0 ):
                $side = 'battenberg--right';
            else:
                $side = 'battenberg--left';
            endif;

            // set values
            $title        = get_the_title($featured_project);
            $excerpt      = get_the_excerpt($featured_project);
            $btn_url      = get_the_permalink($featured_project);
            $btn_label    = 'View the' . $title . 'project';
            $image        = get_field('featured_image', $featured_project);
            $image_url    = $image['sizes']['medium'];
            $box_output   = '';
            $image_output = '';

            $box_output .= '<div class="battenberg__box">';
            if($title):
                $box_output .= '<h2 class="battenberg__title">'.$title.'</h2>';
            endif;
            if($excerpt):
                $box_output .= '<h3 class="battenberg__excerpt">'.$excerpt.'</h3>';
            endif;

            // build button
            if( $btn_url && $btn_label ):
                $box_output .= '<a href="'.$btn_url.'" class="btn">'.$btn_label.'</a>';
            endif;
            $box_output .= '</div>';

            // build image output
            if( $image_url ):
                $image_output .= '<div class="battenberg__image" style="background-image: url('.$image_url.');"></div>';
            endif;
        ?>

<?php var_dump($image_url); ?>

        <article class="battenberg <?php echo $side; ?>">
            <?php
                if( ($i % 2) == 0 ):
                    echo $image_output;
                    echo $box_output;
                else:
                    echo $box_output;
                    echo $image_output;
                endif;
            ?>
        </article>

    <?php $i++; endforeach; wp_reset_postdata(); ?>
<?php endif; ?>
