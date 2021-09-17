<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | EXAM RESULTS</title>
		<meta name="description" content="Guidance Office System">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="GROUP4">
        <link rel="shortcut icon" href="../../images/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../../scss/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
				<span class="body-title"><i class="maroon fa fa-file"></i> EXAM RESULTS</span>
				<a href="../pages/dashboard.php"><i class="close-btn fa fa-close fa-lg"></i></a>
			</div>
			
			<!-- searchbox -->
			<?php
			if(isset($_POST['query']))	{
			    $valueToSearch = $_POST['query'];
			    // search in all table columns
			    // using concat mysql function
			    $query = "SELECT * FROM records WHERE CONCAT(`idnum`, `lastname`, `firstname`, `middleinitial`, `yearlevel`, `course`) LIKE '%".$valueToSearch."%'";
			    $search_result = filterTable($query);
			}
			else {
				$query = "SELECT * FROM records ORDER BY lastname desc";
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

				
			<div class="searchbox2">
				<form class="form-inline" action="test-p1-2.php" id="form1" method="post">
				    
                <button type="submit"  class="btn btn-success mb-2">All</button>
              

					<div class="form-group mx-sm-3 mb-2">
					  <input type="search" class="form-control rounded" placeholder="Search" name="query" aria-label="Search"
					    aria-describedby="search-addon" >
					</div>
				</form>
			</div>
			
			
			<!-- table container -->
			<div class="maroon-div center">
				

				<table id="customers-2" >
                    <tr>
                      <th width="10%;">ID NUMBER</th>
                      <th width="20%;"><a style="color:white; text-decoration:none;" href="test-p1.php">NAME <i class="white fa fa-sort"></i></a></th>
                      <th width="20%;">PROGRAM</th>
					  <th width="10%;">YEAR LEVEL</th>
					  <th width="10%;"></th>
					</tr> 

					<tbody>
					<?php 
					$cnt=1;
					while($row = mysqli_fetch_array($search_result)):
					{
					?>                  

                    <tr>
                    	<td width="10%;" > <?php echo htmlentities($row['idnum']);?></td>
					  	<td width="20%;" ><?php echo ucwords($row['lastname'].", ".$row['firstname']." ".$row['middleinitial'].".");?></td>
                      	<td width="20%;" > <?php echo htmlentities($row['course']);?></td>
                      	<td width="10%;"> <?php echo htmlentities($row['yearlevel']);?></td>
                  
                      	<td width="10%;" style="text-align: center;"> 
	                    	<form action="test-p3.php" method="post">
	                      	<input type="hidden" name="user_id_t" value="<?php echo htmlentities($row['id']);?>">
	                      	<input type="hidden" name="user_idnum_t" value="<?php echo htmlentities($row['idnum']);?>">
	                      	<button type="submit" name="view_btn" class="btn btn-success">VIEW</button>
	                      	</form>
                      	</td>
                    </tr>

                    <?php $cnt=$cnt+1; } 
	                endwhile;
	                ?>
                    </tbody>
                </table>
			</div>
		</div>

		<?php include('../includes/menu.php');?>

		<script>
			function openNav() {
			  document.getElementById("mySidenav").style.width = "20%";
			}

			function closeNav() {
			  document.getElementById("mySidenav").style.width = "0";
			}
		</script>			
		
	</body>
</html>