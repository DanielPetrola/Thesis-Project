<?php

require 'dbh.inc.php';

if (isset($_POST["resetp"])) {	
	
	$currentpass=$_POST['cp'];
	$newpass=$_POST['np'];
	$confirmpass=$_POST['cnp'];
	$userid=$_POST['user_check_id'];
	
	$sql = "SELECT password FROM accounts WHERE id='$userid';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$pwdHashed = $row["password"];
	$hashedCurrent = password_verify($currentpass, $pwdHashed);
	
	if (empty($currentpass) || empty($newpass) || empty($confirmpass)) {
		echo "<script> alert('Password empty.'); window.history.back();</script>";
		exit();
	} else if ($newpass != $confirmpass) {
		echo "<script> alert('Passwords do not match.'); window.history.back();</script>";
		exit();
	} else if ($hashedCurrent === false) {
		echo "<script> alert('Wrong password. Try again.'); window.history.back();</script>";
		exit();
	}
	
	
	
	$sql = "SELECT * FROM accounts WHERE id=?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "error message in profile reset pass 1";
		exit();
	} else {
		mysqli_stmt_bind_param($stmt, "s", $userid);
		mysqli_stmt_execute($stmt);
		
		$result = mysqli_stmt_get_result($stmt);
		
		if (!$row = mysqli_fetch_assoc($result)) {
			echo "error message in profile reset pass 2";
			exit();
		} else {
			
			$sql = "UPDATE accounts SET password=? WHERE id=?;";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				echo "error message in profile reset pass 3";
				exit();
			} else {
				$newPwdHash = password_hash($newpass, PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $userid);
				mysqli_stmt_execute($stmt);
				echo "<script> alert('Password changed.'); window.history.back();</script>";
			}
		}
	}
}