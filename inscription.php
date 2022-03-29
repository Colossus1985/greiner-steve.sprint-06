<?php 
//include('inscriptionExec.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark px-md-5">
		<div class = "px-4">
			<h2 class = "text-white">VAP FACTORY Stock management</h2>
		</div>
    </nav>

	<div class = "mx-4 mt-4 mb-5">
	
		<div class = "mx-4 mt-4 p-4 bg-info border border-1 rounded">
			
			<div class = "">
				<form class = "p-3 border border-1 rounded" method="post" action="inscriptionExec.php">
					<div class = "">
						<h2>Register</h2>
					</div>
					<div class = "mb-3 d-flex flex-fill ">
						<!-- <?php include 'error.php'; ?> -->
						<input class = "shadow btn btn-light px-3 flex-fill border border-1 border-primary rounded-pill" type="text" name="username" required placeholder = "Username">
					</div>
					<div class = "mb-3 d-flex">
						<input class = "shadow btn btn-light px-3 flex-fill border border-1 border-primary rounded-pill" type="email" name="email" required aria-describedby="emailHelp" placeholder = "Email">
					</div>
					<div class = "mb-3 d-flex">
						<input class = "shadow btn btn-light px-3 flex-fill border border-1 border-primary rounded-pill" type="password" name="password_1" required placeholder = "Password">
					</div>
					<div class = "mb-3 d-flex">
						<input class = "shadow btn btn-light px-3 flex-fill border border-1 border-primary rounded-pill" type="password" name="password_2" required placeholder = "Confirm password">
					</div>
					<div class = "mb-3 d-flex">
						<input class = "shadow btn btn-success px-3 flex-fill border border-1 rounded-pill" type="submit" name="reg_user" value="✔">
					</div>
					
				</form>
			</div>
		</div>
		<div class = "mx-4 mt-4 p-4 bg-info border border-1 rounded">
			
			<div class = "">
				<form class = "p-3 border border-1 rounded" method="post" action="inscriptionExec.php" >
					<div class = "">
						<h2>Login</h2>
					</div>
			<!-- 	<?php include('error.php'); ?> -->
					<div class = "mb-3 d-flex">
						<input class = "shadow btn btn-light px-3 flex-fill border border-1 border-primary rounded-pill" type="text" name="username" required placeholder = "Username">
					</div>
					<div class = "mb-3 d-flex">
						<input class = "shadow btn btn-light px-3 flex-fill border border-1 border-primary rounded-pill" type="password" name="password" required placeholder = "Password">
					</div>
					<div class = "mb-3 d-flex">
						<input class = "shadow btn btn-success px-3 flex-fill border border-1 rounded-pill" type="submit" name="login_user" value = "✔">
					</div>
				</form>
			</div>
		</div>
  	</div>	
</body>
</html>