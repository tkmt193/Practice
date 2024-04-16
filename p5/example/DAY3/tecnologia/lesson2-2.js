// 画像の変数
var lakeImage;
var moonImage;

// サウンドの変数
var launchSound;
var explodeSound;

// 花火の粒を入れる配列
var fireworks = [];
var particles = [];

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
    background(0, 0, 20, 10);
    
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
        
        // 爆発したら
        if (fireworks[i].mode == 'explode') {
            // 花火本体を配列から消す
            fireworks.splice(i, 1);
        }
    }
    
    // 花火の粒の数だけ処理する
    for (var i = 0; i < particles.length; i++) {
        // 花火の粒を移動させる
        particles[i].move();
        // 花火の粒を表示する
        particles[i].draw();
        
        // 花火の粒が消える時間になったら
        if (particles[i].lifetime < 0) {
            // 花火の粒を配列から消す
            particles.splice(i, 1);
        }
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
        // モードを「move」にしておく
        this.mode = 'move';
        // 揺れの表現のために横の位置を保存しておく
        this.baseX = this.position.x;
        
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
        // 上昇中の揺れ（ゆれ）を表現する
        this.position.x = this.baseX + 0.6 * sin(this.position.y * 0.3);
        
        // 打ち上げの速度がゼロになって頂点に来たら
        if (this.velocityY > 0) {
            // 花火を爆発させる
            this.explode();
        }
    }
    
    // 爆発（explode＝エクスプロード＝爆発する）
    explode() {
        // モードを「explode」に変える
        this.mode = 'explode';
        
        // 花火の大きさ（爆発の強さ）をランダムで決める
        var size = random(3.5, 7.0);
        // 花火の粒を大量に作る
        for (var i = 0; i < 500; i++) {
            // 花火本体の座標と色を使って花火の粒を作り配列に入れる
            particles.push(new Particle(this.position.x, this.position.y, this.color, size));
        }
        
        // 爆発の音を鳴らす
        explodeSound.play();
    }
    
    // 表示
    draw() {
        // 色をセット
        fill(this.color);
        // 小さな円を描く
        ellipse(this.position.x, this.position.y, 5);
    }
}


// 花火の粒のクラス
class Particle {
    // 初期化（constructor＝コンストラクター＝建設者）
    constructor(x, y, color, size) {
        // 花火本体の位置で初期化
        this.position = createVector(x, y);
        // 飛び散る速度を初期化
        //this.velocity = createVector(random(-3.0, 3.0), random(-3.0, 3.0));
        // 飛び散る向きをランダムに決める
        this.velocity = p5.Vector.random2D();
        // 飛び散る強さをランダムに決める
        this.velocity.mult(random(size));

        // 花火本体の色を引きつぐ
        this.color = color;

        // 花火の粒が表示される時間をランダムに決める
        this.lifetime = random(120, 180);
    }
    
    // 移動
    move() {
        // 重力で粒の速度が変化する
        this.velocity.y += 0.015;
        // 空気抵抗
        this.velocity.mult(0.98);
        // 速度で座標が変化する
        //this.position.x += this.velocity.x;
        //this.position.y += this.velocity.y;
        this.position.add(this.velocity);
        
        // 残りの時間を減らす
        this.lifetime--;
    }
    
    // 表示
    draw() {
        // 粒の色をセットする
        fill(this.color);
        // 小さな円を描く
        ellipse(this.position.x, this.position.y, 2);
    }
}