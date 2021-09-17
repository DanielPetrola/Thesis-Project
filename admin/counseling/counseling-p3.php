<?php


include('../includes/dbh.inc.php');
session_start();
{
if(isset($_POST['couna_btn'])){
        $id = $_POST['couna_id'];
        $uid = $_SESSION['userid'];

$ses_sql=mysqli_query($conn, "select * from records where id='$id'");

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
        <div style="position: absolute; bottom: 1%; left:1%;">
      <button class="btn btn-light btn-sm" onclick="location.href='counseling-p2-2.php'">Cancel</button>
      <!-- top of body --></div>
      <div class="white-top center">
        <span class="body-title"><i class="maroon fa fa-folder"></i> COUNSELING</span>
      </div>
      
      <!-- table container -->
      <div class="maroon-div-2 center">
        <span class="body-title-m">ADD ACADEMIC COUNSELING</span>
        <span class="idnum"><?php echo($row['idnum']); ?></span>
        <span class="name"><?php echo htmlentities($row['lastname'].", ".$row['firstname']." ".$row['middleinitial'].".");?></span>

      <!-- form -->
    <div class="form-2" style="width:90%;">
          <form class="" method="post"  action="../includes/acad_counsel.php" name="registration">
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
                <input class="form-control form-control-sm" type="date" id="date" name="date" placeholder="XX-XX-XXXX" required>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">Time started</small>
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
              <small for="date" class="form-text text-muted" style="width: 50%;">Subject</small>
               <div class="col-sm-10">
                <input class="form-control form-control-sm" type="text" id="subject" name="subject" placeholder="Subject" required>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">Section</small>
               <div class="col-sm-10">
                <input class="form-control form-control-sm" type="text" id="section" name="section" placeholder="Section" required>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">Reason for counseling</small>
            <div class="col-sm-10">
              <select class="form-control " type="radio" id="reason" name="reason" placeholder="Reason" required>
                <option class="form-control " value="" disabled selected>Reason</option>
                <option class="form-control " value="Poor Study Habits">Poor Study Habits</option>
                <option class="form-control " value="Difficulty in Course">Difficulty in Course</option>
                <option class="form-control " value="Test Anxiety">Test Anxiety</option>
                <option class="form-control " value="Procrastination">Procrastination</option>
                <option class="form-control " value="Difficulty in Planning/Organizing">Difficulty in Planning/Organizing</option>
        <option class="form-control " value="Attendance Inconsistency">Attendance Inconsistency</option>
        <option class="form-control " value="Academic Probation">Academic Probation</option>
                <option class="form-control " value="Other">Other</option>
              </select>
            </div></div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">Brief description of the problem</small>
               <div class="col-sm-10">
                <textarea rows="5" cols="50" name="problem" class="form-control-sm" id="problem" placeholder="Enter text here..."  required></textarea>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">Action taken (by faculty, chairman, or dean)</small>
               <div class="col-sm-10">
                <textarea rows="5" cols="50" name="action" class="form-control-sm" id="action" placeholder="Enter text here..."  required></textarea>
               </div>
            </div>
            <div class="form-group ">
              <small for="date" class="form-text text-muted" style="width: 50%;">Recommendations</small>
               <div class="col-sm-10">
                <textarea rows="5" cols="50" class="form-control-sm" name="recommendation" id="recommendation" placeholder="Enter text here..."  required></textarea>
               </div>
            </div>
      <input type="hidden" name="s_id" value="<?php echo htmlentities($row['idnum']);?>">
      <input type="hidden" name="s_lname" value="<?php echo htmlentities($row['lastname']);?>">
      <input type="hidden" name="s_fname" value="<?php echo htmlentities($row['firstname']);?>">
      <input type="hidden" name="middleinitial" value="<?php echo htmlentities($row['middleinitial']);?>">
      <input type="hidden" name="s_course" value="<?php echo htmlentities($row['course']);?>">
      <input type="hidden" name="s_yrlvl" value="<?php echo htmlentities($row['yearlevel']);?>">
      <input type="hidden" name="s_gender" value="<?php echo htmlentities($row['gender']);?>">
      <input type="hidden" name="s_age" value="<?php echo htmlentities($row['age']);?>">
            <input type="hidden" name="type" value="acad">
         

            <input type="hidden" name="uid" value="<?php echo($_SESSION['useremail']);?>">
            <input type="hidden" name="uln" value="<?php echo($_SESSION['userlastname']);?>">
            <input type="hidden" name="ufn" value="<?php echo($_SESSION['userfirstname']);?>">
<!--             <input class="btn btn-primary btn-sm" type="submit" name="submit_submit" onclick="return confirm('Are you sure to submit this form?')" value="Submit"> -->
            <input class="btn btn-warning btn-sm" type="submit" name="submit_endorse" onclick="return confirm('Are you sure to submit this form and endorse to guidance?')" value="Endorse to Guidance"><br><br>
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

<?php }}?>