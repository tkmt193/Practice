function preload() {
  sound = loadSound('Alone.m4a');
}

function setup() {
  let cnv = createCanvas(400, 400);
  cnv.mouseClicked(togglePlay);
  fft = new p5.FFT();

  sound.amp(0.2);
}

function draw() {
  background(0);

  let spectrum = fft.analyze();

  noStroke();

  fill(255,0,255);
  for(let i = 0; i <= spectrum.length; i++) {
    let x = map(i, 0, spectrum.length, 0, width);
    let h = -height + map(spectrum[i], 0, 255, height, 0);
    rect(x, height, width / spectrum.length,h);

  }
}

function togglePlay() {
  if(sound.isPlaying()) {
    sound.pause();
  } else {
    sound.loop();
  }
}