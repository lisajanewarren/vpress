var SlideNav = (function() {

    var settings = { 
        'navPanel' : '#seq-sidebar',
        'sliderContainer' : '#seq-sidebar-slider .inner',
        'subNavItems' : '',
        'subNavHolder' : '.subnav-holder',
        'translatePosition' : 0,
        'sectionTitle' : '',
        'id' : 0
    },


    
    sn = {}, s = settings;


    sn.init = function() {
        this.bindEvents();  

        $('.seq-sidebar-slide .nav-holder').perfectScrollbar({
            suppressScrollX : true,
            includePadding : true
       });
    }


    sn.bindEvents = function() {

        $(s.navPanel).find('li').on('click', function() {

            if ( $(this).find(' > ul').length > 0 ) {
                s.subNavItems = $(this).find(' > ul').clone(true); 
                s.sectionTitle = $('> span', this).text();

                //add the new slide for the subnav
                sn.addSlide();

                //set container width
                sn.setContainerWidth();

                //do animation
                sn.slideForward();

                //update the scrollbar for the new slide
                sn.updateScrollbar();
                

                s.id++;
                return false;
            }
        });

        $(s.navPanel).find('.back').on('click', function() {
            var count = 0;
            sn.slideBackward();
            $(s.sliderContainer).on('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function(){ 
                if (count == 0) {
                    sn.removeSlide();
                    sn.setContainerWidth();
                    count++;
                }
            });

            return false;
        });


    }

    sn.addSlide = function() {

        var slideTemplate = $('#slide-template > div').clone('true');

        slideTemplate.find(s.subNavHolder).prop('id', 'subnav-holder-' + s.id );

        
        $(s.subNavItems).appendTo( slideTemplate.find(s.subNavHolder) );

        $(slideTemplate).find('.back').text(s.sectionTitle);

        slideTemplate.appendTo(s.sliderContainer);

    }

    sn.removeSlide = function() {
        console.log('ddd');
        $(s.sliderContainer).find('.seq-sidebar-slide:last-child').remove();
    }

    sn.setContainerWidth = function() {
        var width = ($('.seq-sidebar-slide').length + 1) * 100;
        $(s.sliderContainer).css({'width' : width + '%'});
    }

    sn.updateScrollbar = function() {
        console.log('here');

        //$('.seq-sidebar-slide:last-child .subnav-holder').perfectScrollbar('destroy');
        console.log(s.id);
        
        $('#subnav-holder-' + s.id).addClass('test');

        $('#subnav-holder-' + s.id).perfectScrollbar({
            suppressScrollX : true,
            includePadding : true
        }); 
        //$('.seq-sidebar-slide:last-child .subnav-holder').perfectScrollbar('update');

    }


    sn.slideForward = function() {
        s.translatePosition = s.translatePosition - 225;
        sn.animateSlide();
    }

    sn.slideBackward = function() {
        s.translatePosition = s.translatePosition + 225;
        sn.animateSlide();
    }

    sn.animateSlide = function() {
         $(s.sliderContainer).css({
            '-moz-transform' : 'translate(' + s.translatePosition + 'px,0)',
            '-o-transform' : 'translate(' + s.translatePosition + 'px,0)',
            '-ms-transform' : 'translate(' + s.translatePosition + 'px,0)',
            '-webkit-transform' : 'translate(' + s.translatePosition + 'px,0)',
            'transform' : 'translate(' + s.translatePosition + 'px,0)'
        });
    }


    return sn;
 }());
