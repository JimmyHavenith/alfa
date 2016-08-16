<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>Centre-alfa</title>
    <link rel="stylesheet" href="css/main.css" media="screen" title="no title" charset="utf-8">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>
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
              <form class="search" action="index.html" method="post">
                <input type="text" name="name" value="">
                <input type="submit" name="name" value="Rechercher">
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
