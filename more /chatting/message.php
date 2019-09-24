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
			width: 440px;
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

<!--
<?php 
session_start();
if(isset($_SESSION['User_name'])){
echo "WELCOM  ".$_SESSION['User_name'] ;
echo '<a href="#"> logout </a>';
}else{
	header("location:#");
}

 ?>-->

 <div id="main">
 	<div id="messageArea">
 		
 	</div>
 	<form method="POST">
 		<input type="text" name="message" style="width: 500px;" placeholder="Type of message"> 
 		<input type="submit" name="submit" value="message"> 
 	</form>
 </div>
</body>
</html>