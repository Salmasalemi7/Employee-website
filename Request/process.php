<?php 
session_start();
$con = mysql_connect('localhost','root','','KACST');

if (!$con) {
	die('please check conn'.mysql_error());
}
//requird_once('conection.php');

if (isset($_POST['login'])) {

$User_name=$_POST['User_name'];
$Password=$_POST['Password'];
//echo $User_name;
//echo $Password;
$query=mysql_query("select Employee_id form Employees where User_name='$User_name' and Password='$Password' limit 1");

if(mysql_num_rows($query)==1) {

	$data=mysql_fetch_array($query,1);
	$_SESSION['Employee_id']=$data['Employee_id'];
	header("location:wel.php");
}else{
	$error="wrong";
}
}

	
	/*if (empty($_POST['User_name'])|| empty($_POST['Password'])) {
		header("location:newlogin.php?Empty=Please fill blanks");

	}
	else{

		$query="SELECT * FROM Employees WHERE User_name='".$_POST['User_name']."' AND Password='".$_POST['Password']."'";
		$result=mysql_query($con,$query);
		if (mysql_fetch_assoc($result)) {
			$_SESSION['User']=$_POST['User_name'];
	
			header("location:wel.php");
		}
         else{
         	header("location:newlogin.php?Invaild=Enter correct info");
         }
	}*/
//}

/*else{
	echo "Not working";
}*/







 ?>


