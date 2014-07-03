<?php 
/**
 * The template for displaying a post.
 * Used in index/single.
 *
 * @package WordPress
 * @subpackage Log
 * @since 1.0
 */
?>

<article class="post" id="post-<?php the_ID(); ?>" <?php post_class()?>>

    <h1 class="post-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark">
            <time datetime="<?php the_time('c'); ?>"><?php the_time('F j, Y'); ?></time>
        </a>
    </h1>
    <div class="entry"><?php the_content(); ?></div>

</article>