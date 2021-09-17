<?php

session_start();

		require_once 'dbh.inc.php';
		date_default_timezone_set('Asia/Manila');

		$action = "Logged out successfully";
		$ip = $_SERVER['REMOTE_ADDR'];
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");

		$sql = "INSERT INTO log (users_id, user_lastname, user_firstname, user_role, action, ip, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../index.php?error=stmtfailed");
			exit();
		}

		mysqli_stmt_bind_param($stmt, "ssssssss", $_SESSION["userid"], $_SESSION["userlastname"], $_SESSION["userfirstname"], $_SESSION["userrole"], $action, $ip, $created_at, $updated_at);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);

session_unset();
session_destroy();

                      echo "<script type='text/javascript'> alert('Logged out.') </script>";
                      echo "<script type='text/javascript'> document.location ='../../index.php'; </script>";
exit();