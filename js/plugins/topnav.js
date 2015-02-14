$(function() {

	$('#site-top-nav li ul').hide().removeClass('fallback');
	$('#site-top-nav li').hover(
	 	function () {
			$('ul', this).stop().slideDown(200);
	  	},
	  	function () {
	    	$('ul', this).stop().slideUp(200);
	  	}
	);

	$('#site-top-nav > h2').on('click', function(){
		$(this).toggleClass('slideToggled');
		$(' + ul', this).slideToggle();
	});

	$( window ).resize(function() {
		if ( $('#site-top-nav > h2').hasClass('slideToggled') ) {
			$('#site-top-nav > h2').toggleClass('slideToggled');
			$('#site-top-nav > h2 + ul').slideUp();
		}
	});

});