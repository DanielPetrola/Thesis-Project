<?php


include('../includes/dbh.inc.php');
session_start();
{
if(isset($_POST['add_btn_tr'])){
        $id = $_POST['user_id_tr'];
        $idnum = $_POST['user_idnum_tr'];

$ses_sql=mysqli_query($conn, "select * from records where id='$id'");

$row = mysqli_fetch_assoc($ses_sql);

?>



<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | EXAM RESULTS</title>
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
			<div class="white-top center">
				<span class="body-title"><i class="maroon fa fa-book"></i> EXAM RESULTS</span>
			</div>

     
			<!-- table container -->
			<div class="maroon-div4 center">
        <div class="maroon-div4-1">


          <span class="body-title-m">VIEW EXAM RESULT </span>
          
          
          <div style="position: absolute; top: 10%; width: 100%;">
            <span class="maroon-div4-1-span" style="font-size: 120%;"><b><?php echo($row['idnum']);?></b></span><br>
            <span class="maroon-div4-1-span" style="font-size: 130%;"><b><?php echo ucwords($row['lastname'].", ".$row['firstname']." ".$row['middleinitial'].".");?></b></span><br><br>
            <span class="maroon-div4-1-span"><b>Program: </b><?php echo($row['course']);?></span><br>
            <span class="maroon-div4-1-span"><b>Year Level: </b><?php echo($row['yearlevel']);?></span><br>
            <span class="maroon-div4-1-span"><b>Age: </b><?php echo($row['age']);?></span><br>
            <span class="maroon-div4-1-span"><b>Sex: </b><?php echo($row['gender']);?></span><br>
            <span class="maroon-div4-1-span"><b>Civil Status: </b><?php echo($row['civilstatus']);?></span><br>
            <span class="maroon-div4-1-span"><b>Citizenship: </b><?php echo($row['citizenship']);?></span><br>
            <span class="maroon-div4-1-span"><b>Religion: </b><?php echo($row['religion']);?></span><br>
            <span class="maroon-div4-1-span"><b>Birthday: </b><?php echo($row['birthday']);?></span><br>
            <span class="maroon-div4-1-span"><b>Contact: </b><?php echo($row['contact']);?></span><br>
            <span class="maroon-div4-1-span"><b>Address: </b><?php echo($row['address']);?></span><br>
            <span class="maroon-div4-1-span"><b>Scholarship: </b><?php echo($row['scholarship']);?></span><br><br>


          </div>
        </div>

        <!--entrance part-->
        
        <!--psychological part-->
        <div class="maroon-div4-2a">

          <?php
            {
              include('../includes/dbh.inc.php');
              $query = "SELECT * FROM tr_psychological where idnum ='$idnum' ORDER BY date desc";
                $search_result = mysqli_query($conn,$query);
            }
          ?>

      
          <span class="body-title-2">PSYCHOLOGICAL EXAM </span>
            <form action="../includes/test.inc.php" method="post" style="position: absolute; top: 10%; width: 100%;" enctype="multipart/form-data">
                
                <label class="form-control">Accepted file formats: jpg, jpeg, png, docx, and pdf; Max file size: 1gb</label>
              <input type="file" name="file" class="form-control">
              <input type="hidden" name="fullname" value="<?php echo ucwords($row['lastname'].", ".$row['firstname']." ".$row['middleinitial'].".");?>">
              <input type="hidden" name="user_id_tt" value="<?php echo htmlentities($row['idnum']);?>"><br>
              <div class="form-group-row">
              <div class="form-group">
                  <label>For:</label>
              <select class="form-control " type="radio" id="status" name="status" placeholder="For:" required>
                <option class="form-control " value="Psychological">Psychological exam</option>
                <option class="form-control " value="Entrance">Entrance exam</option>
              </select><br>
            </div>
              <button  type="submit" name="upload_btn" class="form-control btn btn-primary" onclick="return confirm('Are you sure to upload this file?');">Upload</button><br>
       
            
            </form>
            <form action="test-p3.php" method="post" style="position: absolute; top: 100%; width: 100%;">
                          <input type="hidden" name="user_id_t" value="<?php echo htmlentities($row['id']);?>">
                          <input type="hidden" name="user_idnum_t" value="<?php echo htmlentities($row['idnum']);?>">
                          
                          <button style="position: absolute; top: 30%; width: 100%;" name="view_btn" class="form-control btn btn-white">Cancel
                          </button>
                          </div>
                          </form>
                         

              
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
