// 変数（へんすう）
var video;
var playMode;

function preload() {

}

function setup() {
  createCanvas(windowWidth, windowHeight);
  background(0);
  imageMode(CENTER);

  // ビデオを再生する
  video = createVideo('video.mp4');
  video.hide();
  video.loop();

  // プレイモードを初期化
  playMode = 'playing';
}

function draw() {
  // ビデオの画像を表示
  image(video, width/2, height/2);
}

function mouseClicked() {
  if (playMode == 'playing') {
    video.pause();
    playMode = 'pause';
  } else {
    video.loop();
    playMode = 'playing';
  }
}