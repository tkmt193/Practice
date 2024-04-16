// 変数（へんすう）
var photoImage;

function preload() {
  photoImage = loadImage('photo05.png');
}

function setup() {
  createCanvas(500, 500);
  noStroke();
  frameRate(1);
}

function draw() {
  background(0);

  // 画像を表示する
  //image(photoImage, 0, 0);

  // 写真の画像の色の情報をピクセルの配列に写す
  photoImage.loadPixels();
  // ピクセルの配列を取り出す
  var pixels = photoImage.pixels;

  var stepSize = 12;

  // モザイクを描く
  for (var y = 0; y < photoImage.height; y += stepSize) {
    for (var x = 0; x < photoImage.width; x += stepSize) {
      var i = (x + y * photoImage.width) * 4;

      var red = pixels[i];
      var green = pixels[i + 1];
      var blue = pixels[i + 2];
      fill(red, green, blue);

      var newX = x + random(stepSize);
      var newY = y + random(stepSize);
      ellipse(newX, newY, stepSize * 2.2);
    }
  }
}