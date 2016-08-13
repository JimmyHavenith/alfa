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
            <ul>
              <li><a href="#">Accueil</a></li>
              <li><a href="#">A propos</a></li>
              <li><a href="#">Nos services</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Tarifs</a></li>
              <li><a href="#">Partenariat</a></li>
              <li><a href="#">FAQs</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
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
      <div class="header-alfa">
        <div class="container">
          <div class="header-alfa-div">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo du centre alfa"></a>
            <h1>Le centre ALFA</h1>
          </div>
        </div>
      </div>
      <div class="header-banner">
        <img src="<?php bloginfo('template_directory'); ?>/img/banner02.png" alt="Photo de page d'accueil du centre alfa">
        <div class="header-banner-txt">
          <p>
            Aide Liégoise aux Alcooliques et à leur Famille - 04 223 09 03
          </p>
        </div>
      </div>
    </header>
