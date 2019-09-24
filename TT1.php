<?php include "dbTT.php"; ?>

<!DOCTYPE html> 
<html> 
<head>
 <title>KACST - CHATTING</title>

 <link rel="stylesheet" href="stTT.css" media="all" /> 
 	<link rel="stylesheet" type="text/css" href="HomeCS.css">

  <a class="navbar-brand" href="#"><img id="hw" style="margin-top: 17px;" src="KACST.jpg"></a></a></section>
</head> 
<body> 
	<div id="container">
	 <div id="chat_box"> 
	 	<div id="chat_data"> 
	 		<?php 
	 	 	$query = "SELECT * FROM Chatroom ORDER BY id_"; $run = $con->query($query);
	 	 	 while($row = $run->fetch_array()):
	 	 	 ?>
	 	 	 <span style="color:green;"><?php echo $row['name']; ?> : </span>
	 	 	<span style="color:blue;"><?php echo $row['message']; ?></span><br>
	 	 	 <span style="float:right; color: brown;"><?php echo $row['time']; ?></span> <br>
	 	 	  <?php endwhile; ?>

	 		
	 	</div>
	 	 </div>
	 	 <div id="chatBox">
	 	 		 	 </div>
	 	 <div id="chat_data"> 
	 	 

	 	  <form method="post" action="TT1.php"> 
	 	  	<input type="text" name="name" placeholder="Enter Name: " > 
	 	  	<textarea name="enter message" placeholder="Enter Message"></textarea> 
	 	  	<input type="submit" name="submit" value="Send!"> 
	 	  </form> 
	 	</div>
	 	 </body> 
	 	 </html>