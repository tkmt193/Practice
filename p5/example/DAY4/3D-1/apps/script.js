let sound;
let fft;
let spectrum;

let cube;
let waves = [];
let linesNum;

function preload() {
  sound = loadSound('../assets/Alone.m4a');
  angleMode(DEGREES);
}

function setup() {
  createCanvas(500, 500, WEBGL);
  colorMode(HSB, 360, 100, 100, 100);
  fft = new p5.FFT(0.8, 32);
  cube = new Cube();

}

function draw() {
  orbitControl();
  background(0);
  camera(
    200, 200, 100,
    0, 0, 0,
    0, 1, 0
  );

  spectrum = fft.analyze();
  linesNum = spectrum[20]/255*200;
  for(let i = 0; i <linesNum ; i++){
    waves[i] = new Wave();
  }
  cube.changecolor();
  cube.value();
  cube.draw();
  push();
      for(let i=0;i<30;i++){
        cube.move();
      }
      for(let i = 0; i < linesNum; i++){
        waves[i].draw();
      }
  pop();       
}

class Wave{
  constructor(x,y,z,_hue){
    this.position = createVector(random(-width, width), random(-height/2.0, height/2.0), random(-300, 300));
    this.length = random(10);
    this.speed = createVector(0.0, random(-20.0, 0.0), 0.0);
    this.hue=_hue;
  }

  draw(){
    this.hue = spectrum[25]/255;
    this.position.add(this.speed);
      if(this.position.y < -height/2.0){
        this.position.y = height/2.0;
      }
      
      line(this.position.x, this.position.y - this.length + this.hue * random(), this.position.z,
           this.position.x, this.position.y + this.length + this.hue * random(), this.position.z);
　}
}

class Cube{
  
  constructor(_size,_color,_colorspeed,_rotatespeed,x,y,z){
    this.size=_size;
    this.angle=createVector(x,y,z);
    this.color=0;
    this.colorspeed=_colorspeed;
    this.rotatespeed=_rotatespeed;
  }

  value(){
    this.size = spectrum[2]/255;
    this.size += sin(spectrum[30]);

    this.rotatespeed = spectrum[10]/255*3;
    this.rotatespeed += spectrum[20]/255*3;
    this.angle.y += this.rotatespeed;

    this.angle.x=spectrum[25]/255*3;
    this.angle.z=spectrum[28]/255*5;
  }

  changecolor(){
    this.colorspeed = spectrum[10]/255;
    this.color += this.colorspeed;
    if( this.color > 360) {
      this.color = 0;
    }
  }

  draw(){
    rotateY(this.angle.y);
    stroke(this.color, 100, 100);
    noFill();
  }

  move(){
    rotateX(this.angle.x);
    rotateZ(this.angle.z);
    box(50+this.size*100, 50+this.size*100, 50+this.size*100);  
  }
}

function mouseClicked() {

  if(sound.isPlaying()) {
    sound.pause();
  } else {
    sound.loop();
  }
}
