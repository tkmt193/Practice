function preload() {

}

function setup() {
    createCanvas(255,255);
    pixelDensity(1);
}

function draw() {
    background(100);

    noStroke();

    // 赤い円
    fill(255, 0, 0);
    ellipse(100, 120, 200);

    // 緑の円
    fill(0, 255, 0);
    ellipse(170, 140, 150);

    // 青い四角
    fill(0, 0, 255);
    rect(80, 100, 100, 100);

    // 白い四角
    fill(255, 255, 255);
    rect(150, 30, 50, 50);

    // 黒い円
    fill(0, 0, 0);
    ellipse(40, 210, 80);


    loadPixels();

    for (var y = 0; y < height / 2 ; y++) {
      for (var x = 0; x < width ; x++) {
        var i = (x + y * width)* 4;
        var red   = pixels[i];
        var green = pixels[i + 1];
        var blue  = pixels[i + 2];
        pixels[i]     = green;
        pixels[i + 1] = blue;
        pixels[i + 2] = red;
        pixels[i + 3] = 255;
      }
    }

    updatePixels();
}