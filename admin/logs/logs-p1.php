<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | LOGS</title>
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
				<span class="body-title"><i class="maroon fa fa-list-alt"></i> LOGS</span>
				<a href="../pages/dashboard.php"><i class="close-btn fa fa-close fa-lg"></i></a>
			</div>
			<!-- searchbox -->
			<?php
				$query = "SELECT * FROM log ORDER BY id DESC";
			    $search_result = filterTable($query);
			

			// function to connect and execute the query
			function filterTable($query)
			{
			    
				include('../includes/dbh.inc.php');
			    $filter_Result = mysqli_query($conn, $query);
			    return $filter_Result;
			}
			?>

			<!-- table container -->
			<div class="maroon-div center">
				<!-- <div class="maroon-top center"></div> -->
				<table id="table1" class="table">
					<thead class="thead">
                    <tr style="background-color: #7e1414;">
                      <th style="color: #fff;">NAME</th>
                      <th style="color: #fff;">ROLE</th>
                      <th style="color: #fff;">ACTION</th>
					  <th style="color: #fff;">DATE/TIME</th>
                  	</tr>   
</thead>
					<tbody>
						<?php 
						$cnt=1;
						while($row = mysqli_fetch_array($search_result)):
						{
						?>                  
	           
	                    <tr>
	                      <td><?php echo ucwords($row['user_lastname'].", ".$row['user_firstname'].".");?></td>
	                      <td ><?php echo htmlentities($row['user_role']);?></td>
	                      <td><?php echo htmlentities($row['action']);?></td>
						  <td><?php echo htmlentities($row['created_at']);?></td>
	                      </tr>

	                    <?php $cnt=$cnt+1; } 
	                	endwhile;
	                	?>
                    </tbody>
                </table>
			</div>
		</div>

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
        $('#table1').DataTable({
        "paging":   false,
        "ordering": true,
        "info":     true,
        "responsive": true,
        "language":{
            search: "_INPUT_",
            searchPlaceholder: "Search",
        },
          "order": [[ 3, 'desc' ]],
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
