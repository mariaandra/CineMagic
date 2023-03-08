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