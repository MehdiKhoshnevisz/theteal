<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#17bcb4">
  <title><?php wp_title( '&raquo;', true, '' ); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="<?php echo get_bloginfo('rss2_url'); ?>" title="<?php bloginfo('name'); ?>" type="application/rss+xml" rel="alternate">
    <?php wp_head(); ?>
</head>
<body>
<div class="main-wrapper container">
    <header class="header">
        <div id="blog-title">
            <h1 class="brackets"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        </div><!--/#blog-title-->
        <div id="nav-wrapper">
          <section>
            <input type="checkbox" />
            <svg class="blog-menu-icon" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
              <g>
                <g>
                  <path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z"/>
                </g>
              </g>
              <g>
                <g>
                  <path d="M492,76H20C8.954,76,0,84.954,0,96s8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,76,492,76z"/>
                </g>
              </g>
              <g>
                <g>
                  <path d="M492,396H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20    C512,404.954,503.046,396,492,396z"/>
                </g>
              </svg>
              <nav>
              <?php wp_nav_menu( array( 'menu' => 'Header Menu' ) );?>
            </nav>
          </section><!--/.container-->
        </div><!--/#nav-wrapper-->
    </header><!--/.header-->