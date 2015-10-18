(function ($, root, undefined) {
	
$(function () {
	
	'use strict';

    // JUMBOTRON SLIDESHOW
    // -----------------------
    if ( document.getElementById('jumbotron-wrapper') ) {
        $('.slide:first-child').addClass('active-slide');
        $('.dot:first-child').addClass('active-dot');

        var timeout;

        var featuredSlideshow = function(){
            clearTimeout(timeout);
            var currentSlide = $('.active-slide');
            var nextSlide = currentSlide.next();
            var currentDot = $('.active-dot');
            var nextDot = currentDot.next();
            
            if(nextSlide.length == 0){
                nextSlide = $('.slide').first();
            }

            currentSlide.fadeOut(500).removeClass('active-slide');
            nextSlide.fadeIn(500).addClass('active-slide');

            if(nextDot.length == 0){
                nextDot = $('.dot').first();
            }
            currentDot.removeClass('active-dot');
            nextDot.addClass('active-dot');

            timeout = setTimeout(function(){
                featuredSlideshow();
            }, 4000);
           
        };
        
        setTimeout(function(){featuredSlideshow();}, 4000);

        $('.arrow-next').click(function(){
            clearTimeout(timeout);
            featuredSlideshow();    
        });
            
        $('.arrow-prev').click(function(){
            clearTimeout(timeout);

            var currentSlide = $('.active-slide');
            var prevSlide = currentSlide.prev();
            var currentDot = $('.active-dot');
            var prevDot = currentDot.prev();
            
            if(prevSlide.length == 0){
                prevSlide = $('.slide').last();
            }
            currentSlide.fadeOut(500).removeClass('active-slide');
            prevSlide.fadeIn(500).addClass('active-slide');
            
            if(prevDot.length == 0){
                prevDot = $('.dot').last();
            }
            currentDot.removeClass('active-dot');
            prevDot.addClass('active-dot');

            timeout = setTimeout(function(){
                featuredSlideshow();
            }, 4000);
        });
    }
    // IMAGE GALLERY SLIDESHOW
    // -----------------------
    if ( document.getElementById('image-gallery') ){

        $('.slide:first-child').addClass('active-slide');
        $('.thumb:first-child').addClass('active-thumb');

        $('.gallery-next').click(function(){
            var currentSlide = $('.active-slide');
            var nextSlide = currentSlide.next();
            var currentThumb = $('.active-thumb');
            var nextThumb = currentThumb.next();

            if(nextSlide.length == 0){
                nextSlide = $('.slide').first();
            }
            if(nextThumb.length == 0){
                nextThumb = $('.thumb').first();
            } 

            currentSlide.removeClass('active-slide');
            nextSlide.addClass('active-slide');

            currentThumb.removeClass('active-thumb');
            nextThumb.addClass('active-thumb');

                 
        });
            
        $('.gallery-prev').click(function(){

            var currentSlide = $('.active-slide');
            var prevSlide = currentSlide.prev();
            var currentThumb = $('.active-thumb');
            var prevThumb = currentThumb.prev();
            
            if(prevSlide.length == 0){
                prevSlide = $('.slide').last();
            }

            if(prevThumb.length == 0){
                prevThumb = $('.thumb').last();
            }

            currentSlide.removeClass('active-slide');
            prevSlide.addClass('active-slide');

            currentThumb.removeClass('active-thumb');
            prevThumb.addClass('active-thumb');

        });
    }

    // MIN. DROP DOWN NAV WINDOW ON INDEX PAGE
    // if ( document.getElementById('pages-wrapper') ){
    //     var pagesOffset = $('#pages-wrapper').offset(),
    //         // GET ELEMENT BOTTOM VALUE BY ADDING HEIGHT MINUS LINE-HEIGHT
    //         offsetBottom = pagesOffset.top + $('#pages-wrapper').height() - 56;

    //     // SHOW NAV BAR ON PAGE LOAD IF BELOW PAGE CATEGORIES
    //     if( $(document).scrollTop() > offsetBottom ) {
    //         $('#index-min-wrapper').show();
    //     }
        
    //     // RESET CATEGORIES OFFSET HEIGHT ON WINDOW RESIZE
    //     $(window).resize( function() {
    //         pagesOffset = $('#pages-wrapper').offset();
    //         offsetBottom = pagesOffset.top + $('#pages-wrapper').height() - 56;
    //     })

    //     // DETECT IF PAGE IS SCROLLED BELOW PAGE CATEGORIES
    //     // SHOW MIN. NAV BAR IF BELOW CATEGORIES
    //     $(window).scroll(function(){
    //         if( $(document).scrollTop() > offsetBottom ) {
    //             $('#index-min-wrapper').slideDown(300);
    //         } else {
    //             $('#index-min-wrapper').slideUp(100);
    //         }

    //     });
    // }

    // ONLY ATTACH EVENT LISTENER IF NAV-TOGGLE IS PRESENT
    if ( document.getElementById('nav-toggle') ){
        document.querySelector( '#nav-toggle' ).addEventListener( 'click', function() {
            this.classList.toggle( 'active' );
            $('.nav-items').animate({width:'toggle'}, 200);
        });
    }

});

})(jQuery, this);
