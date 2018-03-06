<?php

/**
 ***************************************************************************
 * Work
 ***************************************************************************
 *
 * All template filenames should be prefixed with `tpl-` to help group them
 * within the theme. Prefix your template name with either 'Admin' or 'Theme':
 * - Admin = doesn't use the usual excerpt/content (aka. set and forget)
 * - Theme = something the client can actively use.
 *
 * Template Name: Theme - Work
 *
 */



// Get the header
get_header();

?>

<?php get_template_part('views/globals/hero/hero'); ?>

<main class="section">
    <div class="container">
        <?php get_template_part('views/work/loop'); ?>
    </div><!-- .container -->
</main><!-- .section -->

<?php get_footer(); ?>
