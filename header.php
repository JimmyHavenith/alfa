<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre-alfa</title>
    <link rel="stylesheet" href="css/main.css" media="screen" title="no title" charset="utf-8">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>
    <!-- HTML5 element support for IE6-8 -->
    <!--[if lt IE 9]>
     <script>
        document.createElement('header');
        document.createElement('nav');
        document.createElement('section');
        document.createElement('article');
        document.createElement('aside');
        document.createElement('footer');
     </script>
    <![endif]-->
    <?php
      wp_head();
    ?>
  </head>
  <body>
    <header>
      <div class="header-menu">
        <div class="container">
          <nav class="main-menu">
            <?php wp_nav_menu(array(
              'theme_location:' => 'nav'
            )); ?>
          </nav>
          <div class="search-bar">
            <div class="search-bar-div">
              <?php get_search_form(true); ?>
            </div>
          </div>
          <div class="header-logo">
            <a class="header-logo-img" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo du centre alfa"></a>
            <a class="header-logo-menu" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/icon-menu.png" alt="icône pour accéder au menu"></a>
          </div>
        </div>
      </div>
      <div class="header-hb">
        <nav class="header-hb-nav">
          <?php wp_nav_menu(array(
            'theme_location:' => 'nav'
          )); ?>
        </nav>
    </header>
