<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
    <meta charset="utf-8">
    <title><?php bloginfo(title); ?></title>
    <?php wp_head(); ?>
    <script src="https://use.fontawesome.com/94da2b0a6b.js"></script>
    <link rel="icon" type="image/png" href="favicon.png" />
  </head>

<body>
   <?php
    wp_nav_menu(
      array (
        'theme_location' => 'top-menu',
        'container' => 'nav',
        'menu_class' => 'nav__list'
        )
      )

   ?>

   <!-- <h1 class="page-heading max-width">
     <img src="http://localhost/portafolio/wp-content/uploads/2017/05/dota-2-logo.0.jpg" alt="logo" width="100" height="100" />
     <?php bloginfo(name); ?>
   </h1> -->
