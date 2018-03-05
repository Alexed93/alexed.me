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

        <!-- IF IS FRONT-PAGE -->
        <div class="grid">
            <div class="grid__item grid__item--12-12 grid__item--6-12-bp2">
                <div class="hero__text">
                    <h1 class="u-zero-bottom"">Alex Edwards</h1>
                    <h2 class="u-zero-top u-zero-bottom">Web developer</h2>
                    <p class="delta u-push-top/2 u-zero-bottom"">
                        Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.
                    </p>
                </div>
            </div>
            <div class="grid__item grid__item--6-12-bp2 u-align-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/img/black-white-2.png" class="profile-pic" alt="A photo of Alex Edwards" title="Alex Edwards">
            </div>
        </div>

    </div>
</div>
