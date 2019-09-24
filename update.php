<?php 
$con=mysqli_connect('localhost','root','','KACST');

	if(!mysqli_select_db($con,'KACST')){
		

		}


?>
<!DOCTYPE html>
<html>
<head>

<title>Update employee data</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
button{
  background-color: lightblue;
  color: black;
  padding: 14px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-left: 10px;
   border-radius:18px;
   margin-top: 10px;
}

</style>
</head>
<body>
<table>
<tr>
	<th>Employee ID </th>
    <th>Employee name </th>
    <th>EXT </th>
    <th>Brife job description </th>
    <th>User name  </th>
    <th>Passward </th>
    <th>Department </th>
     <th>Update or delete </th>
</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM  Employees");
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["Employee_id"]; ?></td>
<td><?php echo $row["Employee_name"]; ?></td>
<td><?php echo $row["EXT"]; ?></td>
<td><?php echo $row["Brief_job_description"]; ?></td>
<td><?php echo $row["User_name"]; ?></td>
<td><?php echo $row["Password"]; ?></td>
<td><?php echo $row["Department_name"]; ?></td>
<td><a href="updatEm.php?Employee_name=<?php echo $row["Employee_name"]; ?>">Update</a>
	<!--<button class="btn btn-danger btn-sm remove"><a href="delete.php?Employee_name=<?php //echo $row["Employee_name"]; ?>">delete</a></button>-->

<a href="delete.php?Employee_name=<?php echo $row["Employee_name"]; ?>">Delete</a></td>
</tr>

<?php
$i++;
}
?>
</table>
<button onclick="window.location.href = 'Admin.php';"><b>Go Back</b></button>
</body>
</html>

<!--<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: 'delete.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");  
               }
            });
        }
    });


</script>
