<?php
session_start();
unset($_SESSION["User_name"]);
unset($_SESSION["Password"]);
header("Location:Home_K.php");
?>