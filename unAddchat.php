
<?php  ?>

<?php // new
$con=mysqli_connect('localhost','root','','KACST');

  if(!mysqli_select_db($con,'KACST')){
    

    }

session_start();

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

a:link, a:visited  {
  background-color: black;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-top: 10px;
  margin-right: 30px;
  margin-left: 38%;
  border-radius: 5px;
  
}

a:hover, a:active {
  background-color: grey;
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
   <th>  </th>
   <th>  </th>
    <th>  </th>
    <th> </th>
    
</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM Chatroom ");
$i=0;


while($row = mysqli_fetch_array($result)) {
  if ( $row["toe"] == $_SESSION['name']){
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["frome"]; ?></td>
<td><?php echo $row["Chatroom "]; ?></td>
<td><?php echo $row["time"]; ?></td>





<?php if ($row['frome']!== $_SESSION["name"]) {?> 

<td><a href="un1Index.php?name=<?php echo $row["name"]; ?>">Reply</a> </td>

</tr>

<?php
} ?>
<?php
$i++;
}}
?>

</table>


</body>
</html>

