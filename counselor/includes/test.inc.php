<?php
if (isset($_POST['upload_btn'])) {
	include 'dbh.inc.php';
    $id = $_POST['user_id_tt'];
	
	$file = $_FILES['file'];
	$status = $_POST['status'];
	
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('pdf', 'docx', 'png', 'jpg', 'jpeg');
	
	if (!in_array($fileActualExt, $allowed)) {
		echo "<script> alert('File cannot be accepted. Try again.'); window.history.back();</script>";
		exit();
	} elseif (!$fileError === 0) {
		echo "<script> alert('File error. Try again.'); window.history.back();</script>";
		exit();
	} elseif ($fileSize > 1000000) {
		echo "<script> alert('File too big. Try again.'); window.history.back();</script>";
		exit();
	} else {
		$fileNameNew = $id."testresult".uniqid('', true).".".$fileActualExt;
		$fileDestination = 'uploads/'.$fileNameNew;
		move_uploaded_file($fileTmpName, $fileDestination);
		$sql = "INSERT INTO `tr_psychological` (`idnum`, `filename`, `date`, `status`) VALUES ('$id', '$fileNameNew', current_timestamp(), '$status');";
	//	$stmt = mysqli_stmt_init($conn);
	//	mysqli_stmt_bind_param($stmt, "sssss", $id);
	//	mysqli_stmt_execute($stmt);
		$result = mysqli_query($conn, $sql);
		
		session_start();
		date_default_timezone_set('Asia/Manila');
		
		$action = "Uploaded test result successfully";
		$ip = $_SERVER['REMOTE_ADDR'];
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");

		$sql1 = "INSERT INTO log (users_id, user_lastname, user_firstname, user_role, action, ip, created_at, updated_at) VALUES (?,?,?,?,?,?,?,?);";
		$stmt1 = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt1, $sql1)) {
			header("location: ../../index.php?error=stmtfailed");
			exit();
		} else {

		    mysqli_stmt_bind_param($stmt1, "ssssssss", $_SESSION["userid"], $_SESSION["userlastname"], $_SESSION["userfirstname"], $_SESSION["userrole"], $action, $ip, $created_at, $updated_at);
		    mysqli_stmt_execute($stmt1);
		 //   mysqli_stmt_close($stmt1);
                      echo "<script type='text/javascript'> alert('Upload success.') </script>";
                      echo "<script type='text/javascript'> document.location ='../test results/test-p1.php'; </script>";
		}
	}
}
