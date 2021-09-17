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

			<img class="logo2 center" src="../images/uphsd icon.png">
				<span  class="perps1 center">UNIVERSITY OF PERPETUAL HELP</span>
                <span  class="perps2 center">GUIDANCE OFFICE</span>
                <span  class="perps3 center">RESET PASSWORD</span>
				<?php if (isset($_GET['error'])) { ?>
				<div class="alert alert-danger" role="alert">
  					<?=$_GET['error']?>
				</div>
				<?php } ?>
<!-- form -->
	<div class="center login-form1">
			<form class="" action="../includes/reset-request.php" method="post">
			
				<div class=" form-group"> 
					<input type="email" class="  form-control " name="email1" placeholder="Enter e-mail address here">
				</div>
	</div>
				<button type="submit" class="center submit" name="reset-submit">SUBMIT</button>
				<a href="../index.php" class="fp center">Back</a>
			</form>
			<?php
				if (isset($_GET["reset"])) {
					if ($_GET["reset"] == "success") {
						echo "Success! Please check your e-mail.";
					}
				}
			?>

		</div>
		
	</body>
</html>