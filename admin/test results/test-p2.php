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
			    $con = mysqli_connect("localhost", "root", "", "desproj");
			    $filter_Result = mysqli_query($con, $query);
			    return $filter_Result;
			}
			?>

			<div class="searchbox2">
				<form class="" id="form1" method="post">
					<div class="input-group rounded">
					  <input type="search" class="form-control rounded" placeholder="Search" name="query" aria-label="Search"
					    aria-describedby="search-addon" />
					  <a><span class="input-group-text border-0" id="search-addon">
				
					  </span></a>
					</div>
				</form>
			</div>
			
			<!-- table container -->
			<div class="maroon-div center">
				<table id="customers" >
                    <tr>
                      <th width="50%;" style="background-color: gray;"><a href="test-p1.php">PSYCHOLOGICAL</a></th>
                      <th width="50%;" style="font-size: 110%;"><a href="test-p2.php">ENTRANCE</a></th>
					</tr> 
				</table>

				<table id="customers-2" >
                    <tr>
                      <th width="10%;">ID NUMBER</th>
                      <th width="20%;">NAME</th>
                      <th width="20%;">PROGRAM</th>
					  <th width="10%;">YEAR LEVEL</th>
					  <th width="20%;">STATUS</th>
					</tr> 

					<tbody>
					<?php 
					$cnt=1;
					while($row = mysqli_fetch_array($search_result)):
					{
					?>                  

                    <tr>
                      <td width="10%;" ><a href=""> <?php echo htmlentities($row['idnum']);?></a></td>
					  <td width="40%;" ><?php echo htmlentities($row['lastname'].", ".$row['firstname']." ".$row['middleinitial'].".");?></td>
                      <td width="20%;" > <?php echo htmlentities($row['course']);?></td>
                      <td width="20%;"> <?php echo htmlentities($row['yearlevel']);?></td>
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