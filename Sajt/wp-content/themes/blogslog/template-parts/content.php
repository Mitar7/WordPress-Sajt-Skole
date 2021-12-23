<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Palace
 * @subpackage BlogSlog
 * @since BlogSlog 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'post-thumbnail' ) ?>');">
            <a href="<?php the_permalink(); ?>" class="post-thumbnail-link"></a>
        </div><!-- .featured-image -->
    <?php endif; ?>

    <div class="entry-container">
        <span class="cat-links">
            <?php echo blogslog_article_footer_meta(); ?>
        </span><!-- .cat-links -->

        <header class="entry-header">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>

        <div class="entry-content">
            <p><?php the_excerpt(); ?></p>
        </div><!-- .entry-content -->

        <div class="entry-meta">
            <?php  
                blogslog_posted_on();
                echo blogslog_author();
            ?>
        </div><!-- .entry-meta -->
    </div><!-- .entry-container -->

</article><!-- #post-## -->
