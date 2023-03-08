<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];
$confpassword=$_POST['confpassword'];

if(!empty($firstname) || !empty($lastname) || !empty($emailid) || !empty($password) || !empty($confpassword)){
   $host="localhost";
   $dbUsername="root";
   $dbPassword="";
   $dbName="bdcinemagic";

   $conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);

   if(mysqli_connect_error()){
      die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
   }else{
      if($password===$confpassword){
      $SELECT ="SELECT emailid From register Where emailid = ? Limit 1";
      $INSERT ="INSERT INTO register (FirstName, LastName,EmailID, Password) VALUES ('" . $firstname . "','" . $lastname . "','" . $emailid . "','" . $password ."')";
      
      $result = mysqli_query($conn, $INSERT);

        if ($result !== false) {
            echo "success register";
        } else {
            echo "</p>Error!</p>\n";
        }
      }
      else{
         echo "<p>Password and Confirm password are not the same</p>";
      }
   }
}else {
   echo "<p>All field required</p>";
   die();
}

?>