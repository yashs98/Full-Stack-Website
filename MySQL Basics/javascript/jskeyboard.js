
"use strict";

var canvas = document.getElementById("canvas2");
var ctx = canvas.getContext("2d");
var car = new Image();
car.src = '../images/vehicle.jpg';

var y = 10;
var x = 10;



				
car.style.position='relative';

car.style.left = '0px';
car.style.top = '0px';





function moveCar(e) {

	var tempX = x;
	var tempY = y;

	var tempCar = car;

	switch(e.keyCode) {

		case 37:
			x -= 10;
			break;

		case 38:
			y -= 10;
			break;

		case 39:
			x += 10;
		
			break;
		case 40:
			y += 10;
			break;

		default:
			break;

	}

	if( x >= 310) {
		x -= 10;
	}

	else if( x < 0 ) {
		x += 10;
	}

	if( y <= 0) {
		y += 10;
	}

	else if( y >= 210) {
		y -= 10;
	}

	ctx.clearRect(0,0, canvas.width, canvas.height);
	ctx.drawImage(car, x, y, 300, 100);

};

car.onload = function() {

	
	ctx.drawImage(car, x, y, 300, 100);
	window.addEventListener("keydown", moveCar, false);
	
}
