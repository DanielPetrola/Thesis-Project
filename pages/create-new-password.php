<?php 

?>

<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | RESET PASSWORD</title>
		<meta name="description" content="Guidance Office System">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="GROUP4">
		<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../scss/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
							<input type="password" name="pwd1" placeholder="New password">
							<br>
							<input type="password" name="pwd2" placeholder="Confirm password">
							<br>
							<button type="submit" name="reset-password-submit">Reset Password</button>
						</form>
						</center>
						
						<?php
						
					}
				}
			?>
			
		</div>
		
	</body>
</html>