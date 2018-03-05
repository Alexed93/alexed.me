<?php

/**
 ***************************************************************************
 * Partial: Footer
 ***************************************************************************
 *
 * This partial is used to define the markup for the site's global footer
 * and/or copyright info.
 *
 */



?>

<footer class="footer">
    <div class="container">
        <div class="grid">
            <div class="grid__item grid__item--3-12-bp2">
                <a href="/" class="logo | u-no-border">
                    <p class="is-hidden"><?php bloginfo( 'name' ); ?></p>
                    <i class="icon icon--logo-inverted footer__logo"></i>
                </a>
            </div>

            <div class="grid__item grid__item--9-12-bp2">
                <div class="social-icons">
                    <a href="https://twitter.com/alexed93?lang=en" class="u-no-border">
                        <p class="is-hidden">Twitter</p>
                        <i class="icon icon--twitter icon--social"></i>
                    </a>

                    <a href="https://www.instagram.com/alexed93/" class="u-no-border">
                        <p class="is-hidden">Instagram</p>
                        <i class="icon icon--instagram icon--social"></i>
                    </a>

                    <a href="https://www.linkedin.com/feed/?trk=nav_back_to_linkedin" class="u-no-border">
                        <p class="is-hidden">LinkedIn</p>
                        <i class="icon icon--linkedin icon--social"></i>
                    </a>

                    <a href="https://codepen.io/Alexed93/" class="u-no-border">
                        <p class="is-hidden">Codepen</p>
                        <i class="icon icon--codepen icon--social"></i>
                    </a>

                    <a href="https://dribbble.com/AlexEd93" class="u-no-border">
                        <p class="is-hidden">Dribbble</p>
                        <i class="icon icon--dribble icon--social"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
