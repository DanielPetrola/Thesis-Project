 <?php
        $iteration = 0;
?>
 <div class="maroon-topp center" style="position: absolute; top: 100%; width: 100%; height: 420%; overflow-y: auto;">
 	
					 	
					<table class="table" id="customers-2" >
	                   <thead class="thead" style="background-color: #7e1414;">
	                   	<tr>
	                   		<th colspan="2" style="text-align: center; background-color: #fff; color:#000; font-weight:bold;">Overall list of students' problems report.</th>
	                   	</tr>
	                    <tr>
	                      <th width="50%;" scope="col" style="color: #fff;">PROBLEM</th>
	                      <th width="50%;" scope="col" style="color: #fff;">NUMBER OF STUDENTS COUNSELLED</th>
						</tr> 
</thead>
						<?php 
include '../includes/dbh.inc.php';
						$sql1 = "SELECT date, chk, COUNT(chk), COUNT(idnum) FROM crecords1 GROUP BY chk";
						$error1 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
						$result1 = mysqli_query($conn, $sql1);

						$sql2 = "SELECT student_course, COUNT(student_lastname) FROM crecords1 GROUP BY student_course";
						$error2 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
						$result2 = mysqli_query($conn, $sql2);

						$cnt=1;
						while($rows = mysqli_fetch_assoc($result1)):
						{	

						
							
						?>                  
						
<tbody class="">
	                    <tr>
	                      <td><?php echo htmlentities($rows['chk']);?></td>
	                      <td><?php echo htmlentities($rows['COUNT(chk)']);?></td>

	                      
	   
	   					  <?php
	   					  $cnt=$cnt+1; } 
		                endwhile; 

	   					  ?>
						
						</tr>
						</tbody>
	                </table>
				</div>