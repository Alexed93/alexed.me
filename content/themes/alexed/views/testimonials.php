<?php

/**
 ***************************************************************************
 * Partial: Testimonials
 ***************************************************************************
 *
 * This partial is used for the testimonials slick slider
 *
 */

// Get featured project
$testimonials = get_field('testimonials');

?>

<?php if( have_rows('testimonials') ): ?>
    <div class="testimonials">
        <div class="container container--small">
        <?php while ( have_rows('testimonials') ) : the_row(); ?>

            <?php
                $title          = get_sub_field('testimonial_title');
                $quote          = get_sub_field('testimonial_quote');
                $author         = get_sub_field('testimonial_author');
                $date           = get_sub_field('testimonial_date');
                $date_author    = $author . ', ' . '(' . $date . ')';
            ?>

            <h2 class="u-push-bottom/2 u-zero-top gamma testimonial__title">
                <?php echo $title; ?>
            </h2>

            <blockquote class="u-zero-top u-zero-bottom delta u-style-normal testimonial__quote">
                <?php echo $quote; ?>
            </blockquote>

            <h3 class="u-zero-bottom u-push-top/2 delta u-style-italic testimonial__author"><?php echo $date_author; ?></h3>

        <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
