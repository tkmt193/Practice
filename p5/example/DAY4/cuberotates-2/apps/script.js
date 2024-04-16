
let angle = 0;
function setup() {
 createCanvas(800,800,WEBGL);
 angleMode(DEGREES);

}


function draw() {
    background(0);
    angle++;

    for(let i=-1;i<2;i++){
      for(let j=-1;j<2;j++){
        for(let k=-1;k<2;k++){
        push();
        translate(200*i, 200*j, 80*k);
      //左
      if(i>0 || j>0 ){ 
          rotateY(angle);
          rotateX(angle*k);
          rotateZ(angle*j);
      }
      //右
      else if(i<0 || j<0){
          rotateZ(angle);
          rotateY(angle*k);
          rotateX(angle*j);
      }
      //真ん中
      else{
  
          rotateZ(angle);
      
      }
      
      box(50,50,50);
      pop();
      }
    }

  }

    
}