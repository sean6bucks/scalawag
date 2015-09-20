(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
        $('.page').height($('.page').width());
        $('.preview-body').width($('.post-preview').width() - 255);

        $(window).resize(function(){
            $('.page').height($('.page').width());
            $('.preview-body').width($('.post-preview').width() - 255);
        });

		
	});
	
})(jQuery, this);
