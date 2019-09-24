<?php 
//session is a way to store information (in variables) to be used across multiple pages.the information is not stored on the users computer.

session_start();//session_start function must be use in first thing in your document
unset($_SESSION["Username"]); // unset use to remove all session varibles
session_destroy();// to destroy funcation.
header("location:Home_K.html");

//To remove all global session variables and destroy the session, use session_unset  and session_destroy funcation.
 ?>