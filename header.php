  <!doctype html>
  <!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php bloginfo('language') ?>" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php bloginfo('language') ?>"> <![endif]-->
  <!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="<?php bloginfo('language') ?>" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php bloginfo('language') ?>"> <![endif]-->
  <!--[if IE 8]><html class="no-js lt-ie9" lang="<?php bloginfo('language') ?>" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php bloginfo('language') ?>"> <![endif]-->
  <!--[if gt IE 8]><!--> <html class="no-js" lang="<?php bloginfo('language') ?>" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php bloginfo('language') ?>"> <!--<![endif]-->
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <!--SEO-->
      <title><?php the_SEO('title', get_the_ID()) ?></title>
      <meta name="description" property="og:description" content="<?php the_SEO('description', get_the_ID()) ?>">
      <meta name="keywords" content="<?php the_SEO('keywords', get_the_ID()) ?>">
      <!--Metatags facebook-->
      <meta property="og:locale" content="<?php bloginfo('language') ?>">
      <meta property="og:url" content="<?php bloginfo('url') ?>">
      <meta property="og:title" content="<?php the_SEO('title', get_the_ID()) ?>">
      <meta property="og:site_name" content="<?php the_SEO('title', get_the_ID()) ?>">
      <meta property="og:image" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--icons-->
      <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri().'/'; ?>img/favicon.ico">
      <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri().'/'; ?>img/apple-touch-icon.png">
      <!--.css-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/'; ?>style.css">
      <!--.js-->
      <script src="<?php echo get_template_directory_uri().'/'; ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
      <!-- Wordpress  -->
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
      <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>"/>
      <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('atom_url'); ?>"/>
      <?php wp_head(); ?>
    </head>

    <body role="document">
      <nav id="navbar-main" class="navbar navbar-default">
        <div class="container bg-white">
          <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
              <a href="<?php bloginfo('url'); ?>" class="navbar-brand">
                <img src="<?php echo get_template_directory_uri().'/'; ?>img/siat.png" alt="logo" class="logo">
              </a>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-contact " >
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="tel:+55145130825024" onClick="ga('send', 'event', 'Contato', 'click no telefone','51 3082.5024', '0.5');">
                    (51) 3082-5024
                  </a>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
            <div class="clearfix"></div>
          </div>

          <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <!-- <ul class="nav navbar-nav navbar-left">
                <li class="active">
                  <a href="#">Sobre Nós <span class="sr-only">(current)</span></a>
                </li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Dicas de Segurança</a></li>
                <li><a href="#">Trabalhe Conosco</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contato <span class="caret"></span></a>

                </li>
              </ul>-->
              <?php
                wp_nav_menu(
                  array(
                    'theme_location'  => 'header-menu',
                    'depth'           => 2,
                    'menu'            => '',
                    'container'       => false,
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'nav navbar-nav navbar-left',
                    'fallback_cb'     => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    //Process nav menu using our custom nav walker
                    'walker' => new wp_bootstrap_navwalker()
                  ));
              ?>
              <form action="<?php bloginfo('siteurl'); ?>" class="navbar-form navbar-right" role="search">
                <label for="s" class="screen-reader-text hidden">Search for:</label>
                <div class="form-group">
                  <input type="text" id="s" name="s" class="form-control" placeholder="Buscar" required >
                </div>
                <button id="searchsubmit type="submit" class="btn btn-default">
                  <i class="fa fa-search"></i>
                </button>
              </form>
            </div><!-- /.navbar-collapse -->
          </div>


        </div><!-- /.container-fluid -->
      </nav>