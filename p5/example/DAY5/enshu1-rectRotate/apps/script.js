let angle=0;
let size;
let huevalue=[];
function setup() {
 createCanvas(800,800,WEBGL);
 angleMode(DEGREES);
 colorMode(HSB, 360, 100, 100, 100);

}


function draw() {
    background(0);
    camera(
      cos(angle)*300, -200,sin(angle)*300,
      0, 0, 0,
      0, 1, 0
    );
    angle++;
  

    for(let i=50;i>-50;i--){
      for(let j=50;j>-50;j--){
        size=sin(angle*10+10*j)*50;
        huevalue[j]=j*10+50;
        if(huevalue[j]>360){
          huevalue[j]-=360;
        }
        push();
        translate(50*i, 0, 50*j);
        rotateX(angle*j);
        rotateY(angle*i);
        rotateZ(angle);
        stroke(huevalue[j],100,100);
        fill(0,0,0,80);
        box(size,size,size); 
        pop();
    }

  }
    
}