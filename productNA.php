<?php // new
$con=mysqli_connect('localhost','root','','KACST');

  if(!mysqli_select_db($con,'KACST')){
    

    }


?>
<!DOCTYPE html>
<html>
<head>

<title>SHOW PRODUCT</title>
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
  <th>product ID </th>
<th> product Name </th>
    <th>quantity  </th>
    <th>send order </th>
</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM Product");
$i=0;
while($row = mysqli_fetch_array($result)) {

?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["ProductPR_id"]; ?></td>
<td><?php echo $row["Product_type"]; ?></td>

<td> <input id="box" type="number" name="quantity" min="1" max="5"> </td>


<td><a href="#..php?ProductPR_id=<?php echo $row["ProductPR_id"]; ?>">Request</a></td>
</tr>
<?php
$i++;
}
?>

</table>


</body>
</html>