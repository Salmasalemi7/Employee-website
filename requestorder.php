

<?php //old

if(isset($_POST['Product_ID'])){
 $Product_id=$_POST['Product_ID'];
}else{

echo "else<br>";


}
if(isset($_POST['Emplyee_ID'])){
$Employee_id=$_POST['Emplyee_ID'];
}
 if(isset($_POST['Employee_Name'])){
$Employee_name=$_POST['Employee_Name'];
}
if(isset($_POST['Quantity'])){
 $QuantityS=$_POST['Quantity'];
}
if(isset($_POST['Email'])){
$Email=$_POST['Email'];
}
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




/*$Employee_id=$_POST['Employee_id'];
$Employee_name=$_POST['Employee_name'];
$EXT=$_POST['EXT'];
$Brief_job_description=$_POST['Brief_job_description'];
$User_name=$_POST['User_name'];
$Password=$_POST['Password'];
$Order_id=$_POST['Order_id'];
$Department_id=$_POST['Department_id'];*/

/*
echo $Product_id." :ext<br>";
echo $Employee_id."<br>";
echo $Employee_name."<br>";
echo $Quantity."<br>";
echo $Email."<br>";*/







$queryAdd ='INSERT INTO  Korder SET Product_id="'.$Product_id.'", Employee_id="'.$Employee_id.'", Employee_name ="'.$Employee_name.'",
												 Quantity ="'.$QuantityS.'", Email="'.$Email.'" ';
//$queryAdd ='INSERT INTO Employee (Employee_id, Employee_name, EXT, Brief_job_description, Username1, Password, Order_id, Department_id) //VALUES ("$Employee_id","$Employee_name","$EXT","$Brief_job_description","$User_name","$Password","$Order_id","$Department_id")';


if(mysqli_query($con,$queryAdd))
{
  echo(" <h1>  to Add the order</h1><br>");
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
