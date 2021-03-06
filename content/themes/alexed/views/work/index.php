<?php
    $title        = get_the_title();
    $excerpt      = get_the_excerpt();
    $btn_url      = get_permalink();
    $btn_label    = 'View the "' . $title  . '" project';
    $image        = get_field('featured_image');
    $image_url    = $image['sizes']['project_thumbnail_featured'];
?>

<div class="grid__item grid__item--6-12-bp2"> <!-- Additional projects results grid item start -->

   <div class="card card--animated"> <!-- Additional projects card start -->

        <div class="card__image u-push-bottom" style="background-image: url('<?php echo $image_url; ?>');"></div>

        <div class="card__detail"> <!-- Additional projects card text start -->
            <h3 class="gamma u-push-bottom/2">
                <?php echo $title; ?>
            </h3>

            <p class="u-zero-bottom delta">
                <?php echo $excerpt; ?>
            </p>

            <a href="<?php echo $btn_url; ?>" class="btn btn--primary card__button">
                <?php echo $btn_label; ?>
            </a>
        </div> <!-- Additional project card detail end -->

    </div> <!-- Additional project card end -->

</div> <!-- Additional project card grid item end -->
