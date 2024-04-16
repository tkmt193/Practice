// 変数
var positionX = 250;
var positionY = 250;

// 全体の初期化（最初に一回だけ呼ばれる）
function setup() {
  // キャンバスをつくる
  createCanvas(500, 500);

  // 背景をぬりつぶす
  background(0);

  // 輪郭（りんかく）を消す
  noStroke();
}

// 計算と表示
function draw() {
  // ぬりつぶす
  fill(random(255), random(255), 255, 50);

  // 円を描く
  ellipse(positionX, positionY, 30);

  // ランダムな数を選ぶ
  var randomNumber = floor(random(4));

  // 0なら、右に進む
  if (randomNumber == 0) {
    positionX += 15;
  }
  // 1なら、左に進む
  else if (randomNumber == 1) {
    positionX -= 15;
  }
  // 2なら、下に進む
  else if (randomNumber == 2) {
    positionY += 15;
  }
  // 3なら、上に進む
  else if (randomNumber == 3) {
    positionY -= 15;
  }

  // 座標がキャンバスの外に出たら
  if(
    positionX < 0 ||
    positionX > width ||
    positionY < 0 ||
    positionY > height
    ){
    // 真ん中に戻す
    positionX = 250;
    positionY = 250;
  }
}