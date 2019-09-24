<?php
$con=mysqli_connect('localhost','root','','KACST');

    if(!mysqli_select_db($con,'KACST'))
        

        

try {
    $conn = new PDO("mysql:localhost=$localhost;KACST=$KACST", $Employee_name ,$Password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     /*sql to delete a record*/
    $sql = "DELETE FROM Employees WHERE Employee_name='" . $_GET["Employee_name"] . "'";

    /*use exec() because no results are returned*/
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;
?>