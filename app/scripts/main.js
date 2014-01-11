var _requestAnimationFrame = function(win, t) {
	return win["webkitR" + t] || win["r" + t] || win["mozR" + t]
	|| win["msR" + t] || function(fn) { setTimeout(fn, 60) };
}(window, "equestAnimationFrame");

var animate = {

	getCordinates: function(){
		var nav = document.querySelector('.nav.svg');
		var line1 = nav.querySelector('.line-1');
		var line2 = nav.querySelector('.line-2');
		var line3 = nav.querySelector('.line-3');
		var logo = nav.querySelector('.logo');

		var strokeWidth = $('.draw').css('stroke-width');
		var strokeWidthNum = strokeWidth.substring(0, strokeWidth.length - 2);

		var screenWidth = $('.wrapper').width();
		var viewportWidth = screenWidth <= 700 ? 700 : screenWidth;

		var logoPos = {
			x: viewportWidth - logo.getBoundingClientRect().width,
			y: 550
		};

		var letterPos = {
			l: nav.querySelector('.letter-l').getBBox(),
			i: nav.querySelector('.letter-i').getBBox()
		};

		// var endLinePos = viewportWidth;
		var endLinePos = logoPos.x + letterPos.l.x + 7; // TODO: Don't know why I need to add 7 here
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
						x1: 525,
						x2: endLinePos,
						y1: 133,
						y2: 133
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
						y2: 1000
					}
				}
			}
		};
	},

	quickDraw: function(){
		var cords = this.getCordinates();

		$.each(cords.lines, function(index, lineParams){
			$.each(lineParams.params, function(param, value){
				lineParams.target.setAttribute(param, value);
			});
		});

		cords.logo.target.setAttribute('transform', 'translate(' + cords.logo.x + ',' + cords.logo.y + ')');
	},

	// animate: function(){
	// 	var that = this;
	// 	var cords = this.getCordinates();
	// 	var line1 = cords.lines.line1;
	// 	var line2 = cords.lines.line2;

	// 	this.drawLineHoriz(
	// 		line1.target,
	// 		line1.params.x1,
	// 		line1.params.y1,
	// 		line1.params.x2,
	// 		line1.params.y2,
	// 		function(){
	// 			that.drawLineVert(
	// 				line2.target,
	// 				line2.params.x1,
	// 				line2.params.y1,
	// 				line2.params.x2,
	// 				line2.params.y2,
	// 				function(){
	// 					cords.logo.target.setAttribute('transform', 'translate(' + cords.logo.x + ',' + cords.logo.y + ')');
	// 				}
	// 			);
	// 		}
	// 	);
	// },

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

var cords = animate.getCordinates();
var line1 = cords.lines.line1;
var line2 = cords.lines.line2;

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
		time: 0,
		easing: false,
		run: function(rate) {
			cords.logo.target.setAttribute('transform', 'translate(' + cords.logo.x + ',' + cords.logo.y + ')');
		}
	},
]);