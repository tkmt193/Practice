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
  video = createVideo('belle_b_sing.mp4');
  video.hide();
  video.loop();
}

function draw() {
  // ビデオの画像からピクセルの配列に色情報を写す
  video.loadPixels();

  var pixels = video.pixels;
  for (var y = 0; y < video.height; y++) {
    for (var x = 0; x < video.width; x++) {
      var i = (x + y * video.width) * 4;
      // ピクセルを書きかえる
      var red   = pixels[i];
      var green = pixels[i + 1];
      var blue  = pixels[i + 2];
      pixels[i]     = 255 - red;
      pixels[i + 1] = 255 - green;
      pixels[i + 2] = 255 - blue;
      pixels[i + 3] = 255;
    }
  }

  // 変更したピクセルの配列の色情報をビデオの画像に戻す
  video.updatePixels();
  // ビデオの画像を表示する
  image(video, width / 2, height / 2 - 120);

  // 鏡を表示する
  image(mirrorImage, width/2, height/2);
}