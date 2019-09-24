<!DOCTYPE html>
<html>
<head>
	<title>KACST - MEMBER</title>
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
        <a class="nav-link" href="myprofile2.php">SHOW MY PROFILE</a>
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



<br><br>
<div class="col-6">
<a class="btn btn-primary" href="AddNewMemebrt.php" role="button">Add+</a></div>
<br>
<h3><b>MEMBERS</b></h3>
<table class="table">
  <tr>
    <th>NO</th>
    <th>Name</th>
    <th>ID</th>
    <th>Job title</th>
    <th>...</th>
  </tr>

  <tr>
    <td>1</td>
    <td>Wehad </td>
    <td> 2020 </td>
    <th>IT</th>
    <th><a href="#..php">Edite </a> /
        <a href="BDdelete_memb.php">Delete</a></th> 
  </tr> 
</table></body></html>