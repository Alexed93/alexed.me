<?php

/**
 ***************************************************************************
 * Partial: Hero
 ***************************************************************************
 *
 * This partial is used for the hero elements of each page template
 *
 */


?>

<div class="hero">
    <div class="container">

        <?php
            is_front_page() ? get_template_part('views/globals/hero/hero-front') : get_template_part('views/globals/hero/hero-normal') ;
        ?>

    </div>
</div>
