//FFT
let sound;
let fft;
let spectrum;

//object
let wave;
let camerawork;
let particles = [];

function preload() {
  sound = loadSound('../assets/isThisLove.mp3');
}

function setup() {
  createCanvas(500, 500, WEBGL);
  fft = new p5.FFT(0.8, 32);
  camerawork = new Camerawork();
  wave = new Wave();
  for (let i = 0; i <50; i++) {
    particles[i] = new Particle();
  }
}


function draw() {

  background(0);
  lights();
  spectrum = fft.analyze();
  camerawork.move();
  for(let i=0;i<10;i++){
    wave.change()
    wave.move();
    wave.draw();
    }
  for(let i=0;i<50;i++){
    particles[i].colorchange();
    particles[i].move();
    particles[i].draw();
  }

}

class  Camerawork{

  constructor(_velocity,_acceleration){
    this.angle=0;
    this.velocity=_velocity;
    this.acceleration=_acceleration;
  }

  move(){
    this.velocity=spectrum[3]/255*0.1;
    this.acceleration = spectrum[16]/255*1.5;
    this.velocity+=this.acceleration;
    this.angle+=this.velocity;
      // カメラの設定
    

   if(spectrum[26]>10){

    camera(
      
    cos(this.angle * 0.01) * 600, sin(this.angle * 0.02) *100, sin(this.angle * 0.01) * 600,
    0, 0, 0,
    0, 1, 0
    );
   }
   else{
    ortho();
    camera(
      // カメラの位置（x, y, z）
      cos(this.angle * 0.01) * 500, sin(this.angle * 0.02) *100, sin(this.angle * 0.01) * 500,
      // カメラが写す画面の中心となる位置（x, y, z）
      0, 0, 0,
      // カメラ自身の向き（x, y, z）
      0, 1, 0
    );
   }
  }

}



class Wave{

  constructor(_size,_collorr){
    this.angle = 0;
    this.size=_size;
    this.collorr =_collorr;
  }

  change(){
    this.collorr=spectrum[16];
  }
  draw(){
    stroke(0, this.collorr, 255);
    strokeWeight(10);
  }
  
  move(){
    this.size=spectrum[16]/255;
    push();
    translate(0, 0);
    line(
      cos(this.angle) * 500,sin(this.size)  * 500,sin(this.angle) * 500,
      cos(this.angle ) * 500, -sin(this.size) * 500,sin(this.angle) * 500
    );
    pop();
    this.angle += 1;
  }

}

class Particle{

  constructor(x,y,z,_color){
      this.position = createVector(random(-500,500),1000,random(-300,300));
      this.velocity= createVector(0,random(1, 5),0);
      
      this.size = random(10, 50);
      this.firstcolor=random(0,100);
      this.color =_color

      this.angle=0;
  }

  colorchange(){
    this.color=this.firstcolor;
    if(spectrum[25]>10){
      this.color=random(180,255);
    }
    if(spectrum[25]<=10){
      this.color=this.firstcolor;
    }
  }

  move(){
    this.angle++;
    if(spectrum[23]>150){
      this.velocity.y+=spectrum[21]/255*3;
    }

    this.position.y -= this.velocity.y;
    if (this.position.y < -height-this.size-100) {
      this.position.y = 1000;
    }
  }

  draw(){
    noStroke();
    fill(this.color, 0, 255);
    push();
    translate(this.position.x+sin(this.angle*0.1)*3,this.position.y,this.position.z+cos(this.angle*0.1)*3); 
    sphere(this.size);
    pop();
  }

}


function mouseClicked() {

  if(sound.isPlaying()) {
    sound.pause();
  } else {
    sound.loop();
  }
}

