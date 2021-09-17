
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter


include('../includes/dbh.inc.php');
session_start();
{
$user_check=$_SESSION['userid'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($conn, "select * from accounts where id='$user_check'");

$row = mysqli_fetch_assoc($ses_sql);

?>
  <?php
							if(isset($_POST['update'])) // when click on Update button
							{
							    $lastname = $_POST['lastname'];
							    $firstname = $_POST['firstname'];
							    $middleinit = $_POST['middleinit'];
							    $contact = $_POST['contact'];
							    $gender = $_POST['gender'];
							    $age = $_POST['age'];
							    $birthday = $_POST['birthday'];
							    $position = $_POST['position'];
							    $role = $_POST['role'];
							    $email = $_POST['email'];
							  
							    $edit = mysqli_query($conn,"UPDATE accounts SET lastname='$lastname', firstname='$firstname', middleinit='$middleinit', contact='$contact', gender='$gender', age='$age', birthday='$birthday', position='$position', role='$role', email='$email' where id='$user_check'");
							  
							    if($edit)
							    {
							        mysqli_close($conn);// Close connection
                      echo "<script type='text/javascript'> alert('Changes have been saved.') </script>";
                      echo "<script type='text/javascript'> document.location =' ../pages/dashboard.php'; </script>";
							        exit;
							    }
							    else
							    {
							        echo mysqli_error();
							    }     
							}
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"><fieldset>

        <form id="pas" action="../includes/profile_rp.php" method="POST">
			            	<div class="form-group">
					<small for="date" class="form-text text-muted" style="width: 50%;">Current password</small>
			    <div class="col-sm-10">
	        		<input type="password" class="form-control form-control-sm" name="cp" id="cp" >
			    </div>
		    	<div class="form-group">
					<small for="date" class="form-text text-muted" style="width: 50%;">New password</small>
			    <div class="col-sm-10">
			        <input type="password" class="form-control form-control-sm" name="np" id="np" >
			    </div>
			    <div class="form-group">
					<small for="date" class="form-text text-muted" style="width: 50%;">Confirm new password</small>
			    <div class="col-sm-10">
				    <input type="password" class="form-control form-control-sm" name="cnp" id="cnp" ><br>
			    </div> 
			    <div class="form-group">
				    <input type="hidden" name="user_check_id" value="<?php echo htmlentities($row['id']);?>">  
			        <input class="btn btn-primary btn-sm" type="submit" name="resetp" onclick="return confirm('Are you sure to save changes?')" value="Save"><br>
	    </form>  
      </fieldset></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>

		</div></div>
		<!-- navbar -->
		<?php include('../includes/navbar.php');?>

		<div class="center white-div2">
			<div style="position: absolute; left: 1%; bottom:1%;">
			<button class="btn btn-light btn-sm" onclick="location.href='profile-p1.php'">Cancel</button>
		</div>
			<!-- top of body -->
			<div class="white-top center">
				<span class="body-title"><i class="maroon fa fa-user"></i> PROFILE</span>
				<a href="../pages/dashboard.php"><i class="close-btn fa fa-close fa-lg"></i></a>
			</div>
			
			<!-- table container -->
			<div class="maroon-div4 center"style="overflow-y: auto; overflow-x: hidden;">


					<span class="body-title-2"> EDIT DETAILS </span>
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
					
		<form class="" method="post">
			<div  style="position: absolute; top: 10%; width: 45%;">
            	<div class="form-group">
						<small for="date" class="form-text text-muted" style="width: 50%;">ID number</small>
					    <input type="text" class="form-control  form-control-sm" name="idnum" id="idnum" value="<?php echo $row['idnum']?>" readonly>
				</div>
			    <div class="form-group">
						<small for="date" class="form-text text-muted" style="width: 50%;">Lastname</small>
   		        		<input type="text" class="form-control form-control-sm" name="lastname" id="lastname" value="<?php echo $row['lastname']?>" required>
				</div>
			    <div class="form-group">			
						<small for="date" class="form-text text-muted" style="width: 50%;">Firstname</small>
			    		<input type="text" class="form-control form-control-sm" name="firstname" id="firstname" value="<?php echo $row['firstname']?>" required>
				</div>
			    <div class="form-group">			
						<small for="date" class="form-text text-muted" style="width: 50%;">Middle initial</small>
				    	<input type="text" class="form-control form-control-sm" name="middleinit" id="middleinit" value="<?php echo $row['middleinit']?>" required>
				</div>
			    <div class="form-group">
						<small for="date" class="form-text text-muted" style="width: 50%;">Role</small>
				    	<select class="form-control " type="radio" id="role" name="role" required>
			                <option class="form-control form-control-sm" vdisabled selected><?php echo $row['role']?></option>
			            </select>
				</div>
			    <div class="form-group">
						<small for="date" class="form-text text-muted" style="width: 50%;">Position</small>
				    	<select class="form-control" type="radio" id="position" name="position" required>
			                <option class="form-control form-control-sm"  vdisabled selected><?php echo $row['position']?></option>
			            </select>	
			    </div>
			</div>
			<div  style="position: absolute; top: 10%; width: 48%; left: 50%;">
			    <div class="form-group">
						<small for="date" class="form-text text-muted" style="width: 50%;">Age</small>
				        <input type="text" class="form-control form-control-plaintext" name="age" id="age" value="<?php echo $row['age']?>">	    
				</div>
				    <div class="form-group">
						<small for="date" class="form-text text-muted" style="width: 50%;">Gender</small>
					    	<select class="form-control " type="radio" id="gender" name="gender">
				                <option class="form-control form-control-sm" vdisabled selected><?php echo $row['gender']?></option>
				                <option class="form-control " >Male</option>
				                <option class="form-control " >Female</option>
				            </select>	    
					</div>
				    <div class="form-group">
						<small for="date" class="form-text text-muted" style="width: 50%;">Birthday</small>
						    <input type="date" class="form-control form-control-sm" name="birthday" id="birthday" value="<?php echo $row['birthday']?>" required>				    
					</div>
				    <div class="form-group">
						<small for="date" class="form-text text-muted" style="width: 50%;">Contact</small>
									      <input type="tel" class="form-control form-control-sm" name="contact"  id="contact" value="<?php echo $row['contact']?>" required>
								    
									</div>
								    <div class="form-group">
						<small for="date" class="form-text text-muted" style="width: 50%;">Email</small>
									      <input type="text" class="form-control form-control-sm" name="email" id="email" value="<?php echo $row['email']?>" required>
								    
									</div>
								    <div class="form-group">
							      <input class="btn btn-primary btn-sm" type="submit" name="update" onclick="return confirm('Are you sure to save changes?')" value="Save">
							  </div>
							  <div class="form-group">
							      <button type="button" class="btn btn-danger btn-sm" name="" data-toggle="modal" data-target="#exampleModal" value="Change Password">Change password</button>
							     </div>
							    </form>    
					</div> 
				

</form></div>
				
	

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