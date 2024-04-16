function setup() {
    createCanvas(500, 500);
  }
  
  function draw() {
    background(0);
  
    // 移動する
    translate(mouseX, mouseY);
  
    // 円を描く
    ellipse(0, 0, 100);
    ellipse(100, 0, 100);
    ellipse(0, 100, 100);
  }