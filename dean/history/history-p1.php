<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | COUNSELING HISTORY</title>
            <meta name="description" content="Guidance Office System">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="GROUP4">
        <link rel="shortcut icon" href="../../images/favicon.ico">
            <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="../../scss/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.1.0/css/dataTables.dateTime.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>

	<body>
		<!-- navbar -->
		<?php include('../includes/navbar.php');?>

		<div class="center white-div2">
			<!-- top of body -->
			<div class="white-top center">
				<span class="body-title"><i class="maroon fa fa-history"></i> COUNSELING HISTORY</span>
				<a href="../pages/dashboard.php"><i class="close-btn fa fa-close fa-lg"></i></a>
			</div>
		
	
			
			<!-- table container -->
			<div class="maroon-div center">
				<!-- <div class="maroon-top center"></div> -->
				<div class="" style="position: absolute; width: 100%;">

					  <form method = "POST" action = "">

    <br>
	<div class="form-inline">
      <div class="form-group mb-2">
    <label>Semester:</label>
        <div class="form-group mb-2">
    <select name="sem1"  class="form-control form-control-sm" id="sem1">
        <?php 
        include '../includes/dbh.inc.php';
            //echo "<option value='$selectedYear' selected>$selectedYear</option>";
            $sql = "SELECT sem FROM crecords1 GROUP BY sem";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../reports/reports-p1.php?error=stmtfailed1");
                exit();
            } else {
                $result = mysqli_query($conn, $sql);

                                    echo '<option value="All">All</option>';
                while ($row = mysqli_fetch_assoc($result)) { 

                echo '<option value="' . $row['sem'] . '">' . $row['sem'] . '</option>';
            }}
        ?>
    </select>
    </div>
</div>
        <div class="form-group mb-2">
    <label>From:</label>
        <div class="form-group mb-2">
    <select name="sy1"  class="form-control form-control-sm" id="sy1" required>
        <option value="" disabled selected>Select Year</option>
        <?php 
            //echo "<option value='$selectedYear' selected>$selectedYear</option>";
            $sql = "SELECT sy FROM crecords1 GROUP BY sy";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../reports/reports-p1.php?error=stmtfailed1");
                exit();
            } else {
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) { 

                echo '<option value="' . $row['sy'] . '">' . $row['sy'] . '</option>';
            }}
        ?>
    </select>
    </div>
</div>
          <div class="form-group mb-2">
    <label>To:</label>
        <div class="form-group mb-2">
    <select name="sy2"  class="form-control form-control-sm" id="sy2" required>
        <option value="" disabled selected>Select Year</option>
        <?php 
            //echo "<option value='$selectedYear' selected>$selectedYear</option>";
            $sql = "SELECT sy FROM crecords1 GROUP BY sy";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../reports/reports-p1.php?error=stmtfailed1");
                exit();
            } else {
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {            
                echo '<option value="' . $row['sy'] . '">' . $row['sy'] . '</option>';
            }}
        ?>
    </select>
    </div>
 </div>
    <div class="form-group sm-2">
    <button type="submit" class="btn btn-success btn-sm" name="filterSubmit" id="filSub"> Filter </button> 
    </div> 
                </form>
    <div class="form-group sm-2">
    <button class="btn btn-white btn-sm" name="" id="" onclick="location.href='history-p1.php'"> Reset </button> 
    </div> 
</div>
   
                <br>
                
                <?php
                    if(isset($_POST['filterSubmit'])){
                    $sem = $_POST['sem1'];
                    $sy1 = $_POST['sy1'];
                    $sy2 = $_POST['sy2'];
                     
                       include 'table1.php';
                    
                    }else{
                       include 'table2.php';
                    }
                ?>    
            </div>
		</div></div></form></div>
        </div></div>

            <?php include('../includes/menu.php');?>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/datetime/1.1.0/js/dataTables.dateTime.min.js"></script>

         <!-- DATATABLE JQUERY JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />
<link href="//cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet" />

<script src="//code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script src="//cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "20%";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }

        $(document).ready(function() {
        $('#customers-2').DataTable({
        "paging":   false,
        "ordering": true,
        "info":     true,
        "responsive": true,
        "language":{
            search: "_INPUT_",
            searchPlaceholder: "Search",
        },
          "order": [[ 1, 'asc' ]],
        dom: 'Bfrtip',
        buttons:[ {
                    extend: 'pdf',
                    exportOptions: {
                        columns: [0,1,2,3,4,5,6]
                    },
                    orientation: 'portrait',
                    pageSize: 'LEGAL',
                    title: 'Guidance Counseling Report',
                    className: 'btn_pdf',
                    text: 'Export as PDF'
                } ]
    } );
        $('.btn_pdf').attr("class","btn btn-danger btn-sm text-center print-btn");
        } );
      
    </script>
    
        </body>
    </html>
<!-- 				<table id="table1" class="table" >
					<thead class="thead">
                    <tr style="background-color: #7e1414;">
                      <th style="color: #fff;">ID NUMBER</th>
                      <th style="color: #fff;">STUDENT NAME</th>
                      <th style="color: #fff;">PROGRAM</th>
										  <th style="color: #fff;">SESSION DATE</th>
										  <th style="color: #fff;">REASON</th>
										  <th style="color: #fff;">COUNSELOR</th>
										</tr> 
</thead>
					<tbody>
					<?php 
					$cnt=1;
					while($row = mysqli_fetch_array($search_result)):
					{
					?>                  

                    <tr class="clicker">
                      <td > <?php echo htmlentities($row['idnum']);?></td>
                      <td > <?php echo ucwords($row['student_lastname'].", ".$row['student_firstname']." ".$row['middleinitial'].".");?></td>
                      <td > <?php echo htmlentities($row['student_course']);?></td>
                      <td > <?php echo htmlentities($row['date']);?></td>
                      <td > <?php echo htmlentities($row['chk']);?></td>
                      <td > <?php echo htmlentities($row['uln'].", ".$row['ufn']);?></td>
  					</tr>

                    <?php $cnt=$cnt+1; } 
	                endwhile;
	                ?>
                    </tbody>
                </table>
			</div></div>
		</div>

	<?php include('../includes/menu.php');?>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
 	<script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "20%";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		}

		$(document).ready(function() {
    	$('#table1').DataTable({
    	"lengthChange": false,
        "paging":   false,
        "ordering": true,
        "info":     false,
        "responsive": false,
        "language":{
        	search: "_INPUT_",
        	searchPlaceholder: "Search",
        }
    }); 
		} );
	</script>
	
	</body>
</html> -->