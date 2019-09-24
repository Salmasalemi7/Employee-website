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

   <form method="post" id="comment_form" action="insertChat.php">
    <div class="form-group">
     <label>Enter Name :</label>
     <input type="text" name="Enter_Name"  class="form-control">
    </div>
    <div class="form-group">
     <label>Enter Message :</label>
     <textarea name="Enter_Message"  class="form-control" cols="5"></textarea>
    </div>
    <div class="form-group">
      <button onclick="myFunction()" type="submit" name="submit">Send!</button>
     <!-- <input type="submit" name="submit" value="Send!">-->
      <!--<a href="insertChat.php">send</a>-->
     <!--<input type="submit" name="post" class="btn btn-info" value="Post" />-->

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

<!--<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   //url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    //url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>
