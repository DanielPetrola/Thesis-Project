 <?php

                include ('../includes/dbh.inc.php');
        $iteration = 0;
$sem = $_POST['sem1'];
$sy1 = $_POST['sy1'];
$sy2 = $_POST['sy2'];

?>
 <div class="maroon-topp center" style="position: absolute; top: 100%; width: 100%; height: 420%; overflow-y: auto;">

					 	
					<table class="table" id="customers-2" >
	                   <thead class="thead">
	                    <tr>
	                    	<tr>
	                   		<th colspan="7" style="text-align: center; background-color: #fff; color:#000; font-weight:bold;">List of instructors' counseling reports from <?php echo $sy1;?> to <?php echo $sy2;?>, <?php echo $sem;?> semester.</th>
	                   	</tr>
	                      <th>INSTRUCTOR</th>
	                      <th>PENDING</th>
	                      <th>TO BE ACKNOWLEDGED</th>
	                      <th>FINISHED</th>
	                      
						</tr> 
</thead>
		<?php 

	if ($sem == 'All') {
	
		$sql1 = "SELECT count(status) as stat, uln, ufn, uid FROM crecords1 where sy>='$sy1' AND sy<='$sy2' GROUP BY status order by uln asc";
		
	}
	else 	{
		$sql1 = "SELECT count(status) as stat, uln, ufn, uid FROM crecords1 where sy>='$sy1' AND sy<='$sy2' and sem = '$sem'  GROUP BY status order by uln asc";
		
	}
		$error1 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$result1 = mysqli_query($conn, $sql1);

		$cnt=1;
		while($rows = mysqli_fetch_assoc($result1)):
		{	$idnum=$rows['uid'];

		if ($sem == 'All') {
			
		
		$sql21 = "SELECT status FROM crecords1 where sy>='$sy1' AND sy<='$sy2' and status = 'Pending' and uid = '$idnum'";
		$sql2 = "SELECT status FROM crecords1 where sy>='$sy1' AND sy<='$sy2' and status = 'To be acknowledged' and uid = '$idnum'";
		$sql3 = "SELECT status FROM crecords1 where sy>='$sy1' AND sy<='$sy2' and status = 'Finished' and uid = '$idnum'";
		}
		else{
		$sql21 = "SELECT status FROM crecords1 where sy>='$sy1' AND sy<='$sy2' and status = 'Pending' AND sem='$sem' and uid = '$idnum'";
		$sql2 = "SELECT status FROM crecords1 where sy>='$sy1' AND sy<='$sy2' and status = 'To be acknowledged' AND sem='$sem' and uid = '$idnum'";
		$sql3 = "SELECT status FROM crecords1 where sy>='$sy1' AND sy<='$sy2' and status = 'Finished' AND sem='$sem' and uid = '$idnum'";	
		}

		$error21 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$result21 = mysqli_query($conn, $sql21);
		$rowd=mysqli_num_rows($result21);

		$error2 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$result2 = mysqli_query($conn, $sql2);
		$rowdcount=mysqli_num_rows($result2);

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