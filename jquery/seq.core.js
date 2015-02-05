$(function() {
   
	if ( $('.js-toggle-box').length > 0 ) {
		$('.js-toggle-box').togglebox();
	}

	$('[data-toggle="tooltip"]').tooltip();

	$('.open-popup-link').magnificPopup({
	  type:'inline',
	  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});
	
});
