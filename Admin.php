<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>KACST - ADMIN</title>
	<link rel="stylesheet" type="text/css" href="HomeCS.css">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- To use icons for this website-->

<!-- style for login  -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="StyleSheet2.css"> <!-- END style for login  -->
  <link rel="stylesheet" type="text/css" href="employeeCS.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<!-- Navigation Bar -->
<section id="nav-bar"> <!-- This code use form bootstrap.com/nav-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="Home_K.php"><img src="KACST.jpg"></a></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="update.php">UPDATE MEMBER</a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link" href="AddNewMemebrt.php">ADD MEMBERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="newDEP.php">ADD DEPARTEMENT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="phpm/addChat.php">RECEIVED MESSAGES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="myprofile2.php">SHOW MY PROFILE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="show.php">SHOW ACCOUNT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product2.php">PRODUCT</a>
      </li>
      <li class="nav-item">

        <ul>
      <!--<li class="dropdowan">
        <a href="#" id="dropdowan-toggle" class="nav-link"  data-toggle = "dropdowan">
          <span class="label label-pill label-danger count">NOTIFICATION</span>
        </a>
        <ul class="dropdowan-menu"></ul> 
      </li>
    </ul></li>
      </li>-->
      <li class="nav-item">
        <a class="nav-link" href="logout1.php">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav>
</section> <!-- End Navigation Bar-->

<br><br><br>
<h1 style="text-align: center;">Hi, <b><?php echo htmlspecialchars($_SESSION["User_name"]); ?></b>. Welcome to our site.</h1>
<br><br><br>

<section id="about">
    <div class="container">
      <h2></h2>
    </div>
  </section>
  <section id="profileEm">
  <div class="container">
    <h1>Contact with Employee </h1>
    <p class="text-center"> You can contact with anay employee and send dierct message </p>
    <div class="row">

           <div class="col-md-4 text-center">
            <div class="profile1">
              <img src="woman.png" class="user">
              <h3>
                Norah Mohmmed <br> Riyadh ,KSA<br>Data Analyst.
              </h3>
             
              <a href="https://owa.kacst.edu.sa/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fowa.kacst.edu.sa%2fowa" class="btn btn-primary">Send dierct Message</a>
            </div>
            </div>


            <div class="col-md-4 text-center">
            <div class="profile1">
              <img src="woman.png" class="user">
              <h3>
                Sara Saad <br> Riyadh ,KSA<br>HR manager.
              </h3>
             
              <a href="phpm/index.php" class="btn btn-primary">Send dierct Message</a>

            </div>
            </div>

            <div class="col-md-4 text-center">
            <div class="profile1">
              <img src="woman.png" class="user">
              <h3>
                 Najwa hadi <br> Riyadh ,KSA<br>Web developer .
              </h3>
             
              <a href="https://owa.kacst.edu.sa/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fowa.kacst.edu.sa%2fowa" class="btn btn-primary">Send dierct Message</a>

            </div>
            </div>
    </div> 
     <div class="bo">
             <a href="all_emp_profile.php" class="btn btn-primary">show all employee profile >> </a></div>    

  </div>

</section>
<!--<div class="col-6">
<a class="btn btn-primary" href="newDEP.php" role="button">Add+</a></div>
<h3><b>Departement </b></h3>
<table class="table">
  <tr>
    <th>Departement name</th>
    <th>number contacts</th>
    <th>...</th>
  </tr>

  <tr>
    <td>HR</td>
    <td>15</td>
    <td> <a href="#..php">Edite </a> /
        <a href="#..php">Delete</a> </td>
  </tr> 



</table>-->


</body>
</html>
<script type="text/javascript">
  $(document).ready(funcation()){
    function load_unseen_notification(view = ''){
      $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data){
    
   }
  }
}

</script>










