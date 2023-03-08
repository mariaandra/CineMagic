<?php

session_start();
$emailid=$_POST['emailid'];
$password=$_POST['password'];

if(!empty($emailid) || !empty($password)){
   $host="localhost";
   $dbUsername="root";
   $dbPassword="";
   $dbName="bdcinemagic";

   $conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);

   if(mysqli_connect_error()){
      die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
   }else{
      $SELECT ="SELECT * From register Where emailid = '".$emailid ."' AND password= '".$password ."' Limit 1";
      
      $result = mysqli_query($conn, $SELECT);

        if (mysqli_num_rows($result)>0) {
            $row=$result->fetch_assoc();
            $_SESSION['loggedin']=true;
            $_SESSION['firstname']=$row['FirstName'];
            $_SESSION['lastname']=$row['LastName'];
            $_SESSION['email']=$row['EmailID'];
            $_SESSION['password']=$row['Password'];
            $_SESSION['username']=$row['FirstName']." ".$row['LastName'];

            if($emailid=="admin" && $password=="admin"){
               echo "admin";
            }
            else echo "success";
        } 
   }
} else {
   echo "<p>All field required</p>";
   die();
}

?>