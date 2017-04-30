<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
    <meta charset="utf-8">
    <title><?php bloginfo(title); ?></title>
    <?php wp_head(); ?>
    <title>Portafolio</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i" rel="stylesheet">

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
