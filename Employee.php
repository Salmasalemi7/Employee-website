<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>KACST - EMPLOYEE</title>
	<link rel="stylesheet" type="text/css" href="HomeCS.css">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- To use icons for this website-->

<!-- style for login  -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="StyleSheet2.css"> <!-- END style for login  -->

<!-- for bar-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Style for Contact with employee -->
<link rel="stylesheet" type="text/css" href="employeeCS.css">

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
        <a class="nav-link" href="myprofile1.php">SHOW MY PROFILE</a>
      </li><!-- the page of profile must be conform to PHP extention-->
      
      <li class="nav-item">
        <a class="nav-link" href="#profileEm">CONTACT WITH EMPLOYEE</a>
      </li>
      <li class="nav-item">
      <!--<button style="background-color:lightgreen;border-radius: 17px;" onclick="myFunction()"><a class="nav-link" href="#">RECEIVED MESSAGES</a></button> -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product2.php">PRODUCT</a>
      </li>
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

<section id="nothing">
    <div class="container">
          <div class="nothing-now">
       
          </div> 

         

          
        </div>
        
          
        
      <br><br><br><br><br><br>

    </div>
  </section>
<!-- Employee with Employee-->
<section id="profileEm">
  <div class="container">
    <h1>Contact with Employee </h1>
    <p class="text-center"> You can contact with anay employee and send dierct message </p>
    <div class="row">

           <div class="col-md-4 text-center">
            <div class="profile1">
              <img src="iim.jpeg" class="user">
              <h3>
                Salma Salem <br> Riyadh ,KSA<br>Project Manager.
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
             
              <a href="https://owa.kacst.edu.sa/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fowa.kacst.edu.sa%2fowa" class="btn btn-primary">Send dierct Message</a>

            </div>
            </div>

            <div class="col-md-4 text-center">
            <div class="profile1">
              <img src="woman.png" class="user">
              <h3>
                 Basma Ali <br> Riyadh ,KSA<br>Cyber Security .
              </h3>
             
              <a href="https://owa.kacst.edu.sa/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fowa.kacst.edu.sa%2fowa" class="btn btn-primary">Send dierct Message</a>

            </div>
            </div>
    </div> 
     <div class="bo">
             <a href="all_emp_profile.php" class="btn btn-primary">show all employee profile >> </a></div>    

  </div>

</section>
</body>
</html>

<script>
function myFunction() {
  alert("This service will be added SOON... Wait for us :)");
}
</script>