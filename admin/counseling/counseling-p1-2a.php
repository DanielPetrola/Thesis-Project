<?php


include('../includes/dbh.inc.php');
session_start();
{
if(isset($_POST['couna_btn1'])){
        $id = $_POST['couna_id1'];

$ses_sql=mysqli_query($conn, "select * from crecords1 where id='$id'");

$row = mysqli_fetch_assoc($ses_sql);

?>



<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | COUNSELING</title>
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
		    <div style="position: absolute; bottom:1%; left:1%;">
			<button class="btn btn-light btn-sm" onclick="location.href='counseling-p1.php'">Back</button></div>			<!-- top of body -->
			<div class="white-top center">
				<span class="body-title"><i class="maroon fa fa-folder"></i> COUNSELING</span>
			</div>

     
			<!-- table container -->
			<div class="maroon-div4 center">
        <div class="maroon-div4-1-3">


          <span class="body-title-m">ENDORSED COUNSELING RECORD </span>

          <div style="position: absolute; top: 10%; width: 100%;" aria-labelledby="dropdownMenuLink">
            <span class="maroon-div4-1-span" style="font-size: 120%;"><b><?php echo($row['idnum']);?></b></span><br>
            <span class="maroon-div4-1-span" style="font-size: 130%;"><b><?php echo ucwords($row['student_lastname'].", ".$row['student_firstname']." ".$row['middleinitial'].".");?></b></span><br><br>

          <form class="" method=""  action="" name="registration">
            <div class="form-group">
               <small for="counselor" class="form-text text-muted" style="width: 50%;">Year and Semester</small>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="counselor" name="date" required readonly><?php echo($row['sy'].", ".$row['sem']);?></label>
               </div>
            </div>
            <div class="form-group">
               <small for="counselor" class="form-text text-muted" style="width: 50%;">Counselor</small>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="counselor" name="date" required readonly><?php echo($row['uln'].", ".$row['ufn']);?></label>
               </div>
            </div>
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Date</small>
               <div class="col-sm-10">
                <label class="form-control " type="date" id="date" name="date" placeholder="XX-XX-XXXX" required readonly><?php echo($row['date']);?></label>
               </div>
            </div>
              <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Time begun</small>
               <div class="col-sm-10">
                <input class="form-control " type="time" id="time1" name="time1" value="<?php echo($row['time_start']);?>" readonly>
               </div>
            </div>
              <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Time ended</small>
               <div class="col-sm-10">
                <input class="form-control " type="time" id="time1" name="time1" value="<?php echo($row['time_end']);?>" readonly>
               </div>
            </div>
              <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Venue</small>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="venue" name="venue" placeholder="Venue" required readonly><?php echo($row['venue']);?></label>
               </div>
            </div>
              <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Subject</small>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="subject" name="subject" placeholder="Subject" required readonly><?php echo($row['subject']);?></label>
               </div>
            </div>
              <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Section</small>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="section" name="section" placeholder="Section" required readonly><?php echo($row['section']);?></label>
               </div>
            </div>
              <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Reason for counseling</small>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="section" name="section" placeholder="Section" required readonly><?php echo($row['chk']);?></label>
               </div>
            </div>
              <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Brief description of the problem</small>
               <div class="col-sm-10">
                <textarea rows="auto" cols="50" class="form-control" name="problem" id="problem" placeholder="Enter text here..."  required readonly><?php echo($row['problem']);?></textarea>
               </div>
            </div>
              <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Action taken (by faculty, chairman, or dean)</small>
               <div class="col-sm-10">
                <textarea rows="auto" cols="50" class="form-control" name="action" id="action" placeholder="Enter text here..."  required readonly><?php echo($row['action']);?></textarea>
               </div>
            </div>
              <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Recommendation</small>
               <div class="col-sm-10">
                <textarea rows="auto" cols="50" class="form-control" name="recommendation" id="recommendation" placeholder="Enter text here..." readonly><?php echo($row['recommendation']);?></textarea>
               </div>
            </div><br><br>
          </form> 
       
 <div class="" style="width:90%; overflow-x: hidden;">
          <form class="" method="post"  action="../includes/guidance_counsel.php" name="registration">
            <div class="form-group ">
              <label for="year" class="form-text text-muted" style="width: 50%;"><b>To be filled up by guidance counselor</b></label>
            </div>
            <div class="form-group ">
              <small for="year" class="form-text text-muted" style="width: 50%;">Year</small>
               <div class="col-sm-10">
                <input class="form-control  form-control-sm" type="text" id="year" name="year" placeholder="20XX" pattern="[2,0]{2}[0-9]{2}" required>
               </div>
            </div>
            <div class="form-group ">
              <small for="sem" class="form-text text-muted" style="width: 50%;">Semester</small>
               <div class="col-sm-10">
                <select class="form-control " type="radio" id="reason" name="sem" placeholder="Semester" required>
                <option class="form-control " value="" disabled selected>Semester</option>
                <option class="form-control " value="1st">1st</option>
                <option class="form-control " value="2nd">2nd</option>
                <option class="form-control " value="Summer">Summer</option>
              </select>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">Date</small>
               <div class="col-sm-10">
                <input class="form-control  form-control-sm" type="date" id="date" name="date" placeholder="XX-XX-XXXX" required>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">Time begun</small>
               <div class="col-sm-10">
                <input class="form-control  form-control-sm" type="time" id="time1" name="time1" placeholder="XX:XX" required>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">Time ended</small>
               <div class="col-sm-10">
                <input class="form-control form-control-sm" type="time" id="time2" name="time2" placeholder="XX:XX" required>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">Venue</small>
               <div class="col-sm-10">
                <input class="form-control form-control-sm" type="text" id="venue" name="venue" placeholder="Venue" required>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;"><b>1. Reason for counseling</b></small>
            <div class="col-sm-10">
              <select class="form-control " type="radio" id="reason" name="reason" placeholder="Reason" required>
                <option class="form-control " value="" disabled selected>Reason</option>
                <option class="form-control " value="Adjustment Issues">Adjustment Issues</option>
                <option class="form-control " value="Emotional Difficulty">Emotional Difficulty</option>
                <option class="form-control " value="Interpersonal Difficulty">Interpersonal Difficulty</option>
                <option class="form-control " value="Health Issues">Health Issues</option>
                <option class="form-control " value="Academic Concerns">Academic Concerns</option>
        <option class="form-control " value="Traumatic Experiences">Traumatic Experiences</option>
                <option class="form-control " value="Other">Other</option>
              </select>
            </div></div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">Short description of the problem</small>
               <div class="col-sm-10">
                <textarea rows="2" class="form-control form-control-sm" type="text" id="reason" name="reason1" placeholder="" required></textarea>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;"><b>2. General observations</b></small>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">Attendance</small>
               <div class="col-sm-10">
                <input class="form-control form-control-sm" type="text" id="Attendance" name="Attendance" placeholder="Punctual, Tardy, etc." required>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">Appearance</small>
               <div class="col-sm-10">
                <input class="form-control form-control-sm" type="text" id="Appearance" name="Appearance" placeholder="Neat, Untidy, etc." required>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">Attitude</small>
               <div class="col-sm-10">
                <input class="form-control form-control-sm" type="text" id="attitude" name="attitude" placeholder="" required>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;"><b>3. Is student experiencing difficulty meeting course demands? Explain</b></small>
               <div class="col-sm-10">
                <textarea rows="5" cols="50" name="difficulty" id="difficulty" class="form-control-sm" placeholder="Enter text here..."  required></textarea>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;"><b>4. Is corrective action needed? Explain</b></small>
               <div class="col-sm-10">
                <textarea rows="5" cols="50" name="corrective" class="form-control-sm" id="corrective" placeholder="Enter text here..."  required></textarea>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;"><b>5. Next counseling session</b></small>
               <div class="col-sm-10">
                <input name="next" id="next" type="date" class="form-control form-control-sm" required></textarea>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;"><b>5. Counselor's comments</b></small>
               <div class="col-sm-10">
                <textarea rows="5" cols="50" class="form-control-sm" name="comments" id="comments" placeholder="Enter text here..."  required></textarea>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">><b>6. Student's comments on evaluation</b></small>
               <div class="col-sm-10">
                <textarea rows="5" cols="50" class="form-control-sm" name="commentss" id="commentss" placeholder="Enter text here..." required></textarea>
               </div>
            </div>
            <input type="hidden" name="s_id" value="<?php echo htmlentities($row['idnum']);?>">
            <input type="hidden" name="s_lname" value="<?php echo htmlentities($row['student_lastname']);?>">
            <input type="hidden" name="s_fname" value="<?php echo htmlentities($row['student_firstname']);?>">
            <input type="hidden" name="middleinitial" value="<?php echo htmlentities($row['middleinitial']);?>">
            <input type="hidden" name="s_course" value="<?php echo htmlentities($row['student_course']);?>">
            <input type="hidden" name="s_yrlvl" value="<?php echo htmlentities($row['student_yrlvl']);?>">
      <input type="hidden" name="s_gender" value="<?php echo htmlentities($row['gender']);?>">
      <input type="hidden" name="s_age" value="<?php echo htmlentities($row['age']);?>">
      <input type="hidden" name="time" value="<?php echo htmlentities($row['corrective']);?>">
            <input type="hidden" name="type" value="gui">
            
            <input type="hidden" name="uid" value="<?php echo($_SESSION['useremail']);?>">
            <input type="hidden" name="uln" value="<?php echo htmlentities($_SESSION['userlastname']);?>">
            <input type="hidden" name="ufn" value="<?php echo htmlentities($_SESSION['userfirstname']);?>">
            <input class="btn btn-primary btn-sm" type="submit" name="submit_next1" onclick="return confirm('Are you sure to submit this form?')" value="Submit"><br><br>
          </form> 
        </div>

       
          </div>
        </div>

        
      </div></div>

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
<?php
      
     }
} 
      ?>
