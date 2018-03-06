<?php
/**
 ***************************************************************************
 * News: Listing
 ***************************************************************************
 *
 * This template is the catch-all for the news main page,
 * categories and archives.
 *
 */


// Get the header
get_header();

?>

<?php get_template_part('views/globals/hero/hero'); ?>

<main class="section">
    <div class="container">
        <?php if ( have_posts() ): ?>
            <?php while ( have_posts() ) : the_post(); ?>

            <article>
                <?php the_title(); ?>

                <?php if ( $post->post_excerpt ): ?>
                    <?php echo get_the_excerpt(); ?>
                <?php endif; ?>

                <?php the_content(); ?>
            </article>

            <?php endwhile; ?>

        <?php else: ?>
            <?php get_template_part( 'views/errors/404-posts' ); ?>
        <?php endif; ?>
    </div><!-- .container -->
</main><!-- .section -->

<?php get_footer(); ?>
