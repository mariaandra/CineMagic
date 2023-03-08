<?php
   $host="localhost";
   $dbUsername="root";
   $dbPassword="";
   $dbName="bdcinemagic";

   $conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);
   session_start();

   if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
   }else{
    $SELECT="SELECT * FROM favorite WHERE EmailID='".$_SESSION['email'] ."' AND NumeFilm='".$_POST['title']."'";
    $result = mysqli_query($conn, $SELECT);

    if (mysqli_num_rows($result)>0) {
        echo "true";
    } 
    else echo "false";
   }
?>