// 変数（へんすう）
var video;
var mirrorImage;

function preload() {
  mirrorImage = loadImage('mirror.png');
}

function setup() {
  createCanvas(windowWidth, windowHeight);
  background(0);
  imageMode(CENTER);

  // ビデオを再生する
  video = createVideo('belle_sing.mp4');
  video.hide();
  video.loop();
}

// モザイク模様を描く
function mosaic() {
  background(0);
  var pixels = video.pixels;
  var stepSize = 6 + floor(mouseX * 0.05);
  for (var y = 0; y < video.height; y += stepSize) {
    for (var x = 0; x < video.width; x += stepSize) {
      var i = (x + y * video.width) * 4;
      var red   = pixels[i];
      var green = pixels[i + 1];
      var blue  = pixels[i + 2];
      fill(red, green, blue);
      rect(x + width / 2 - video.width / 2, y + width / 2 - video.height / 2 - 150, stepSize - 1, stepSize - 1);
    }
  }
}

function draw() {
  // ビデオの絵からピクセルの配列に色情報を写す
  video.loadPixels();

  // ピクセルの配列の色情報を使ってビデオの画像を書きかえる
  video.updatePixels();
  // ビデオの画像を表示する
  image(video, width / 2, height / 2 - 120);

  // モザイク模様
  mosaic();

  // 鏡を表示する
  image(mirrorImage, width/2, height/2);
}