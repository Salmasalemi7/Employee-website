<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		#main{
			border: 1px solid black;
			width: 550px;
			height: 500px;
			margin: 24px auto;
		}
		#messageArea{
			width: 98%;
			border: 1px solid blue;
			height: 400px;
		}

	</style>
</head>
<body>


<?php 
session_start();
if(isset($_SESSION['User_name'])){
echo "WELCOM  ".$_SESSION['User_name'] ;
echo '<a href="#"> logout </a>';
}else{
	header("location:#");
}

?>
 


 <div id="main">
 	<div id="messageArea">

 		
 	</div>

 	<?php 
 	$q1="SELECT * FROM 'message_'";
 	$r1=mysql_query($con,$q1);
 	while ($row = mysql_fetch_assoc($r1)) {
 		$message= $row['message'];
 		$User_name=$row['User_name'];
 		echo '<h4 style="color:red">'.$User_name. '</h4>';
 		echo '<p>'.$message.'</p>';

 	}


 	if (isset($_POST['submit'])) {

 		$message=$_POST['message'];
 		$q="INSERT INTO ' message_' ('Id','message','User_name') 
		VALUES ('','".$message."', '".$_SESSION['User_name']."')" ;
		if(mysql_query($con,$q)){
			echo '<h4 style= "color:red">'.$_SESSION['User_name'].'<h4>';
			echo '<p>'.$message.'</p>';
		}

 	}


 	 ?>
 	<form method="POST">
 		<input type="text" name="message" style="width: 445px;" placeholder="Type of message"> 
 		<input type="submit" name="submit" value="message"> 
 	</form>
 </div>
</body>
</html>