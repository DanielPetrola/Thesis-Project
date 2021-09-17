	<?php 

require '../includes/dbh.inc.php';
		session_start();
	?>

	<!DOCTYPE html>
	<html>
		<head>
			<title>UPHSD GUIDANCE | REPORTS</title>
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
			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
 google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
			['Course', 'Total Number of Students'],
          <?php
			$sql = "SELECT * FROM graphs";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_assoc($result)) {
				$num = $row['student_number'];
				echo "['".$row['course']."',$num],";
			}
		  ?>
        ]);

        var options = {
          title: 'Ratio of Engineering Students per Program'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
 google.charts.load('visualization', '1', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawMaterial);

      function drawMaterial() {

        var data = google.visualization.arrayToDataTable([
        ['Course', 'Number of Students', {type: 'string', role: 'annotation'},
         'Number of Counseling Sessions', {type: 'string', role: 'annotation'}],
          <?php
			$sql = "SELECT * FROM graphs group by course";

			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_assoc($result)) {
				$sn = $row['student_number'];
				$cn = $row['counsel_number'];
				echo "['".$row['course']."',$sn,".$sn.",$cn,".$cn."],";
			}
		  ?>
        ]);

        var options = {
          title: 'Number of Counseling Sessions per Program',
          bars: 'horizontal',
        chartArea: {width: '70%'},
          annotations: {
          alwaysOutside: true,
          textStyle: {
            fontSize: 12,
            auraColor: 'none',
            color: '#555'
          },
          boxStyle: {
            stroke: '#ccc',
            strokeWidth: 1,
            gradient: {
              color1: '#f3e5f5',
              color2: '#f3e5f5',
              x1: '0%', y1: '0%',
              x2: '100%', y2: '100%'
            }
          }
        }
        }
        ;

        var material = new google.visualization.BarChart(document.getElementById('barchart'));

        material.draw(data, options);
      }
</script>
		</head>

		<body>
			<!-- navbar -->
			<?php include('../includes/navbar.php');?>

			<div class="center white-div2">
				<!-- top of body -->
				<div class="white-top center">
					<span class="body-title"><i class="maroon fa fa-info"></i> REPORTS</span>
					<a href="../pages/dashboard.php"><i class="close-btn fa fa-close fa-lg"></i></a>
				</div>
				
				<div style="position:absolute; top:7%; right: 1%;">
				<button class="btn btn-primary btn-sm " onclick="location.href='reports-p1.php'">TABLE</button></button>
			</div>
				<!-- searchbox -->
				
				<!-- table container -->
				<div class="maroon-div center">
					<table id="customers" >
	                    <tr>
	                      <th width="20%;" style="border-bottom: solid #F0AD4E 7px;"><a style="color:  #F0AD4E;" href="reports-p1-2.php">STUDENTS</a></th>
	                      <th width="20%;"><a href="reports-p2.php">PROBLEMS</a></th>
                          <th width="40%;"><a href="reports-p3.php">COUNSELING STATUS</a></th>
						</tr> 
					</table>
					
					 <div class="center" style="position: absolute;	top: 13%; width: 100%; height: 100%;	background-color: #fff; color: white;">
<!--<div id="piechart" style="width: 50%; height: 100%; position: absolute; top: 1%; left: 0;"></div>

<div id="chart_div"></div> -->
					
<div id="barchart" style="width: 90%; height: 90%; position: absolute; top: 0%; left:5%;"></div>

<div id="piechart" style="width: 100%; height: 90%; position: absolute; top: 100%; left: 0%;"></div>

<div id="chart_div"></div>
				</div>
			</div></div>

			<?php include('../includes/menu.php');?>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/datetime/1.1.0/js/dataTables.dateTime.min.js"></script>
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