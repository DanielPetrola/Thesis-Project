
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
			<div class="maroon-div4 center">
				<div class="maroon-div4-1">


					<span class="body-title-2">DETAILS </span>
					
					
					<div style="position: absolute; top: 10%; width: 100%;">
						<span class="maroon-div4-1-span" style="font-size: 120%;"><b><?php echo($row['idnum']);?></b></span><br>
						<span class="maroon-div4-1-span" style="font-size: 130%;"><b><?php echo ucwords($row['lastname'].", ".$row['firstname']." ".$row['middleinit'].".");?></b></span><br><br>
						<span class="maroon-div4-1-span"><b>Role: </b><?php echo($row['role']);?></span><br>
						<span class="maroon-div4-1-span"><b>Position: </b><?php echo($row['position']);?></span><br>
						<span class="maroon-div4-1-span"><b>Age: </b><?php echo($row['age']);?></span><br>
						<span class="maroon-div4-1-span"><b>Sex: </b><?php echo($row['gender']);?></span><br>
						<span class="maroon-div4-1-span"><b>Birthday: </b><?php echo($row['birthday']);?></span><br>
						<span class="maroon-div4-1-span"><b>Contact: </b><?php echo($row['contact']);?></span><br>
						<span class="maroon-div4-1-span"><b>Email: </b><?php echo($row['email']);?></span><br><br>


              <form action="profile-p2.php" method="post">
                <button type="submit" name="" class="btn btn-primary btn-sm">Edit</button><br>
              </form>
					</div>
				</div>
				<div class="maroon-div4-2">
					<span class="body-title-2">COUNSELING HISTORY </span>



					<?php
					$id = $_SESSION['useremail'];
				$query = "SELECT * FROM crecords1 where uid = '$id' ORDER BY date DESC";
			    $search_result = filterTable($query);
			}

			// function to connect and execute the query
			function filterTable($query)
			{
			    
				include('../includes/dbh.inc.php');
			    $filter_Result = mysqli_query($conn, $query);
			    return $filter_Result;
			}
			?>

				
			
			
			<!-- table container -->
			<div class="maroon-div center">
				

				<table id="customers-2" >
                    <tr>
                      <th width="20%;">DATE/TIME</th>
                      <th width="20%;">CLIENT</th>
                      <th width="20%;">REASON</th>
					</tr> 

					<tbody>
					<?php 
					$cnt=1;
					while($row = mysqli_fetch_array($search_result)):
					{
					?>                  

                    <tr>
                      <td width="10%;" > <?php echo htmlentities($row['date']);?> / <?php echo date("g:i A", strtotime($row['time_start']));?></a></td>
                      <td width="20%;" ><?php echo ucwords($row['student_lastname'].", ".$row['student_firstname']);?> </td>
                      <td width="20%;"> <?php echo htmlentities($row['reason']);?><?php echo htmlentities($row['problem']);?></td>
					  
                    </tr>

                    <?php $cnt=$cnt+1; } 
	                endwhile;
	                ?>
                    </tbody>
                </table>
				


				</div>
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
<?php  ?>