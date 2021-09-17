 <?php
        $iteration = 0;
?>
 <div class="maroon-topp center" style="position: absolute; top: 100%; width: 100%; height: 420%; overflow-y: auto;">
 	
					 	
					<table class="table" id="customers-2" >
	                   <thead class="thead">
	                   	<tr>
	                   		<th colspan="4" style="text-align: center; background-color: #fff; color:#000; font-weight:bold;">Overall list of counseling reports of instructors.</th>
	                   	</tr>
	                    <tr>
	                      <th>INSTRUCTOR</th>
	                      <th>PENDING</th>
	                      <th>TO BE ACKNOWLEDGED</th>
	                      <th>FINISHED</th>
						</tr> 
</thead>
						<?php 

                include ('../includes/dbh.inc.php');
						$sql1 = "SELECT uln, ufn, uid FROM crecords1 GROUP BY uid order by uln asc";
						$error1 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
						$result1 = mysqli_query($conn, $sql1);

						$cnt=1;
						while($rows = mysqli_fetch_assoc($result1)):
						{	$idnum=$rows['uid'];

						$sql21 = "SELECT status FROM crecords1 WHERE uid='$idnum' and status = 'Pending'";

						$error21 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
						$result21 = mysqli_query($conn, $sql21);
						$rowd=mysqli_num_rows($result21);

						$sql2 = "SELECT status FROM crecords1 WHERE uid='$idnum' and status = 'To be acknowledged'";

						$error2 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
						$result2 = mysqli_query($conn, $sql2);
						$rowdcount=mysqli_num_rows($result2);


						$sql3 = "SELECT status FROM crecords1 WHERE uid='$idnum' and status = 'Finished'";

						$error3 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
						$result3 = mysqli_query($conn, $sql3);
						$rowdcount3=mysqli_num_rows($result3);

						
							
						?>                  
						

	                    <tr>
	                      <td><?php echo ($rows['uln'].', '.$rows['ufn']);?></td>
                          <td><?php echo htmlentities($rowd);?></td>
                          <td><?php echo htmlentities($rowdcount);?></td>
                          <td><?php echo htmlentities($rowdcount3);?></td>



	                      
	   					  <?php
	   					  $cnt=$cnt+1; } 
		                endwhile; 

	   					  ?>
						
						</tr>
						
	                </table>
				</div>