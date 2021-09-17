<?php

?>

<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | LOGIN</title>
		<meta name="description" content="Guidance Office System">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="GROUP4">
    	<meta charset="UTF-8">
		<link rel="shortcut icon" href="images/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../../scss/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>

	<body>
<!-- navbar -->
		<div class="main-nav">
			<img class="logo-size-1" src="../../images/uphsd icon.png">
			<span class="title1">UNIVERSITY OF PERPETUAL HELP</span>
			<span class="title2"> GUIDANCE OFFICE</span>
		</div>
<!-- body -->
		<div class="container1">
			<img class="bg" src="../../images/uphsd campus.jpg">
			<div class="bg1"></div>
		</div>
		<div class="center login-div1">
		</div>
			<div class="center login-div2">

			<img class="logo2 center" src="../../images/uphsd icon.png">
				<span  class="perps1 center">UNIVERSITY OF PERPETUAL HELP</span>
                <span  class="perps2 center">GUIDANCE OFFICE</span>
                <span  class="perps3 center">RESET PASSWORD</span>
                
                <div class="center login-form-1" style="position: absolute; top: 40%;">
			<?php
				$selector = $_GET["selector"];
				$validator = $_GET["validator"];
				
				if (empty($selector) || empty($validator)) {
					echo "request unavailable";
				} else {
					if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
						?>
						<center>
						<br>
						<br>
						<br>
						<form action="../includes/reset-pass.php" method="post">
							<input type="hidden" name="selector" value="<?php echo $selector ?>">
							<br>
							<input type="hidden" name="validator" value="<?php echo $validator ?>">
							<br>
							<input type="password" class='form-control' name="pwd1" placeholder="New password" required>
							<br>
							<input type="password" class='form-control' name="pwd2" placeholder="Confirm password" required>
							<br>
							<button type="submit" class='btn btn-primary' name="reset-password-submit">Reset Password</button>
						</form>
						</center>
						
						<?php
						
					}
				}
			?>
			</div>
			</div>
	</body>
</html>



