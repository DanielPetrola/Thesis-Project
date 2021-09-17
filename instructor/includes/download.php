<?php
    session_start();
	include_once 'dbh.inc.php';
	$id = $_POST['user_id_down'];
	
	if (isset($_POST['download_btn'])) {
		// Fetch the file info.
		$sql = "SELECT * FROM testresults WHERE id='$id';";
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($result)) {			
			echo htmlentities($row['filepath']);
		}
/*
			$filePath = $path;

			if(file_exists($filePath)) {
				$fileName = basename($filePath);
				$fileSize = filesize($filePath);

				// Output headers.
				header("Cache-Control: private");
				header("Content-Type: application/stream");
				header("Content-Length: ".$fileSize);
				header("Content-Disposition: attachment; filename=".$fileName);

				// Output file.
				readfile ($filePath);                   
				exit();
			} else {
				header("location: ../test/test-p1.php?download=failed");
				exit();
			}
			*/
	}
?>