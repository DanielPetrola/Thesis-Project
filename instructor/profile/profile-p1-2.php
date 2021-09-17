<?php


include('../includes/dbh.inc.php');
session_start();
{
if(isset($_POST['coun_btn'])){
        $id = $_POST['coun_id'];

$ses_sql=mysqli_query($conn, "select * from crecords where id='$id'");

$row = mysqli_fetch_assoc($ses_sql);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | PROFILE</title>
		<meta name="description" content="Guidance Office System">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="GROUP4">
		<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../../scss/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
						<span class="maroon-div4-1-span"><b>Role: </b><?php echo($row['role']);?></span><br><br>
						<span class="maroon-div4-1-span"><b>Position: </b><?php echo($row['position']);?></span><br><br>
						<span class="maroon-div4-1-span"><b>Age: </b><?php echo($row['age']);?></span><br><br>
						<span class="maroon-div4-1-span"><b>Sex: </b><?php echo($row['gender']);?></span><br><br>
						<span class="maroon-div4-1-span"><b>Birthday: </b><?php echo($row['birthday']);?></span><br><br>
						<span class="maroon-div4-1-span"><b>Contact: </b><?php echo($row['contact']);?></span><br><br>
						<span class="maroon-div4-1-span"><b>Email: </b><?php echo($row['email']);?></span><br><br>


              <form action="profile-p2.php" method="post">
                <button type="submit" name="" class="btn btn-primary">Edit</button><br>
              </form>
					</div>
				</div>
				<div class="maroon-div4-2">
					<span class="body-title-2">COUNSELING HISTORY </span>

<?php


include('../includes/dbh.inc.php');
session_start();
{
if(isset($_POST['coun_btn'])){
        $id = $_POST['coun_id'];

$ses_sql=mysqli_query($conn, "select * from crecords where id='$id'");

$row = mysqli_fetch_assoc($ses_sql);

?>
<div class="maroon-div4-2c">
	<div style="position: absolute; top: 10%; width: 100%;">
            <span class="maroon-div4-1-span" style="font-size: 120%;"><b><?php echo($row['idnum']);?></b></span><br>
            <span class="maroon-div4-1-span" style="font-size: 130%;"><b><?php echo ucwords($row['student_lastname'].", ".$row['student_firstname']);?></b></span><br><br>

            <div class="form-2">
          <form class="" method=""  action="" name="registration">
            <div style="position: absolute; top: 100%;">
            <div class="form-group row">
              <br><br><label for="date" class="col-sm-2 col-form-label" style="width: 50%;">Date</label>
               <div class="col-sm-10">
                <label class="form-control " type="date" id="date" name="date" ><?php echo($row['date']);?></label>
               </div>
            </div>
            <div class="form-group row">
              <label for="time1" class="col-sm-2 col-form-label" style="width: 50%;">Time Begun</label>
               <div class="col-sm-10">
                <input class="form-control " type="time" id="time1" name="time1" value="<?php echo($row['time_start']);?>">
               </div>
            </div>
            <div class="form-group row">
              <label for="time2" class="col-sm-2 col-form-label" style="width: 50%;">Time Ended</label>
               <div class="col-sm-10">
                <input class="form-control " type="time" id="time1" name="time1" value="<?php echo($row['time_end']);?>">
               </div>
            </div>
            <div class="form-group row">
              <label for="venue" class="col-sm-2 col-form-label" style="width: 50%;">Venue</label>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="venue" name="venue"><?php echo($row['venue']);?></label>
               </div>
            </div>
            <div class="form-group row">
              <label for="reason" class="col-sm-2 col-form-label" style="width: 50%;"><b>1. Reason for counseling</b></label>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="reason" name="reason"><?php echo($row['reason']);?></label>
               </div>
            </div>
            <div class="form-group row">
              <label for="Attendance" class="col-sm-2 col-form-label" style="width: 50%;"><b>2. General observations</b><br><br>Attendance</label>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="Attendance" name="Attendance"><?php echo($row['attendance']);?></label>
               </div>
            </div>
            <div class="form-group row">
              <label for="Appearance" class="col-sm-2 col-form-label" style="width: 50%;">Appearance</label>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="Appearance" name="Appearance" placeholder="Neat, Untidy, etc." required><?php echo($row['appearance']);?></label>
               </div>
            </div>
            <div class="form-group row">
              <label for="attitude" class="col-sm-2 col-form-label" style="width: 50%;">Attitude</label>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="attitude" name="attitude"><?php echo($row['attitude']);?></label>
               </div>
            </div>
            <div class="form-group row">
              <label for="difficulty" class="col-sm-2 col-form-label" style="width: 50%;"><b>3. Is student experiencing difficulty meeting course demands? Explain</b></label>
               <div class="col-sm-10">
                <label rows="5" cols="50" class="form-control" name="difficulty" id="difficulty" placeholder="Enter text here..."  required><?php echo($row['difficulty']);?></label>
               </div>
            </div>
            <div class="form-group row">
              <label for="corrective" class="col-sm-2 col-form-label" style="width: 50%;"><b>4. Is corrective action needed? Explain</b></label>
               <div class="col-sm-10">
                <label rows="5" cols="50" class="form-control" name="corrective" id="corrective" placeholder="Enter text here..."  required><?php echo($row['corrective']);?></label>
               </div>
            </div>
            <div class="form-group row">
              <label for="next" class="col-sm-2 col-form-label" style="width: 50%;"><b>5. Next counseling session</b></label>
               <div class="col-sm-10">
                <label name="next" id="next" class="form-control" type="date" class="form-control" required><?php echo($row['date_next']);?></label>
               </div>
            </div>
            <div class="form-group row">
              <label for="comments" class="col-sm-2 col-form-label" style="width: 50%;"><b>5. Counselor's comments</b></label>
               <div class="col-sm-10">
                <label rows="5" cols="50" class="form-control" name="comments" id="comments" placeholder="Enter text here..."  required><?php echo($row['c_comments']);?></label>
               </div>
            </div>
            <div class="form-group row">
              <label for="commentss" class="col-sm-2 col-form-label" style="width: 50%;"><b>6. Student's comments on evaluation</b></label>
               <div class="col-sm-10">
                <label class="form-control" name="commentss" id="commentss" placeholder="Enter text here..." required><?php echo($row['s_comments']);?></label>
               </div>
            </div><br><br> 
             </div>
          </form> 
        </div>
          </div>
</div>

				


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
<?php }}}} ?>