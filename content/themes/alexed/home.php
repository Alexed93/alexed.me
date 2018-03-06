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
        <div class="grid grid--spaced">

            <div class="grid__item grid__item--9-12-bp2">
                <?php if ( have_posts() ): ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php
                        $excerpt = get_the_excerpt();

                        if( $excerpt ):
                            $excerpt = get_the_excerpt();
                        else:
                            $excerpt = wp_trim_words(the_content($post->ID), 25, "...");
                        endif;
                    ?>

                    <article class="post u-push-bottom">
                        <a href="<?php echo get_permalink(); ?>" class="gamma u-push-bottom/2">
                            <?php the_title(); ?>
                        </a>

                        <h4 class="date epsilon u-push-top/2 u-push-bottom u-weight-medium zeta">
                            Published on: <?php the_date('Y-m-d'); ?>
                        </h4>

                        <?php if ( $excerpt ): ?>
                            <p class="u-zero-bottom u-zero-top">
                                <?php echo $excerpt; ?>
                            </p>
                        <?php endif; ?>
                    </article>

                    <?php endwhile; ?>

                    <!-- Pagination -->
                    <?php get_template_part( 'views/globals/pagination' ); wp_reset_query(); ?>

                <?php else: ?>
                    <?php get_template_part( 'views/errors/404-posts' ); ?>
                <?php endif; ?>
            </div>

            <div class="grid__item grid__item--3-12-bp2">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div><!-- .container -->
</main><!-- .section -->

<?php get_footer(); ?>
