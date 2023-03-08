function EditProfile() {
  $.ajax({
    type:'post',
    url:'../php/profil-update.php',
    data:$('#editForm').serialize(),
    success:function(response) {
      console.log(response);
    if(response=="success update")
    {
      alert("You updated your profile data :)");
      window.location.href="../php/mainLogged.php";
    }
    else if(response=="no admin"){
      alert("You don't have permission for this name or password");
    }
    else 
    {
      alert("Wrong Update");
    }
    }
    });
  
   return false;
}