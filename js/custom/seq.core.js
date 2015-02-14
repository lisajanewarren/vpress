$(function() {
   
	if ( $('.js-toggle-box').length > 0 ) {
		$('.js-toggle-box').togglebox();
	}

	$('[data-toggle="tooltip"]').tooltip();

	$(".js-sticky-header").sticky({
		topSpacing:0,
		getWidthFrom: '#page-content-wrapper',
		responsiveWidth: true
	});

	$(".js-sticky-image").sticky({
		topSpacing:80
	});

	$('.seq-griddable-grid .seq-griddable-item').matchHeight();

	$('.seq-inline-popup-trigger').magnificPopup({
	  type:'inline',
	  alignTop: 'true',
	  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});

	$('.selectpicker').selectpicker();

	
});
