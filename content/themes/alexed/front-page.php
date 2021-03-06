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
    </div>

    <?php get_template_part('views/testimonials'); ?>

    <div class="container">
        <h2 class="u-zero-bottom u-zero-top">Other recent work</h2>
        <p class="section__introduction delta u-push-top/2 u-zero-bottom">A few more examples of some of my work, not specific to Web design or development.</p>
        <?php get_template_part('views/work/loop'); ?>
    </div>
</main><!-- .section -->

<?php get_footer(); ?>
