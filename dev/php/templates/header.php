<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicon, generate the favicons with: http://realfavicongenerator.net -->
    <!-- Apple touch icons should be accessible from the root of the site, and do not have to be linked here -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

    <!-- Include only one concatenated stylesheet here, minified -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">

    <!-- Head scripts, avoid including scripts here -->
    <!-- Don't forget to compile and minify the used modernizr features, or to remove it when unused -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/modernizr.js"></script>

    <!-- Wordpress head function -->
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?> >

    <header class="Header">
      <!-- Header navigation -->
      <div class="Header-navigation">
        <div class="u-gridContainer">
          <?php include 'includes/navigation.php'; ?>
        </div>
      </div>
      <!-- Header info -->
      <div class="Header-info">
        <div class="u-gridContainer">
          <!-- Header logo -->
          <div class="Header-logo">
            <div class="Logo">
                <a href="/" class="Logo-imageLink"><img class="Logo-image" src="<?php echo get_stylesheet_directory_uri(); ?>/ico/logo.svg" alt="ABT Installatietechniek"></a>
                <a href="/" class="Logo-textLink"><h1 class="Logo-heading"><span class="Logo-headingTop Logo-headingTop--header">ABT</span><span class="Logo-headingBottom">Installatietechniek</span></h1></a>
            </div>
          </div>
          <!-- Header contact -->
          <div class="Header-contact">
            <a class="Button Button--transparent u-textInverted u-noLine" href="tel:0102234786">
              <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                <use xlink:href="#icon-phone"></use>
              </svg>
              <span>010 - 223 47 86</span>
            </a>
            <a class="Button Button--transparent u-textInverted u-noLine" href="tel:0622207355">
              <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                <use xlink:href="#icon-mobile"></use>
              </svg>
              <span>06 - 222 07 355</span>
            </a>
            <a class="Button Button--transparent u-textInverted u-noLine" href="mailto:info@abtinstallaties.nl">
              <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                <use xlink:href="#icon-envelope"></use>
              </svg>
              <span>info@abtinstallaties.nl</span>
            </a>
          </div>
        </div>        
      </div>
      <!-- Header Slogan -->
      <div class="Header-slogan">
        <div class="u-gridContainer">
          <h2>Betrouwbaarheid, kwaliteit en garantie</h2>
          <h2>3 redenen om voor ABT te kiezen</h2>
        </div>
      </div>
    </header>
