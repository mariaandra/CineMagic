<?php
    session_start();
    unset($_SESSION['email']);
    echo "logged out";
?>