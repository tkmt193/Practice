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
    background(0, 0, 40);

    // 山を表示
    image(mountainImage, 0, 450);

    // マウスをクリックしたら雪を発射
    if (mouseIsPressed) {
        // マウスカーソルの場所に雪の粒を作って粒の配列に入れる
        particles.push(new Particle(mouseX, mouseY));
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
        this.speed = -20;
        // 雪の粒が表示される時間
        this.lifetime = 30;
    }

    // 移動
    move() {
        // 座標が変化する
        this.position.x += this.speed;
        // 残りの時間を減らす
        this.lifetime--;
    }

    // 表示
    draw() {
        // 雪の粒を表示
        image(particleImage, this.position.x, this.position.y, 15.0, 15.0);
    }
}
