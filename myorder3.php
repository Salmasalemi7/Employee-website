<?php 
   //New 
$con=mysqli_connect('localhost','root','','KACST');

  if(!mysqli_select_db($con,'KACST')){
    

    }


?>
<!DOCTYPE html>
<html>
<head>

<title>SHOW EMPLOYEE ORDER</title>
<style type="text/css">
  


table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 91%;
}

table td,  th {
  border: 1px solid #ddd;
  padding:8px;
}

table {background-color: #f2f2f2;}

table tr:hover {background-color: lightgrey;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: lightgreen;
  color: black;
}


</style>
</head>
<body>
<table>
<tr>
  <th>Order ID </th>
<th> Product ID </th>

    <th>Employee ID  </th>
    <th>Employee Name </th>
    <th>Order Status </th>
</tr>
<?php

$query = "SELECT * FROM Korder WHERE Employee_id = '4'";//You don't need a ; like you do in SQL
$result = mysqli_query($con , $query );
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['Order_id'] . "</td><td>" . $row['Product_id'] ."</td><td>". $row['Employee_id'] ."</td><td>". $row['Employee_name'] ."</td><td>". $row['orderSt']."</td>";



}
mysqli_close($con);
?>
</table>
<a href="myprofile3.php">GO BACK</a> /
<a href="HR.php">HOME</a>
</body>
</html>


