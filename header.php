<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>marloscarmo.com - development, project management & audience</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
    <script>
      WebFont.load({
        google: {
          families: ["Montserrat:400,700","Source Sans Pro:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic"]
        }
      });
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/lib.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
  </head>
  <body>

    <header>
      <div class="brand">
        <a href="/">marloscarmo<span class="brand-light">.com</span></a>
      </div>

      <div class="nav-icon"></div>

      <div class="search">
        <div class="search-icon"></div>
        <input class="search-input" type="text" name="search" value="" placeholder="search">
      </div>

      <nav class="nav-menu">
        <ul>
          <li><a href="/">home</a></li>
          <li><a href="/#articles">blog</a></li>
          <li><a href="/#projects">projetos</a></li>
          <li><a href="/#bio">bio</a></li>
        </ul>
      </nav>
    </header>


    <nav class="nav-mobile">
      <div class="close-btn"></div>

      <div class="search-mobile">
        <input class="search-input" type="text" name="search" value="" placeholder="search">
      </div>

      <ul>
        <li><a href="#">home</a></li>
        <li><a href="#">articles</a></li>
        <li><a href="#">projects</a></li>
        <li><a href="#">bio</a></li>
        <li><a href="#">contact</a></li>
      </ul>
    </nav>
