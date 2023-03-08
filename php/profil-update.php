<?php

session_start();
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];

$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="bdcinemagic";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}else{
    if($emailid=="admin" || $password=="admin"){
        echo "no admin";
    }
    else{
    if(!empty($firstname)){ 
        $UPDATE ="UPDATE register SET FirstName='".$firstname."' WHERE EmailID='".$_SESSION['email']."'";
        $_SESSION['firstname']=$firstname;
    }
    if( !empty($lastname)){
        $UPDATE ="UPDATE register SET LastName='".$lastname."' WHERE EmailID='".$_SESSION['email']."'";
        $_SESSION['lastname']=$lastname;
    }
    if(!empty($emailid)){
        $UPDATE ="UPDATE register SET EmailID='".$emailid."' WHERE EmailID='".$_SESSION['email']."'";
        $_SESSION['email']=$emailid;
    } 
    if(!empty($password)){
        $UPDATE ="UPDATE register SET Password='".$password."' WHERE EmailID='".$_SESSION['email']."'";
        $_SESSION['password']=$password;
    } 

    $result = mysqli_query($conn, $UPDATE);

    if ($result !== false) {
        $_SESSION['username']=$_SESSION['firstname']." ".$_SESSION['lastname'];
        echo "success update";
    } else {
        echo "</p>Error!</p>\n";
    }
    }
}
?>
