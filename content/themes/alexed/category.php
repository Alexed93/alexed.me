<?php
/**
 ***************************************************************************
 * Category: Listing
 ***************************************************************************
 *
 * This template is the catch-all for a category archive
 *
 */

// Get the header
get_header();

?>

<?php get_template_part('views/globals/hero/hero'); ?>
<?php get_template_part('views/globals/breadcrumbs'); ?>

<main class="section">
    <div class="container">
        <div class="grid grid--spaced">

            <div class="grid__item grid__item--9-12-bp2">
                <?php if ( have_posts() ): ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'views/post/index' ); ?>
                    <?php endwhile; ?>

                    <!-- Pagination -->
                    <?php get_template_part( 'views/globals/pagination' ); wp_reset_query(); ?>

                <?php else: ?>
                    <?php get_template_part( 'views/errors/404-posts' ); ?>
                <?php endif; ?>
            </div>

            <div class="grid__item grid__item--3-12-bp2">
                <?php get_sidebar('blog'); ?>
            </div>

        </div>
    </div><!-- .container -->
</main><!-- .section -->

<?php get_footer(); ?>
