var animate = {

	start: function(){
		var nav = document.querySelector('.nav.svg');
		var line1 = nav.querySelector('.line-1');
		var line2 = nav.querySelector('.line-2');
		var line3 = nav.querySelector('.line-3');
		var logo = nav.querySelector('.logo');

		var strokeWidth = $('.draw').css('stroke-width');
		var strokeWidthNum = strokeWidth.substring(0, strokeWidth.length - 2);

		var screenWidth = $('.wrapper').width();

		var logoPos = {
			x: screenWidth - logo.getBoundingClientRect().width,
			y: 420
		};

		var letterPos = {
			l: nav.querySelector('.letter-l').getBBox(),
			i: nav.querySelector('.letter-i').getBBox()
		};

		// var endLinePos = screenWidth;
		var endLinePos = logoPos.x + letterPos.l.x + 7; // TODO: Don't know why I need to add 7 here
		var startLine3Pos = {
			x: logoPos.x + letterPos.i.x + 4.25,
			y: logoPos.y + letterPos.i.y + letterPos.i.height -1
		};
		

		line1.setAttribute('x2', endLinePos);
		line2.setAttribute('x1', endLinePos - strokeWidthNum/2);
		line2.setAttribute('x2', endLinePos - strokeWidthNum/2);

		logo.setAttribute('transform', 'translate('+logoPos.x+','+logoPos.y+')');

		line3.setAttribute('x1', startLine3Pos.x);
		line3.setAttribute('x2', startLine3Pos.x);
		line3.setAttribute('y1', startLine3Pos.y);

		

		console.log(letterPos.i.x, letterPos.i.y);

		// $.each(line1Params, function(key, val){
		// 	lineOne.setAttribute(key, val);
		// });

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

animate.start();