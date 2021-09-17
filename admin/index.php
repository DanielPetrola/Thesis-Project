<?php

?>

<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | LOGIN</title>
		<meta name="description" content="Guidance Office System">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="GROUP4">
		<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../scss/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>

	<body>
<!-- navbar -->
		<div class="main-nav">
			<img class="logo-size-1" src="../images/uphsd icon.png">
			<span class="title1">UNIVERSITY OF PERPETUAL HELP</span>
			<span class="title2"> GUIDANCE OFFICE</span>
		</div>
<!-- body -->
		<div class="container1">
			<img class="bg" src="../images/uphsd campus.jpg">
			<div class="bg1"></div>
		</div>
		<div class="center login-div1">
		</div>
			<div class="center login-div2">

			<img class="logo2 center" src="../images/uphsd icon.png">
				<span  class="perps1 center">UNIVERSITY OF PERPETUAL HELP</span>
                <span  class="perps2 center">GUIDANCE OFFICE</span>
                <span  class="perps3 center">EMPLOYEE LOGIN</span>
		<?php
			if (isset($_GET["error"])) {
				if ($_GET["error"] == "emptyinputfields") {
					echo "<p>Please fill out all fields.</p>";
				}
				else if ($_GET["error"] == "wronglogin") {
					echo "<p>Invalid username and/or password.</p>";
				}
			}
		?>
<!-- form -->
	<div class="center login-form1">
			<form class="" action="includes/login.inc.php" method="post">
			
				<div class=" form-group"> 
					<input type="email" class="  form-control " name="email" placeholder="EMAIL">
				</div>
				<div class="form-group">
					<input type="password" class="  form-control" name="pwd" placeholder="PASSWORD">
				</div>
	</div>

				<button type="submit" class="center submit" name="submit" value="LOGIN">LOGIN</button> 
			</form>
			<a href="pages/reset-password.php" class="fp center">Forgot password</a>
		</div>
	</body>
</html>