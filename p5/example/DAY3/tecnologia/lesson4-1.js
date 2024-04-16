// 画像の変数
var redFishRightImage;
var redFishLeftImage;
var seaImage;

// 魚の変数と配列
var allFish = [];
var redFishCount = 25;


function preload(){
  // 魚の画像をロード
  redFishLeftImage = loadImage('fish_left.png');
  redFishRightImage = loadImage('fish_right.png');
  // 海中の画像をロード
  seaImage = loadImage('sea.png');
}


// 初期化（最初に一回のみ）
function setup() {
  createCanvas(800, 600);
  imageMode(CENTER);

  // 魚のクラスを作る
  for (var i = 0; i < redFishCount; i++) {
    allFish[i] = new Fish();
  }
}


function draw() {
  // 背景を表示
  image(seaImage, width / 2, height / 2, 800, 600);
  
  // 魚の数だけクラスを処理する
  for (var i = 0; i <  redFishCount; i++) {
    // 魚一匹を移動させる
    allFish[i].move();
    // 魚一匹を表示する
    allFish[i].draw();
  }
}


// 魚のクラス
class Fish {
    // 魚一匹を初期化する
    constructor() {
        // 魚の座標を初期化（画面いっぱいにランダムに置く）
        this.position = createVector(random(width), random(height));
    }
    
    // 魚一匹を移動させる
    move() {
      this.position.x -= 1;
    }

    // 魚一匹を表示する
    draw() {
        image(redFishLeftImage, this.position.x, this.position.y, 80, 80);
    }
}