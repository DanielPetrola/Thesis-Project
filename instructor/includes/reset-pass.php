<?php

if (isset($_POST["reset-password-submit"])) {
	
	$selector = $_POST["selector"];
	$validator = $_POST["validator"];
	$password = $_POST["pwd1"];
	$passwordRepeat = $_POST["pwd2"];
	
	if (empty($password) || empty($passwordRepeat)) {
		echo "<script> alert('Error. Try again.'); window.history.back();</script>";
		exit();
	} else if ($password != $passwordRepeat) {
		echo "<script> alert('Passwords do not match. Try again.'); window.history.back();</script>";
		exit();
	}		
	
	$currentDate = date("U");
	
	require 'dbh.inc.php';
	
	$sql = "SELECT * FROM pwdreset WHERE pwdResetSelector=? AND pwdResetExpires >=?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "error message 12";
		exit();
	} else {
		mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
		mysqli_stmt_execute($stmt);
		
		$result = mysqli_stmt_get_result($stmt);
		if (!$row = mysqli_fetch_assoc($result)) {
			echo "Re-submit reset request.";
			exit();
		} else {
			
			$tokenBin = hex2bin($validator);
			$tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);
			
			if ($tokenCheck === false) {
				echo "Re-submit reset request. (1)";
				exit();
			} elseif ($tokenCheck === true) {
				
				$tokenEmail = $row['pwdResetEmail'];
				
				$sql = "SELECT * FROM accounts WHERE email=?;";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					echo "error message 48";
					exit();
				} else {
					mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
					mysqli_stmt_execute($stmt);
					
					$result = mysqli_stmt_get_result($stmt);
					
					if (!$row = mysqli_fetch_assoc($result)) {
						echo "error message 69";
						exit();
					} else {
						
						$sql = "UPDATE accounts SET password=? WHERE email=?;";
						$stmt = mysqli_stmt_init($conn);
						if (!mysqli_stmt_prepare($stmt, $sql)) {
							echo "error message 71";
							exit();
						} else {
							$newPwdHash = password_hash($password, PASSWORD_DEFAULT);
							mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
							mysqli_stmt_execute($stmt);
							
							$sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?;";
							$stmt = mysqli_stmt_init($conn);
							if (!mysqli_stmt_prepare($stmt, $sql)) {
								echo "There was an error!";
								exit();
							} else {
								mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
								mysqli_stmt_execute($stmt);
								header("location: ../../index.php?newpwd=passwordupdated");
							}
						}
						
					}
				}
			}
			
		}
	}
	
} else {
	header("location: ../../index.php");
}