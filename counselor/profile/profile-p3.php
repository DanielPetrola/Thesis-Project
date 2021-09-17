
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
session_start();
{
include '../includes/dbh.inc.php';
$user_check=$_SESSION['userid'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($conn, "select * from accounts where id='$user_check'");

$row = mysqli_fetch_assoc($ses_sql);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | PROFILE</title>
		<meta name="description" content="Guidance Office System">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="GROUP4">
        <link rel="shortcut icon" href="../../images/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../../scss/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>

	<body>
		<!-- navbar -->
		<?php include('../includes/navbar.php');?>

		<div class="center white-div2">
			<!-- top of body -->
			<div class="white-top center">
				<span class="body-title"><i class="maroon fa fa-user"></i> PROFILE</span>
				<a href="../pages/dashboard.php"><i class="close-btn fa fa-close fa-lg"></i></a>
			</div>
			
			<!-- table container -->
			<div class="maroon-div4 center"style="overflow-y: auto; overflow-x: hidden;">


					<span class="body-title-2"> CHANGE PASSWORD </span>
					<!-- Button trigger modal -->
					<!--
					<div style="position: absolute; top: 10%; width: 100%;">
						<span class="maroon-div4-1-span" style="font-size: 120%;">ID Number</span><br>
						<span class="maroon-div4-1-span" style="font-size: 130%;">Name</span><br><br>
						<span class="maroon-div4-1-span">Role: </span><br>
						<span class="maroon-div4-1-span">Position: </span><br>
						<span class="maroon-div4-1-span">Age: </span><br>
						<span class="maroon-div4-1-span">Sex: </span><br>
						<span class="maroon-div4-1-span">Birthday: </span><br>
						<span class="maroon-div4-1-span">Contact: </span><br>
						<span class="maroon-div4-1-span">Email: </span><br>
					</div>-->
					
						<form action="../includes/profile_rp.php" method="POST">
							<div  style="position: absolute; top: 10%; width: 50%; left: 0%;">
					            	<div class="form-group">
						<small for="date" class="form-text text-muted" style="width: 50%;">Current password</small>
									    <div class="col-sm-10">
									      <input type="password" class="form-control form-control-sm" name="cp" id="cp" >
									    </div>
									</div>
								    <div class="form-group">
						<small for="date" class="form-text text-muted" style="width: 50%;">New password</small>
									    <div class="col-sm-10">
									      <input type="password" class="form-control form-control-sm" name="np" id="np" >
									    </div>
									
									    </div>
								    <div class="form-group">
						<small for="date" class="form-text text-muted" style="width: 50%;">Confirm new password</small>
									    <div class="col-sm-10">
									      <input type="password" class="form-control form-control-sm" name="cnp" id="cnp" >
									    </div> 
									    </div>
								    <div class="form-group">
								  <input type="hidden" name="user_check_id" value="<?php echo htmlentities($row['id']);?>">  
							      <input class="btn btn-primary btn-sm" type="submit" name="resetp" onclick="return confirm('Are you sure to save changes?')" value="Save"><br><br>
							     
							    </form>  
							    <form action="profile-p2.php" method="post" style="">
                          <button style="" name="view_btn" class="btn btn-white btn-sm">Cancel
                          </button>
                          </div>
                          </form>
                          </div>
					</div> 
				


				
			

		</div>
		
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
<?php } ?>