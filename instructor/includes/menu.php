<?php 
{include('dbh.inc.php');
$user_check=$_SESSION['userid'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($conn, "select * from accounts where id='$user_check'");

$row = mysqli_fetch_assoc($ses_sql);

?>

<div id="mySidenav" class="sidenav">
      <p class=" menu-name"><b class="white"><?php echo ucwords($row['lastname'].", ".$row['firstname']." ".$row['middleinit'].".");?></b><br><?php echo htmlentities($row['role']);?></p>
      <a class="white" style="font-family: Segoe UI" href="../profile/profile-p1.php">View Profile</a>
      <button href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</button> 
      <a href="../records/records-p1.php"> Student Records</a>
      <a href="../counseling/counseling-p0.php">Counseling</a>
      <a href="../history/history-p1.php">Counseling History</a>
      <a href="../reports/reports-p3.php">Reports</a>
      <a href="../includes/logout.inc.php" style="position: absolute; bottom: 0%; width: 100%;">Logout</a>
    </div>

	<?php } ?>