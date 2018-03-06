<?php

/**
 ***************************************************************************
 * Front Page Template
 ***************************************************************************
 *
 * This is used as a bespoke template for the homepage
 *
 * More info can be found here:
 * http://codex.wordpress.org/Creating_a_Static_Front_Page
 *
 */



// Get the header
get_header();

?>

<?php get_template_part('views/globals/hero/hero'); ?>

<main class="section">
    <div class="container">

        <?php get_template_part('views/work/featured'); ?>
        <?php get_template_part('views/testimonials'); ?>
        <?php get_template_part('views/work/loop'); ?>

    </div><!-- .container -->
</main><!-- .section -->

<?php get_footer(); ?>
