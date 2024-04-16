// 変数（へんすう）
var video;
var mirrorImage;
var filter;

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

  // フィルタを初期化する
  filter = 0;
}

// グレースケールフィルタ
function gray() {
  var pixels = video.pixels;
  for (var y = 0; y < video.height; y++) {
    for (var x = 0; x < video.width; x++) {
      var i = (x + y * video.width) * 4;
      // ピクセルを書きかえる
      var red   = pixels[i];
      var green = pixels[i + 1];
      var blue  = pixels[i + 2];
      var gray = (red + green + blue) / 3;
      pixels[i]     = gray;
      pixels[i + 1] = gray;
      pixels[i + 2] = gray;
      pixels[i + 3] = 255;
    }
  }
}

// セピア風フィルタ
function sepia() {
  var pixels = video.pixels;
  for (var y = 0; y < video.height; y++) {
    for (var x = 0; x < video.width; x++) {
      var i = (x + y * video.width) * 4;
      // ピクセルを書きかえる
      var red   = pixels[i];
      var green = pixels[i + 1];
      var blue  = pixels[i + 2];
      var gray = (red + green + blue) / 3;
      pixels[i]     = gray * 0.9;
      pixels[i + 1] = gray * 0.7;
      pixels[i + 2] = gray * 0.4;
      pixels[i + 3] = 255;
    }
  }
}

// 白黒フィルタ
function blackAndWhite() {
  var pixels = video.pixels;
  for (var y = 0; y < video.height; y++) {
    for (var x = 0; x < video.width; x++) {
      var i = (x + y * video.width) * 4;
      // ピクセルを書きかえる
      var red = pixels[i];
      if (red > 130) {
        pixels[i]     = 255;
        pixels[i + 1] = 255;
        pixels[i + 2] = 255;
        pixels[i + 3] = 255;
      } else {
        pixels[i]     = 0;
        pixels[i + 1] = 0;
        pixels[i + 2] = 0;
        pixels[i + 3] = 255;
      }
    }
  }
}

// モザイク模様を描く
function mosaic() {
  background(0);
  var pixels = video.pixels;
  var stepSize = 6 + floor(mouseX * 0.05);
  for (var y = 0; y < video.height; y += stepSize) {
    for (var x = 0; x < video.width; x += stepSize) {
      var i = (x + y * video.width) * 4;
      // ピクセルを書きかえる
      var red   = pixels[i];
      var green = pixels[i + 1];
      var blue  = pixels[i + 2];
      fill(red, green, blue);
      rect(x + width / 2 - video.width / 2, y + width / 2 - video.height / 2 - 150, stepSize - 1, stepSize - 1);
    }
  }
}

// マウスがクリックされた時
function mouseClicked() {
  filter++;
  if (filter > 4) {
    filter = 0;
  }
}

function draw() {
  // ビデオの絵からピクセルの配列に色情報を写す
  video.loadPixels();

  // グレースケールフィルタ
  if (filter == 1) {
    gray();
  }
  // セピア風フィルタ
  if (filter == 2) {
    sepia();
  }
  // 白黒フィルタ
  if (filter == 3) {
    blackAndWhite();
  }

  // ピクセルの配列の色情報を使ってビデオの画像を書きかえる
  video.updatePixels();
  // ビデオの画像を表示する
  image(video, width / 2, height / 2 - 120);

  // モザイク模様
  if (filter == 4) {
    mosaic();
  }

  // 鏡を表示する
  image(mirrorImage, width/2, height/2);
}