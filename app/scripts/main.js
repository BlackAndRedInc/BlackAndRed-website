'use strict';
$(function(){
	var _requestAnimationFrame = function(win, t) {
		return win['webkitR' + t] || win['r' + t] || win['mozR' + t] || win['msR' + t] || function(fn) { setTimeout(fn, 60) };
	}(window, 'requestAnimationFrame');

	var animate = {
		animate: function(list) {
			var item,
				duration,
				end = 0;

			var step = function() {
				var current = +new Date(),
					remaining = end - current;

				if(remaining < 60) {
					if(item) {
						item.run(1);//1 = progress is at 100%
					}
					item = list.shift();  //get the next item
					if(item) {
						duration = item.time*1000;
						end = current + duration;
						item.run(0);  //0 = progress is at 0%
					} else {
						return;
					}
				} else {
					var rate = remaining/duration;
					rate = item.easing ? 1 - Math.pow(rate, 3): 1 - rate;  //easing formula
					item.run(rate);
				}
				_requestAnimationFrame(step);
			};
			step();
		}
	};

	var intro = {
		getCordinates: function(){
			var animation = document.querySelector('.animation-intro.svg');
			var line1 = animation.querySelector('.line-1');
			var line2 = animation.querySelector('.line-2');
			var line3 = animation.querySelector('.line-3');
			var logo = animation.querySelector('.draw-logo');

			var strokeWidth = $('.draw').css('stroke-width');
			var strokeWidthNum = strokeWidth.substring(0, strokeWidth.length - 2);

			var screenWidth = $('.wrapper').width();
			var viewportWidth = screenWidth <= 700 ? 700 : screenWidth;

			var logoPos = {
				x: viewportWidth - logo.getBoundingClientRect().width,
				y: 550
			};

			var letterPos = {
				l: animation.querySelector('#l').getBBox(),
				i: animation.querySelector('#i').getBBox()
			};

			// var endLinePos = viewportWidth;
			var endLinePos = logoPos.x + letterPos.l.x +3.5; // TODO: Don't know why I need to add 7 here
			
			var startLine3Pos = {
				x: logoPos.x + letterPos.i.x + 4.25, // TODO: Don't know why I need to add 4.5 here
				y: logoPos.y + letterPos.i.y + letterPos.i.height -1
			};



			return {
				logo: {
					target: logo,
					x: logoPos.x,
					y: logoPos.y
				},
				lines: {
					line1: {
						target: line1,
						params:{
							x1: 565,
							x2: endLinePos,
							y1: 137,
							y2: 137
						}
					},
					line2: {
						target: line2,
						params:{
							x1: endLinePos - strokeWidthNum/2,
							x2: endLinePos - strokeWidthNum/2,
							y1: 135,
							y2: logoPos.y
						}
					},
					line3: {
						target: line3,
						params:{
							x1: startLine3Pos.x,
							x2: startLine3Pos.x,
							y1: startLine3Pos.y,
							y2: 2000
						}
					}
				}
			};
		},

		drawNav: function(cordinates){

			var line2 = cordinates.lines.line2;

			// Set nav location
			$('.nav').css('left', line2.params.x1 - 250);

			// draw in nav
			$('.nav li').each(function(index, menuItem){
				$(menuItem).delay(4500).delay( 100 * index ).animate({
					marginLeft: '0px',
					opacity: 1
				}, 100);
			});
		},

		quickDraw: function(){
			var cords = this.getCordinates();

			$.each(cords.lines, function(index, lineParams){
				$.each(lineParams.params, function(param, value){
					lineParams.target.setAttribute(param, value);
				});
			});

			this.drawNav(cords);

			cords.logo.target.setAttribute('transform', 'translate(' + cords.logo.x + ',' + cords.logo.y + ')');
		},

		drawIntro: function(){
			var cords = this.getCordinates();
			var line1 = cords.lines.line1;
			var line2 = cords.lines.line2;
			var line3 = cords.lines.line3;
			var letterTargets = document.querySelectorAll('.draw-logo path');
			var letters = $.map(letterTargets, function(letterTarget){
				return {
					target: letterTarget,
					length: letterTarget.getTotalLength()
				};
			});

			this.drawNav(cords);

			// Set letter defaults
			$.each(letters,function(index, letter){
				letter.target.style.strokeDasharray = letter.length + ' ' + letter.length;
				letter.target.style.strokeDashoffset = letter.length;
			});

			//Set logo location
			cords.logo.target.setAttribute('transform', 'translate(' + cords.logo.x + ',' + cords.logo.y + ')');

			animate.animate([
				{
					time: 2,
					easing: false,
					run: function(rate) {
						var lineParams = line1.params;
						var lineTarget = line1.target;
						var endPointPos = lineParams.x2 * rate <= lineParams.x1 ? lineParams.x1 : lineParams.x2 * rate;

						lineTarget.setAttribute('x1', lineParams.x1);
						lineTarget.setAttribute('y1', lineParams.y1);
						lineTarget.setAttribute('y2', lineParams.y2);
						lineTarget.setAttribute('x2', endPointPos);
					}
				},
				{
					time: 2,
					easing: false,
					run: function(rate) {
						var lineParams = line2.params;
						var lineTarget = line2.target;
						var endPointPos = lineParams.y2 * rate <= lineParams.y1 ? lineParams.y1 : lineParams.y2 * rate;

						lineTarget.setAttribute('x1', lineParams.x1);
						lineTarget.setAttribute('x2', lineParams.x2);
						lineTarget.setAttribute('y1', lineParams.y1);
						lineTarget.setAttribute('y2', endPointPos);
					}
				},
				{
					time: 1,
					easing: true,
					run: function(rate) {
						$.each(letters, function(index, letter){
							document.querySelector('.draw-logo #dot').style.fill = 'black';
							letter.target.style.strokeDashoffset = Math.floor(letter.length * (1 - rate));
						});
					}
				},
				{
					time: 2,
					easing: true,
					run: function(rate) {
						var lineParams = line3.params;
						var lineTarget = line3.target;
						var endPointPos = lineParams.y2 * rate <= lineParams.y1 ? lineParams.y1 : lineParams.y2 * rate;

						lineTarget.setAttribute('x1', lineParams.x1);
						lineTarget.setAttribute('x2', lineParams.x2);
						lineTarget.setAttribute('y1', lineParams.y1);
						lineTarget.setAttribute('y2', endPointPos);
					}
				},
			]);
		}
	};

	var coords = intro.getCordinates();

	intro.drawIntro();



	// Sticky Nav
	$('.nav').waypoint(function(direction){
		$(this).toggleClass('is-sticky-nav', direction === 'down');
	});

	// Sticky Logo
	$('.draw-logo').waypoint(function(direction) {
		$('.animation-intro').css( direction === 'down' ? {
			position: 'fixed',
			top: -coords.logo.y + 215
		}:{
			position: 'absolute',
			top: 0
		});
	},{'offset': 215});

	$('section')
	.waypoint(function (direction) {

		if(direction === 'down'){
			$('section.is-selected').animate({
					opacity: 0
			}, 500);
			$('section.is-selected').removeClass('is-selected');
			$(this).addClass('is-selected');
			$('section.is-selected').animate({
					opacity: 1
			}, 500);
			$('.is-alt-theme').removeClass('is-alt-theme'); 
			if($(this).index() % 2){
				$('body, .draw').addClass('is-alt-theme');
			}
		}
	}, { 'offset': '25%' })
	.waypoint(function(direction){
		if(direction === 'up'){
			$('section.is-selected').animate({
					opacity: 0
			}, 500);
			$('section.is-selected').removeClass('is-selected');
			$(this).addClass('is-selected');
			$('section.is-selected').animate({
					opacity: 1
			}, 500);
			$('.is-alt-theme').removeClass('is-alt-theme'); 
			if($(this).index() % 2){
				$('body, .draw').addClass('is-alt-theme');
			}
		}
	}, { 'offset': function() {
		return -$(this).height()*.75;
	}});

	// Transition Sections
	// $('section')
	// .waypoint(function (direction) {

	// 	direction === 'down' && $('section.is-selected').animate({
	// 		opacity: 0
	// 	}, 500);

	// 	$('section.is-selected').removeClass('is-selected');
	// 	$(this).addClass('is-selected');

	// 	$('.is-alt-theme').removeClass('is-alt-theme');

	// 	if(direction ==='down' && $(this).index() % 2){
	// 		$('body, .draw').addClass('is-alt-theme');
	// 	}

	// }, { 'offset': '50%' })
	// .waypoint(function(direction){
	// 	if(direction === 'up'){
	// 		$('section.is-selected').removeClass('is-selected');
	// 		$(this).addClass('is-selected');
	// 		$('section.is-selected').animate({
	// 			opacity: 1
	// 		}, 500);
	// 	}
	// }, { 'offset': function() {
	// 	return -$(this).height()*.75;
	// }});
});
