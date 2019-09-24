<?php  //Nothong

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
</tr></table></body></html>



<?php  
$query = "SELECT * FROM Korder WHERE orderSt = 'Submitted' ";
if (isset($_GET['orderSt'])) {
   if ($_GET['orderSt']== 'Accept') {
      $Product_id = $_GET['Product_id'];
     $sql= "UPDATE FROM Korder SET orderSt ='Accept' WHERE Product_id='$Product_id' ";
     $result = mysql_query($con,$sql);
     if ($result) {
    echo "<script>alert(Approve Success)</script>";
     }
   }

   if ($_GET['orderSt']== 'Rejected') {
      $Product_id = $_GET['Product_id'];
     $sql= "UPDATE FROM Korder SET orderSt ='Rejected' WHERE Product_id='$Product_id'";
     $result = mysql_query($con,$sql);
     if ($result) {

      echo "<script>alert(Rejected Success)</script>";
     }
   }
}
//header("location:showMyorder.php");

?>