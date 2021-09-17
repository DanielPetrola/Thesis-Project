<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | DASHBOARD</title>
		<meta name="description" content="Guidance Office System">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="GROUP4">
        <link rel="shortcut icon" href="../../images/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../../scss/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
<!-- navbar -->
		<div class="main-nav">
			<img class="logo-size-1" src="../../images/uphsd icon.png"><a href="dashboard.php">
			<span class="title1">UNIVERSITY OF PERPETUAL HELP</span>
			<span class="title2"> GUIDANCE OFFICE</span></a>
			<div class="menu-butt">
			<a class="btn white" style="background-color: none;" onclick="openNav()"><i class="white fa fa-bars fa-lg"></i> MENU</a>
		</div></div>

<!-- body -->
		<div class="container1"> <!-- bg -->
			<img class="bg" src="../../images/uphsd campus.jpg">
			<div class="bg1">
				

			<img class="logo-size-2" src="../../images/uphsd icon.png">
			<span class="title4">UNIVERSITY OF PERPETUAL HELP</span>
			<span class="title5"> GUIDANCE OFFICE</span>


			<ul class="nav row1">

				<li><a href="../records/records-p1.php">
					<div class="col">
						<div class="row">
							<span class="white fa fa-book fa-4x"></span>
						</div>
						<div class="row">
							<span class="white label1 ">Student Records</span>
						</div>
					</div></a>
				</li>

				<li><a href="../reports/reports-p3.php">
					<div class="col">
						<div class="row">
							<span class="white fa fa-tasks fa-4x"></span>
						</div>
						<div class="row">
							<span class="white label1 ">Reports</span>
						</div>
					</div></a>
				</li>
			</ul>

			</div>
		</div>`

		<?php include('../includes/menu.php');?>
 <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "20%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
		
	</body>
</html>