// Get the modal
 var modalBraila = document.getElementById("modalBraila");
 var modalTulcea = document.getElementById("modalTulcea");
 var modalConstanta = document.getElementById("modalConstanta");

 // Get the button that opens the modal
 //it's the movie's image
 let judetTulcea=document.getElementById("Tulcea");
 let judetBraila=document.getElementById("Braila");
 let judetGalati=document.getElementById("Galati");
 let judetConstanta=document.getElementById("Constanta");

let closeConstanta=document.querySelector('#closeConstanta');
let closeBraila =document.querySelector('#closeBraila');
let closeTulcea =document.querySelector('#closeTulcea');
let closeGalati =document.querySelector('#closeGalati');
 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close")[0];
 
 // When the user clicks on the button, open the modal
 judetTulcea.onclick = function() {
   modalTulcea.style.display = "block";
 }

 judetBraila.onclick = function() {
    modalBraila.style.display = "block";
}

judetGalati.onclick = function() {
  modalGalati.style.display = "block";
}

judetConstanta.onclick = function() {
    modalConstanta.style.display = "block";
}
 
 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
   if (event.target == modalBraila) {
     modalBraila.style.display = "none";
   }
   if (event.target == modalConstanta){
     modalConstanta.style.display = "none";
   }
   if (event.target == modalTulcea){
    modalTulcea.style.display = "none";
  }
  if (event.target == modalGalati){
    modalGalati.style.display = "none";
  }
 } 

 // When the user clicks on <span> (x), close the modal
 closeBraila.onclick = function() {
  if(modalBraila.style.display==="block"){
    modalBraila.style.display = "none";
}
}

closeConstanta.onclick = function() {
    if(modalConstanta.style.display==="block"){
        modalConstanta.style.display="none";
    }
}

closeTulcea.onclick = function() {
  if(modalTulcea.style.display==="block"){
    modalTulcea.style.display="none";
  }
}

closeGalati.onclick = function() {
  if(modalGalati.style.display==="block"){
    modalGalati.style.display="none";
  }
}