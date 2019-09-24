
<!DOCTYPE html>
<html>
 <head>
  <title>KACST - DIRECT MESSAGE</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br /><br />
  <div class="container">
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" href="#">DIRECT MESSAGE</a>
     </div>
    <!-- <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>-->
    </div>
   </nav>
   <br />
   <form method="post" id="comment_form" action="insertChat1.php">
    <div class="form-group">
     <label>Enter Name :</label>
     <input type="text" name="Enter_Name"  class="form-control">
    </div>
    <div class="form-group">
     <label>Enter Message :</label>
     <textarea name="Enter_Message"  class="form-control" cols="5"></textarea>
    </div>
    <div class="form-group">
      <input type="submit" name="submit" value="Send!">
      <!--<a href="insertChat.php">send</a>-->
     <!--<input type="submit" name="post" class="btn btn-info" value="Post" />-->

    </div>
   </form>
   
  </div>
 </body>
</html>
