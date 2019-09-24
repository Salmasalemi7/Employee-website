
<?php 

$con=mysql_connect("localhost","root","","KACST");

if(isset($_POST['LoginChat'])){
	$User_name=$_POST['User_name'];
	$password=$_POST['password'];
	$q='SELECT * FROM 'User_name' Where 'User_name'="'.$User_name.'"and 
	'password'=" '.$password.'" ';

	$r=mysql_query($con,$q);
	if(mysql_num_rows($r)>0){
		$_SESSION['User_name']=$User_name;
		header("location:message.php");
	}else{
		echo "you password and user do not match ";
	}











	if ($User_name !="" and $password != "") {

		$q="INSERT INTO ' Employee' ('User_name','password') 
		VALUES ('','".$User_name."', '".$password."')" ;
		if(mysqli_query($con,$q)){
			echo "you are successfully login to chat";
			

		}else{
			echo $q;
		}


	}else {
		echo "please fill all the boxes";*/
	}



 ?>

