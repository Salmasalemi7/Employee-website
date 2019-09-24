<!DOCTYPE html>
<html>
<head>
	<title>KACST - NEW MEMBER</title>
	<link rel="stylesheet" type="text/css" href="HomeCS.css">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- To use icons for this website-->

<!-- style for login  -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="StyleSheet2.css"> <!-- END style for login  -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" > </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<!-- Navigation Bar -->
<section id="nav-bar"> <!-- This code use form bootstrap.com/nav-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="#"><img src="KACST.jpg"></a></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      
      
      <li class="nav-item">
        <a class="nav-link" href="#">SHOW MY PROFILE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Admin.php">DEPARTEMENT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="productAdmin.php">PRODUCT</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="Home_K.php">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav>
</section><!--  End Navigation Bar -->
<div class="header">
  <h2>ADD NEW MEMBER</h2>
</div>
<form action="http://localhost/KACST/DBadd_member1.php" method="post"> 

  <div class="input-group">
    <label>Employee name:</label>
      <input type="text" name="Employee_name" required />
  </div>

  

  <div class="input-group">
    <label>EXT:</label>
      <input type="number" name="EXT"  required />
  </div>

   <div class="input-group">
  <label>Brief job description:</label>
      <input type="text" name="Brief_job_description" required />
  </div>

  <div class="input-group">
  <label> User name:</label>
      <input type="text" name="User_name" required />
  </div>


  <div class="input-group">
    <label>Password :</label>
      <input type="password" name="Password"required />
  </div>


  

  
  
  <div class="input-group">
  <label> Department name</label>
      <input type="text" name="Department_name" required />
  </div>

  <div class="input-group">
    <button  onclick="myFunction()" type="submit" class="btn">ADD</button>
  </div>
</form>
</body>
</html>

<script type="text/javascript">
  function myFunction() {
  alert("ADD SUCCESSFULLY!");
}

</script>