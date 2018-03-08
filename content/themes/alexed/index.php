<?php

/**
 ***************************************************************************
 * Default Template
 ***************************************************************************
 *
 * This template is used to show a generic page. More info here:
 * http://codex.wordpress.org/Theme_Development#Index_.28index.php.29
 *
 */



// Get the header
get_header();

$images = get_field('gallery');

?>

<?php get_template_part('views/globals/hero/hero'); ?>
<?php get_template_part('views/globals/breadcrumbs'); ?>

<main class="section">
    <div class="container">

        <div class="content">
        <?php if ( have_posts() ): ?>
            <?php while ( have_posts() ): ?>
                <?php the_post(); ?>

                <article>
                    <?php the_content(); ?>
                </article>

            <?php endwhile; ?>
        <?php else: ?>
            <?php get_template_part( 'views/errors/404-posts' ); ?>
        <?php endif; ?>
        </div>

        <?php if( $images ): ?>
        <div class="u-push-top@2">
            <div class="grid grid--spaced">
                <?php foreach( $images as $image ): ?>
                    <div class="grid__item grid__item--3-12-bp3">
                        <img class="image_gallery__image" src="<?php echo $image['sizes']['gallery_image']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
