
let angle = 0;

function setup() {
 createCanvas(800,500,WEBGL);
 angleMode(DEGREES);
}


function draw() {
    background(0);
    angle++;

    for(let i=-1;i<2;i++){
        push();
        translate(200*i, 0, 0);

      //左
      if(i<0){
        rotateY(angle);
      }
      //右
      else if(i>0){
        rotateX(angle); 
      }
      //真ん中
      else{
        rotateZ(angle);
      }
      
      
      box(50,50,50);
      pop();
      }

    
}