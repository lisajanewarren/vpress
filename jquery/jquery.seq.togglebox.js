(function($) {

	$.fn.togglebox = function(options) {

		var defaults = {
			toggleBox : '.js-toggle-box',
			toggleTrig : '.js-toggle-trig',
			togglePanel : '.js-toggle-panel'
		}; 

		var options = $.extend(defaults, options);


		return this.each(function() { 

				$(this).find(options.togglePanel).hide();
				$(this).find(options.toggleTrig).toggleClass('active');

				$(this).find(options.toggleTrig).on('click', function() {
					var curr = $(this).closest(options.toggleBox);
					$(this).toggleClass('active');
					curr.find(options.togglePanel).slideToggle();
					return false;
				});

		});

	}

})(jQuery, window, document);