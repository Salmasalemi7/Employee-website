   
 <?php
 //$Order_id =$_REQUEST['Order_id'];
$con=mysqli_connect('localhost','root','','KACST');

	if(!mysqli_select_db($con,'KACST')){
		

		}
	
$sql = "DELETE FROM Korder WHERE Order_id='$Order_id'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: ";
}
mysqli_close($con);

	//header("location:showorderHr.php");
?>
<html>
<head>

</head>
<body>


</body>
</html>
            
