<?

$blog_page = get_option( 'page_for_posts' );

if( is_home() ):
    $title = get_the_title( $blog_page );
    $subtitle = get_field( 'subtitle', $blog_page );
    $excerpt = get_the_excerpt( $blog_page );
else:
    $title = get_the_title();
    $subtitle = get_field( 'subtitle' );
    $excerpt = get_the_excerpt();
endif;

?>

<div class="container container--small">
    <div class="hero__text u-align-center">
        <h1 class="u-zero-bottom""><?php echo $title; ?></h1>
        <h2 class="u-zero-top u-zero-bottom"><?php echo $subtitle; ?></h2>
        <p class="delta u-push-top/2 u-zero-bottom u-pad-sides@4">
            <?php echo $excerpt; ?>
        </p>
    </div>
</div>
