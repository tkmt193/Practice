var angle = 0;
var radius = 0;

function setup() {
  // キャンバスを作る
  createCanvas(800, 800);

  // 背景を黒くする
  background(0);

  // 色をぬる
  fill(255, 255, 0);

  // 輪郭線（りんかくせん）をとる
  noStroke();
}

function draw() {
  // 角度を変化させる
  angle += 0.025;
  
  // 半径を変化させる
  radius += 0.3;

  // sin関数を使って縦の位置を計算する
  var positionY = sin(angle) * radius;
  
  // cos関数を使って縦の位置を計算する
  var positionX = cos(angle) * radius;

  // 渦（うず）を描く
  ellipse(width / 2 + positionX, height / 2 + positionY, 40);
}
