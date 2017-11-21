<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Just another WordPress page.">
  <meta name="author" content="Hai Nguyen">
  <title>WP</title>
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><?php bloginfo( 'name' ); ?></a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">

        <?php if ( has_nav_menu( 'primary' ) ) : ?>
          <?php
            // Primary navigation menu.
            $primary_nav = wp_nav_menu( array(
              'menu_class'     => 'nav navbar-nav',
              'theme_location' => 'primary',
              'echo' => false,
            ) );
            echo str_replace('current-menu-item', 'current-menu-item active', $primary_nav);
          ?>
        <?php endif; ?>

      </div><!--/.nav-collapse -->
    </div>
  </nav>

<br>
