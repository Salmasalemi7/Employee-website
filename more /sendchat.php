<?php 

inclued("Testchat2.php");// ./Testchat2.php << mybe

$uname = $_POST['uname'];
$unmessage = $_POST['unmessage'];

//$query = "INSERT INTO chat_room(name,message) VALUES('$uname','$unmessage')";

$query = 'INSERT INTO   Chatroom SET name = "'.$uname.'",message = "'.$unmessage.'" ';


$run = mysql_query($con,$query);
echo "name";
echo "message";

 ?>