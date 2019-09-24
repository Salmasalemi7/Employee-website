

 <?php // new
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
  text-align:right;
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
#a{
  margin-left: 20px;
}
</style>
</head>
<body>
  <a id="a" href="http://localhost/KACST/Admin.php">GO BACK</a> 
  <a id="a" href="http://localhost/KACST/phpm/index.php">SEND MESSAGE</a>
<table>
<tr>
   <th> </th>
   <th>  </th>
    <th>  </th>
    <th> </th>
    
</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM chat");
$i=0;

while($row = mysqli_fetch_array($result)) {

?>

<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["Employee_Name"]; ?></td>
<td><?php echo $row["Messages"]; ?></td>
<td><?php echo $row["time"]; ?></td>



<?php if ($row['Employee_Name']!== 'salma') {?>

<td><a href="index.php?Employee_Name=<?php echo $row["Employee_Name"]; ?>">Reply</a> </td>

</tr>

<?php
} ?>
<?php
$i++;
}
?>

</table>


</body>
</html>