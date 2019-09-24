<?php //New 
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

a:link, a:visited {
  background-color: lightblue;
  color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-top: 10px;
  margin-left: 40px;
    border-radius:18px;
}

a:hover, a:active {
  background-color: lightgreen;
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
    <th>Quantity </th>
    <th>Email </th>
    <th>... </th>
</tr>
<?php

$query = "SELECT * FROM Korder WHERE orderSt = 'Submitted' ORDER BY Order_id"; //You don't need a ; like you do in SQL
$result = mysqli_query($con , $query );

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['Order_id'] . "</td><td>" . $row['Product_id'] ."</td><td>" . $row['Employee_id'] ."</td><td>". $row['Employee_name'] ."</td><td>". $row['Quantity']."</td><td>". $row['Email'] ."</td>";

if (isset($_GET['action'])) {
   if ($_GET['action']== 'Approve') {
      $Product_id = $_GET['Order_id'];
     $sql= "UPDATE FROM Korder SET orderSt ='Approve' WHERE code='$Product_id'";
     $result = mysql_query($con,$sql);
     if ($result) {
      echo "<script>alert(Approve Success)</script>";
     }
   }

   if ($_GET['action']== 'Rejected') {
      $Product_id = $_GET['Order_id'];
     $sql= "UPDATE FROM Korder SET orderSt ='Rejected' WHERE code='$Product_id'";
     $result = mysql_query($con,$sql);
     if ($result) {
      echo "<script>alert(Rejected Success)</script>";
     }
   }

  
}
?>
<td><a href="Admin.php?<?php echo $row['code']; ?>">Accept</a>
<a href="Rejected.php?<?php echo $row['code']; ?>">Rejected</a></td>
</tr>
<?php
}
mysqli_close($con);
?>
</table>


</body>
</html>





if (isset($_POST['Accept'])) {
if ($_POST['Accept'] == 'Rejected') {
    $_SESSION['did_accept'] = true;
    header ('Location: http://www.yahoo.com');
    die('<a href="http://www.yahoo.com">Click here to continue</a>');
}
}