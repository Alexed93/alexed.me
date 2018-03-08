<?php

/**
 ***************************************************************************
 * Partial: Hero
 ***************************************************************************
 *
 * This partial is used for the hero elements of each page template
 *
 */

$hero_type = '';

if( is_page_template('tpl-work.php') ):
    $hero_type = 'hero--image hero--work';
endif;

if( is_page(10) ):
    $hero_type = 'hero--image hero--contact';
endif;

if( is_home() || is_category() ):
    $hero_type = 'hero--image hero--blog';
endif;

?>

<div class="hero <?php echo $hero_type; ?>">
    <div class="container">

        <?php
            is_front_page() ? get_template_part('views/globals/hero/hero-front') : get_template_part('views/globals/hero/hero-normal') ;
        ?>

    </div>
</div>
