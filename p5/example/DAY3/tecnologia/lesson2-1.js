// 画像の変数
var lakeImage;
var moonImage;

// サウンドの変数
var launchSound;
var explodeSound;

// 花火の粒を入れる配列
var fireworks = [];

// データのロード
function preload() {
  lakeImage = loadImage('lake.png');
  moonImage = loadImage('moon.png');
  launchSound = loadSound('launch.mp3');
  explodeSound = loadSound('explode.mp3');
}


// 全体の初期化（最初に一回だけ呼ばれる）
function setup() {
    createCanvas(800, 550);
    noStroke();
}


// 計算と表示
function draw() {
    // 暗い背景を描く
    background(0, 0, 20, 30);
    
    // 月と湖を表示
    image(moonImage, 120, 50);
    image(lakeImage, 0, height - 100);
    
    // たまに花火を打ち上げる（1000回のうち6回の確率）
    if (random(1000) < 6) {
        // 花火クラスからnewで花火を新しく作って配列に追加する
        fireworks.push(new Firework());
    }
    
    // 花火の本体の数だけ処理する
    for (var i = 0; i < fireworks.length; i++) {
        // 花火本体を移動させる
        fireworks[i].move();
        // 花火本体を表示する
        fireworks[i].draw();
    }
}


// 花火の本体のクラス
class Firework {
    // 初期化（constructor＝コンストラクター＝建設者）
    constructor() {
        // 打ち上がり始める座標をランダムに決める
        this.position = createVector(random(width), height - 100);
        // 打ち上げる速度をランダムに決める
        this.velocityY = random(-3.2, -4.0);
        // 色をランダムに決める
        this.color = color(random(200, 255), random(150, 255), random(100, 255));

        // 打ち上げの音のボリュームを調整
        launchSound.setVolume(0.05);
        // 打ち上げの音を鳴らす（launch＝ローンチ＝打ち上げ）
        launchSound.play();
    }
    
    // 移動
    move() {
        // 重力で打ち上げ速度が変化する
        this.velocityY += 0.02;
        // 速度で座標が変化する
        this.position.y += this.velocityY;
    }
        
    // 表示
    draw() {
        // 色をセット
        fill(this.color);
        // 小さな円を描く
        ellipse(this.position.x, this.position.y, 5);
    }
}