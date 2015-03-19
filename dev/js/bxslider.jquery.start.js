jQuery(document).ready(function($){
	$('.Slider.bxslider').bxSlider({
	  mode: 'fade',
	  minSlides: 1,
	  maxSlides: 1,
	  startSlide: 1,
	  slideSelector: '.Slider-slide',
	  //slideWidth: 1200,
	  slideMargin: 0,
	  // captions: true,
	  pause: 6000,
	  auto: true,
	  speed: 2500,
	  infiniteLoop: true,
	  hideControlOnEnd: true, 
	  touchEnabled:false,
	  pager: false,
	  onSliderLoad: function(){
        $(".Slider .Slider-slide").css("visibility", "visible");
      }
	});
});
 

