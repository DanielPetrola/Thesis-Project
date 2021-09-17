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
	                    	<tr>
	                   		<th colspan="2" style="text-align: center; background-color: #fff; color:#000; font-weight:bold;">List of students' problems report from <?php echo $sy1;?> to <?php echo $sy2;?>, <?php echo $sem;?> semester.</th>
	                   	</tr>
	                      <th width="50%;">PROBLEM</th>
	                      <th width="50%;">NUMBER OF STUDENTS COUNSELLED</th>
	                      
						</tr> 
</thead>
		<?php 

	if ($sem == 'All') {
	
		$sql1 = "SELECT date, chk, COUNT(chk), COUNT(idnum) FROM crecords1 where sy>='$sy1' AND sy<='$sy2' GROUP BY chk";
	}
	else 	{
		$sql1 = "SELECT date, chk, COUNT(chk), COUNT(idnum) FROM crecords1 where sy>='$sy1' AND sy<='$sy2' and sem = '$sem' GROUP BY chk";
		
	}
		$error1 = mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$result1 = mysqli_query($conn, $sql1);

		$cnt=1;
		while($rows = mysqli_fetch_assoc($result1)):
		{	
			
		?>                  
						

	                    <tr>
	                      <td><?php echo ($rows['chk']);?></td>
                          <td><?php echo htmlentities($rows['COUNT(chk)']);?></td>

	                      
	   					  <?php
	   					  $cnt=$cnt+1; } 
		                endwhile; 

	   					  ?>
						
						</tr>
						
	                </table>
				</div>