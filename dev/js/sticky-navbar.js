$(function () {
  var elt = '.Header-navigation';
  var msie6 = $.browser == 'msie' && $.browser.version < 7;
  var initialWidth = $(elt).width(); //get the width of the bar when the page is loaded. The adding the fixed element screws it up, so we need to reset it then.
  
  if (!msie6) {
    var top = $(elt).offset().top - parseFloat($(elt).css('margin-top').replace(/auto/, 0));
    $(window).scroll(function (event) {
      // what the y position of the scroll is
      var y = $(this).scrollTop();
      // whether that's below the form
      if (y >= top) {
        // if so, ad the fixed class
        $(elt).addClass('fixed').width(initialWidth); //last part fixes the jumping width problem
      } else {
        // otherwise remove it
        $(elt).removeClass('fixed').width('100%'); //reset the width to what it was, 100% 
      }
    });
  }  
});
