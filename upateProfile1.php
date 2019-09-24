 <?php
$con=mysqli_connect('localhost','root','','KACST');

	if(!mysqli_select_db($con,'KACST')){
		

		}


?>
<!DOCTYPE html>
<html>
<head>

<title>Update employee data</title>
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
  margin-left: 200px;
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
	
    <th>Employee name </th>
    
    <th>Brife job description </th>
    <th>User name  </th>
   <th>password  </th>

     <th>Update </th>
</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM  Employees WHERE Employee_name='najwa'");
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">

<td><?php echo $row["Employee_name"]; ?></td>

<td><?php echo $row["Brief_job_description"]; ?></td>
<td><?php echo $row["User_name"]; ?></td>
<td><?php echo $row["Password"]; ?></td>

<td><a href="updateMyProfile.1.php?Employee_name=<?php echo $row["Employee_name"]; ?>">Update</a>

</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>