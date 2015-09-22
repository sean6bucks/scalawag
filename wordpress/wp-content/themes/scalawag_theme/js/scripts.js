(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

        // JUMBOTRON SLIDESHOW
        // -----------------------

        $('.slide:first-child').addClass('activeSlide');

        var featuredSlideshow = function(){
            var currentSlide = $('.activeSlide');
            var nextSlide = currentSlide.next();
            
            if(nextSlide.length == 0){
                nextSlide = $('.slide').first();
            }
            currentSlide.fadeOut(600).removeClass('activeSlide');
            nextSlide.fadeIn(600).addClass('activeSlide');

            setTimeout(featuredSlideshow, 3000);
            
        };

        featuredSlideshow();
		
        // CATEGORY BOXES
        // -----------------------

        

		
	});
	
})(jQuery, this);
