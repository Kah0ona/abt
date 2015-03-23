	
<footer class="Footer Footer--top">
  <div class="u-gridContainer">
    <div class="Footer-adres">
      <h6 class="Footer-heading">Adres</h6>
      <p class="Footer-text">Postbus 23525<br>3001 KM Rotterdam</p>

      <div class="Logo-footer">
        <a href="/home/">
            <a href="/" class="Logo-imageLink"><img class="Logo-image-top" src="<?php echo get_stylesheet_directory_uri(); ?>/ico/logo.svg" alt="ABT Installatietechniek"></a>
            <a href="/" class="Logo-textLink"><h1 class="Logo-heading"><span class="Logo-headingTop Logo-headingTop--header">ABT</span><span class="Logo-headingBottom">Installatietechniek</span></h1></a>
        </a>
      </div>


    </div>
    <div class="Footer-contact">
      <h6 class="Footer-heading">Contact</h6>
      <p class="Footer-text">
        <svg class="Icon Icon--inline" viewBox="0 0 128 128">
          <use xlink:href="#icon-phone"></use>
        </svg>
        <span><b>Tijdens kantooruren</b><br/>010 - 223 47 86</span><br/><br/>
        <svg class="Icon Icon--inline" viewBox="0 0 128 128">
          <use xlink:href="#icon-mobile"></use>
        </svg>
		<span><b>Buiten kantooruren</b><br/>06 - 222 07 355</span><br/><br/>
        <a class="button-contact-footer" href="mailto:info@abt-installaties.nl">
        <svg class="Icon Icon--inline" viewBox="0 0 128 128">
          <use xlink:href="#icon-envelope"></use>
        </svg>
        <span>info@abt-installaties.nl</span>
        </a>
      </p>
    </div>
    <div class="Footer-sitemap">
      <h6 class="Footer-heading">Sitemap</h6>
      <?php include 'includes/sitemap.php'; ?>
      <div class="temp">
        <a href="/app">
		  <svg class="Icon Icon--alone" viewBox="0 0 128 128"><use xlink:href="#icon-qrcode"></use></svg>
		 </a> 
		 <a href="/app" style="text-transform: uppercase; color: white">Bekijk de app</a>
      </div>
    </div>
  </div>
</footer>
<footer class="Footer Footer--bottom">
  <div class="u-gridContainer u-textCenter">
    <!-- Copyright info -->
    <p class="Footer-text">&copy; ABT Installatietechniek <?php echo date("Y"); ?> - <a href="/algemene-voorwaarden">Algemene Voorwaarden</a> - Website & SEO door <a href="http://www.lokaalgevonden.nl" target="_blank">Lokaalgevonden</a></p>
  </div>
</footer>   
	
  <!-- Load jquery from google CDN if possible, with fallback to local version -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/jquery.min.js"><\/script>')</script>

	<!-- Footer javascript below here -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>

  <!-- Livereload (remove in production!) -->
  <script src="http://localhost:35729/livereload.js"></script>

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?> 
	</body>
</html>
