var videoBtn1=document.getElementById('playBtn1');
var videoBtn2=document.getElementById('playBtn2');
var videoBtn3=document.getElementById('playBtn3');

let v1=document.querySelector('#v1');
let v2=document.querySelector('#v2');
let v3=document.querySelector('#v3');

var vid1 = document.getElementById("vid1");
var vid2 = document.getElementById("vid2");
var vid3 = document.getElementById("vid3");
let closeBtn1 = document.querySelector('#close1');
let closeBtn2 = document.querySelector('#close2');
let closeBtn3 = document.querySelector('#close3');


videoBtn1.onclick = function() {
  vid1.style.display = "block";
  //video.classList.add("show-video");
  swiper.autoplay.stop();
  v1.play();
}

videoBtn2.onclick = function() {
  vid2.style.display = "block";
  swiper.autoplay.stop();
  v2.play();
}

videoBtn3.onclick = function() {
  vid3.style.display = "block";
  swiper.autoplay.stop();
  v3.play();
}

window.onclick = function(event) {
  if (event.target == vid1) {
    vid1.style.display = "none";
    v1.pause();
  }
  if (event.target == vid2) {
    vid2.style.display = "none";
    v2.pause();
  }
  if (event.target == vid3) {
    vid3.style.display = "none";
    v3.pause();
  }
} 

closeBtn1.onclick = () => {
  if (vid1.style.display === "block") {
    vid1.style.display="none";
    v1.pause();
  }
}

closeBtn2.onclick = () => {
  if (vid2.style.display === "block") {
    vid2.style.display="none";
    v2.pause();
  }
}

closeBtn3.onclick = () => {
  if (vid3.style.display === "block") {
    vid3.style.display="none";
    v3.pause();
  }
}