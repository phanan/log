<?php 
/**
 * The header for the theme.
 *
 * @package WordPress
 * @subpackage Log
 * @since 1.0
 */
?>
<!doctype html> 
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head profile="http://gmpg.org/xfn/11">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width">

<title><?php bloginfo('name'); ?></title>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<link rel="shortcut icon" href="<?=get_template_directory_uri()?>/favicon.ico">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="container">
        <h1 id="blogTitle"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    