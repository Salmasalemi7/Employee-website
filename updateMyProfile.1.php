<?php
$con=mysqli_connect('localhost','root','','KACST');

	if(!mysqli_select_db($con,'KACST')){
		

		}

if(count($_POST)>0) {
mysqli_query($con,"UPDATE Employees set Employee_name='" . $_POST['Employee_name'] . "', EXT='" . $_POST['EXT'] . "', 	Brief_job_description='" . $_POST['Brief_job_description'] . "', User_name='" . $_POST['User_name'] . "' ,Password='" . $_POST['Password'] . "' ,Department_name='" . $_POST['Department_name']."' WHERE Employee_id='" . $_POST['Employee_id'] . "'");
$message = "<h1>Record Modified Successfully :)</h1>";
}
$result = mysqli_query($con,"SELECT * FROM Employees WHERE Employee_name='" . $_GET['Employee_name'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>


<title>Update Employee Data</title>
<style type="text/css">

input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left: 30px;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid blue;
  text-align:center; 
}
.button {
  background-color: lightblue;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin-left: 70px;
}
.button:hover{background-color: lightgreen;}

a:link, a:visited {
  background-color: lightblue;
  color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-left: 40px;
}

a:hover, a:active {
  background-color: lightgreen;
}

form{margin-left: 360px;}

</style>
</head>
<body>
<form name="frmUser" method="post" action="" >
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">

</div><br><br>
Employee Name: <br>
<input type="hidden" name="Employee_id" class="txtField" value="<?php echo $row['Employee_id']; ?>">
<input type="text" name="Employee_name"  value="<?php echo $row['Employee_name']; ?>">
<br>
EXT: <br>
<input type="text" name="EXT" class="txtField" value="<?php echo $row['EXT']; ?>">
<br>
BrifeJobDescription :<br>
<input type="text" name="Brief_job_description" class="txtField" value="<?php echo $row['Brief_job_description']; ?>">
<br>
UserName:<br>
<input type="text" name="User_name" class="txtField" value="<?php echo $row['User_name']; ?>">
<br>
Password:<br>
<input type="text" name="Password" class="txtField" value="<?php echo $row['Password']; ?>">
<br>
DepartmentName:<br>
<input type="text" name="Department_name" class="txtField" value="<?php echo $row['Department_name']; ?>">
<br>
<a href="Employee.php" > Go Back Page </a>
<input type="submit" name="submit" value="Submit" class="button">
<!--<a href="myprofile1.php" > Go Back To Profile </a>-->


</form>
</body>
</html>