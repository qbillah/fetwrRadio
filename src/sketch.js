var x;
function setup() {
    var w = $('.main-wrap').width();
    var h = $('.main-wrap').height();
    var canvas = createCanvas(w , h , WEBGL);
    canvas.parent('display');
    background(255);
    x = 0;
}

function windowResized(){
    var w = $('.main-wrap').width();
    var h = $('.main-wrap').height();
    var canvas = createCanvas(w , h);
}

function draw(){
    rotateY(x);
    rotateX(x / 2);
    sphere(100);
    x+= 0.01;
}