// 画像の変数
var mountainImage;
var particleImage;

// 雪の粒を入れる配列
var particles = [];


// データのロード
function preload() {
  mountainImage = loadImage('mountain.png');
  particleImage = loadImage('snow.png');
}


// 全体の初期化（最初に一回だけ呼ばれる）
function setup() {
    createCanvas(800, 550);
    noStroke();
}


// 計算と表示
function draw() {
    // 暗い背景を描く
    background(0, 0, 40, 200);

    // 山を表示
    image(mountainImage, 0, 450);

    // マウスをクリックしたら雪を発射
    if (mouseIsPressed) {
        for (var i = 0; i < 8; i++ ) {
            // マウスカーソルの場所に雪の粒を作って粒の配列に入れる
            particles.push(new Particle(mouseX, mouseY));
        }
    }

    // 雪の粒の数だけ処理する
    for (var i = 0; i < particles.length; i++) {
        // 雪の粒を移動させる
        particles[i].move();
        // 雪の粒を表示する
        particles[i].draw();

        // 雪の粒が消える時間になったら
        if (particles[i].lifetime < 0) {
            // 雪の粒を配列から消す
            particles.splice(i, 1);
        }
    }
}


// 雪の粒のクラス
class Particle {
    // 初期化（constructor＝コンストラクター＝建設者）
    constructor(x, y) {
        // 最初の位置
        this.position = createVector(x, y);

        // 雪の粒の速さ
        this.speed = random(-20, -50);

        // 雪の粒の動き
        this.velocity = createVector(0, 0);
        this.rotation = random(0, 0.1);
        this.rotateSpeed = 0;
        this.rotateSpeedAdd = random(-0.001, 0.005);

        // 雪の粒の大きさ
        this.size = random(5, 15);

        // 雪の粒が表示される時間
        this.lifetime = random(30, 150);
    }

    // 移動
    move() {
        // 空気抵抗でだんだん遅くなる
        this.speed *= 0.94;

        // クルンと回る動きの角度の計算
        this.rotateSpeed += this.rotateSpeedAdd;
        this.rotation += this.rotateSpeed;

        // クルンと回る動きを計算する
        this.velocity.x = this.speed * cos(this.rotation);
        this.velocity.y = this.speed * sin(this.rotation);

        // 座標が変化する
        this.position.add(this.velocity);
        this.position.y += 1;

        // だんだん小さくなる
        this.size *= 0.995;

        // 残りの時間を減らす
        this.lifetime--;
    }

    // 表示
    draw() {
        // 雪の粒を表示
        image(particleImage, this.position.x, this.position.y, this.size, this.size);
    }
}
