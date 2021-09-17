<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | COUNSELING</title>
		<meta name="description" content="Guidance Office System">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="GROUP4">
        <link rel="shortcut icon" href="../../images/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../../scss/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>

	<body>
		<!-- navbar -->
		<?php include('../includes/navbar.php');?>

		<div class="center white-div2">
			<!-- top of body -->
			<div class="white-top center">
				<span class="body-title"><i class="maroon fa fa-folder"></i> COUNSELING</span>
				<a href="counseling-p0.php"><i class="close-btn fa fa-close fa-lg"></i></a>
			</div>
			<!-- searchbox -->
			<?php
			if(isset($_POST['query']))	{
			    $valueToSearch = $_POST['query'];
			    // search in all table columns
			    // using concat mysql function
			    $query = "SELECT * FROM records WHERE CONCAT(`id`, `lastname`, `firstname`, `middleinitial`) LIKE '%".$valueToSearch."%'";
			    $search_result = filterTable($query);
			}
			else {
				$query = "SELECT * FROM records ORDER BY lastname ASC";
			    $search_result = filterTable($query);
			}

			// function to connect and execute the query
			function filterTable($query)
			{
			    
				include('../includes/dbh.inc.php');
			    $filter_Result = mysqli_query($conn, $query);
			    return $filter_Result;
			}
			?>

			
			<!-- table container -->
				<div class="center" style="z-index: 0; position: absolute; top: 8%;	width: 98%;	height: 85%;background-color: #fff;">
				<span class="body-title-m">ADD GUIDANCE COUNSELING</span></div>
			<div class="maroon-div center">
			<div class="card-body">
<div class="card-body" style="position: absolute; top: 0%; width: 100%; left: 0%;">

<table class="table" id="table1">
  <thead class="thead" style="background-color: #7e1414;">
    <tr>
      <th scope="col" style="color: #fff;">ID NUMBER</th>
      <th scope="col" style="color: #fff;">NAME</th>
      <th scope="col" style="color: #fff;">COURSE</th>
      <th scope="col" style="color: #fff;">YEAR LEVEL</th>
      <th scope="col" style="color: #fff;"></th>
    </tr>
  </thead>
  <tbody>
  	<?php 
						$cnt=1;
						while($row = mysqli_fetch_array($search_result)):
						{
						?>       
    <tr>
       <td width="20%;" > <?php echo ucwords($row['idnum']);?></td>
      <td width="30%;" ><?php echo ucwords($row['lastname'].", ".$row['firstname']." ".$row['middleinitial'].".");?></td>
      <td width="20%;" > <?php echo ucwords($row['course']);?></td>
      <td width="20%;"> <?php echo ucwords($row['yearlevel']);?></td>
      <td width="10%;"> 
      		<form action="counseling-p4.php" method="post">
	                      	<input type="hidden" name="coun_id" value="<?php echo htmlentities($row['id']);?>">
	                      	<button type="submit" name="coun_btn" class="btn btn-success btn-sm">SELECT</button>
	                      	</form>
      </td>
    </tr>
    <?php $cnt=$cnt+1; } 
	                	endwhile;
	                	?>
    
  </tbody>
</table>


			
			</div>
		</div></div>

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
        "paging":   false,
        "ordering": true,
        "info":     false,
        "responsive": true,
        "language":{
        	search: "_INPUT_",
        	searchPlaceholder: "Search",
        }
    } );
		} );
	</script>	
		
	</body>
</html>