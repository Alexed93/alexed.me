<?php
    $excerpt = get_the_excerpt();

    if( $excerpt ):
        $excerpt = get_the_excerpt();
    else:
        $excerpt = wp_trim_words(the_content($post->ID), 25, "...");
    endif;

    $category = wpst_term_links($post->ID, 'category' , false );

?>

<article class="post__card u-push-bottom">
    <a href="<?php echo get_permalink(); ?>" class="gamma u-push-bottom/2">
        <?php the_title(); ?>
    </a>

    <h4 class="date epsilon u-push-top u-push-bottom/2 u-weight-medium zeta">
        Posted on: <?php the_date('Y-m-d'); ?>
    </h4>

    <?php if($category): ?>
        <h4 class="category epsilon u-push-bottom u-weight-medium zeta">
            Published within: <?php echo $category; ?>
        </h4>
    <?php endif; ?>

    <?php if ( $excerpt ): ?>
        <p class="u-zero-bottom u-zero-top">
            <?php echo $excerpt; ?>
        </p>
    <?php endif; ?>
</article>
