<?php



$con=mysqli_connect('localhost','root','','KACST');
if(!$con){
	echo 'not counnect';}
	
	if(!mysqli_select_db($con,'KACST')){
		echo'Database not select';}
		
if(isset($_POST['Product_id'])){

$Product_id=$_POST['Product_id'];
}
if(isset($_POST['Employee_id'])){
$Employee_id=$_POST['Employee_id'];
}
if(isset($_POST['Employee_name'])){
$Employee_name=$_POST['Employee_name'];
}
if(isset($_POST['Quantity'])){
$Quantity=$_POST['Quantity'];
}

$queryAdd ='INSERT INTO  Korder SET Product_id="'.$Product_id.'", Employee_id="'.$Employee_id.'", Employee_name ="'.$Employee_name.'",
												 Quantity ="'.$Quantity.'"';
//$
	
//$queryAdd='INSERT INTO Korder (Product_id ,Employee_id,Employee_name, Quantity) values( "'.$Product_id .'", "'.$Employee_id.'" ,"'.$Employee_name.'", "'.$Quantity.'") ';



//$queryAdd ='INSERT INTO  Korder ( order_id ,product_id ,employeeId  ,employeeName, quantity ,HR_id ,order_state) values 
//($product_id ,$employeeId, $employeeName , $product_quantity)';


if(mysqli_query($con,$queryAdd))
{
  echo(" <h1>  to Add the order</h1><br>");
}
else{
	echo(" <h1> error order Added </h1><br>");
    //echo "Error: " . $queryAdd . "<br>" . $conn->error;
    echo $con->error;
}
	
	
mysqli_close($con);
header("location:product2.php");

exit();


?>
