var angle = 0;
var positionX = 0;

function setup() {
  // キャンバスを作る
  createCanvas(600, 500);

  // 色をぬる
  fill(255, 0, 255);

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
  
  // 右に移動し続ける
  positionX += 3;

  // 右端までいったら、左端に戻る
  if (positionX > width) {
      positionX = 0;
  }

  // 波を描く
  ellipse(positionX, height / 2 + positionY, 20);
}