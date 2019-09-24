

<!DOCTYPE html>
<html>
<body>

<?php
//$con = new PDO('mysql:host=localhost;dbname=KACST;charset=utf8mb4', 'root', '');




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
if(isset($_POST['name'])){
$name=$_POST['name'];
}
if(isset($_POST['message'])){
$message=$_POST['message'];
}

//$testvar = $name;


$queryAdd ='INSERT INTO  Chatroom SET  message ="'.$message.'"';
//$queryAdd ='INSERT INTO Employee (Employee_id, Employee_name, EXT, Brief_job_description, Username1, Password, Order_id, Department_id) //VALUES ("$Employee_id","$Employee_name","$EXT","$Brief_job_description","$User_name","$Password","$Order_id","$Department_id")';


if($run = mysqli_query($con,$queryAdd))
{
  echo(" <h1>  good</h1><br>");
}
else{
	echo(" <h1> error  </h1><br>");
    //echo "Error: " . $queryAdd . "<br>" . $conn->error;
    echo $con->error;
}
	
	
mysqli_close($con);
header("location:AfterQ1.php");

exit();
?>
</body>
</html>