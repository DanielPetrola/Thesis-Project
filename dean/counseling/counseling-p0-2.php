<?php


include('../includes/dbh.inc.php');
session_start();
{
if(isset($_POST['coun_btn'])){
        $id = $_POST['coun_id'];

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
        
      <div style="position:absolute;left:1%; bottom:1%;">
      <button class="btn btn-light btn-sm" onclick="location.href='counseling-p0.php'">Back</button>
      <!-- top of body --></div>
      <div class="white-top center">
        <span class="body-title"><i class="maroon fa fa-folder"></i> COUNSELING</span>
      </div>

     
      <!-- table container -->
      <div class="maroon-div4 center">
        <div class="maroon-div4-1-3">


          <span class="body-title-m">VIEW COUNSELING RECORD </span>
          
          <div style="position: absolute; top: 10%; width: 100%;" class="center">
            <span class="maroon-div4-1-span" style="font-size: 120%;"><b><?php echo($row['idnum']);?></b></span><br>
            <span class="maroon-div4-1-span" style="font-size: 130%;"><b><?php echo ucwords($row['student_lastname'].", ".$row['student_firstname']." ".$row['middleinitial'].".");?></b></span><br><br>

            <div class="" style="positon:absolute; top: 20%; width:100%;">
          <form class="" method=""  action="" name="registration">
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Counselor</small>
               <div class="col-sm-10">
                <label class="form-control" type="date" id="date" name="date" readonly><?php echo($row['uln'].", ".$row['ufn']);?></label>
               </div>
            </div>
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Date</small>
               <div class="col-sm-10">
                <label class="form-control" type="date" id="date" name="date" readonly><?php echo($row['date']);?></label>
               </div>
            </div>
              <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Time begun</small>
               <div class="col-sm-10">
                <input class="form-control " type="time" id="time1" name="time1" value="<?php echo($row['time_start']);?>" readonly>
               </div>
            </div>  <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Time ended</small>
               <div class="col-sm-10">
                <input class="form-control " type="time" id="time1" name="time1" value="<?php echo($row['time_end']);?>" readonly>
               </div>
            </div>  
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Venue</small>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="venue" name="venue" readonly><?php echo($row['venue']);?></label>
               </div>
            </div> 
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;"><b>1. Reason for counseling</b></small>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="reason" name="reason" readonly><?php echo($row['chk']);?></label>
               </div>
           </div>
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Brief description of the problem</small>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="reason" name="reason" readonly><?php echo($row['reason']);?></label>
               </div>
           </div>
         
           
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;"><b>2. General observations</b></small>
            </div>
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Attendance</small>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="Attendance" name="Attendance" readonly><?php echo($row['attendance']);?></label>
               </div>
            </div>
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Appearance</small>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="Appearance" name="Appearance" placeholder="Neat, Untidy, etc." required readonly><?php echo($row['appearance']);?></label>
               </div>
            </div>
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;">Attitude</small>
               <div class="col-sm-10">
                <label class="form-control " type="text" id="attitude" name="attitude" readonly><?php echo($row['attitude']);?></label>
               </div>
            </div>
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;"><b>3. Is student experiencing difficulty meeting course demands? Explain</b></small>
               <div class="col-sm-10">
                <textarea rows="auto" cols="50" class="form-control" name="difficulty" id="difficulty" placeholder="Enter text here..."  required readonly><?php echo($row['difficulty']);?></textarea>
               </div>
            </div>
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;"><b>4. Is corrective action needed? Explain</b></small>
               <div class="col-sm-10">
                <textarea rows="auto" cols="50" class="form-control" name="corrective" id="corrective" placeholder="Enter text here..."  required readonly><?php echo($row['corrective']);?></textarea>
               </div>
            </div>
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;"><b>5.Next counseling session</b></small>
               <div class="col-sm-10">
                <label name="next" rows="auto" id="next" class="form-control" type="date" class="form-control" required readonly><?php echo($row['date_next']);?></label>
               </div>
            </div>
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;"><b>6. Counselors comments</b></small>
               <div class="col-sm-10">
                <textarea rows="auto" cols="50" class="form-control" name="comments" id="comments" placeholder="Enter text here..."  required readonly><?php echo($row['c_comments']);?></textarea>
               </div>
            </div>
            <div class="form-group">
               <small for="date" class="form-text text-muted" style="width: 50%;"><b>7. Student's comments on evaluation</b></small>
               <div class="col-sm-10">
                <textarea rows="auto" class="form-control" name="commentss" id="commentss" placeholder="Enter text here..." required readonly><?php echo($row['s_comments']);?></textarea>
               </div>
            </div><br><br> 
             </div>
          </form> 
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
<?php
      
     }
} 
      ?>
