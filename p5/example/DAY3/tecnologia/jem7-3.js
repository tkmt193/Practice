// 変数
var angle = 0;
var length = 0;


// 全体の初期化（最初に一回だけ呼ばれる）
function setup() {
  // キャンバスをつくる
  createCanvas(500, 500);

  // 背景をぬりつぶす
  background(0);

  // ぬりをなくす
  noFill();

  // 四角形の基準を真ん中にする
  rectMode(CENTER);

  // 角度の基準を度にする
  angleMode(DEGREES);
}


// 計算と表示
function draw() {
  // 座標の基点を真ん中に移動させる
  translate(width / 2, height / 2);

  // 乱数をつくる
  angle = random(360);

  // キャンバスを回転させる
  rotate(angle);

  // 線の色をぬる
  stroke(0, random(255), 255, 100);

  // 乱数をつくる
  length = random(250);

  // 線を描画する
  line(0, 0, length, length);
}
