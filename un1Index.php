

<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page

?>






<!DOCTYPE html>
<html>
 <head>
  <title>KACST - DIRECT MESSAGE</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
     .body{ font: 16px sans-serif; text-align: center;
margin-top:15px;
      }
  </style>
 </head>

<div class="body">
Hello<?php if(isset($_SESSION['name'])){echo ' '.htmlentities($_SESSION['name'], ENT_QUOTES, 'UTF-8');} ?>,<br />
Welcome on message contact .<br />
You can <a href="#">see the list of users</a>.<br /><br />

</div>
 
  <br /><br />
  <div class="container">
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     <div class="navbar-header">
      
      <a class="navbar-brand" href="unAddChat.php">Resived MESSAGE</a>
    
    
        <a href="logout.php" class="navbar-brand">Sign Out of Your Account</a>
 
     </div>
  
    </div>
   </nav>
   <br />

   <form method="post" id="comment_form" action="unInsertChat.php">
    <div class="form-group">
    
     <input type="hidden" placeholder=" " name="name" value=" <?php echo $_SESSION['name'] ?>" >
    <br>
    </div>
    <div class="form-group">
     <label>to :</label>
     <input type="text" name="toe"  class="form-control">
    </div>
    <div class="form-group">
     <label>Enter Message :</label>
     <textarea name="Enter_Message"  class="form-control" cols="5"></textarea>
    </div>
    <div class="form-group">
      <button onclick="myFunction()" type="submit" name="submit">Send</button>
    

    </div>
   </form>
   
  </div>
 </body>
</html>
<script type="text/javascript">
  function myFunction() {
  alert("SEND MESSAGE SUCCESSFULLY!");
}
</script>
