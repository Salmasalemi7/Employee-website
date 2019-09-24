<?php
$con=mysqli_connect('localhost','root','','KACST');

  if(!mysqli_select_db($con,'KACST')){
    

    }

 session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: newlogin.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>

<title>order data</title>
<style type="text/css">
  


table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 91%;
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
  background-color: green;
  color: white;
}
.a {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 15%;
  font-size: 18px;
  border-radius: 20px;
}
</style>
</head>
<body>
<table>
<tr>
  <th>Order ID </th>
<th> Product ID </th>
    
    <th> Employee ID  </th>
    <th> Quantity </th>
    <th> HR   </th>
    <th> Order State  </th>
    
    
     <th> Accpet or Reject </th>
</tr>
<?php


$result = mysqli_query($con,"SELECT * FROM Korder ");
$i=0;
while($row = mysqli_fetch_array($result)) {

?>
<tr class="">
<td> <?php echo $row["Order_id"]; ?></td>
<td><?php echo $row["Product_id"]; ?></td>

<td><?php echo $row["Employee_id"]; ?></td>
<td> <?php echo $row["Quantity"]; ?></td>
<td>  <?php echo $row["HR_id"]; 

?>
<form action="postHR1.php" method="post">

  <input type="hidden" name="Order_id" value="<?php echo $row["Order_id"];  ?> "> 
  
 

 <button >select</button>
</form>
  </td>



<td> <?php echo $row["orderSt"]; ?></td>




<td>
  <form action="accept1.php" method="post">

  <input type="hidden" name="Order_id" value="<?php echo $row["Order_id"];  ?> "> 
  
  statue :<br> <input type="radio" name="orderSt" value="accept" > Accept <br>

 <input type="radio" name="orderSt" value="reject" > Reject <br>
 <br>

 <button >select</button>
</form>
 
</td>




</tr>
<?php
$i++;
}
?>
</table>
<br>
<a href="HR.php" class="a"> back to home page</a>

</body>
</html>