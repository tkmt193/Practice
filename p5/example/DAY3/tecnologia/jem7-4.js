// 変数
var angle = 0;
var diameter = 10;
var step = 0;


// 全体の初期化（最初に一回だけ呼ばれる）
function setup() {
  // キャンバスをつくる
  createCanvas(windowWidth, windowHeight);

  // 背景をぬりつぶす
  background(255);

  // 輪郭（りんかく）を消す
  // noStroke();
}


// 計算と表示
function draw() {
  // 描画の基準を真ん中に移動する
  translate(width / 2, height / 2);

  // ぬりつぶす
  fill(255, random(255), random(255));

  // 角度を増やす
  angle += 1;

  // 円の直径を大きくする
  diameter += 1;

  // 渦を大きくする
  step += 2;

  // 円を描く
  ellipse(cos(angle) * step, sin(angle) * step, diameter);
}
