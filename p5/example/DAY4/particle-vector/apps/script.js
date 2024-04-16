
var particles = [];
let n=100;
let colorList=[[204,204,204],[255,255,255],[100,100,100]];

function setup() {
 createCanvas(500,500);
 for (var i = 0; i <n; i++) {
      particles[i] = new Particle();
    }
}


function draw() {
    background(0);
 for(let i=0;i<n;i++){
      particles[i].move();
      particles[i].draw();
      particles[i].colorchange();
 }
}
 
class Particle {

      constructor(x, y) {
          this.position = createVector(random(50,400), random(50,400));
          this.velocity = createVector(random(1,5), random(1,5));
          this.size = random(10, 40);
          this.colorNumber=floor(random(colorList.length));
          this.color=colorList[this.colorNumber];
      }

      colorchange(){
            if(this.position.x>width-this.size || this.position.x<this.size || this.position.y>height-this.size || this.position.y<this.size){
                  this.colorNumber=(this.colorNumber+1)%3;
                  this.color=colorList[this.colorNumber];
            } 
      }

      move() {
            this.position.add(this.velocity);
            if(this.position.x>width-this.size){
                  this.velocity.x*=-1;
            }
            if(this.position.x<this.size){
                  this.velocity.x*=-1;      
            }
            if(this.position.y>height-this.size){
                  this.velocity.y*=-1;          
            }
            if(this.position.y<this.size){
                  this.velocity.y*=-1;
           }
      }

      draw() {
            // 雪の粒を表示
            noStroke();
            fill(this.color);
            ellipse(this.position.x,this.position.y,this.size);
      }


}