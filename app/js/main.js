$(function(){
	var App = (function(){

		var start = function(){
			// Portfolio Menu
			portfolio();

			// Scroll
			scroll();
		};

		var dom = {
			$portfolioMenu: $('#portfolio-menu'),
			$laptopScreen: $('#laptop-screen'),
			$portfolioDetail: $('#portfolio-detail'),
			$displayLogo: $('#display-logo')
		};

		// Give main nav scrolling capability
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

		var portfolio = function(){
			// Populate Project Menu
			dom.$portfolioMenu.html(Creatable.create(['ul.logo-menu.accordion', Data.clients.map(function(client){
				return ['li', [
					['.logo.accordion-item.logo-'+client['short-name']],
					['ul.bullet-list.accordion-item-content',
						Data.projects
							.where({ 'client-id': client.id })
							.map(function(project){
								return [
									'li a.project-item',
									{ 'data-id': project.id },
									(parseInt(project['use-short-name']) ? project['end-client-short-name'].toUpperCase() : project['end-client-name'] )  + ': ' + project.name
								];
							})
					]
				]];
			})]));

			// Create laptop screen slider
			dom.$laptopScreen.html(Creatable.create(['.laptop-viewport.owl-carousel', Data.projects.map(function(project){

				return ['img.screens', { src: '/images/portfolio/' + project.id + '.jpg', 'data-id': project.id }];

			})]));

			// Give menu accordion functionality
			initAccordion();

			// Give the laptop slider screen functionality
			initSlider();
		};

		var initSlider = function(){
			// Init laptop screen carousel
			$('.laptop-viewport').owlCarousel({
				navigation: false,
				pagination: false,
				slideSpeed: 300,
				paginationSpeed: 400,
				singleItem: true,
				autoHeight: true,
				// Sync menu with slides
				afterAction: function(){
					var currentSlide = this.owl.currentItem + 1;
					var $newlySelectedBullet = $('.bullet-list a[data-id=' + currentSlide + ']').parent();
					var $currentlySelectedBullet = $('.bullet-list .selected');
					var $currentMenu = $newlySelectedBullet.parent();
					var $currentMenuSectionHeader = $currentMenu.siblings();

					$currentlySelectedBullet.removeClass('selected');
					$newlySelectedBullet.addClass('selected');

					// If switching menu sections roll up the prev and roll down the current
					if($currentMenu.not(':visible')){
						$('.accordion .accordion-item').next().not($currentMenu).slideUp(300);
						console.log();
						$currentMenu.slideDown(300);
					}

					// Change portfolio details
					changePortfolioDetail(currentSlide);
				}
			});

			// Get owl Instance
			var owl = $('.laptop-viewport').data('owlCarousel');

			// init navigation of slider event via menu
			$('.logo-menu .project-item').click(function(e){
				var projectId = e.target.getAttribute('data-id');

				// Go to Slide
				owl.goTo(projectId-1);
			});
		};

		var changePortfolioDetail = function(projectId){
			var project = Data.projects.findWhere({ id: String(projectId) });
			var client = Data.clients.findWhere({ id: String(project['client-id']) });

			dom.$displayLogo.attr('src', 'images/'+ client['short-name'] +'-light.svg');

			dom.$portfolioDetail.html(Creatable.create([
				['p.section-content', [
					['span.label', 'Project: '],
					['span.project-title', (parseInt(project['use-short-name']) ? project['end-client-short-name'].toUpperCase() : project['end-client-name'])  + ': ' + project.name]
				]],
				['p.portfolio-project-description', project.description],
				['a.project-link', { target: '_blank' }, 'View Project >'],
			]));
		};

		var initAccordion = function(){
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