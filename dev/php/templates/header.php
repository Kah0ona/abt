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
		<div class="top-nav-bg">

      <!-- Header navigation -->
      			  <!-- Header logo -->

		  <div class="Header-logo u-gridContainer">

			<div class="Logo Logo-header">
				<a href="/home/">
				    <a href="/" class="Logo-imageLink"><img class="Logo-image-top" src="<?php echo get_stylesheet_directory_uri(); ?>/ico/logo.svg" alt="ABT Installatietechniek"></a>
				    <a href="/" class="Logo-textLink"><h1 class="Logo-heading"><span class="Logo-headingTop Logo-headingTop--header">ABT</span><span class="Logo-headingBottom">Installatietechniek</span></h1></a>
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
					  <span>010 - 223 47 86</span>
					</a>
		             
					<a class="Button Button--transparent u-textInverted u-noLine" href="tel:0622207355">
					  <svg class="Icon Icon--inline" viewBox="0 0 128 128">
						<use xlink:href="#icon-mobile"></use>
					  </svg>
					  <span>06 - 222 07 355</span>
					</a>
		
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
	        <div class="Nav-toggle">
				<a class="Navigation-menuToggle" id="js-navCollapse">
					<svg class="Icon Icon--inline" viewBox="0 0 128 128">
						<use xlink:href="#icon-menu2"></use>
					</svg>
				</a>
			</div>

          <?php include 'includes/navigation.php'; ?>
          
          
<div class="Mob-contact-ico">
	<a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:0102234786">
		<svg class="Icon Icon--inline" viewBox="0 0 128 128">
			<use xlink:href="#icon-phone"></use>
		</svg>
	</a>

	<a class="Button Button--transparent u-textInverted u-noLine tel2svg" href="tel:0622207355">
		<svg class="Icon Icon--inline" viewBox="0 0 128 128">
			<use xlink:href="#icon-mobile"></use>
		</svg>
	</a>

	<a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@abt-installaties.nl">
		<svg class="Icon Icon--inline" viewBox="0 0 128 128">
			<use xlink:href="#icon-envelope"></use>
		</svg>
	</a>
</div><!-- header-contact -->
        </div>
	  </div>

		</div>
	</header>	

	<header class="Header">
	
	  <div class="u-gridContainer">
		  <div class="Slider bxslider">
			<img class="Slider-slide five" src="<?php echo get_stylesheet_directory_uri();?>/img/regeltechniek.jpg" />
			<img class="Slider-slide two" src="<?php echo get_stylesheet_directory_uri();?>/img/header-auto.jpg" />
			<img class="Slider-slide one" src="<?php echo get_stylesheet_directory_uri();?>/img/windmills.jpg" />
			<img class="Slider-slide three" src="<?php echo get_stylesheet_directory_uri();?>/img/meeting.jpg" />
			<img class="Slider-slide four" src="<?php echo get_stylesheet_directory_uri();?>/img/building.jpg" />
			<img class="Slider-slide six" src="<?php echo get_stylesheet_directory_uri();?>/img/badkamer.jpg" />
			
		  <!-- Header Slogan -->
			  <div class="Header-slogan">
				<div class="u-gridContainer">
				  <h2 >Betrouwbaarheid &nbsp;&nbsp;<span style="color: #ffffff">-</span>
					&nbsp;&nbsp; Kwaliteit &nbsp;&nbsp;<span style="color: #ffffff">-</span>&nbsp;&nbsp; Garantie</h2>
				</div>
			  </div>
		  </div>
	  </div>
    </header>
