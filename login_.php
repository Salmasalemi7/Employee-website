
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


		<link rel="stylesheet" type="text/css" href="HomeCS.css">
		<link rel="stylesheet" type="text/css" href="StyleSheet2.css">
		<link rel="stylesheet" type="text/css" href="style .css">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- To use icons for this website-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style type="text/css">
	.w3-button {width:150px;
		margin-left: 250px;}
</style>
</head>
</head>
<body>
<header>
	<!--  navegation bar -->
	<section id="nav-bar"> <!-- This code use form bootstrap.com/nav-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="Home_K.php"><img src="KACST.jpg"></a></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Home_K.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Home_K.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Home_K.php">CONTACT US</a>
      </li>
      

    </ul>
  </div>
</nav>
</section> <!-- End Navigation Bar -->
</header>

<div class="header">
	<h2>Login</h2>
</div>
<form method="post" action="login1.php"> 
	<div class="input-group">
		<label>Username:</label>
			<input type="text" name="Username" required />
	</div>

	<div class="input-group">
		<label>Password :</label>
			<input type="password" name="Password"required />
	</div>
	
	<div class="input-group">
		<p><button class="w3-button w3-teal">Login</button></p>
	</div>
	
</form>
</body>
</html>