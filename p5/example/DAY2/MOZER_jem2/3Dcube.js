// 変数
var size = 50;

// 全体の初期化（最初に一回だけ呼ばれる）
function setup() {
  // キャンバスをつくる(WEBGLモードに設定)
  createCanvas(500, 500, WEBGL);

  // カメラの設定
  camera(250, 250, 250, 0, 0, 0, 0, 1, 0);
}

// 計算と表示
function draw() {
  // 背景をぬりつぶす
  background(0, 0, 40);

  // ライトの設定
  lights();

  // マウスでカメラの向きを操作できるようにする
  orbitControl();

  // z方向に3回くりかえす
  for(var z = 0; z < 3; z++) {
    // y方向に3回くりかえす
    for(var y = 0; y < 3; y++) {
      // x方向に3回くりかえす
      for(var x = 0; x < 3; x++) {

        // 動きをつける変数
        var wave = sin(frameCount * 0.02 + x + y + z);
        
        //★チャレンジ★sin関数の角度の計算を変えてみると、どうなるかな？

        // 現在の座標を一時保存
        push();

        // 座標の基点を移動する
        translate(x * size, y * size, z * size);

        // ぬりつぶす
        fill(255, wave * 255, 150);

        // ボックスを描く
        box(wave * size);

        // 一時保存した座標に戻す
        pop();
      }
    }
  }
}
