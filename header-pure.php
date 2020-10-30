<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1D8E9B">
  <title><?php wp_title( '&raquo;', true, '' ); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="<?php echo get_bloginfo('rss2_url'); ?>" title="<?php bloginfo('name'); ?>" type="application/rss+xml" rel="alternate">
    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
