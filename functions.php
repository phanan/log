<?php 
/**
 * (Minimal) functions for the theme
 *
 * @package WordPress
 * @subpackage Log
 * @since 1.0
 */

add_action('after_setup_theme', function () {
    add_theme_support('infinite-scroll', [
        'container'      => 'container',
        'footer'         => FALSE,
        'wrapper'        => FALSE,
        'posts_per_page' => 10,
        'render'         => function () {
            get_template_part('loop');
        }
    ]);    
});


/**
 * Enqueues the scripts and styles.
 * We'll be including:
 * - The standard modernizr
 * - The jQuery from Google instead of using the bundled version
 * - The theme's javascripts
 * - The fonts from Google
 * - The theme's style.css
 */
add_action('wp_enqueue_scripts', function () {
    $v = '1.0.0';
    wp_enqueue_script('modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js');
    
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_script('log-main', get_template_directory_uri() . '/js/main.js', 'jquery', $v, TRUE);

    wp_enqueue_style('log-fonts', '//fonts.googleapis.com/css?family=Pacifico|Vollkorn:400italic,700italic,400,700');
    wp_enqueue_style('loga-main', get_template_directory_uri() . '/style.css', [], $v);
}, PHP_INT_MAX);


/**
 * Processes the [code] shortag to encode the html entities in the code
 */
add_shortcode('code', function ($atts, $content = '') {
    // should have the line numbers shown?
    $pre_class = isset($atts['line']) ? 'class="line-numbers"' : '';
    
    $atts = shortcode_atts([
        'lang' => 'php',
        'line' => 1,
    ], $atts);

    $content = trim(htmlentities($content));

    return <<<EOT

    <pre $pre_class data-start="{$atts['line']}"><code class="language-{$atts['lang']}">$content</code></pre>

EOT;
}, 1);

// move the wpautop to AFTER the shortcode is processed
// so that it doesn't mess the code up with stupid <br/> and <p>
remove_filter('the_content', 'wpautop');
add_filter('the_content', 'wpautop', 100);