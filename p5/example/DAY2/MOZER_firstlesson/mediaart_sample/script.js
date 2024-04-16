// 全体の初期化（最初に一回だけ呼ばれる）
function setup() {
    // キャンバスをつくる
    createCanvas(windowWidth, windowHeight);
  
  // 背景をぬりつぶす
    background(255);
  }
  
  // 計算と表示
  function draw() {
    // ぬりつぶす
    fill(random(100, 255), 255, random(100, 255));
  
    // 円を描く
    ellipse(mouseX, mouseY, 100);
  }
  