$(function(){
	var App = (function(){

		var start = function(){
			registerEvents();
		};

		var registerEvents = function(){

			// Scroll
			scroll();

			// Accordion
			accordion();
		};

		var scroll = function(){
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		};

		var accordion = function(){
			// Init 
			$('.accordion .accordion-item:eq(0)').next().show();

			// On Click
			$('.accordion .accordion-item').click(function(){
				if($(this).next().is(':visible')){
					$(this).next().slideToggle(300);
				}else{
					$('.accordion .accordion-item').next().slideUp(300);
					$(this).next().slideToggle(300);
				}
			});
		};

		// Public interface
		return {
			start: start
		};
	})();

	App.start();

});