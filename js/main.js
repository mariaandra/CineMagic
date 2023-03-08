let header = document.querySelector('header');
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
  header.classList.toggle('shadow',window.scrollY > 0);
} );


var swiper = new Swiper(".home", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var swiper = new Swiper(".coming-container", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
      delay: 55000,
      disableOnInteraction: false,
    },
    centeredSlides:true,
    breakpoints:{
      0:{
        slidesPerView:2,
      },
      568:{
        slidesPerView:3,
      },
      768:{
        slidesPerView:4,
      },
      968:{
        slidesPerView:5,
      },
    },
  });

  // Get the modal
var modal = document.getElementById("modal");
var modal2 = document.getElementById("modal2");
var modal3 = document.getElementById("modal3");
var modal4 = document.getElementById("modal4");
var modal5 = document.getElementById("modal5");
var modal6 = document.getElementById("modal6");
var modal7 = document.getElementById("modal7");

// Get the button that opens the modal
//it's the movie's image
var btn = document.getElementById("img1");
var btn2 = document.getElementById("img2");
var btn3 = document.getElementById("img3");
var btn4 = document.getElementById("img4");
var btn5 = document.getElementById("img5");
var btn6 = document.getElementById("img6");
var btn7 = document.getElementById("img7");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

btn2.onclick = function() {
  modal2.style.display = "block";
}

btn3.onclick = function() {
  modal3.style.display = "block";
}

btn4.onclick = function() {
  modal4.style.display = "block";
}

btn5.onclick = function() {
  modal5.style.display = "block";
}

btn6.onclick = function() {
  modal6.style.display = "block";
}

btn7.onclick = function() {
  modal7.style.display = "block";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
  if (event.target == modal5) {
    modal5.style.display = "none";
  }
  if (event.target == modal6) {
    modal6.style.display = "none";
  }
  if (event.target == modal7) {
    modal7.style.display = "none";
  }
} 

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

menu.onclick = () => {
  menu.classList.toggle('bx-x');
  navbar.classList.toggle('active');
  modal.style.display = "none";
  modal2.style.display = "none";
  modal3.style.display = "none";
  modal4.style.display = "none";
  modal5.style.display = "none";
  modal6.style.display = "none";
  modal7.style.display = "none";
}

window.onscroll = () => {
  menu.classList.remove('bx-x');
  navbar.classList.remove('active');
  modal.style.display = "none";
  modal2.style.display = "none";
  modal3.style.display = "none";
  modal4.style.display = "none";
  modal5.style.display = "none";
  modal6.style.display = "none";
  modal7.style.display = "none";
}

function myFunction() {
  alert("Please log in first!");
}

//document.getElementById("logoutbtn").addEventListener("click", LogOut);

function LogOut() {
  var btn=document.querySelector('#logoutbtn');
  $.ajax({
    type:'post',
    url:'../php/logout.php',
    data:{id:$(btn).val()},
    success:function(response) {
      console.log(response);
    if(response=="logged out")
    {
      window.location.href="../html/LogRegister.html";
    }
    else 
    {
      alert("Wrong Update");
    }
    }
    });
  
   return false;
}