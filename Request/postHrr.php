<?php 

 $con=mysqli_connect('localhost','root','','Kacst');

  if(!mysqli_select_db($con,'Kacst'));

 


    /*
      if(isset($_GET['HR_id'])){
$select=$_GET['HR_id'];
$sq=mysql_query("SELECT * from Korder");
$row=mysql_fetch_array($aq);
if (isset($_POST['HR_id'])) {
	$selecthr=$_POST['HR_id'];
	$proid=$_POST['order_id'];
$q1="UPDATE Korder SET HR_id='$selecthr'  where order_id='$proid'";
$res=mysql_query($q1) or die("erro")

*/

//mysqli_query($con,"SELECT * FROM Korder where order_id=$_GET['order_id'] ");

 // if($HR="0"){
//"INSERT INTO Korder ( order_id ,product_id ,employeeId  ,employeeName, quantity ,HR_id ,order_state) 
//VALUES ( '' , '' ,''  ,'', '' ,$HR_id ,'')";

//mysqli_query( $con,"INSERT into Korder (HR_id) values ( '' , '' ,''  ,'', '' ,$HR ,'') ";


//echo " selected";

?>
<a href="HRre.php"> list order</a>
<form action="" method="POST" name="HRr">
	
	HR ID : <input type="number" min="1" name="HR_id" 
	value="<?php echo $row['HR_id'];?>">
	<br>
	<br>

Order ID : <input type="number" min="1" name="order_id" 
 value="<?php echo $row['order_id'];?>"><br>
	<input type="submit" name=" enter">


</form>
<?php

 if(count($_POST)>0) {

 	
mysqli_query($con,
	"UPDATE Korder  set HR_id='" . $_POST['HR_id'] . "' where HR_id='0'  ");


$result = mysqli_query($con,
	"SELECT HR_id  FROM Korder WHERE order_id='" . $_POST['order_id'] . "'");
$row= mysqli_fetch_array($result);

	
  	}
 if ($_GET['HR_id']!=0) {
 header("location:HRre.php");
 }

?>