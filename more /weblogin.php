<!DOCTYPE html>
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="KACST";
$con= mysql_connect($servername, $username, $password, $dbname);
echo "connection";
if (isset($_POST['login'])) {

	if(isset($_POST['User_name'])){
	$User_name =e($_POST['User_name']);}


	$Password =$_POST['Password'];

	if(isset($_POST['role'])){
	$role =e($_POST['role']);}

	$query ='SELECT * FROM `Employees` WHERE User_name="'.$User_name.'"
	and Password = " '.$Password. ' " and role = " ' .$role.'"';
	$result = mysql_query($con,$query);
	if($result){
		while ($row=mysql_fetch_array($result)) {
			echo '<script type = " text/javascript">alert("you are login as '.$row['role'].')</script>';
		}
		if (mysql_num_rows($result)>0) {
			?>
			<script type="text/javascript">
				window.location.href="Admin.php"</script>
			<?php 
			}else if(mysql_num_rows($result)>=0){
				?>
				<script type="text/javascript">
				window.location.href="HR.php"</script>
				<?php  
			} else{
               ?>
               <script type="text/javascript">
				window.location.href="Employee.php"</script>
				<?php 
			}
			

		
		
	}else{
		echo "no result";
	}
}?>



 
<html>
<head>
	<title>login</title>
</head>
<body>

<form method="post">
	<table>
		<tr>
			<td>User name:<input type="text" name="user" placeholder="enter username"></td>
		</tr>
	<tr>
		<td>Password: <input type="text" name="Password" placeholder="emter your pass"></td>
	</tr>
	<tr>
		<td>
			Select your type:<select name="usertype">
				<option value="Admin">Admin</option>
				<option value="HR">HR</option>
				<option value="Employee">Employee</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="login" value="login">
		</td>
	</tr>
	</table>

</form>


</body>
</html>


