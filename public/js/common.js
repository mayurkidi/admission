/** Start JS for Banner section **/

(function ($) {
    "use strict";
    $(document).ready(function () {
		// Main banner
		$("#main-banner").owlCarousel({
			autoplay:true,
		  autoplayHoverPause:true,
			items : 1,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			nav:true,
			loop:true,
			navText: [
			  "<i class='fa fa-angle-left'></i>",
			  "<i class='fa fa-angle-right'></i>"
			  ]
        });
		$('#mainBanner').bind('mouseover', function (e){
			$('#mainBanner').trigger('stop.owl.autoplay');
		});

		$('#mainBanner').bind('mouseleave', function (e){
			 $('#mainBanner').trigger('play.owl.autoplay');
		});	
   });  	
})(jQuery);

/** End JS for Banner section **/
