(function($) {

	$.fn.togglenav = function(options) {

		var defaults = {
			navToggle : '#seq-hamburger, #seq-site-search .glyphicon',
			pagePanel : '#page-content-wrapper',
			navPanel : '#seq-sidebar'
		}; 

		var options = $.extend(defaults, options);


		return this.each(function() { 

			$('html').addClass('seq-sidebar-active');

			if ( $.cookie('menuStatus') === 'closed' ) {
				console.log('a');
				$('#seq-hamburger').trigger('click');
			}
			else {
				console.log('b');
			}
			$(s.pagePanel, s.navPanel).addClass('has-transitions');


			$(options.navToggle).on('click', function() {

				if(!Modernizr.csstransitions) {

					if ( $('html').hasClass('seq-sidebar-active') ) {
						$(options.navPanel).find('#seq-sidebar-slider').fadeToggle();
						$('#seq-shopping-cart').hide().fadeIn();
						$('#page-content-wrapper').animate({
						    paddingLeft: 70
						}, 400, function() {
						});
						$('#seq-sidebar').animate({
						    left: -155
						}, 400, function() {
							$('html').toggleClass('seq-sidebar-active'); 
						});

						//set cookie to remember panel is closed
						$.cookie('menuStatus', "closed");
					}
					else {
						$(options.navPanel).find('#seq-sidebar-slider').fadeToggle();
						$('#seq-shopping-cart').hide().fadeIn();

						$('#page-content-wrapper').animate({
						    paddingLeft: 225
						}, 400, function() {
						});
						$('#seq-sidebar').animate({
						    left: 0
						}, 400, function() {
							$('html').toggleClass('seq-sidebar-active'); 
						});

						//set cookie to remember panel is open
						$.cookie('menuStatus', "open");

					}

				}
				else if(Modernizr.csstransitions) {
					$('html').toggleClass('seq-sidebar-active');
					$(options.navPanel).find('#seq-sidebar-slider').fadeToggle();
					$('#seq-shopping-cart').hide().fadeIn();

					if ( $('html').hasClass('seq-sidebar-active') ) {
						//set cookie to remember panel is open
						$.cookie('menuStatus', "open");
					}
					else {
						//set cookie to remember panel is closed
						$.cookie('menuStatus', "closed");
					}
				}
				

				

				return false;
			});

			function debounce(func, wait, immediate) {
				var timeout;
				return function() {
			    	var context = this, args = arguments;
			    	var later = function() {
			      		timeout = null;
			      		if (!immediate) func.apply(context, args);
			    	};
			    	var callNow = immediate && !timeout;
			    	clearTimeout(timeout);
			    	timeout = setTimeout(later, wait);
			    	if (callNow) func.apply(context, args);
			  	};
			};



			var resizeEvents = debounce(function() {
		        //if screensize less that 768 && nav is open trigger click
		        if(Modernizr.mq("(max-width: 767px)") && $('html').hasClass('seq-sidebar-active') ) {
		        	$('#seq-hamburger').trigger('click');
				};

				if(Modernizr.mq("(min-width: 768px)") && ! $('html').hasClass('seq-sidebar-active') ) {
		        	$('#seq-hamburger').trigger('click');
				};

		    }, 250);

		    if (window.addEventListener) {
		    	window.addEventListener('resize', resizeEvents);
		    }
		    else if (window.attachEvent) {
				window.attachEvent('resize', resizeEvents );
			}


		    if(Modernizr.mq("(max-width: 767px)") && $('html').hasClass('seq-sidebar-active') ) {
	        	$('#seq-hamburger').trigger('click');
			};

		});

	}

})(jQuery, window, document);


$(function() {
	$("#seq-sidebar").togglenav();	
});
