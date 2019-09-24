<?php
$con=mysqli_connect('localhost','root','','Kacst');

  if(!mysqli_select_db($con,'Kacst')){
    

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

<title>update employee data</title>
<style type="text/css">
  


/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 91%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}



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
  width: 30%;
  font-size: 18px;
  border-radius: 20px;
}
</style>
</head>
<body>

<table>
<tr>
  <th>product_id </th>
<th> productName </th>

  
    
</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM Product ");
$i=0;
while($row = mysqli_fetch_array($result)) {

?>
<tr >
<td><?php echo $row["ProductPR_id"]; ?></td>
<td><?php echo $row["Product_type"]; ?></td>





</tr>
<?php
$i++;
}
?> 

</table>
<?php

$query= "SELECT * FROM `Employees` where Employee_id= ".$_SESSION['Employee_id']."  ";
$res= mysqli_query($con, $query);
$i=0;

while($num = mysqli_fetch_array($res)){
 ?>

<form method="post"  action="Horder.php" class="form-container">
   
<br>
   <label ><b>employee name :</b></label>
    <input type="text" placeholder=" " name="Employee_name" value=" <?php echo $num["Employee_name"]; ?>" >
    <br>
    
     <label ><b>employee ID :</b></label>
    <input type="text" placeholder="" name="Employee_id"  value=" <?php echo $num["Employee_id"]; ?>" >

    <?php

$i++;
}
    ?>
    <br>
    <label ><b>product Id </b></label> <br>
    <input type="text" placeholder=" " name="Product_id" >

    <br>

    <label ><b>quntity:</b></label>
   <input type="number" name="Quantity" min="1" max="50" required>
<br>
   <br>
   <br> 
    <button onclick="myFunction()" type="submit" class="a" name="create">create </button>
  </div>
 
</form>
 
 
</body>
</html>
<script>
function myFunction() {
  alert("ADD YOUR PRODUCT SUCCESSFULLY!");
}
</script>
