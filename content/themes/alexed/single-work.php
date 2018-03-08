<?php

/**
 ***************************************************************************
 * Single - Work
 ***************************************************************************
 *
 *
 */

$image              = get_field('featured_image');
$image_url          = $image['sizes']['project_thumbnail'];

$brief              = get_field('brief');

$image_left         = get_field('image_left');
$image_left_url     = $image_left['sizes']['project_thumbnail'];

$image_right        = get_field('image_right');
$image_right_url    = $image_right['sizes']['project_thumbnail'];

$image_full        = get_field('image_full');
$image_full_url    = $image_full['sizes']['project_thumbnail_full'];

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
                <div class="featured__image" style="background-image: url('<?php echo $image_url; ?>');"></div>
            </div>
            <h2 class="brief__title u-push-top u-push-bottom/2">Project brief</h2>
            <p class="brief u-pad-sides@4"><?php echo $brief; ?></p>
        </div>

        <div class="container container--gallery">

            <?php if( $image_right_url && $image_left_url ): ?>
            <div class="grid grid--spaced">
                <div class="grid__item grid__item--6-12-bp2">
                    <div class="grid__image" style="background-image: url('<?php echo $image_left_url; ?>');"></div>
                </div>
                <div class="grid__item grid__item--6-12-bp2">
                    <div class="grid__image" style="background-image: url('<?php echo $image_right_url; ?>');"></div>
                </div>

                <?php if( $image_full_url ): ?>
                    <div class="grid__item">
                        <div class="grid__image grid__image--full" style="background-image: url('<?php echo $image_full_url; ?>');"></div>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>

        </div>

        <div class="container container--content">
            <?php the_content(); ?>
        </div>

    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
