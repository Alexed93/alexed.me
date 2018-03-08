<?php

/**
 ***************************************************************************
 * Single - Work
 ***************************************************************************
 *
 *
 */

$image                  = get_field('featured_image');
$image_url              = $image['sizes']['project_thumbnail'];

$brief                  = get_field('brief');

$image_left             = get_field('image_left');
$image_left_url         = $image_left['sizes']['project_thumbnail'];

$image_right            = get_field('image_right');
$image_right_url        = $image_right['sizes']['project_thumbnail'];

$image_full             = get_field('image_full');
$image_full_url         = $image_full['sizes']['project_thumbnail_full'];

$iphone_featured        = get_field('iphone_featured');
$iphone_featured_url    = $iphone_featured['sizes']['project_thumbnail_iphone'];

$iphone_left            = get_field('iphone_left');
$iphone_left_url        = $iphone_left['sizes']['project_thumbnail_iphone'];

$iphone_right           = get_field('iphone_right');
$iphone_right_url       = $iphone_right['sizes']['project_thumbnail_iphone'];

$quote                  = get_field('feedback_quote');
$author                 = get_field('feedback_author');
$date                   = get_field('feedback_date');
$date_author            = $author . ', ' . '(' . $date . ')';

$images                 = get_field('gallery');

// Get the header
get_header();

?>

<?php get_template_part('views/globals/hero/hero'); ?>
<?php get_template_part('views/globals/breadcrumbs'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <main class="section">
        <div class="container container--small">
            <div class="macbook__container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/macbook.svg" class="macbook u-margin-center" alt="A thumbnail of the <?php the_title(); ?> project." title="<?php the_title(); ?>">
                <div class="featured__image featured__image--macbook" style="background-image: url('<?php echo $image_url; ?>');"></div>
            </div>
            <h2 class="brief__title u-push-top u-push-bottom/2">Project brief</h2>
            <p class="brief u-pad-sides@4"><?php echo $brief; ?></p>
        </div>

        <div class="container container--gallery">

            <div class="grid grid--spaced">
                <?php if( $image_right_url && $image_left_url ): ?>
                    <div class="grid__item grid__item--6-12-bp2">
                        <div class="grid__image" style="background-image: url('<?php echo $image_left_url; ?>');"></div>
                    </div>
                    <div class="grid__item grid__item--6-12-bp2">
                        <div class="grid__image" style="background-image: url('<?php echo $image_right_url; ?>');"></div>
                    </div>
                <?php endif; ?>

                <?php if( $image_full_url ): ?>
                    <div class="grid__item">
                        <div class="grid__image grid__image--full" style="background-image: url('<?php echo $image_full_url; ?>');"></div>
                    </div>
                <?php endif; ?>
            </div>

        </div>

        <div class="container container--content cf">
            <?php the_content(); ?>
        </div>

        <?php if( $images ): ?>
        <div class="container container--image_gallery">
            <div class="grid grid--spaced">
                <?php foreach( $images as $image ): ?>
                    <div class="grid__item grid__item--3-12-bp3">
                        <img class="image_gallery__image" src="<?php echo $image['sizes']['gallery_image']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <?php if( $iphone_featured_url && $iphone_left_url && $iphone_right_url): ?>
        <div class="container container--iphone">
            <div class="iphone__container u-align-center">
                <div class="featured__image featured__image--iphone iphone__left" style="background-image: url('<?php echo $iphone_left_url; ?>');"></div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/iphone.svg" class="iphone u-margin-center" alt="A thumbnail of the <?php the_title(); ?> project." title="<?php the_title(); ?>">
                <div class="featured__image featured__image--iphone" style="background-image: url('<?php echo $iphone_featured_url; ?>');"></div>
                <div class="featured__image featured__image--iphone iphone__right" style="background-image: url('<?php echo $iphone_right_url; ?>');"></div>
            </div>
        </div>
        <?php endif; ?>

        <?php if( $quote && $date_author ): ?>
        <div class="testimonials testimonials--inverted">
            <div class="container container--small ">
                <div class="testimonial">
                    <div class="testimonial__container">
                        <h2 class="u-push-bottom/2 u-zero-top gamma testimonial__title">
                            Client feedback
                        </h2>

                        <blockquote class="u-zero-top u-push-bottom delta u-style-normal testimonial__quote">
                            <?php echo $quote; ?>
                        </blockquote>

                        <h3 class="u-zero-bottom u-zero-top delta u-style-italic testimonial__author">
                            <?php echo $date_author; ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
