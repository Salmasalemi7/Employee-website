

<?php // Nothing ..
session_start();
$con=mysqli_connect('localhost','root','','KACST');

  if(!mysqli_select_db($con,'KACST')){
    }
    if(isset($_POST['submit'])){ $Product_id = $_POST['Product_id']; $Employee_name = $_POST['Employee_name']; $orderSt = $_POST['orderSt'];
$queryAdd = "INSERT INTO  Korder (Product_id,Employee_name,orderSt) VALUES ('$Product_id','$Employee_name','orderSt')"; } 
if(mysqli_query($con,$queryAdd))
{
  echo(" <h1>  to Add the message</h1><br>");
}
else{
	echo(" <h1> error to  Added </h1><br>");
}
header("location:summary.php")
?>
