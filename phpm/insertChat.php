
 <!DOCTYPE html>
<html>
<body>

<?php
//$con = new PDO('mysql:host=localhost;dbname=KACST;charset=utf8mb4', 'root', '');
/*if(isset($_POST['Enter_Name'])){
$Employee_Name=$_POST['Enter_Name'];
}
 if(isset($_POST['Enter_Message'])){
$Messages=$_POST['Enter_Message'];
}*/



$con=mysqli_connect('localhost','root','','KACST');
if(!$con){
	echo 'not counnect';}
	else 
	{
		echo"connect<br>";
	}
	if(!mysqli_select_db($con,'KACST')){
		echo'Database not select';}
		else {

					echo"connect<br>";

		}
//write querY 
/*if(isset($_POST['Employee_id'])){
$Employee_id=$_POST['Employee_id'];
echo $Employee_id."<br>";
}*/



/*$Employee_id=$_POST['Employee_id'];
$Employee_name=$_POST['Employee_name'];
$EXT=$_POST['EXT'];
$Brief_job_description=$_POST['Brief_job_description'];
$User_name=$_POST['User_name'];
$Password=$_POST['Password'];
$Order_id=$_POST['Order_id'];
$Department_id=$_POST['Department_id'];*/


//echo $Employee_name." :  ext<br>";

//echo $message."<br>";

if(isset($_POST['submit'])){ $Employee_Name = $_POST['Enter_Name']; $Messages = $_POST['Enter_Message']; 
$queryAdd = "INSERT INTO chat (Employee_Name,Messages) VALUES ('$Employee_Name','$Messages')"; } 







//$queryAdd ='INSERT INTO  chat SET Employee_Name="'.$Employee_Name.'",  Messages="'.$Messages.'" ';
//$queryAdd ='INSERT INTO Employee (Employee_id, Employee_name, EXT, Brief_job_description, Username1, Password, Order_id, Department_id) //VALUES ("$Employee_id","$Employee_name","$EXT","$Brief_job_description","$User_name","$Password","$Order_id","$Department_id")';


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
header("location:addChat.php");
exit();
?>
</body>
</html>