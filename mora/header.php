<!DOCTYPE html>
<html lang="<?php language_attributes() ;?>">
  <head>


    <meta charset="<?php bloginfo('charset') ;?>" />
    <meta name="description" content="<?php bloginfo('name'); ?>" />
    <meta name="keywords" content="website keywords, website keywords" />
        <!-- <meta name="siteinfo" content="<?php //bloginfo('url'); ?>/robots.txt" /> Robot-Datei -->

    <link href=" <?php bloginfo('stylesheet_url'); ?> " rel="stylesheet" type="text/css"/>

    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- Stats -->
    <!-- <meta name="siteinfo" content="<?php //bloginfo('url'); ?>/robots.txt" /> Robot-Datei -->
    <meta name="robots" content="index, follow" /> <!-- Alles wird indexiert -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> <!-- Javascript Comment Functionality -->
    <?php wp_head(); ?>


  </head>

  <body>
    <div id="main">
      <header>
        <nav>
          <div id="menubar">
            <ul id="nav">
              <?php wp_nav_menu( array('menu' => 'Main Navigation Menu' )); ?>
            </ul>
          </div>
          <!--close menubar-->
        </nav>
        <div id="banner">
          <div id="welcome">
            <h3><?php bloginfo('name'); ?></h3>
          </div>
          <!--close welcome-->
        </div>
        <!--close banner-->
      </header>

      <!-- Bis hier Header -->

      <!-- ab heir Content -->
      <div id="site_content">
        <div id="strapline">
          <div id="welcome_slogan">
            <h3><?php bloginfo('description'); ?></h3>
          </div>
          <!--close welcome_slogan-->
          
          <?php get_search_form(); ?>
        </div>
        <!--close strapline-->
