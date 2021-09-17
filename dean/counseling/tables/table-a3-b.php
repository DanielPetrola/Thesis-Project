 <?php

                include ('../includes/dbh.inc.php');
        $iteration = 0;
?>
 <div class="maroon-topp center" style="position: absolute; top: 100%; width: 100%; height: 350%; overflow-y: auto;">

					 	
					<table class="table" id="customers-2" >
	                   <thead class="thead">
	                    <tr>
	                      <th>ID NUMBER</th>
	                      <th>NAME</th>
	                      <th>COURSE</th>
	                      <th>YEAR</th>
	                      <th>SEMESTER</th>
	                      <th>COUNSELOR</th>
	                      <th></th>
						</tr> 
</thead>
		<?php 

$sem = $_POST['sem1'];
$sy1 = $_POST['sy1'];
$sy2 = $_POST['sy2'];
$email = $_SESSION['useremail'];

	if ($sem == 'All') {
	
		$sql1 = "SELECT * FROM crecords1 WHERE sy>='$sy1' AND sy<='$sy2' AND status = 'Finished' AND uid = '$email' GROUP BY idnum order by student_lastname asc";
		
	}
	else 	{
		$sql1 = "SELECT * FROM crecords1 WHERE sy>='$sy1' AND sy<='$sy2' AND status = 'Finished' AND sem = '$sem' AND uid = '$email' GROUP BY idnum order by student_lastname asc";
		
	}
		$error1 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$result1 = mysqli_query($conn, $sql1);

		$cnt=1;
		while($row = mysqli_fetch_assoc($result1)):
		{	
		?>                  
						

	                    <tr>
	                      <td><?php echo ucwords($row['idnum']);?></td>
			         <td><?php echo ucwords($row['student_lastname'].", ".$row['student_firstname']." ".$row['middleinitial'].".");?></td>
			         <td><?php echo ucwords($row['student_course']);?></td>
			         <td><?php echo ucwords($row['sy']);?></td>
			         <td><?php echo ucwords($row['sem']);?></td>
			         <td><?php echo ucwords($row['uln'].", ".$row['ufn']);?></td>
			         <td> 
			         	<form action="counseling-p1-b2.php" method="post">
   	                      	<input type="hidden" name="couna_id2" value="<?php echo htmlentities($row['id']);?>">
   	                      	<input type="hidden" name="time" value="<?php echo htmlentities($row['umid']);?>">
   	                 					
   	                      	<button type="submit" name="couna_btn2" class="btn btn-success btn-sm">VIEW</button>
   	                      	</form>
         </td>


	                      
	   					 <?php 
	   					  $cnt=$cnt+1; } 
		                endwhile; 

	   					  ?>
						
						</tr>
						
	                </table>
				</div>