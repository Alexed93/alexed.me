<?php

/**
 ***************************************************************************
 * Single - Work
 ***************************************************************************
 *
 *
 */

$image                  = get_field('featured_image');
$image_url              = $image['sizes']['project_thumbnail_featured'];

$brief                  = get_field('brief');

$download               = get_field('download');
$view                   = get_field('view_url');

$download_url           = $download['url'];
$view_url               = $view;

$image_mac              = get_field('featured_image_mac');
$image_mac_url          = $image_mac['sizes']['project_thumbnail_mac'];

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
$container_padding      = '';

// Get the header
get_header();

?>

<?php get_template_part('views/globals/hero/hero'); ?>
<?php get_template_part('views/globals/breadcrumbs'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php if( $download_url || $view_url ):
            $container_padding = "container--brief";
        else:
            $container_padding = "";
        endif;
    ?>

    <main class="section">
        <div class="container container--small <?php echo $container_padding; ?>">

            <?php if( $image_mac_url ): ?>
            <div class="macbook__container u-align-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/macbook.svg" class="macbook u-margin-center" alt="A thumbnail of the <?php the_title(); ?> project." title="<?php the_title(); ?>">
                <div class="featured__image featured__image--macbook" style="background-image: url('<?php echo $image_mac_url; ?>');"></div>
            </div>
            <?php endif; ?>

            <h2 class="brief__title u-push-top u-push-bottom/2 alpha">Project brief</h2>
            <p class="brief delta u-pad-sides@2"><?php echo $brief; ?></p>

            <?php if( $download_url ): ?>
                <a href="<?php echo $download_url; ?>" class="btn btn--primary btn--project u-display-block u-margin-center">
                    Download this project
                </a>
            <?php elseif ( $view_url ) : ?>
                <a href="<?php echo $view_url; ?>" class="btn btn--primary btn--project u-display-block u-margin-center">
                    View this live project
                </a>
            <?php endif; ?>

        </div>

        <?php if( $image_right_url && $image_left_url ): ?>
        <div class="container container--gallery">

            <div class="grid grid--spaced">

                <div class="grid__item grid__item--6-12-bp2">
                    <img class="grid__image" src="<?php echo $image_left_url; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
                <div class="grid__item grid__item--6-12-bp2">
                    <img class="grid__image" src="<?php echo $image_right_url; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>

                <?php if( $image_full_url ): ?>
                    <div class="grid__item">
                        <img class="grid__image grid__image--full" src="<?php echo $image_full_url; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                <?php endif; ?>

            </div>
        <?php endif; ?>

        </div>

        <div class="container container--content cf">
            <?php the_content(); ?>
        </div>

        <?php //if( $images ): ?>
<!--         <div class="container container--image_gallery test--flexbox u-push-bottom u-push-top@2">
            <div class="grid grid--spaced grid--flex">
                <?php //foreach( $images as $image ): ?>
                    <div class="grid__item grid__item--4-12-bp2 grid__item--3-12-bp4">
                        <img class="image_gallery__image" src="<?php //echo $image['sizes']['gallery_image']; ?>" alt="<?php //echo $image['alt']; ?>" />
                    </div>
                <?php //endforeach; ?>
            </div>
        </div> -->
        <?php //endif; ?>

        <?php if( $iphone_featured_url && $iphone_left_url && $iphone_right_url): ?>
        <div class="container container--iphone u-push-bottom">
            <div class="iphone__container u-align-center">
                <div class="featured__image featured__image--iphone iphone__left" style="background-image: url('<?php echo $iphone_left_url; ?>');"></div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/iphone.svg" class="iphone u-margin-center" alt="A thumbnail of the <?php the_title(); ?> project." title="<?php the_title(); ?>">
                <div class="featured__image featured__image--iphone" style="background-image: url('<?php echo $iphone_featured_url; ?>');"></div>
                <div class="featured__image featured__image--iphone iphone__right" style="background-image: url('<?php echo $iphone_right_url; ?>');"></div>
            </div>
        </div>
        <?php endif; ?>

        <?php if( $quote && $date_author ): ?>
        <div class="testimonials u-zero-bottom">
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
