<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>UPHSD GUIDANCE | STUDENT RECORDS</title>
		<meta name="description" content="Guidance Office System">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="GROUP4">
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
				<span class="body-title"><i class="maroon fa fa-users"></i> ACCOUNTS MANAGEMENT</span>
				<a href="../pages/dashboard.php"><i class="close-btn fa fa-close fa-lg"></i></a>
			</div>

			<button class="new-btn " onclick="location.href='accounts-new.php'">NEW <i class="white fa fa-plus"></i></button>
			<!-- searchbox -->
			<?php
				if(isset($_POST['query']))
				{
				    $valueToSearch = $_POST['query'];
				    // search in all table columns
				    // using concat mysql function
				    $query = "SELECT * FROM accounts WHERE CONCAT(`id`, `lastname`, `firstname`, `middleinit`) LIKE '%".$valueToSearch."%'";
				    $search_result = filterTable($query);				    
				}
				 else { 
				    $query = "SELECT * FROM accounts ORDER BY lastname DESC";
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

				<div class="searchbox3">
				<form class="" id="form1" method="post">
					  	<form action="accounts-p1.php" method="post">
                <button type="submit"  class="btn btn-success">All</button>
              </form></div>
			<div class="searchbox2">
				<form class="" id="form1" method="post">
					<div class="input-group rounded">
					  <input type="search" class="form-control form-control-sm rounded" placeholder="Search" name="query" aria-label="Search"
					    aria-describedby="search-addon" />
					  <a><span class="input-group-text border-0" id="search-addon">
					    
					  </span></a>
					</div>
				</form>
			</div>

			<!-- table container -->
			<div class="maroon-div center">
				<!-- <div class="maroon-top center"></div> -->
				<table id="customers" >
                    <tr>
                      <th width="30%;"><a href="accounts-p1.php">NAME</a></th>
                      <th width="25%;">ROLE</th>
                      <th width="25%;">POSITION</th>
                      <th width="10%;"></th>
                  	</tr>   

					<tbody>
						<?php 
						$cnt=1;
						while($row = mysqli_fetch_array($search_result)):
						{
						?>                  
	           
	                    <tr>
	                      <td width="30%;" ><?php echo ucwords($row['lastname'].", ".$row['firstname']." ".$row['middleinit'].".");?></td>
	                      <td width="25%;" > <?php echo ucwords($row['role']);?></td>
	                      <td width="25%;"> <?php echo ucwords($row['position']);?></td>
	                      <td width="10%;"> 
	                      	<form action="accounts-p2.php" method="post">
	                      	<input type="hidden" name="user_id" value="<?php echo htmlentities($row['id']);?>">
	                      	<button type="submit" name="edit_btn" class="btn btn-success">VIEW</button>
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