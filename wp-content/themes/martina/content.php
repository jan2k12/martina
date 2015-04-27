<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div class = "container" style="padding-bottom:100px;">
    <div class = "row start-text">
        <div class ="col-md-4">
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('medium');
            }
            ?>
        </div>
        <div class = "col-md-8">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


                <header class="entry-header">
                    <?php if (in_array('category', get_object_taxonomies(get_post_type()))) : ?>
                        <div class="entry-meta">
                            <span class="cat-links"><?php echo get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen')); ?></span>
                        </div>
                        <?php
                    endif;

                    if (is_single()) :
                        the_title('<h2>', '</h2>');
                    else :
                        the_title('<h2>', '</h2>');
                    endif;
                    ?>

                </header><!-- .entry-header -->

                <?php if (is_search()) : ?>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                <?php else : ?>
                    <div class="entry-content">
                        <?php
                        the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen'));
                        wp_link_pages(array(
                            'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'twentyfourteen') . '</span>',
                            'after' => '</div>',
                            'link_before' => '<span>',
                            'link_after' => '</span>',
                        ));
                        ?>
                    </div><!-- .entry-content -->
                <?php endif; ?>

                
            </article><!-- #post-## -->
        </div>
    </div>
    <div id = "push"></div>
</div>
