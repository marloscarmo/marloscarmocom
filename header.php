<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Expires" content="30" />
    <title>marloscarmo.com | creativity, technology & entrepreneurship</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/lib.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <header class="header-orange">
      <div class="brand">
        <a href="/">marloscarmo<span class="brand-light">.com</span></a>
      </div>

      <div class="nav-icon"></div>

      <div class="search">
        <div class="search-icon"></div>
        <form role="search" method="get" id="searchform" action="/">
          <input class="search-input" type="text" name="s" id="s" value="" placeholder="search">
        </form>
      </div>

      <nav class="nav-menu">
        <ul>
          <li><a href="/#cover">home</a></li>
          <li><a href="/#articles">blog</a></li>
          <li><a href="/#projects">projects</a></li>
          <li><a href="/#bio">bio</a></li>
        </ul>
      </nav>
    </header>


    <nav class="nav-mobile">
      <div class="close-btn"></div>

      <div class="search-mobile">
        <form role="search" method="get" id="searchform" action="/">
          <input class="search-input" type="text" name="s" id="s" value="" placeholder="search">
        </form>
      </div>

      <ul>
        <li><a href="/#cover">home</a></li>
        <li><a href="/#articles">blog</a></li>
        <li><a href="/#projects">projects</a></li>
        <li><a href="/#bio">bio</a></li>
      </ul>
    </nav>
