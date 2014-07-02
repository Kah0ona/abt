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
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicon, generate the favicons with: http://realfavicongenerator.net -->
    <!-- Apple touch icons should be accessible from the root of the site, and do not have to be linked here -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

    <!-- Include only one concatenated stylesheet here, minified -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">


	<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png"/>  
    <link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png" /> 


    <!-- Head scripts, avoid including scripts here -->
    <!-- Don't forget to compile and minify the used modernizr features, or to remove it when unused -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/modernizr.js"></script>

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  </head>
  <body <?php body_class(); ?> >
	 <?php include_once("ico/sprites.svg"); ?>
	<header class="Header">


      <!-- Header navigation -->
      			  <!-- Header logo -->

		  <div class="Header-logo u-gridContainer">
			<div class="Logo">
				<a href="/home/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-1.png">
				</a>
			</div>
			

			  <!-- Header info -->
			  <div class="Header-info">

				  <!-- Header contact -->
				  <div class="Header-contact">
					<a class="Button Button--transparent u-textInverted u-noLine" href="tel:0102234786">
					  <svg class="Icon Icon--inline" viewBox="0 0 128 128">
						<use xlink:href="#icon-phone"></use>
					  </svg>
					  <span>010 - 223 47 86 (tijdens kantooruren)</span>
					</a>
		<!--              
					<a class="Button Button--transparent u-textInverted u-noLine" href="tel:0622207355">
					  <svg class="Icon Icon--inline" viewBox="0 0 128 128">
						<use xlink:href="#icon-mobile"></use>
					  </svg>
					  <span>06 - 222 07 355</span>
					</a>
		-->
					<a class="Button Button--transparent u-textInverted u-noLine" href="mailto:info@abt-installaties.nl">
					  <svg class="Icon Icon--inline" viewBox="0 0 128 128">
						<use xlink:href="#icon-envelope"></use>
					  </svg>
					  <span>info@abt-installaties.nl</span>
					</a>
				  </div><!-- header-contact -->
			  </div><!-- header-info -->
		  </div><!-- header-logo -->


      <div class="Header-navigation">
        <div class="u-gridContainer">
          <?php include 'includes/navigation.php'; ?>
        </div>
	  </div>

	  <div class="u-gridContainer">
		  <div class="Slider bxslider">
			<img class="Slider-slide" src="<?php echo get_stylesheet_directory_uri();?>/img/windmills.jpg" />
			<img class="Slider-slide" src="<?php echo get_stylesheet_directory_uri();?>/img/header-auto.jpg" />
			<img class="Slider-slide" src="<?php echo get_stylesheet_directory_uri();?>/img/meeting.jpg" />
			<img class="Slider-slide" src="<?php echo get_stylesheet_directory_uri();?>/img/building.jpg" />
			<img class="Slider-slide" src="<?php echo get_stylesheet_directory_uri();?>/img/regeltechniek.jpg" />
			<img class="Slider-slide" src="<?php echo get_stylesheet_directory_uri();?>/img/badkamer.jpg" />

		  <!-- Header Slogan -->
			  <div class="Header-slogan">
				<div class="u-gridContainer">
				  <h2 >Betrouwbaarheid &nbsp;&nbsp;<span style="color: #f69157">-</span>
					&nbsp;&nbsp; Kwaliteit &nbsp;&nbsp;<span style="color: #f69157">-</span>&nbsp;&nbsp; Garantie</h2>
				</div>
			  </div>
		  </div>
	  </div>
    </header>
