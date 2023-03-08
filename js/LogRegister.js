var x=document.getElementById('login');
var y=document.getElementById('register');
var z=document.getElementById('btn');

function register()
{
    x.style.left='-400px';
    y.style.left='50px';
    z.style.left='110px';
}

function login()
{
    x.style.left='50px';
    y.style.left='450px';
    z.style.left='0px';
}

function video()
{
    x.style.left='50px';
    y.style.left='450px';
}

var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
        
function do_login()
{
  $.ajax({
  type:'post',
  url:'../php/Login.php',
  data:$('#login').serialize(),
  success:function(response) {
    console.log(response);
  if(response=="success")
  {
    window.location.href="../php/mainLogged.php";
  }
  else if(response=="admin"){
    window.location.href="../php/admin.php";
  }
  else
  {
    alert("Wrong Details");
  }
  }
  });

 return false;
}

function do_register()
{
  $.ajax({
  type:'post',
  url:'../php/Register.php',
  data:$('#register').serialize(),
  success:function(response) {
    console.log(response);
  if(response=="success register")
  {
    login();
    alert("You have created an account!Now Log In. :)");
  }
  else 
  {
    alert("Wrong Details");
  }
  }
  });

 return false;
}
