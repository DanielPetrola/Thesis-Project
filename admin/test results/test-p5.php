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
			<button class="back-btn" onclick="location.href='test-p1.php'">Back</button>
			<!-- top of body -->
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
 <div class="maroon-div4-2a">

          <?php
            {
              include('../includes/dbh.inc.php');
              $query = "SELECT * FROM tr_psychological where idnum ='$idnum' ORDER BY date desc";
                $search_result = mysqli_query($conn,$query);
            }
          ?>

      
          <span class="body-title-2">ENTRANCE EXAM </span>
            <form action="../includes/test.inc.php" method="post" style="position: absolute; top: 10%;" enctype="multipart/form-data">
              <input type="file" name="file" class="form-control">
              <input type="hidden" name="fullname" value="<?php echo ucwords($row['lastname'].", ".$row['firstname']." ".$row['middleinitial'].".");?>">
              <input type="hidden" name="user_id_tt" value="<?php echo htmlentities($row['idnum']);?>"><br>
              <div class="form-group-row">
              <button  type="submit" name="upload_btn" class="form-control btn btn-primary">Upload</button><br>
       
              <button type="submit" onclick="location.href='test-p3.php'" name="Cancel" class="form-control btn btn-white">Cancel</button>
            </div>
            </form>

              
        </div>



        
      </div>

    </div>
        <!--psychological part-->
       
        <div class="maroon-div4-2b">

          <?php
            {
                
              include('../includes/dbh.inc.php');
              $query = "SELECT * FROM tr_entrance where idnum ='$idnum' ORDER BY filename ASC";
                $search_result = mysqli_query($conn,$query);
            }
          ?>

      
          <span class="body-title-2">PSYCHOLOGICAL EXAM </span>
            <form action="code.php" method="post">
              <input type="hidden" name="user_id_tr" value="<?php echo htmlentities($row['idnum']);?>">
              <button style="position: absolute; right:0%;" type="submit" name="add_btn_tr" class="btn btn-primary">Add</button><br>
            </form>

          <table id="customers-3" >
            <tr>
              <th width="80%;">File Name</th>
              <th width="20%;"></th>
            </tr> 

          <tbody>

          <?php 
          $cnt=1;
          while($row = mysqli_fetch_array($search_result)):
          {
          ?>      
            <tr>
              <td width="80%;" ><?php echo htmlentities($row['filename']);?></td>
              <td width="20%;" style="text-align: center;">
                <form action="" method="post">
                <input type="hidden" name="" value="<?php echo htmlentities($row['id']);?>">
                <button type="submit" name="" class="btn btn-success">Download</button><br>
                    <?php $cnt=$cnt+1; } 
                  endwhile;
                  ?>
                </form>
              </td>
            </tr>
          </tbody>
          </table>

              
        </div>
                          
            </div>
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
<?php
      
     }
} 
      ?>
