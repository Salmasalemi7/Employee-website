<?php // my order :salma .
$con=mysqli_connect('localhost','root','','KACST');

  if(!mysqli_select_db($con,'KACST')){
    

    }


?>
<!DOCTYPE html>
<html>
<head>

<title>message</title>
<style type="text/css">
  


table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align:center;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}

a:link, a:visited {
  background-color: lightblue;
  color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-top: 10px;
  margin-right: 30px;
  margin-left: 38%;
   border-radius:18px;
}

a:hover, a:active {
  background-color: lightgreen;
}
#box{
  width: 80px;
  margin-left: 40%;
}
</style>
</head>
<body>
<table>
<tr>
   <th>Order id </th>
   <th> Product name </th>
    <th> order Status </th>
    
</tr>
<?php


$result = mysqli_query($con,"SELECT * FROM Korder WHERE Employee_id = '5' ");
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["Order_id"]; ?></td>
<td><?php echo $row["Product_type"]; ?></td>
<td><?php echo $row["orderSt"]; ?></td>


</tr>
<?php
} ?>
<?php
$i++;

?>

</table>


</body>
</html>