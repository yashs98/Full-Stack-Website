

"use strict";


var can = document.getElementById("canvas");
var ctx = can.getContext("2d");
var img = new Image();
img.src = "../images/smiley.png";

var x, y;

window.onload = function() {

    document.getElementById("canvas").src = "../images/smiley.png";
    ctx.drawImage(img, 30, 40, 300, 200);
    canvas.addEventListener("mousedown", getPosition, false);

    

};





function getPosition(event)
{
  x = event.x;
  y = event.y;

  var canvas = document.getElementById("canvas");

  x -= canvas.offsetLeft;
  y -= canvas.offsetTop;

  var insideImg = intersects(x, y, 180, 20, 180);
  if(insideImg) {
      faceImage();
  }

}

function intersects(x, y, cx, cy, r) {
    var dx = x-cx;
    var dy = y-cy;
    return dx*dx+dy*dy <= r*r
}

function faceImage() {

    if( document.getElementById("canvas").src === "../images/smiley.png" ){
        
        document.getElementById("canvas").src = "../images/frowny.png";
        img.src = "../images/frowny.png";
        document.getElementById("face-change").innerHTML = "Click to get Smiley Face!";
        
        ctx.drawImage(img, 30, 40, 300, 200);

    }

    else if( document.getElementById("canvas").src === "../images/frowny.png" ) {
        
        document.getElementById("canvas").src = "../images/smiley.png";
        img.src = "../images/smiley.png";
        document.getElementById("face-change").innerHTML = "Click to get Frowny Face!";
       
        ctx.drawImage(img, 30, 40, 300, 200);
    }

    

}



