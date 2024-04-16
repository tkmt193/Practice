
let posX=[];
let posY=[];
let size=[];
let vx=[];
let vy=[];
let n=100;
let colorIndex=[];
let colorNumber=[];
let colorList=[[204,204,204],[255,255,255],[100,100,100]];


function setup() {
 createCanvas(500,500);
 for(let i=0;i<n;i++){
    posX[i]=random(100,400);
    posY[i]=random(50,400);
    size[i] =random(10,40);
    vx[i]=random(1,5);
    vy[i]=random(1,5);
    colorNumber[i]=floor(random(colorList.length));
    colorIndex[i]=colorList[colorNumber[i]];
 }
}


function draw() {
    background(0);
    //let pos = 30;
 for(let i=0;i<n;i++){
      posX[i]+=vx[i];
      posY[i]+=vy[i];
      noStroke();
      fill(colorIndex[i]);
      ellipse(posX[i],posY[i],size[i]);
 
  if(posX[i]>width-size[i]){
        vx[i]*=-1;
        colorNumber[i]=(colorNumber[i]+1)%3;
        colorIndex[i]=colorList[colorNumber[i]];
      }
      
  
  if(posX[i]<size[i]){
        vx[i]*=-1;
        colorNumber[i]=(colorNumber[i]+1)%3;
        colorIndex[i]=colorList[colorNumber[i]];
  }
  if(posY[i]>height-size[i]){
        vy[i]*=-1;
        colorNumber[i]=(colorNumber[i]+1)%3;
        colorIndex[i]=colorList[colorNumber[i]];
  }
  if(posY[i]<size[i]){
         vy[i]*=-1;
         colorNumber[i]=(colorNumber[i]+1)%3;
         colorIndex[i]=colorList[colorNumber[i]];
  }   

 }
}