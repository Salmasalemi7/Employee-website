  
  <?php
  
   

 $con=mysqli_connect('localhost','root','','KACST');

  if(!mysqli_select_db($con,'KACST')); 
  {}
session_start();

 


 if(isset($_POST['Order_id'])){
	$Order_id=$_POST['Order_id'];
}
if(isset($_POST['orderSt'])){
	$HRr=$_POST['orderSt'];
}

mysqli_query($con,
	"UPDATE Korder  set orderSt='" .$HRr. "' where Order_id= ".$Order_id."  ");

header("location:HRre1.php");

	
  	

  ?>
