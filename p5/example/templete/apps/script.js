//FFT
let sound;

function preload() {
  sound = loadSound('../assets/Alone.m4a');
}

function setup() {
  createCanvas(500, 500, WEBGL);
  
}


function draw() {

}

// BGMの再生
function mouseClicked() {

  if(sound.isPlaying()) {
    sound.pause();
  } else {
    sound.loop();
  }
}
