

<?php
$con=mysqli_connect('localhost','root','','KACST');

	if(!mysqli_select_db($con,'KACST')){
		

		}
	
$sql = "DELETE FROM Employees WHERE Employee_name='" . $_GET["Employee_name"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    //header("location:update.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($con);

	
?>
<html>
<head>

</head>
<body>

<a href="update.php"><button  > go back </button></a>
</body>
</html>
