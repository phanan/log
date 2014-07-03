<?php 
/**
 * The main template for the theme. 
 * This is used by all posts and pages.
 * 
 * Used in index/single.
 *
 * @package WordPress
 * @subpackage Log
 * @since 1.0
 */

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); 
        get_template_part('content', 'single');
    endwhile; 
else : 
    get_template_part('content', '404');
endif; 

get_footer();
