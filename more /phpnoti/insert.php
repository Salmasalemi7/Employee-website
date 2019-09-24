<?php 
//insert.php
if(isset($_POST["name"]))
{
 $con = mysqli_connect("localhost", "root", "", "KACST");
 $name = mysqli_real_escape_string($con, $_POST["name"]);
 $textt = mysqli_real_escape_string($con, $_POST["textt"]);
 $query = "
 INSERT INTO search_(name,textt)
 VALUES ('$name', '$textt')
 ";
 mysqli_query($con, $query);
}
echo $name;
echo$textt;
?>