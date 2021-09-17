 <?php
        $iteration = 0;
?>
 <div class="maroon-topp center" style="position: absolute; top: 100%; width: 100%; height: 420%; overflow-y: auto;">
 	
					 	
					<table class="table" id="customers-2" >
	                   <thead class="thead">
	                    <tr>
	                      <th>ID NUMBER</th>
	                      <th>NAME</th>
	                      <th>COURSE</th>
	                      <th>YEAR</th>
	                      <th>SEMESTER</th>
	                      <th></th>
						</tr> 
</thead>
						<?php 
$email = $_SESSION['useremail'];
                include ('../includes/dbh.inc.php');
						$sql1 = "SELECT * FROM crecords1 where type = 'gui' AND uid = '$email' ORDER BY student_lastname ASC";
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
			         <td> 
			         	<form action="counseling-p0-2.php" method="post">
   	                      	<input type="hidden" name="coun_id" value="<?php echo htmlentities($row['id']);?>">
   	                      	<button type="submit" name="coun_btn" class="btn btn-success btn-sm">VIEW</button>
   	                      	</form>
         </td>


	                      
	   					  <?php
	   					  $cnt=$cnt+1; } 
		                endwhile; 

	   					  ?>
						
						</tr>
						
	                </table>
				</div>