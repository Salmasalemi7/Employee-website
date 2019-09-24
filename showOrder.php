<?php 
// Old one 
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <title> KACST- Show EMPLOYEE ORDER</title>

<style type="text/css">
  


table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td,  th {
  border: 1px solid #ddd;
  padding: 8px;
}

table {background-color: #f2f2f2;}

table tr:hover {background-color: lightblue;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: lightgreen;
  color: black;
}

a:link, a:visited {
  background-color: lightblue;
  color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-top: 10px;
  margin-left: 10px;
   border-radius:18px;
}

a:hover, a:active {
  background-color: lightgreen;
}
</style> </head>
<body>
<?php

$con=mysqli_connect('localhost','root','','KACST');

	if(!mysqli_select_db($con,'KACST')){
		

		}


$query = "SELECT * FROM Korder"; //You don't need a ; like you do in SQL
$result = mysqli_query($con , $query );

echo "<table>"; // start a table tag in the HTML
echo "<tr>
     <th>Order ID </th>
    <th>Product ID </th>
    <th>Employee ID </th>
    <th>Employee Name </th> 
    <th>Quantity </th>
    <th>Email </th>

  </tr>";
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['Order_id'] . "</td><td>" . $row['Product_id'] ."</td><td>" . $row['Employee_id'] ."</td><td>". $row['Employee_name'] ."</td><td>". $row['Quantity']."</td><td>". $row['Email'] ."</td></tr>";}  //$row['index'] the index here is a field name}
 
echo "</table>"; //Close the table in HTML

mysqli_close($con); //Make sure to close out the database connection


?>

<!--<a href="HR.php">Go Back </a>-->
</body>
</html>