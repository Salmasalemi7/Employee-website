<?php 

 $con=mysqli_connect('localhost','root','','KACST');

  if(!mysqli_select_db($con,'KACST'));

 
 session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: newlogin.php");
    exit;
}


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

//$query= "SELECT * FROM `Korder` where employeeId= ".$_SESSION['employeeId']."  ";
//$res= mysqli_query($con, $query);


if(isset($_POST['Order_id'])){
	$Order_id=$_POST['Order_id'];
}

mysqli_query($con,
	"UPDATE Korder  set HR_id='" .$_SESSION['Employee_id']. "' where Order_id= ".$Order_id." ");

header("location:HRre1.php");




?>