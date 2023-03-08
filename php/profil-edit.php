<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>CineMagic</title>
    <link rel="stylesheet" href="../css/profil.css">
    <link rel = "icon" href = "../Movie icons/logo.png" type = "image/x-icon">
</head>

<body>
        <a href="../php/mainLogged.php" class="logo">
            <i class='bx bx-movie-play'></i>CineMagic
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>
    <center>
        <div class="box">

            <?php
            session_start();
           
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                // echo '<a href="profil-edit.html" class="btn">'.$_SESSION['username'].'</a>';
                echo '<form id="editForm" method="post" onsubmit="return EditProfile();">';
                echo '<img src="../Movie icons/profilpic.png" alt="">';
                echo '<input type="text" id="first" placeholder=\''.$_SESSION['firstname'].'\' name="firstname">';
                echo '<input type="text" id="last" placeholder=\''.$_SESSION['lastname'].'\' name="lastname" >';
                echo '<input type="email" id="email" placeholder=\''.$_SESSION['email'].'\' name="emailid" >';
                echo '<input type="password" id="pass" placeholder=\''.$_SESSION['password'].'\' name="password" >';
                echo '<button onclick="window.location.href=\'../php/mainLogged.php\'">Cancel</button>';
                echo '<button type="submit" id="donebtn">Done</button>';
                echo '</form>';
            }
            ?>
        </div>
    </center>
    <script src="../js/profil-edit.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
</body>
</html>