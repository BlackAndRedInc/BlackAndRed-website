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

	animate: function(){
		var that = this;
		var cords = this.getCordinates();
		var line1 = cords.lines.line1;
		var line2 = cords.lines.line2;

		this.drawLineHoriz(
			line1.target,
			line1.params.x1,
			line1.params.y1,
			line1.params.x2,
			line1.params.y2,
			function(){
				that.drawLineVert(
					line2.target,
					line2.params.x1,
					line2.params.y1,
					line2.params.x2,
					line2.params.y2,
					function(){
						cords.logo.target.setAttribute('transform', 'translate(' + cords.logo.x + ',' + cords.logo.y + ')');
					}
				);
			}
		);
	},

	drawLineHoriz: function(line, x1, y1, x2, y2, cb){
		var initialTs = new Date().getTime();
		var duration = 4000; // this animation should last for 2 seconds
		var handle = 0;

		line.setAttribute('x1', x1);
		line.setAttribute('y1', y1);
		line.setAttribute('y2', y2);
		 
		var draw = function() {
			var progress = (Date.now() - initialTs)/duration;
			if (progress >= 1) {
				window.cancelAnimationFrame(handle);
				line.setAttribute('x2', x2);
				cb();
			} else {
				var calcProgress = x2 * progress;
				var endPointPos = calcProgress <= x1 ? x1 : calcProgress;

				line.setAttribute('x2', endPointPos);
				handle = window.requestAnimationFrame(draw);
			}
		};
		draw();
	},

	drawLineVert: function(line, x1, y1, x2, y2, cb){
		var initialTs = new Date().getTime();
		var duration = 4000; // this animation should last for 2 seconds
		var handle = 0;

		line.setAttribute('x1', x1);
		line.setAttribute('x2', x2);
		line.setAttribute('y1', y1);
		 
		var draw = function() {
			var progress = (Date.now() - initialTs)/duration;
			if (progress >= 1) {
				window.cancelAnimationFrame(handle);
				line.setAttribute('y2', y2);
				cb();
			} else {
				var calcProgress = y2 * progress
				var endPointPos = calcProgress <= y1 ? y1 : calcProgress;

				line.setAttribute('y2', endPointPos);
				handle = window.requestAnimationFrame(draw);
			}
		};
		draw();
	},

};

animate.animate();