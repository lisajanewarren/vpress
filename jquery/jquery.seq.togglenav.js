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


			$(options.navToggle).on('click', function() {
				$('html').toggleClass('seq-sidebar-active');
				$(options.navPanel).find('#seq-sidebar-slider').fadeToggle();
				$('#seq-shopping-cart').hide().fadeIn();

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
		        	console.log('clsoe');
		        	$('#seq-hamburger').trigger('click');
				};

				/*if(Modernizr.mq("(min-width: 768px)") && ! $('html').hasClass('seq-sidebar-active') ) {
		        	console.log('open');
		        	$('#seq-hamburger').trigger('click');
				};*/

		    }, 250);

		    window.addEventListener('resize', resizeEvents);


		    if(Modernizr.mq("(max-width: 767px)") && $('html').hasClass('seq-sidebar-active') ) {
				console.log('herefff');
	        	$('#seq-hamburger').trigger('click');
			};

		});

	}

})(jQuery, window, document);