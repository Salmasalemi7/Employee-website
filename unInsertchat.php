<?php  ?>

<!DOCTYPE html>
<html>
<body>

<?php




$con=mysqli_connect('localhost','root','','KACST');
if(!$con){
	echo 'not counnect';}
	
	if(!mysqli_select_db($con,'KACST')){
		echo'Database not select';}
		
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: newlogin.php");
    exit;
}


if(isset($_POST['frome'])){
$frome=$_POST['frome'];
}
if(isset($_POST['toe'])){
$toe=$_POST['toe'];
}
if(isset($_POST['Enter_Message'])){
$Enter_Message=$_POST['Enter_Message'];
}



	
$queryAdd='INSERT INTO Chatroom  ( frome ,toe  ,Chatroom ) values( "'.$frome.'", "'.$toe .'","'.$Enter_Message .'") ';




if(mysqli_query($con,$queryAdd))
{
  echo(" <h1>  to Add the message</h1><br>");
}
else{
	echo(" <h1> error to  Added </h1><br>");
    //echo "Error: " . $queryAdd . "<br>" . $conn->error;
    echo $con->error;
}
	
	
mysqli_close($con);
header("location:un1Index.php");
exit();
?>
</body>
</html>
