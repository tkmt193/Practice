var angle = 0;

function setup() {
  // キャンバスを作る
  createCanvas(600, 500);

  // 色をぬる
  fill(0, 255, 255);

  // 輪郭線（りんかくせん）をとる
  noStroke();
}

function draw() {
  // 背景を黒くして、残像をつける
  background(0, 15);

  // 角度を変化させる
  angle += 0.05;

  // sin関数を使って縦の位置を計算する
  var positionY = sin(angle) * 150;
  
  // cos関数を使って横の位置を計算する
  var positionX = cos(angle) * 150;

  // 円を描く
  ellipse(width / 2 + positionX, height / 2 + positionY, 20);
  
}
