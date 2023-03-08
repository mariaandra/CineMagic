let header = document.querySelector('header');
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
let favbtn = document.getElementById('favbtn1')
let favbtn2 = document.getElementById('favbtn2');

window.addEventListener('scroll', () => {
  header.classList.toggle('shadow',window.scrollY > 0);
} );

menu.onclick = () => {
  menu.classList.toggle('bx-x');
  navbar.classList.toggle('active');
}

window.onscroll = () => {
  menu.classList.remove('bx-x');
  navbar.classList.remove('active');
}

window.onload = () => {
  $.ajax({
    type:'post',
    url:'../php/checkFav.php',
    data:{title:"Spider Man NO WAY HOME"},
    success:function(response) {
    if(response=="true")
    {
      favbtn.style.display="none";
      favbtn2.style.display="block";
    }
    else {
      favbtn.style.display="block";
      favbtn2.style.display="none";
    }
    }
    });
  
   return false;
}

function do_favourite()
{
  $.ajax({
    type:'post',
    url:'../php/play-page.php',
    data:{title:"Spider Man NO WAY HOME"},
    success:function(response) {
    if(response=="success added")
    {
      alert("You have added a favourite :)");
    }
    else alert("You deleted a movie from favourite :)");;
    }
    });
  
   return false;
}

  favbtn.onclick=()=>{
    favbtn.style.display="none";
    favbtn2.style.display="block";
    do_favourite();
  }

  favbtn2.onclick=()=>{
    favbtn.style.display="block";
    favbtn2.style.display="none";
    do_favourite();
  }

// function fav() {
//   document.getElementById('favbtn1').classList.toggle("bx bxs-heart");
// }

//Show Video
let playButton = document.querySelector(".play-movie");
let video = document.querySelector('.video-container');
let myvideo=document.querySelector('#myvideo');
let closeBtn = document.querySelector('.close-video');

playButton.onclick = () =>{
  video.classList.add("show-video");
  //Auto PLay when clcik
  myvideo.play();
}

closeBtn.onclick = () =>{
  video.classList.remove('show-video');
  myvideo.pause();
}