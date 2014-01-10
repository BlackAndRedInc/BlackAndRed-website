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
						x1: 540,
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

	start: function(){
		// var initial_ts = new Date().getTime();
		// var duration = 2000; // this animation should last for 2 seconds
		// var path = fetchPreparedSVGPath();
		// var length = path.getTotalLength();
		// var handle = 0;
		 
		// path.style.strokeDasharray = length + ' ' + length; 
		// path.style.strokeDashoffset = length;
		 
		// var draw = function() {
		//    var progress = (Date.now() - initial_ts)/duration;
		//    if (progress >= 1) {
		//      window.cancelAnimationFrame(handle);
		//    } else {
		//      path.style.strokeDashoffset = Math.floor(length * (1 - progress));
		//      handle = window.requestAnimationFrame(draw);
		//    }
		// };
		// draw();
	}

}

animate.quickDraw();