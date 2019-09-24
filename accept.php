  
  <?php //Approve page.
  
   session_start();

 $con=mysqli_connect('localhost','root','','KACST');

  if(!mysqli_select_db($con,'KACST'));

 


?>
<a href="HRre.php"> list order</a>
<form action="" method="POST" name="HRr">
	
	HR ID : <input type="number" min="1" name="HR_id" 
	value="<?php echo $row['HR_id'];?>">
	<br>
	<br>
order ID : <input type="number" min="1" name="Order_id" 
 value="<?php echo $row['Order_id'];?>">
	<br>
	
	<br>
 statue : <input type="radio" name="orderSt" value="accept" > Accept <br>
 <input type="radio" name="orderSt" value="pandid" > Pandid <br>
 <input type="radio" name="orderSt" value="reject" > Reject <br>
	<input type="submit" name=" enter">

</form>
<?php

 if(count($_POST)>0) {

 	
mysqli_query($con,"UPDATE Korder SET orderSt='". $_POST['orderSt'] ."'
	 where HR_id='". $_SESSION['HR_id'] ."' and Order_id='". $_POST['Order_id']."'");


$result = mysqli_query($con,"SELECT * FROM `Korder` where Order_id= ".$_SESSION['Order_id']."  ";
	//"SELECT HR_id  FROM Korder WHERE Order_id ='" . $_POST['Order_id'] . "'");
$row= mysqli_fetch_array($result);
if (isset($_POST['enter'])) {
	header("location:HRre.php");
}
	
  	}
/*

if("SELECT order_state from Korder where '" . $_POST['order_state'] ."'"=="accept"){

 $def1=mysqli_query($con,"SELECT 'product-quantity'  FROM product ");
 $def2=mysqli_query($con,"SELECT 'quantity'  FROM Korder ");
 $re=floor($def1-$def2);
 $hhh = mysqli_query($con,"INSERT into  product values 'product-quantity'='$re' " );

 }
	
	*/
  ?>