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

if(isset($_POST['Department_name'])){
$Department_name=$_POST['Department_name'];
}


/*$Employee_id=$_POST['Employee_id'];
$Employee_name=$_POST['Employee_name'];
$EXT=$_POST['EXT'];
$Brief_job_description=$_POST['Brief_job_description'];
$User_name=$_POST['User_name'];
$Password=$_POST['Password'];
$Order_id=$_POST['Order_id'];
$Department_id=$_POST['Department_id'];*/


//echo $Department_name." :  ext<br>";








$queryAdd ='INSERT INTO  Department SET Dep_dID="'.$Dep_dID.'", Department_name="'.$Department_name.'"';
//$queryAdd ='INSERT INTO Employee (Employee_id, Employee_name, EXT, Brief_job_description, Username1, Password, Order_id, Department_id) //VALUES ("$Employee_id","$Employee_name","$EXT","$Brief_job_description","$User_name","$Password","$Order_id","$Department_id")';


if(mysqli_query($con,$queryAdd))
{
  echo(" <h1>  to Add the Departement</h1><br>");
}
else{
	echo(" <h1> error to  Added </h1><br>");
    //echo "Error: " . $queryAdd . "<br>" . $conn->error;
    echo $con->error;
}
	
	
mysqli_close($con);
header("location:Admin.php");
exit();
?>
</body>
</html>