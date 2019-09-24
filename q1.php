<!DOCTYPE html>
<html>
<head>
 	<title>Chat</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="stylechat.css">
<script type="text/javascript">
	$(document).ready(function(e)){
		$('#sendMyMessage').click(function(e)){
			var name =$("#user_name").val();
			var message = $("#message").val();
			$("#mychatform")[0].reset();
			$.ajax({
				url:'sendchat.php',
				type:'POST',
				data:{
					uname:name,
					unmessage:message
				}
			});
		}
	}
</script>
 </head> 
 <body>
 	

 	
 <div class="container-fiuid">
 	<h3 class="text-center">chat...</h3>

 	
 		<div class="well" id="chatbox">
 			


 	</div>
 	<form id="mychatform" action="q2.php" method="post">
 		<input type="text" id="user_name" placeholder="enter your name!"><br> 
 		<textarea name="message" id="message" cols="30" rows="3" placeholder="Enter your message "></textarea><br>
 		<button class="btn btn-success btn-lg" id="sendMyMessage"> Send Message</button>
 	</form>
 </div>

 </body>
 </html>