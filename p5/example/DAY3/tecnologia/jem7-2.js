// 変数
var angle = 0;


// 全体の初期化（最初に一回だけ呼ばれる）
function setup() {
  // キャンバスをつくる
  createCanvas(500, 500);

  // 四角形を真ん中から描く
  rectMode(CENTER);

  // 輪郭（りんかく）を消す
  noStroke();
}


// 計算と表示
function draw() {
  // 背景をぬりつぶす
  background(0, 0, 100);

  // 時間差を入れる変数
  var difference = 0;

  // 繰り返す
  for (var i = 10; i < 500; i += 10) {
    // ぬりつぶす
    fill(i / 2, 0, 255);

    // 時間差をつける
    difference += 1;

    // 四角形を描く
    rect(i, 250, 2, sin(angle + difference) * 500);
    rect(250, i, sin(angle + difference) * 500, 2);
  }

  // 角度を増やす
  angle += 0.01;
}
