<?php 
/**
 * The template for JetPack's infinite loading feature.
 *
 * @package WordPress
 * @subpackage Log
 * @since 1.0
 */

while (have_posts()) : the_post(); 
    get_template_part('content', 'single');
endwhile; 