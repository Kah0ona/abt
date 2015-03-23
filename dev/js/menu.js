jQuery(document).ready(function($){
	if(document.URL.indexOf('particulier')!= -1){
		$('.Navigation-listItem:nth-of-type(2)').addClass('is-active');
		$('.Navigation-listItem:nth-of-type(2) a').addClass('is-active');
	}
	if(document.URL.indexOf('zakelijk')!= -1){
		$('.Navigation-listItem:nth-of-type(3)').addClass('is-active');
		$('.Navigation-listItem:nth-of-type(3) a').addClass('is-active');
	}

});