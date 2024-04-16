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

// グレースケールフィルター
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
      pixels[i]     = gray * 0.9;
      pixels[i + 1] = gray * 0.7;
      pixels[i + 2] = gray * 0.4;
      pixels[i + 3] = 255;
    }
  }
}

function draw() {
  // ビデオの絵からピクセルの配列に色情報を写す
  video.loadPixels();

  // グレースケールフィルター
  gray();

  // ピクセルの配列の色情報を使ってビデオの画像を書きかえる
  video.updatePixels();
  // ビデオの画像を表示する
  image(video, width / 2, height / 2 - 120);

  // 鏡を表示する
  image(mirrorImage, width/2, height/2);
}