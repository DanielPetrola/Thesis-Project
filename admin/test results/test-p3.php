<?php


include('../includes/dbh.inc.php');
session_start();
{
if(isset($_POST['view_btn'])){
        $id = $_POST['user_id_t'];
        $idnum = $_POST['user_idnum_t'];

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
      <div style="position:absolute; left:1%; bottom: 1%;">
			<button class="btn btn-light btn-sm" onclick="location.href='test-p1.php'">Back</button>
			<!-- top of body --></div>
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

if(isset($_POST['view_btn'])){
        $id = $_POST['user_id_t'];
        $idnum = $_POST['user_idnum_t'];
                
              include('../includes/dbh.inc.php');
              $query = "SELECT * FROM tr_psychological WHERE idnum = '$idnum' ORDER BY date desc";
                $search_result = mysqli_query($conn,$query);
            }

          ?>
      
          <span class="body-title-2">MANAGE EXAM RESULTS</span>
            <form action="test-p4.php" method="post">
              <input type="hidden" name="user_idnum_tr" value="<?php echo htmlentities($row['idnum']);?>">
              <input type="hidden" name="user_id_tr" value="<?php echo $id ?>">
              <button style="position: absolute; right:0%;" type="submit" name="add_btn_tr" class="btn btn-primary btn-sm">Add</button>
            </form>
            <div class="" style="position: absolute;top: 10%; width: 100%; overflow-y: auto;">

          <table class="table" id="table1" >
            <thead class="thead" >
            <tr  style="background-color: #7e1414;">
              <th width="35%;" style="color: #fff;">File Name</th>
              <th width="30%;" style="color: #fff;">Date/Time</th>
              <th width="20%;" style="color: #fff;">Exam Type</th>
              <th width="20%;" style="color: #fff;"></th>
              <th></th>
            </tr> 
</thead>
          <tbody>

          <?php 
          $cnt=1;
          while($row = mysqli_fetch_array($search_result)):
          {
          ?>      
            <tr>
              <td width="30%;" ><?php echo ($row['filename']);?></td>
              <td width="30%;" ><?php echo (date('m/d/y h:i A', strtotime($row['date'])));?></td>
              <td width="20%;" ><?php echo ($row['status']);?></td>
             <!--   <input type="hidden" name="user_id_t" value="<?php echo htmlentities($row['id']);?>"> -->
                <td width="10%;"><a style="color: #7e1414; font-weight: bold;" href="../includes/uploads/<?php echo $row['filename']; ?>" target="_blank">View</a></td>
                <form method="POST" action="../includes/code.php">
                  <input type="hidden" name="filename" value="<?php echo $row['filename']; ?>">

                <td width="10%;"><button type="submit" name="remove_btn" class="btn btn-danger btn-sm" style="color: #fff; font-weight: bold;" onclick="return confirm('Are you sure to remove this?');">Remove</button></td>
                </form>
                   
               <?php $cnt=$cnt+1; } 
                  endwhile;
                  ?>
            </tr>
          </tbody>
          </table>
              
        </div>

        
      </div>

    </div>
                          
            </div>
            </div>
          </form> 
          
        </div>


			</div>
    </div>

  <?php include('../includes/menu.php');?>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "20%";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }

    $(document).ready(function() {
      $('#table1').DataTable({
      "lengthChange": false,
        "paging":   false,
        "ordering": true,
        "info":     false,
        "responsive": false,
        "language":{
          search: "_INPUT_",
          searchPlaceholder: "Search",
        }
    }); 
    } );
  </script>


	</body>
</html>
<?php
      }
     
} }
      ?>
