var angle = 0;

function setup() {
  createCanvas(windowWidth, windowHeight);
}

function draw() {
  background(0, 20);

  // 線の色
  stroke(0, 255, 0);

  // 線の太さ
  strokeWeight(6);

  // 位置を移動させる
  translate(width / 2, height / 2);

  // 線を描く
  line(
      cos(angle) * 150,
      sin(angle * 0.8)  * 100,
      -cos(angle * 1.2) * 200,
      sin(angle * 0.9) * 200
  );

  // 角度を変化させる
  angle += 0.1;
}