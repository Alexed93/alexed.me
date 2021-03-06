<?php

/**
 ***************************************************************************
 * Partial: Header
 ***************************************************************************
 *
 * This partial is used to define the markup for the site's global header
 * and navigation.
 *
 */



?>

<a href="#navigation" class="is-hidden">Skip to Navigation</a>

<header class="header u-pad@2">
    <div class="container">
        <a href="/" class="logo | u-no-border">
            <p class="is-hidden"><?php bloginfo( 'name' ); ?></p>
            <i class="icon icon--logo header__logo"></i>
        </a>

        <button class="toggle | js-toggle-nav | header__toggle header__toggle--nav" role="button" aria-label="Toggle navigation">
            <span class="toggle__label | is-hidden">Toggle navigation</span>
            <span class="toggle__icon toggle__icon--nav | icon icon--large icon--menu-open"></span>
        </button>

        <nav class="nav-container | header__nav" id="navigation" role="navigation">
            <ul class="nav nav--primary">
                <?php wp_nav_menu( array('theme_location' => 'primary', 'items_wrap' => '%3$s') ); ?>
            </ul>
        </nav>
    </div>
</header>
