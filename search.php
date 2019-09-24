
 
<!DOCTYPE html >
<html>
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

table tr:hover {background-color: lightblue;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: green;
  color: white;
}
</style>
</head>
<body>

<?php
$con=mysqli_connect('localhost','root','','KACST');

	if(!mysqli_select_db($con,'KACST')){
		

		}

   
    if(isset($_GET['query'])){

$query=$_GET['query'];
}
   
 $search_value=$_GET["search"];

    
        $sql="select Employee_name,Department_name from Employees where Employee_name like '%$search_value%'";

        $res=$con->query($sql) ;
echo "<table>"; // start a table tag in the HTML
echo "<tr>
    <th>employee name </th>
    <th>department </th>
   


  </tr>";
        while($row=$res->fetch_assoc()){
           // echo 'Employee Name:  '.$row["employeeName"];
            echo "<tr><td>" . $row['Employee_name'] ."<td> ".$row['Department_name'] . "</td></tr>"; 


                  

        }

mysqli_close($con);
            
       
  




?> </body>
</html>



<!--
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <title> KACST</title>

<style type="text/css">
  </style>
</head>
</body>
<div id="Search">
  <h2> Find Employee </h2>
<form action="search.php">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by name.."  >
<?php

/*

$con=mysqli_connect('localhost','root','','Kacst');
if(!$con){
	echo 'not counnect';}
	
	
	if(!mysqli_select_db($con,'Kacst')){
		echo'Database not select';}
		

		

 
if(isset($_GET['name'])){

$employeeName=$_GET['name'];
}

	


$queryAdd ="SELECT * FROM employee ";
$result = mysqli_query($con , $queryAdd);

echo "<table>"; // start a table tag in the HTML

while($row = mysqli_fetch_array( $result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['depatment'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table >"; //Close the table in HTML
echo "
  <tr >
    <th >Name</th>
    <th>Department</th>
  </tr>";
	
mysqli_close($con);
//header("location:admin.html");

exit();



?>
*/


