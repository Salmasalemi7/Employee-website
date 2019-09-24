<?php 
session_start();
 $con=mysqli_connect('localhost','root','','KACST');

  if(!mysqli_select_db($con,'KACST'));

 


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


/*<!-- <a href="HRre.php"> list order</a>
<form action="" method="POST" name="HRr">
	
	HR ID : <input type="number" min="1" name="HR_id" 
	value="< ?php echo $row['HR_id'];?>">
	<br>
	<br>

Order ID : <input type="number" min="1" name="Order_id" 
 value="< ? php echo $row['Order_id'];?>"><br>
	<input type="submit" name=" enter">


</form>-->*/
//$_SESSION['Order_id'] = '35';
//$_SESSION['HR_id'] = '1';

//echo$_SESSION['Order_id'];
//echo $_SESSION['HR_id'];

 //if(count($_POST)>0) {
//" . $_POST['HR_id'] . "
echo $Order_id = $_POST['OrderId'];
echo $HR_id = $_POST['HRID'];

//echo  $_SESSION["Order_id"]  ".<br>";
//echo  $_SESSION["HR_id "]  ".<br>";
 //}else{

 	;
 //}
 //exit();
//mysqli_query($con,
//"UPDATE Korder  set HR_id=". $_SESSION['HR_id'] ."', orderSt='Assign'  WHERE  Order_id='". $_SESSION['Order_id'] ."' ");

//$result = mysqli_query($con,
//	"SELECT HR_id  FROM Korder WHERE Order_id='" . $_SESSION['Order_id'] . "'");
//$row= mysqli_fetch_array($result);

	
  	//}
// if ($_SESSION['HR_id']!=0) {
// header("location:HRre.php");
//}

?>