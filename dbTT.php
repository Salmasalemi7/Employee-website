

 <?php
 
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "KACST";
 //echo "error<br>";
$con = new mysqli($host, $user, $pass, $db_name);

if(isset($_POST['submit'])){ $name = $_POST['name']; $message = $_POST['enter_message']; $query = "INSERT INTO Chatroom (name,message) VALUES ('$name','$message')"; $run = $con->query($query); } 


 
?>

