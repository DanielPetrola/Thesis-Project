 <?php

                include ('../includes/dbh.inc.php');
        $iteration = 0;
$sem = $_POST['sem1'];
$sy1 = $_POST['sy1'];
$sy2 = $_POST['sy2'];
?>

 <div class="maroon-topp center" style="position: absolute; top: 100%; left: 0.5; width: 99%; height: 500%; overflow-y: auto;">

					 	
					<table class="table" id="customers-2" >
	                   <thead class="thead">
	                   	<tr>
	                   		<th colspan="8" style="text-align: center; background-color: #fff; color:#000; font-weight:bold;">Counseling history from <?php echo $sy1;?> to <?php echo $sy2;?>, <?php echo $sem;?> semester.</th>
	                   	</tr>
	                    <tr>
	                      <th>NAME OF STUDENT</th>
	                      <th>PROGRAM</th>
	                      <th width="10%;">AGE</th>
	                      <th>GENDER</th>
	                      <th>SCHOOL YEAR</th>
	                      <th>SEMESTER</th>
	                      <th>PROBLEM</th>

	                      <th>COUNSELOR</th>
						</tr> 
</thead>
		<?php 


	if ($sem == 'All') {
	
		$sql1 = "SELECT * FROM crecords1 WHERE sy>='$sy1' AND sy<='$sy2' GROUP BY idnum order by corrective asc";
		
	}
	else 	{
		$sql1 = "SELECT * FROM crecords1 WHERE sy>='$sy1' AND sy<='$sy2' AND sem = '$sem' GROUP BY idnum order by corrective asc";
		
	}
		$error1 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$result1 = mysqli_query($conn, $sql1);

		$cnt=1;
		while($rows = mysqli_fetch_assoc($result1)):
		{	$idnum=$rows['idnum'];

		if ($sem == 'All') {
			
		
		$sql2 = "SELECT idnum FROM crecords1 WHERE sy>='$sy1' AND sy<='$sy2' AND idnum='$idnum'";
		}
		else{
		$sql2 = "SELECT idnum FROM crecords1 WHERE sy>='$sy1' AND sy<='$sy2' AND idnum='$idnum' AND sem='$sem'";	
		}

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
                      <td > <?php echo htmlentities($rows['chk']);?></td>
                      <td > <?php echo htmlentities($rows['uln'].", ".$rows['ufn']);?></td>


	                      
	   					  <?php
	   					  $cnt=$cnt+1; } 
		                endwhile; 

	   					  ?>
						
						</tr>
						
	                </table>
				</div>