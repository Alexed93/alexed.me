<?
/**
 ***************************************************************************
 * Sidebar - Blog
 ***************************************************************************
 *
 *
 */

// Get archives
$categories = wpst_get_categories();
$current_cat = is_category( get_queried_object() ) ? get_queried_object()->name : '';

?>

<aside class="sidebar" role="complementary">
    <?php if ( $categories ) : ?>
        <article class="sidebar__section">
            <h2 class="delta | sidebar__heading">
                Categories
            </h2>
            <div class="sidebar__content">
                <ul class="sidebar__list list--unset">
                    <?php foreach ( $categories as $category ) : ?>
                        <?php $current = $current_cat == $category->name ? 'class="is-current"' : ''; ?>
                        <li <?= $current ?>>
                            <?php if ( $current ) : ?>
                                <?php echo $category->name; ?>
                            <?php else : ?>
                                <a href="<?php echo get_term_link( $category ); ?>">
                                    <?php echo $category->name; ?>
                                </a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </article> <!-- .sidebar__section -->
    <?php endif; ?>
</aside>
