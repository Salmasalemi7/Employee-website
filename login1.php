
<?php

if(count($_POST)>0) {
 $con=mysqli_connect('localhost','root','','KACST');
if(!$con){
	echo 'not counnect';}
	
	if(!mysqli_select_db($con,'KACST')){
		echo'Database not select';}

// username and password sent from form 
if(isset($_POST['Username'])){
echo $User_name=$_POST['Username'];
}
else
{

  echo "error<br>";
}
echo $Password=$_POST['Password']; 

//$q1= mysql_query($con, "SELECT User_name , Password FROM  Employees WHERE  User_name = '" .$_POST["User_name"]."' and Password '".$_POST["Password"]."' ");

$sql = "SELECT * FROM Employees WHERE User_name='".$User_name."' AND Password = '".$Password."' AND role ";



$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
        echo "id: " . $row["User_name"]. " - Name: " . $row["Password"]. " " . $row["role"]. "<br>";


if($row['role'] == "2"){
  header("location:HR.php");
        exit();
     }
     elseif($row ['role'] == "1"){
        header("location:Admin.php");
            exit();
      }
      
      elseif($row['role'] == "3"){
  header("location:Employee.php");
        exit();
     }else{

      echo "no position";
     }
    
} else {
    echo "<br> Wrong Username or Password <br>";
}
$con->close();



// Mysql_num_row is counting table row
//$count=mysqli_num_rows($result);

//echo "Count : ".$count."<br>";

// If result matched $myusername and $mypassword, table row must be 1 row
/*if($count===0){

     // Register $myusername, $mypassword and redirect to file "login_success.php"
     $role = mysqli_fetch_array($result);
echo "the role : ".$role['role']."<br";
echo "the role : ".$role['User_name']."<br";
echo "the role : ".$role['Password']."<br";

exit();
     
      if($role['role'] == "1"){
  header("location:HR.php");
        exit();
     }
     elseif($role ['role'] == "Admin"){
        header("location:Admin.php");
            exit();
      }
      
      elseif($role['role'] == "Employee"){
  header("location:Employee.php");
        exit();
     }


  }
     else {
        echo "Wrong Username or Password"; 
     }*/
     //header("location:Home_K.php")
}

?>