 <?php
        $iteration = 0;
?>
 <div class="maroon-topp center" style="position: absolute; top: 100%; left: 0.5; width: 99%; height: 500%; overflow-y: auto;">
 	
					 	
					<table class="table" id="customers-2" >
	                   <thead class="thead">
	                   	<tr>
	                   		<th colspan="8" style="text-align: center; background-color: #fff; color:#000; font-weight:bold;">Your overall list of counseling history.</th>
	                   	</tr>
	                    <tr>
	                      <th>NAME OF STUDENT</th>
	                      <th>PROGRAM</th>
	                      <th width="10%;">AGE</th>
	                      <th>GENDER</th>
	                      <th>SCHOOL YEAR</th>
	                      <th>SEMESTER</th>
	                      <th>PROBLEM</th>

						</tr> 
</thead>
						<?php 

                include ('../includes/dbh.inc.php');
                $email = $_SESSION['useremail'];
						$sql1 = "SELECT * FROM crecords1 where uid = '$email' GROUP BY idnum order by corrective desc";
						$error1 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
						$result1 = mysqli_query($conn, $sql1);

						$cnt=1;
						while($rows = mysqli_fetch_assoc($result1)):
						{	

						
							
						?>                  
						

	                    <tr>
	                      <td><?php echo ($rows['student_lastname'].', '.$rows['student_firstname'].' '.$rows['middleinitial'].'.');?></td>
                          <td><?php echo htmlentities($rows['student_course']);?></td>
                          <td><?php echo htmlentities($rows['age']);?></td>
                          <td><?php echo htmlentities($rows['gender']);?></td>

                          <td><?php echo htmlentities($rows['sy']);?></td>
                          <td><?php echo htmlentities($rows['sem']);?></td>
                      <td > <?php echo htmlentities($rows['chk']);?></td>


	                      
	   					  <?php
	   					  $cnt=$cnt+1; } 
		                endwhile; 

	   					  ?>
						
						</tr>
						
	                </table>
				</div>