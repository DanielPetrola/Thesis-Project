 <?php
        $iteration = 0;
?>
 <div class="maroon-topp center" style="position: absolute; top: 100%; width: 100%; height: 420%; overflow-y: auto;">
 	
					 	
					<table class="table" id="customers-2" >
	                   <thead class="thead">
	                   	<tr>
	                   		<th colspan="7" style="text-align: center; background-color: #fff; color:#000; font-weight:bold;">Overall list of students counseled.</th>
	                   	</tr>
	                    <tr>
	                      <th>NAME OF STUDENT</th>
	                      <th>PROGRAM</th>
	                      <th width="10%;">AGE</th>
	                      <th>GENDER</th>
	                      <th>School Year</th>
	                      <th>Semester</th>
	                      <th>COUNSELING SESSIONS</th>
						</tr> 
</thead>
						<?php 

                include ('../includes/dbh.inc.php');
						$sql1 = "SELECT * FROM crecords1 GROUP BY idnum order by student_lastname asc";
						$error1 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
						$result1 = mysqli_query($conn, $sql1);

						$cnt=1;
						while($rows = mysqli_fetch_assoc($result1)):
						{	$idnum=$rows['idnum'];

						$sql2 = "SELECT idnum FROM crecords1 WHERE idnum='$idnum'";

						$error2 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
						$result2 = mysqli_query($conn, $sql2);
						$rowdcount=mysqli_num_rows($result2);

						
							
						?>                  
						

	                    <tr>
	                      <td><?php echo ($rows['student_lastname'].', '.$rows['student_firstname'].' '.$rows['middleinitial'].'.');?></td>
                          <td><?php echo htmlentities($rows['student_course']);?></td>
                          <td><?php echo htmlentities($rows['age']);?></td>
                          <td><?php echo htmlentities($rows['gender']);?></td>

                          <td><?php echo htmlentities($rows['sy']);?></td>
                          <td><?php echo htmlentities($rows['sem']);?></td>
                          <td><?php echo htmlentities($rowdcount);?></td>


	                      
	   					  <?php
	   					  $cnt=$cnt+1; } 
		                endwhile; 

	   					  ?>
						
						</tr>
						
	                </table>
				</div>