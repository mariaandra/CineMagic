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
    $INSERT ="INSERT INTO favorite (EmailID, NumeFilm) VALUES ('" . $_SESSION['email'] . "','" .  $_POST['title'] ."')";
    $SELECT="SELECT * FROM favorite WHERE EmailID='".$_SESSION['email'] ."' AND NumeFilm='".$_POST['title']."'";
    $result = mysqli_query($conn, $SELECT);

    if (mysqli_num_rows($result)>0) {
        $DELETE="DELETE FROM favorite WHERE EmailID='".$_SESSION['email'] ."' AND NumeFilm='".$_POST['title']."'";
        $result = mysqli_query($conn, $DELETE);
        if ($result !== false) {
            echo "success remove";
        } else {
            echo "</p>Error!</p>\n";
        }
    } 
    else {
        $result = mysqli_query($conn, $INSERT);
        if ($result !== false) {
            echo "success added";
        } else {
            echo "</p>Error!</p>\n";
        }
    }
   }
?>