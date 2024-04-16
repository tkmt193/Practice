// 画像の変数
var redFishRightImage;
var redFishLeftImage;
var seaImage;

// 魚の変数と配列
var allFish = [];
var redFishCount = 100;


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
    // 魚一匹の目標座標を決める
    allFish[i].setTarget();
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
        // 魚の速度をゼロで初期化
        this.velocity = createVector(0, 0);
        // 目標座標をキャンバスの中央で初期化
        this.target = createVector(width / 2, height / 2);
        // 最高速度を初期化
        this.maxSpeed = random(4.5, 6.5);
        // 泳ぎの力を初期化
        this.force = random(0.05, 0.15);
    }
    
    // 目標座標を決定
    setTarget() {
      // マウスの座標を目標座標にする
      this.target.x = mouseX;
      this.target.y = mouseY;
    }

    // 魚一匹を移動させる
    move() {
      // 目標座標と魚の座標の差を計算して力の向きを決める
      var direction = createVector(0, 0);
      direction.x = this.target.x - this.position.x;
      direction.y = this.target.y - this.position.y;
      // 力の向きを整える
      direction.normalize();
      // 力の大きさを掛け算して加速度にする
      direction.mult(this.force);
      
      // 加速度を使って速度を変化させる
      this.velocity.add(direction);
      // 速度にリミッターを入れる
      this.velocity.limit(this.maxSpeed);
      // 速度を使って位置を変化させる
      this.position.add(this.velocity);
    }

    // 魚一匹を表示する
    draw() {
      if (this.velocity.x < 0) {
        // 左向き
        image(redFishLeftImage, this.position.x, this.position.y, 80, 80);
      } else {
        // 右向き
        image(redFishRightImage, this.position.x, this.position.y, 80, 80);
      }
    }
}