<?php
session_start();
$conn = mysqli_connect("localhost","root","","KACST");
	
$message="";
if(!empty($_POST["login"])) {
	$result = mysqli_query($conn,"SELECT * FROM Employees WHERE User_name='" . $_POST["User_name"] . "' and Password = '". $_POST["Password"]."'");
	$row = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["Employee_id"] = $row['Employee_id'];
	} else {
	$message = "Invalid Username or Password!";
	}
}
?>

