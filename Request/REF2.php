

<?php //NOTHING
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "KACST";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM Korder WHERE Order_id= $Order_id ";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

 <?php
         if(isset($_POST['delete'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = 'KACST';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $Order_id = $_POST['Order_id'];
            
            $sql = "DELETE FROM Korder WHERE Order_id = $Order_id" ;
            mysql_select_db('KACST');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }else{
            
            echo "Deleted data successfully\n";}
            
            mysql_close($conn);
            ?>



<?php
$con=mysqli_connect('localhost','root','','KACST');

	if(!mysqli_select_db($con,'KACST')){
		

		}

$sql = "DELETE FROM Korder WHERE Order_id='". $_GET["Order_id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
//header("location:showorderHr.php");
mysqli_close($con);

	
?>