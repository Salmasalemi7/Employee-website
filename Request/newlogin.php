

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="#">
</head>
<body style="background:#CCC ">

<div class="container">
	<div class="row">
		<div class="col-lg-6 m-auto">
			<div class="card bg-dark">
				<div class="card-title bg-primary text-white">
					<h3 class="text-center py-3">login</h3>
				</div>

                <?php 
                  if (@$_GET['Empty']== true) {

                  	?>
                  	<div class="alert-light text-danger text-center py-3"> <?php echo $_GET['Empty']; ?></div>
                  	<?php
                  }

                 ?>


                 <?php 
                  if (@$_GET['Invaild']== true) {

                  	?>
                  	<div class="alert-light text-danger text-center py-3"> <?php echo $_GET['Invaild']; ?></div>
                  	<?php
                  }

                 ?>

				<div class="card-body">
					<form action="process.php" method="post">
						<input type="text" name="User_name" placeholder="name" class="form-control mb-3">
						<input type="password" name="Password" placeholder="password" class="form-control mb-3">
						<button class="btn btn-success mt-3" name="login">login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

