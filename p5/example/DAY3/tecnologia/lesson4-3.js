// 画像の変数
var redFishRightImage;
var redFishLeftImage;
var seaImage;
var bubbleImage;

// 魚の変数と配列
var allFish = [];
var redFishCount = 40;

// 泡の変数と配列
var bubbles = [];
var bubbleCount = 40;


function preload(){
  // 魚の画像をロード
  redFishLeftImage = loadImage('fish_left.png');
  redFishRightImage = loadImage('fish_right.png');
  // 海中の画像をロード
  seaImage = loadImage('sea.png');
  // 泡の画像をロード
  bubbleImage = loadImage('bubble.png');
}


// 初期化（最初に一回のみ）
function setup() {
  createCanvas(800, 600);
  imageMode(CENTER);

  // 魚のクラスを作る
  for (var i = 0; i < redFishCount; i++) {
    allFish[i] = new Fish();
  }

  // 泡のクラスを作る
  for (var i = 0; i < bubbleCount; i++) {
      bubbles[i] = new Bubble();
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

  // 泡の数だけクラスを処理する
  for (var i = 0; i <  bubbleCount; i++) {
    // 泡１つを移動させる
    bubbles[i].move();
    // 泡１つを表示する
    bubbles[i].draw();
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
        this.force = random(0.08, 0.15);
    }

    // 目標座業を決定
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


// 泡のクラス
class Bubble {
    // 泡１つの初期化
    constructor() {
        // 泡の座標を初期化
        this.position = createVector(random(width), random(height));
        // 泡の縦の移動速度をランダムで初期化
        this.velocityY = random(0.3, 1.5);
        // 泡の大きさをランダムで初期化
        this.size = random(20, 60);
        // 泡の揺れの計算の角度をランダムで初期化
        this.angle = random(0, 3);
        // 泡の角度の変化スピードをランダムで初期化
        this.angleSpeed = random(0.02, 0.04);
        // 泡の揺れの大きさをランダムで初期化
        this.swingWidth = random(10, 25);
    }
    
    // 泡１つを移動させる
    move() {
        // 縦に移動
        this.position.y -= this.velocityY;
        // 画面の上に消えたら下から出てくる
        if (this.position.y < -this.size / 2) {
            this.position.y = height + this.size / 2;
        }

        // 泡の揺れ用の計算
        this.angle += this.angleSpeed;
    }
    
    // 泡１つを表示する
    draw() {
        // sin関数で泡の揺れを表現する
        var x = this.position.x + sin(this.angle) * this.swingWidth;
        image(bubbleImage, x, this.position.y, this.size, this.size);
    }
}