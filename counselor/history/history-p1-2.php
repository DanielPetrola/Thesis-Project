<?php


include('../includes/dbh.inc.php');
session_start();
{
			$id = $_POST['history_idnum'];
			
			$ses_sql=mysqli_query($conn, "select * from crecords where id='$id'");
			$row = mysqli_fetch_assoc($ses_sql);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | COUNSELING HISTORY</title>
		<meta name="description" content="Guidance Office System">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="GROUP4">
        <link rel="shortcut icon" href="../../images/favicon.ico">
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
			<button class="back-btn" onclick="location.href='counseling-p0.php'">Cancel</button>
			<!-- top of body -->
			<div class="white-top center">
				<span class="body-title"><i class="maroon fa fa-folder"></i> COUNSELING</span>
			</div>
			
			<!-- table container -->
			<div class="maroon-div-2 center">
				<span class="body-title-m">ADD GUIDANCE COUNSELING</span>
				<span class="idnum"><?php echo($row['id']); ?></span>
        <span class="name"><?php echo htmlentities($row['student_lastname'].", ".$row['student_firstname']);?></span>

  		<!-- form -->
		<div class="form-2">
          <form class="" method="post"  action="" name="registration">
            <div class="form-group row">
              <label for="date" class="col-sm-2 col-form-label" style="width: 50%;">Date</label>
               <div class="col-sm-10">
              	<input class="form-control " type="date" id="date" name="date" value="<?php echo htmlentities($row['date']);?>">
          	   </div>
          	</div>
          	<div class="form-group row">
              <label for="time1" class="col-sm-2 col-form-label" style="width: 50%;">Time Begun</label>
               <div class="col-sm-10">
              	<input class="form-control " type="time" id="time1" name="time1" value="<?php echo htmlentities($row['time_start']);?>">
          	   </div>
          	</div>
          	<div class="form-group row">
              <label for="time2" class="col-sm-2 col-form-label" style="width: 50%;">Time Ended</label>
               <div class="col-sm-10">
              	<input class="form-control " type="time" id="time2" name="time2" value="<?php echo htmlentities($row['time_end']);?>">
          	   </div>
          	</div>
          	<div class="form-group row">
              <label for="venue" class="col-sm-2 col-form-label" style="width: 50%;">Venue</label>
               <div class="col-sm-10">
              	<input class="form-control " type="text" id="venue" name="venue" value="<?php echo htmlentities($row['venue']);?>">
          	   </div>
          	</div>
          	<div class="form-group row">
              <label for="reason" class="col-sm-2 col-form-label" style="width: 50%;"><b>1. Reason for counseling</b></label>
               <div class="col-sm-10">
              	<input class="form-control " type="text" id="reason" name="reason" value="<?php echo htmlentities($row['reason']);?>">
          	   </div>
          	</div>
          	<div class="form-group row">
              <label for="Attendance" class="col-sm-2 col-form-label" style="width: 50%;"><b>2. General observations</b><br><br>Attendance</label>
               <div class="col-sm-10">
              	<input class="form-control " type="text" id="Attendance" name="Attendance" value="<?php echo htmlentities($row['attendance']);?>">
          	   </div>
          	</div>
            <div class="form-group row">
              <label for="Appearance" class="col-sm-2 col-form-label" style="width: 50%;">Appearance</label>
               <div class="col-sm-10">
                <input class="form-control " type="text" id="Appearance" name="Appearance" value="<?php echo htmlentities($row['appearance']);?>">
               </div>
            </div>
            <div class="form-group row">
              <label for="attitude" class="col-sm-2 col-form-label" style="width: 50%;">Attitude</label>
               <div class="col-sm-10">
                <input class="form-control " type="text" id="attitude" name="attitude" value="<?php echo htmlentities($row['attitude']);?>">
               </div>
            </div>
          	<div class="form-group row">
              <label for="difficulty" class="col-sm-2 col-form-label" style="width: 50%;"><b>3. Is student experiencing difficulty meeting course demands? Explain</b></label>
               <div class="col-sm-10">
              	<textarea rows="5" cols="50" name="difficulty" id="difficulty" value="<?php echo htmlentities($row['difficulty']);?>" ></textarea>
          	   </div>
          	</div>
            <div class="form-group row">
              <label for="corrective" class="col-sm-2 col-form-label" style="width: 50%;"><b>4. Is corrective action needed? Explain</b></label>
               <div class="col-sm-10">
                <textarea rows="5" cols="50" name="corrective" id="corrective" value="<?php echo htmlentities($row['corrective']);?>" ></textarea>
               </div>
            </div>
            <div class="form-group row">
              <label for="next" class="col-sm-2 col-form-label" style="width: 50%;"><b>5. Next counseling session</b></label>
               <div class="col-sm-10">
                <input name="next" id="next" type="date" class="form-control" value="<?php echo htmlentities($row['date_next']);?>"></textarea>
               </div>
            </div>
            <div class="form-group row">
              <label for="comments" class="col-sm-2 col-form-label" style="width: 50%;"><b>5. Counselor's comments</b></label>
               <div class="col-sm-10">
                <textarea rows="5" cols="50" name="comments" id="comments" value="<?php echo htmlentities($row['c_comments']);?>" ></textarea>
               </div>
            </div>
            <div class="form-group row">
              <label for="commentss" class="col-sm-2 col-form-label" style="width: 50%;"><b>6. Student's comments on evaluation</b></label>
               <div class="col-sm-10">
                <textarea rows="5" cols="50" name="commentss" id="commentss" value="<?php echo htmlentities($row['s_comments']);?>" ></textarea>
               </div>
            </div>
            <input class="btn btn-primary" type="submit" name="edit_submit" value="Edit"><br><br>
          </form> 
        </div>

		<?php
			if (isset($_GET["error"])) {
				if ($_GET["error"] == "emptyinput") {
					echo "<p>Please fill out all fields.</p>";
				}
				else if ($_GET["error"] == "invalidemail") {
					echo "<p>Please provide a valid email address.</p>";
				}
				else if ($_GET["error"] == "passwordsdonotmatch") {
					echo "<p>Please check your password.</p>";
				}
				else if ($_GET["error"] == "stmtfailed") {
					echo "<p>Something went wrong, please try again.</p>";
				}
			}
		?>
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

<?php }?>