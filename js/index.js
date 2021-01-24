var video1 = document.getElementById("video1");
var video2 = document.getElementById("video2");
var video3 = document.getElementById("video3");
var video4 = document.getElementById("video4");

video1.onended = function () {
  video2.play();
  video1.style.opacity = 0;
  video2.style.opacity = 1;
};

video2.onended = function () {
  video3.play();
  video2.style.opacity = 0;
  video3.style.opacity = 1;
};

video3.onended = function () {
  video4.play();
  video3.style.opacity = 0;
  video4.style.opacity = 1;
};

video4.onended = function () {
  video1.play();
  video4.style.opacity = 0;
  video1.style.opacity = 1;
};

/* 

codepen pra pausar os videos.

// for <video id="bgvid">
var vid = document.getElementById("bgvid");
var playButton = document.querySelector("#slider-play-button button");


playButton.addEventListener("click", function() {
  if (vid.paused) {
    vid.play();
	playButton.classList.remove("play-video-button");
    playButton.classList.add("pause-video-button");
  } else {
    vid.pause();
	playButton.classList.add("play-video-button");
    playButton.classList.remove("pause-video-button");
  }
}); */



// pre-load

window.addEventListener("load", function () {
  const loader = document.querySelector(".pre-loader");
  loader.className += " hidden";
});
