var ToggleNav = (function() {

    var settings = { 
        'navToggle' : '#seq-hamburger, #seq-site-search .glyphicon',
		'pagePanel' : '#page-content-wrapper',
		'navPanel' : '#seq-sidebar',
		'winWidth' : 0,
    	'winHeight' : 0
    },


    tn = {}, s = settings;


    tn.init = function() {

    	$('html').addClass('seq-sidebar-active');

    	this.setWindowDimensions();
        this.bindEvents(); 
        this.resizeEvents(); 
        this.getCookieStatus(); 

        //need to enable only after initial page state has been set
        this.enableTransitions();   
    }

    tn.bindEvents = function() {

        $(s.navToggle).on('click', function() {

			if(!Modernizr.csstransitions) {
				tn.animatePanelJs();
			}
			else if(Modernizr.csstransitions) {
				tn.animatePanelCss();
				tn.setCookieStatus();
			}
			

            return false;
        });
    }

    tn.enableTransitions = function() {
    	setTimeout(function() { 
    		$(s.pagePanel).addClass('has-transitions');
    		$(s.navPanel).addClass('has-transitions');
    	}, 1000);
    }

    tn.setWindowDimensions = function() {
    	s.winWidth =  $(window).width();
    	s.winHeight =  $(window).height();
    }

    tn.resizeEvents = function() {

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

			//ie incorrectly fires resize event, so need to do an additional check
			if ( ( $(window).width() == s.winWidth ) &&  ( $(window).height() == s.winHeight ) ) {
	    		return;
	    	}
	    	else {
	    		tn.setWindowDimensions();
	    	}

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

	    if(Modernizr.mq("(max-width: 767px)") && $('html').hasClass('seq-sidebar-active')  ) {
        	$('#seq-hamburger').trigger('click');
		};    
    }

    tn.animatePanelCss = function() {
    	$('html').toggleClass('seq-sidebar-active');
		$(s.navPanel).find('#seq-sidebar-slider').fadeToggle();
		$('#seq-shopping-cart').hide().fadeIn();    
    }

    tn.animatePanelJs = function() {

    	if ( $('html').hasClass('seq-sidebar-active') ) {
			$(s.navPanel).find('#seq-sidebar-slider').fadeToggle();
			$('#seq-shopping-cart').hide().fadeIn();
			$('#page-content-wrapper').animate({
			    paddingLeft: 70
			}, 400, function() {
			});
			$('#seq-sidebar').animate({
			    left: -155
			}, 400, function() {
				$('html').toggleClass('seq-sidebar-active'); 
				tn.setCookieStatus();
			});
		}
		else {
			$(s.navPanel).find('#seq-sidebar-slider').fadeToggle();
			$('#seq-shopping-cart').hide().fadeIn();

			$('#page-content-wrapper').animate({
			    paddingLeft: 225
			}, 400, function() {
			});
			$('#seq-sidebar').animate({
			    left: 0
			}, 400, function() {
				$('html').toggleClass('seq-sidebar-active'); 
				tn.setCookieStatus();
			});
		}    
    }

    tn.getCookieStatus = function() {

    	if ( $.cookie('menuStatus') === 'closed' && Modernizr.mq("(min-width: 768px)") ) {

			if(!Modernizr.csstransitions) {
				$(s.navPanel).find('#seq-sidebar-slider').fadeOut('fast');
				$('html').removeClass('seq-sidebar-active');
				$('#page-content-wrapper').css({'paddingLeft' : '70px'});
				$('#seq-sidebar').css({'left' : '-155px'});

			}
			else {
				tn.animatePanelCss();
			}
			
		}        
    }

    tn.setCookieStatus = function() {

    	if ( $('html').hasClass('seq-sidebar-active') ) {
			$.cookie('menuStatus', "open");
		}
		else {
			$.cookie('menuStatus', "closed");
		}        
    }

    return tn;
 }());



$(function() {
    ToggleNav.init();
});


